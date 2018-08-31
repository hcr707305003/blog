<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use DB;
use Redirect;

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

    //展示用户列表
    public function user_list()
    {
    	$user = Cache::get('user');
    	// dump($user);die;
    	// 获取用户的所有列表
    	$user_list = DB::table('users')->paginate(10);

    	return view('back/user/list',[
    		'user_list' => $user_list,
    		'user' => $user
    	]);
    }

    //删除用户所有数据(json请求)
    public function del_user(Request $request)
    {
    	$id = $request->input('id');
    	// echo $id;
    	$del = DB::table('users')->where('id', 2)->delete();
    	if ($del) {
	    	echo json_encode([
	    		'code' => 200
	    	]);
    	} else {
    		echo json_encode([
	    		'code' => 400
	    	]);
    	}
    }

    //显示用户信息
    public function edit_user(Request $request)
    {
    	//赋值
    	$id = $request->route('id');
    	$user = Cache::get('user');
    	//判断用户是否从url进入
    	if ($id != $user['id']) {
    		return redirect("list");
    	} else {
    		$user_data = DB::table('users')->where('id', $id)->first();
    		return view('back/user/edit', [
    			'user'=> $user_data
    		]);
    	}
    }

    //修改用户信息
    public function edit_handle_user(Request $request)
    {
    	//赋值
    	$id = $request->input('id');
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$more_password = $request->input('more_password');
    	$user = Cache::get('user');
    	//判断是否url调试工具进入
    	if ($id != $user['id']) {
    		return redirect("list"); 
    	} else {
    		$array = array();
            if (!empty(trim($password))) {
        		if (trim($password) == trim($more_password)) {
        			$array['password'] = password_hash($password, PASSWORD_DEFAULT);
        		}
            }
    		if (trim($name)) {
    			$array['name'] = $name;
    		}
    		if (trim($email)) {
    			$array['email'] = $email;
    		}
    		//更新数据
    		DB::table('users')->where('id', $id)->update($array);

			return Redirect::to('list')->with('status', '修改成功');
    	}
    }
}
