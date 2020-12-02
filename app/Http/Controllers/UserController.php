<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function register(){
        return view('tampilUserRegister');
    }

    public function save(Request $req){
        DB::table('user')->insert(
            ['username' => $req->user,
             'email' => $req->email,
             'password' => $req->password
            ]

        );

        return redirect('/user/register');
    }
}
