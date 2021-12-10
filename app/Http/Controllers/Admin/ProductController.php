<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Menu;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    public function create()
    {
        $menus = Menu::where('active', 1)->get();
        $title = "Them moi san pham";
        return view('admin.product.add', compact('title', 'menus'));
    }

    public function index()
    {
        $title = "Danh sách sản phẩm";
        $products = Product::orderBy('id')->paginate(3);
        return view('admin.product.list', compact('title', 'products'));
    }

    protected function isValidPrice($request)
    {
        if ($request->input('price') != 0 && $request->input('price_sale') !=0
         && $request->input('price_sale') >= $request->input('price')) {
            Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
            return false;
        }

        // if($request->input('price_sale') != 0 && (int)$request->input('price') = 0){
        //     Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
        //     return false;
        // }

        return true;
    }

    public function store(Request $request)
    {
        $message = [
            'name.required' => 'The :attribute là bắt buộc nhập',
        ];

        $controls = Validator::make($request -> all(), [
            "name" => "required",
        ], $message)->validate();

        $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(), [
            'folder' => 'test'
        ])->getSecurePath();

        try {
            $cate = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'content' => $request->content,
                'price' => $request->price,
                'menu_id' => $request->menu_id,
                'price_sale' => $request->price_sale,
                'active' => $request->active,
                'image' => $uploadedFileUrl
            ]);
            Session::flash('success', 'Tạo mới sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo mới sản phẩm thất bại'. ' ' .$err->getMessage());
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $title = "Chỉnh sửa sản phẩm";
        $menus = Menu::all();
        $product = Product::where('id', $id)->first();
        return view('admin.product.edit', compact('product', 'title', 'menus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Menu::where('id', $id)->first()   ;
        $product->name = (string)$request->input('name');
        $product->description = (string)$request->input('description');
        $product->price = $request->input('price');
        $product->menu_id = $request->input('menu_id');
        $product->price_sale = $request->input('price_sale');
        $product->content = (string)$request->input('content');
        $product->active = (string)$request->input('active');
        $product->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            $product->delete();
            return redirect()->back()->response()->json([
                'error'=>false,
                'message'=>'Xóa sản phẩm thành công'
            ]);
        }
        return redirect()->back()->response()->json([
            'error'=>true,
            'message'=>'Xóa sản phẩm không thành công'
        ]);
    }
}
