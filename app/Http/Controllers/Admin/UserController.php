<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct() {

        
    }

    public function show(): View
    {
        $users = Admin::with(['roles'])->paginate(Admin::$TOTAL);
        
        return view('admin.user.show', compact('users'));
    }

    public function create(): View
    {
        $title = 'Tạo mới thành viên';
        $roles = Role::get();

        return view('admin.user.form', compact('title', 'roles'));
    }

    public function edit($id)
    {
        $title = 'Chỉnh sửa thành viên';
        $roles = Role::get();
        $user = Admin::find($id);
        if($user === NULL) {
            return redirect()->route('admin.user.show')
                ->with('Error', 'Data not found');
        }

        return view('admin.user.form', compact('title', 'roles', 'user'));
    }

    public function save(Request $request)
    {
        $roleIds = Role::all()->modelKeys();

        $id = $request->admin_id;

        $required = 'required|';
        if( ! empty($id)) {
            $required = 'nullable|';
        }

        $this->validate($request, [
            "full_name" => "required|max:50", 
            "username" => "required|regex:/^[A-Za-z0-9.@+]*$/|max:50|unique:admins,username," . $id . ",id",
            "email" => "required|max:50|email|unique:admins,email," . $id . ",id",
            "roles" => "required|exists:roles,id|in:" . implode(',', $roleIds),
            "password" => $required."confirmed|min:8"
        ]);
        $data = [
            'full_name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
        ];
        if(! empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        $user = Admin::updateOrCreate(['id' => $id], $data);
        $user->roles()->sync([$request->roles]);

        return redirect(route('admin.user.show'))->with('Success', 'Thành công');
    }

    public function delete($id)
    {
        $user = Admin::find($id);
        if($user === NULL) {
            return redirect()->route('admin.user.show')
                ->with('Error', 'Data not found');
        }

        $user->delete();

        return redirect(route('admin.user.show'))->with('Success', 'Thành công');
    }
}
