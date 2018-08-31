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
		// parent::is_login();
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
    	$del = DB::table('users')->where('id', $id)->delete();
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
            $array['created_at'] = date("Y-m-d H:i:s", time());
    		//更新数据
    		DB::table('users')->where('id', $id)->update($array);

			return Redirect::to('list')->with('status', '修改成功');
    	}
    }

    //添加用户
    public function add_user()
    {
        //赋值
        $user = Cache::get('user');
        // dump($user);die;
        return view('back/user/add', [
            'user' => $user,
        ]);
    }

    //操作添加用户
    public function add_handle_user(Request $request)
    {
        // dump($_REQUEST);
        //赋值
        $user = Cache::get('user');
        $name = $request->input('name');
        $email = $request->input('email');
        $is_manager = $request->input('is_manager');
        $password = $request->input('password');
        $more_password = $request->input('more_password');
        $array = array();
        //查询该用户的权限
        if ($user['is_manager'] == 1) {
            $array['is_manager'] = $is_manager;
        } else {
            $array['is_manager'] = 0;
        }
        //判断名字是否存在
        if (trim($name)) {
            $array['name'] = $name;
        } else {
            return back()->withErrors(['请填写名称！！']);
        }
        //判断密码是否一致
        if (!empty($password)) {
            if ($password === $more_password) {
                $array['password'] = password_hash($password, PASSWORD_DEFAULT);
            } else {
                return back()->withErrors(['密码不一致！！']);
            }
        } else {
            return back()->withErrors(['密码不能为空！！']);
        }
        if (trim($email)) {
            $array['email'] = $email;
        }
        $array['created_at'] = date("Y-m-d H:i:s", time());
        $array['updated_at'] = date("Y-m-d H:i:s", time());
        // dump($array);
        //入库
        $add_user = DB::table('users')->insert($array);
        if ($add_user) {
            return Redirect::to('list')->with('status', '添加成功');
        } else {
            return back()->withErrors(['添加用户失败，请重新添加！！']);
        }
    }

    //展示文章列表
    public function article_list()
    {
        $user = Cache::get('user');
        // dump($user);die;
        // 获取所有文章
        $article_list = DB::table('article')->paginate(7);
        return view('back/article/list',[
            'article_list' => $article_list,
            'user' => $user
        ]);
    }

    //删除文章
    public function del_article(Request $request)
    {
        //赋值
        $id = $request->input('id');
        $del = DB::table('article')->where('id', $id)->delete();
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

    //显示文章信息
    public function edit_article(Request $request)
    {
        //赋值
        $id = $request->route('id');
        $user = Cache::get('user');
        $article_data = DB::table('article')->where('id', $id)->first();
        // dump($article_data);die;
        return view('back/article/edit', [
            'article' => $article_data,
            'user' => $user
        ]);
    }

    //修改文章信息
    public function edit_handle_article(Request $request)
    {
        echo 11;
    }

    //添加文章页面
    public function add_article()
    {
        echo 22;
    }

    //操作添加文章
    public function add_handle_article(Request $request)
    {
        echo 33;
    }
}
