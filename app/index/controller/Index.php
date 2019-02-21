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
		
		return new Message('username or password is wrong',Url::build('index/index'));
	}
}