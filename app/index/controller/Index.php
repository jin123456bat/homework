<?php
namespace app\index\controller;
use framework\Controller;
use framework\response\View;
use framework\Request;
use framework\response\Redirect;

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
			return new Redirect('admin/admin');
		}
		else if ($username == 'student' && $password == 'student')
		{
			return new Redirect('student/student');
		}
		
		return new View('./framework/view/message.html');
	}
}