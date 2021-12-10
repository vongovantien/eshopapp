<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.user.login', [
            'title'=> 'Dang nhap he thong admin',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt(
            [
            'email' => $request->input('email'),
            'password' => $request->input('password')
            ],
            $request->input('remember')
        )) {
              return redirect('/admin');
            Session::flash('success', 'Đăng nhập thành công');
        };
        Session::flash('error', 'Email hoặc mật khẩu không đúng ');
        return redirect()->back();
    }
}
