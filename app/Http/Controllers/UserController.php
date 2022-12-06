<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('email','admin@gmail.com')->get();
        $role = Role::where('name', 'super admin')->get()->first();

        $user->assignRole($role);
        // $data = User::get();
        // return view('admin.user.user',compact('data'));
    }
}
