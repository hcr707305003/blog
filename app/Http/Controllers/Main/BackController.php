<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

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

    //删除cache
    public function del_cache()
    {
    	Cache::forget('user');
    }
}
