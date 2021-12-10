<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $title = "Trang chủ";
        return view('admin.main', compact('title'));
    }
}
