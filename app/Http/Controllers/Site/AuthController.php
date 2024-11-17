<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

use App\Models\User;

class AuthController extends Controller
{
    public function __construct() {

        //Login Page can be viewd by anyone 
        $this->middleware("guest:web")->except('logout');
    }

    public function show(): View
    {
        return view('site.auth.login', []);
    }

    public function register(): View
    {
        return view('site.auth.register', []);
    }

    public function doRegister(Request $request) {

        $this->validate($request, 
            [
                "full_name" => ['required', 'string', 'max:255'], 
                "username" => ['required', 'unique:users,username', 'string', 'max:255'], 
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);

        User::create([
            'name' => $request->full_name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect(route("site_login"));

    }
    
    public function login(Request $request) {

        $this->validate($request, ["username" => "required", "password" => "required"]);
        $credentials = ["username" => $request->username, "password" => $request->password];

        if(Auth::guard('web')->attempt($credentials)) {

            $request->session()->regenerate();

            session()->flash("Success", "Welcome Back " . $credentials["username"]);

            return redirect(route("home_show"));
        }

        return back()->with('Error', "Tên đăng nhập hoặc mật khẩu không đúng");
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect(route('site_login'));
    }
}
