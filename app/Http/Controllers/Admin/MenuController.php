<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function create()
    {
        $title = "Thêm danh mục mới";
        return view("admin.menu.add", compact('title'));
    }

    public function store(Request $request)
    {
        $message = [
            'name.required' => 'The :attribute là bắt buộc nhập',
        ];

        $controls = Validator::make($request -> all(), [
            "name" => "required",
        ], $message)->validate();

        try {
            $cate = Menu::create([
                'name' => $request->name,
                'description' => $request->description,
                'content' => $request->content,
                'active' => $request->active,
                'slug' => Str::of($request->name)->slug('-'),
            ]);
            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Tạo danh mục thất bại'. ' ' .$err->getMessage());
        }

        return redirect()->back();
    }

    public function getById($id)
    {
        $title = "Chỉnh sửa sản phẩm";
        $cate = Menu::where('id', $id)->where('active', 1)->firstOrFail();
        return view('admin.menu.edit', compact('cate', 'title'));
    }

    public function edit(Request $request, Menu $menu, $id)
    {

        $menu = Menu::where('id', $id)->first()   ;

        $menu->name = (string)$request->input('name');
        $menu->description = (string)$request->input('description');
        $menu->content = (string)$request->input('content');
        $menu->slug = Str::of($request->name)->slug('-');
        $menu->active = (string)$request->input('active');
        $menu->save();

        Session::flash('success', 'Cập nhật thành công Danh mục');

        return redirect()->back();
    }

    public function index()
    {
        $title = "Danh sách danh mục";
        $cate = Menu::orderBy('id')->paginate(3);
        return view('admin.menu.list', compact('cate', 'title'));
    }

    public function destroy(Request $request)
    {
        $menu = Menu::where('id', $request->input('id'))->first();
        if ($menu) {
            $menu->delete();
            return response()->json([
                'error'=>false,
                'message'=>'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error'=>true,
            'message'=>'Xóa không thành công danh mục'
        ]);
    }
}
