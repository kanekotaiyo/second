<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function mypage()
    {
        return view('mypage');
    }
    public function myreserve()
    {
        return view('myreserve');
    }
    public function allreserve()
    {
        return view('allreserve');
    }
}
