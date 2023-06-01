<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function login()
    {
        return view("sign-in");
    }

    public function register()
    {
        return view("register");
    }

    public function create_user()
    {
        $attribute = request()->validate([
            "username"=>"required|min:3|unique:users,username",
            "email"=>"required|email",
            "phone"=>"required|min:11|max:11",
            "password"=>"required",
        ]);
        $attribute['password'] = bcrypt($attribute['password']);
        User::create($attribute);
        return redirect("/");
    }
}
