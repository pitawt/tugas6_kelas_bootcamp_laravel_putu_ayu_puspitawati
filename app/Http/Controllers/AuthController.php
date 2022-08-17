<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function proses(Request $request)
    {
        $data = $request->all();
        return view('home',compact('data'));
    }
}
