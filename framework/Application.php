<?php
namespace framework;

class Application
{
	private static $_config;
	private $_router;
	
	static private $_current_module_name;
	
	static private $_current_controller_name;
	
	static private $_current_action_name;
	
	static function getCurrentModuleName()
	{
		return self::$_current_module_name;
	}
	
	static function getCurrentControllerName()
	{
		return self::$_current_controller_name;
	}
	
	static function getCurrentActionName()
	{
		return self::$_current_action_name;
	}
	
	function run()
	{
		$this->_router = new Router();
		self::$_current_module_name = $this->_router->getModuleName();
		self::$_current_controller_name = $this->_router->getControllerName();
		self::$_current_action_name = $this->_router->getActionName();
		
		$namespace = 'app\\'.self::$_current_module_name.'\\controller\\'.ucwords(self::$_current_controller_name);
		
		if (class_exists($namespace,true))
		{
			$class = new $namespace();
			if (method_exists($class, self::$_current_action_name))
			{
				$a = self::$_current_action_name;
				$response = $class->$a();
			}
		}
		
		if (!empty($response))
		{
			$response->send();
		}
	}
	
	static function getConfig($name)
	{
		if (empty(self::$_config))
		{
			self::$_config = require_once './config/app.php';
		}
		
		return self::$_config[$name];
	}
}