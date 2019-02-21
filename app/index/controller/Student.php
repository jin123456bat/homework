<?php
namespace app\index\controller;
use framework\Controller;
use framework\response\View;
use framework\Request;
use app\index\model\Users;
use framework\response\Message;
use framework\core\Url;

class Student extends Controller
{
	function create()
	{
		if (Request::isGet())
		{
			return new View();
		}
		else
		{
			//读取数据
			$data = Request::post([
				'first_name',
				'last_name',
				'user_name',
				'email',
				'country',
				'city',
				'street',
				'zipcode',
				'company',				
				'company_name',
				'company_description'
			]);
			
			
			$validate = new \app\index\validate\Users();
			if (!$validate->check($data))
			{
				return new Message($validate->getMessage(),Url::build('student/create'));
			}
			
			//添加数据
			if(Users::insert($data))
			{
				return new Message('save success',Url::build('student/create'));
			}
			else
			{
				return new Message('save failed',Url::build('student/create'));
			}
		}
	}
}