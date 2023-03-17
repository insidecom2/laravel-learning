<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function list()
    {
        $data = [];
        $data['name'] = "John";
        /// get user db ///
        $data['user'] = User::where('id', 1)->first();
        $data['user_list'] = User::get();
        return view('users.list', $data);
    }
}
