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
		//从数据模型中取出数据
		$data = Users::select();
		
		//实例化视图
		$view = new View();
		
		
		//排序
		$field = Request::get('field');
		$order = Request::get('order');
		if (!empty($field) && !empty($order))
		{
			//排序算法  asc从小到大  desc从大到小
			usort($data, function($a,$b)use($field,$order){
				if ($order == 'asc')
				{
					return $a[$field] > $b[$field]?1:-1;
				}
				else if ($order == 'desc')
				{
					return $a[$field] > $b[$field]?-1:1;
				}
			});
		}
		
		
		$view->assign('data',$data);
		return $view;
	}
}