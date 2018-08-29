<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use DB;
use URL;

class LoginController extends Controller
{
	//登录
	public function login()
	{
		return view('back/login');
	}

	//处理登录信息
	public function handle_login(Request $request)
	{
		//赋值
		$username = $request->input('username');
		$password = $request->input('password');
		$record = $request->input('record');
		//判断是否存在该用户名
		$user_data = DB::table('users')->where([
			'name' => $username
		])->first();
		if ($user_data) {
			if (password_verify($password, $user_data->password)) {
				//存值
				$array = array();
				$array['id'] = $user_data->id;
				$array['name'] = $user_data->name;
				$array['email'] = $user_data->email;
				$array['token'] = $user_data->remember_token;
				if (isset($record)) {
					Cache::set('user', $array, 10080);
				} else {
					Cache::set('user', $array, 60);
				}
				$this->access();
				return redirect('/back/home');
			} else {
				return back()->withErrors(['用户名或密码不正确！！']);
			}
		} else {
			return back()->withErrors(['用户不存在！！']);
		}
	}

	//判断是否存在cache
	public function is_login()
	{
		if (!Cache::has('user')) {
			header('location:/back/login');
		}
	}

    //记录登录信息
	public function access()
	{
		//定义一个空数组进行存储所有值 
		$array = array();
		//获取到ip
		$array['ip'] = $_SERVER["REMOTE_ADDR"];
		//获取经纬度
		$longitude = $this->get_lat_and_lng_ByIP($array['ip']);
		$array['point'] = $longitude['point'];
		//获取地址
		$array['area'] = $longitude['address'];
		//判断是手机登录还是电脑登录
		$array['is_mobile'] = intval($this->ismobile());
		//获取用户的操作系统
		$array['system'] = $this->get_os();
		//获取浏览器信息
		$array['kernel'] = $this->get_broswer();
		//创建时间
		$array['created_at'] = date('Y-m-d H:i:s', time());
		$array['updated_at'] = date('Y-m-d H:i:s', time());

		DB::table('access_user')->insert($array);
	}

	//判断是手机登录还是电脑登录
	function ismobile() {
	    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
	    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
	        return true;
	    
	    //此条摘自TPM智能切换模板引擎，适合TPM开发
	    if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
	        return true;
	    //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
	    if (isset ($_SERVER['HTTP_VIA']))
	        //找不到为flase,否则为true
	        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
	    //判断手机发送的客户端标志,兼容性有待提高
	    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
	        $clientkeywords = array(
	            'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
	        );
	        //从HTTP_USER_AGENT中查找手机浏览器的关键字
	        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
	            return true;
	        }
	    }
	    //协议法，因为有可能不准确，放到最后判断
	    if (isset ($_SERVER['HTTP_ACCEPT'])) {
	        // 如果只支持wml并且不支持html那一定是移动设备
	        // 如果支持wml和html但是wml在html之前则是移动设备
	        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
	            return true;
	        }
	    }
	    return false;
	 }
 

	//获取用户的操作系统
	function get_os(){
		$agent = $_SERVER['HTTP_USER_AGENT'];
	    $os = false;
	    if (preg_match('/win/i', $agent) && strpos($agent, '95'))
	    {
	      $os = 'Windows 95';
	    }
	    else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))
	    {
	      $os = 'Windows ME';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))
	    {
	      $os = 'Windows 98';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))
	    {
	      $os = 'Windows Vista';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))
	    {
	      $os = 'Windows 7';
	    }
	      else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))
	    {
	      $os = 'Windows 8';
	    }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))
	    {
	      $os = 'Windows 10';#添加win10判断
	    }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))
	    {
	      $os = 'Windows XP';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))
	    {
	      $os = 'Windows 2000';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))
	    {
	      $os = 'Windows NT';
	    }
	    else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))
	    {
	      $os = 'Windows 32';
	    }
	    else if (preg_match('/linux/i', $agent))
	    {
	      $os = 'Linux';
	    }
	    else if (preg_match('/unix/i', $agent))
	    {
	      $os = 'Unix';
	    }
	    else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))
	    {
	      $os = 'SunOS';
	    }
	    else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))
	    {
	      $os = 'IBM OS/2';
	    }
	    else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))
	    {
	      $os = 'Macintosh';
	    }
	    else if (preg_match('/PowerPC/i', $agent))
	    {
	      $os = 'PowerPC';
	    }
	    else if (preg_match('/AIX/i', $agent))
	    {
	      $os = 'AIX';
	    }
	    else if (preg_match('/HPUX/i', $agent))
	    {
	      $os = 'HPUX';
	    }
	    else if (preg_match('/NetBSD/i', $agent))
	    {
	      $os = 'NetBSD';
	    }
	    else if (preg_match('/BSD/i', $agent))
	    {
	      $os = 'BSD';
	    }
	    else if (preg_match('/OSF1/i', $agent))
	    {
	      $os = 'OSF1';
	    }
	    else if (preg_match('/IRIX/i', $agent))
	    {
	      $os = 'IRIX';
	    }
	    else if (preg_match('/FreeBSD/i', $agent))
	    {
	      $os = 'FreeBSD';
	    }
	    else if (preg_match('/teleport/i', $agent))
	    {
	      $os = 'teleport';
	    }
	    else if (preg_match('/flashget/i', $agent))
	    {
	      $os = 'flashget';
	    }
	    else if (preg_match('/webzip/i', $agent))
	    {
	      $os = 'webzip';
	    }
	    else if (preg_match('/offline/i', $agent))
	    {
	      $os = 'offline';
	    }
	    else
	    {
	      $os = '未知操作系统';
	    }
	    return $os;  
	}

	//获取浏览器信息
	function get_broswer(){
		$sys = $_SERVER['HTTP_USER_AGENT'];  //获取用户代理字符串
		if (stripos($sys, "Firefox/") > 0) {
			preg_match("/Firefox\/([^;)]+)+/i", $sys, $b);
			$exp[0] = "Firefox";
			$exp[1] = $b[1];  //获取火狐浏览器的版本号
		} elseif (stripos($sys, "Maxthon") > 0) {
			preg_match("/Maxthon\/([\d\.]+)/", $sys, $aoyou);
			$exp[0] = "傲游";
			$exp[1] = $aoyou[1];
		} elseif (stripos($sys, "MSIE") > 0) {
			preg_match("/MSIE\s+([^;)]+)+/i", $sys, $ie);
			$exp[0] = "IE";
			$exp[1] = $ie[1];  //获取IE的版本号
		} elseif (stripos($sys, "OPR") > 0) {
			preg_match("/OPR\/([\d\.]+)/", $sys, $opera);
			$exp[0] = "Opera";
			$exp[1] = $opera[1];  
		} elseif(stripos($sys, "Edge") > 0) {
		 //win10 Edge浏览器 添加了chrome内核标记 在判断Chrome之前匹配
			preg_match("/Edge\/([\d\.]+)/", $sys, $Edge);
			$exp[0] = "Edge";
			$exp[1] = $Edge[1];
		} elseif (stripos($sys, "Chrome") > 0) {
			preg_match("/Chrome\/([\d\.]+)/", $sys, $google);
			$exp[0] = "Chrome";
			$exp[1] = $google[1];  //获取google chrome的版本号
		} elseif(stripos($sys,'rv:')>0 && stripos($sys,'Gecko')>0){
			preg_match("/rv:([\d\.]+)/", $sys, $IE);
			$exp[0] = "IE";
			$exp[1] = $IE[1];
		}else {
			$exp[0] = "未知浏览器";
			$exp[1] = ""; 
		}
		return $exp[0].'('.$exp[1].')';
	}

	//根据IP获取经纬度
	function get_lat_and_lng_ByIP($ip)
	{
	    if(empty($ip))
	    {
	         return 'IP不能为空';
	    }
		$content = file_get_contents("http://api.map.baidu.com/location/ip?ak=e216eAoj0cp2tqy1kmfsxIT7k19axdcd&ip={$ip}&coor=bd09ll"); 
		$json = json_decode($content);
		//定义一个空数组存储
		$array = array();
		//判断地址是否存在
		if (isset($json->content->address)) {
			$array['address'] = $json->content->address;
		} else {
			$array['address'] = "";
		}
		//判断是否存在经纬度
		if (isset($json->content->point)) {
			$array['point'] = $json->content->point->y.",".$json->content->point->x;
		} else {
			$array['point'] = "";
		}
		return $array;
	}
}