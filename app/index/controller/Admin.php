<?php
namespace app\index\controller;
use framework\Controller;
use framework\response\View;
use app\index\model\Users;

class Admin extends Controller
{
	function index()
	{
		$data = Users::select();
		$view = new View();
		$view->assign('data',$data);
		return $view;
	}
}