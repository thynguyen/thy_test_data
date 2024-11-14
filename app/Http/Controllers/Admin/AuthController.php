<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct() {

        //Login Page can be viewd by anyone 
        $this->middleware("guest:admin")->except('logout');
    }

    public function show(): View
    {
        return view('admin.auth.login', []);
    }
    
    public function login(Request $request) {

        $this->validate($request, ["username" => "required", "password" => "required"]);
        $credentials = ["username" => $request->username, "password" => $request->password];

        if(Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();

            session()->flash("Success", "Welcome Back " . $credentials["username"]);

            return redirect(route("admin.dashboard.show"));
        }
        return back()->with('Error', "Tên đăng nhập hoặc mật khẩu không đúng");
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect(route('admin.login'));
    }
}
