<?php
namespace app\index\controller;
use framework\Controller;
use framework\response\View;
use framework\Request;
use framework\response\Redirect;
use framework\response\Message;
use framework\core\Url;

class Index extends Controller
{
	function index()
	{
		//实例化视图
		//直接返回app/view/index/index.php的模板的内容
		return new View();
	}
	
	function login()
	{
		$username = Request::post('username');
		$password = Request::post('password');
		
		if ($username == 'admin' && $password == 'admin')
		{
			return new Redirect('admin/index');
		}
		else if ($username == 'student' && $password == 'student')
		{
			return new Redirect('student/create');
		}
		
		//如果账号密码不对 给出提示 并且跳转到登录页
		return new Message('username or password is wrong',Url::build('index/index'));
	}
}