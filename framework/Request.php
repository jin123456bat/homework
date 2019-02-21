<?php
namespace framework;
/**
 * 请求类
 * @author jin12
 *
 */
class Request
{	
	static function get($name,$default = NULL)
	{
		$param = $_GET;
		if (is_scalar($name))
		{
			if (isset($param[$name]))
			{
				return $param[$name];
			}
			return $default;
		}
		else if (is_array($name))
		{
			return array_map(function($item)use($default){
				return self::post($item,$default);
			}, $name);
		}
	}
	
	static function post($name,$default = NULL)
	{
		$param = $_POST;
		
		if (is_scalar($name))
		{
			if (isset($param[$name]))
			{
				return $param[$name];
			}
			return $default;
		}
		else if (is_array($name))
		{
			$data = [];
			foreach ($name as $key)
			{
				$data[$key] = self::post($key,$default);
			}
			return $data;
		}
	}
	
	static function isGet()
	{
		return $_SERVER['REQUEST_METHOD'] == 'GET';
	}
}