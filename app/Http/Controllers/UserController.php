<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function create(){
        return view('user.create');
    }

    public function show(){
        $users = User::all()->where('age', '=', '11');

        return view('user.list', ['users' => $users]);
    }
}
