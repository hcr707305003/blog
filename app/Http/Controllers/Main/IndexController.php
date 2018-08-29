<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
	public $page = 4;

    //跳转
    public function __construct()
    {
        parent::get_access_user();
    }


    public function  article_list()
    {
    	//获取分页数据
    	$article = DB::table('article')->paginate($this->page);
    	//存值
		foreach ($article as $key => $value) {
			$article[$key]->theme_name = $this->get_theme($value->theme_group_id);
    	}   

    	$article['theme_name'] = $this->get_theme($article);
        //查询出浏览量最多的数据
        $clicks = DB::table('article')->orderBy('clicks', 'desc')->orderBy('created_at', 'desc')->limit(5)->get();
    	//存储数据
    	return view('index')->with('article', $article)->with('clicks', $clicks);
    }

    //查询所有的专题名称
    public function get_theme($id = "")
    {
    	//查询该文章的所有专题
    	$theme_array = DB::table('theme')->whereIn('id', explode(',', $id))->get(['theme_name']);
    	//定义一个空数组
    	$arr = array();
    	//获取专题名
    	foreach ($theme_array as $key => $value) {
    		$arr[] = $value->theme_name;
    	}
    	return $arr;
    }

    //显示详情页面
    public function article_detail(Request $request)
    {
        $id = $request->id;
        //判断id是否存在
        if (is_int(intval($id))) {
            $article = DB::table('article')->where('id', '=', $id)->first();
            if ($article) {
                //浏览量加一
                DB::table('article')->where('id', '=', $id)->increment('clicks');
                return view('detail')->with('article', $article);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    //展示所有模块
    public function index()
    {
        
        return view('list');
    }
}
