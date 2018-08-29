<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends LoginController
{
	//判断是否登录了
	public function __construct()
	{
		parent::is_login();
	}

    //后台首页
    public function back_page()
    {
    	return view('back/index');
    }
}
