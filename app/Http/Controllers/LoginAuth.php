<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAuth extends Controller
{
    function userlogin(Request $req)
    {
        $data= $req->input();
        $req->session()->put('email',$data['email']);
        echo session('email');

    }
}
