<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    // 登录页
    public function login()
    {
    	return view('back/login');
    }

    //后台首页
    public function back_page()
    {
    	return view('back/index');
    }
}
