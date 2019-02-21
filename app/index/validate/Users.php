<?php
namespace app\index\validate;
use framework\Validate;

class Users extends Validate
{
	
	
	function check($data)
	{
		if(preg_match('/^[0-9]/', $data['first_name']))
		{
			$this->_message = '名字中不能包含数字';
			return false;
		}
		
		if(preg_match('/^[0-9]/', $data['last_name']))
		{
			$this->_message = '名字中不能包含数字';
			return false;
		}
		
		if (preg_match('/^[a-z0-9]/', $data['user_name']))
		{
			$this->_message = '用户名中不能包含除了小写字母和数字以外的内容';
			return false;
		}
		
		if (strlen($data['user_name']) > 20 || strlen($data['user_name'])<8)
		{
			$this->_message = '用户名长度只能在8-20位';
			return false;
		}
		
		if (!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
		{
			$this->_message = '邮箱错误';
			return false;
		}
		
		if (!in_array($data['country'], ['China','USA','England']))
		{
			$this->_message = '国家错误';
			return false;
		}
		
		return true;
	}
}