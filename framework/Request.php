<?php
namespace framework;
class Request
{	
	static function get($name,$default = NULL)
	{
		$param = $_GET;
		if (isset($param[$name]))
		{
			return $param[$name];
		}
		return $default;
	}
	
	static function post($name,$default = NULL)
	{
		$param = $_POST;
		if (isset($param[$name]))
		{
			return $param[$name];
		}
		return $default;
	}
}