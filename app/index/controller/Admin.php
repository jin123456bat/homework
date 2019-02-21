<?php
namespace app\index\controller;
use framework\Controller;
use framework\response\View;
use app\index\model\Users;
use framework\Request;

class Admin extends Controller
{
	function index()
	{
		$data = Users::select();
		$view = new View();
		
		$field = Request::get('field');
		$order = Request::get('order');
		if (!empty($field) && !empty($order))
		{
			usort($data, function($a,$b)use($field,$order){
				if ($order == 'asc')
				{
					return $a[$field] > $b[$field]?1:-1;
				}
				else
				{
					return $a[$field] > $b[$field]?-1:1;
				}
			});
		}
		
		
		$view->assign('data',$data);
		return $view;
	}
}