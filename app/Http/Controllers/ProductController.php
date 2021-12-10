<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('quantity')) {
            $product = Product::take($request -> quantity)->get();
        } else {
            $product = Product::all();
        }
        // echo $request->all()['name'];
        // dd($request->all()['age']);
        // $name = request('name', 'vantien');
        // dd($name);
        return view('product', compact('product'));
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getProductDetail($id)
    {
        $p = Product::where("ProductId", $id)->first();
        return view("productdetail", compact("p"));
    }

    public function getCategory()
    {
        $cate = Category::all();
        return View("addproduct", compact("cate"));
    }

    public function getNewProduct()
    {
        $products = Product::orderBy('ProductId', 'desc')->take(3)->get();
        return View('welcome', compact('products'));
    }

    public function insertProduct(Request $request)
    {
        $message = [
            'productname.required' => "Ban phai nhap ten sp",
            'price.required' => "Ban phai nhap gia sp"
        ];

        $controls = Validator::make($request -> all(), [
            "productname" => "required",
            "price" => 'required'
        ], $message);

        $controls -> validate();

        $filename = "";
        if ($request -> file('fileUpload') -> isValid()) {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload->move('images/', $filename);
        }

        $product = Product::create([
            'ProductName' => $request->productname,
            'Unit' => $request->unit,
            'Price' => $request->price,
            'CategoryId' => $request->categories,
            'Img' => $filename
        ]);

        $product = Product::all();

        return view('product', compact('product'));
    }
}
