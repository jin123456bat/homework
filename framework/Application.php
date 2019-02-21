<?php
namespace framework;

/**
 * mvc的应用程序类
 * 所有的逻辑都应该在这个类里面运行
 * @author jin12
 *
 */
class Application
{
	/**
	 * 配置
	 * @var unknown
	 */
	private static $_config;
	/**
	 * 路由
	 * @var unknown
	 */
	private $_router;
	
	/**
	 * 当前的模块名
	 * @var unknown
	 */
	static private $_current_module_name;
	
	/**
	 * 控制器名
	 * @var unknown
	 */
	static private $_current_controller_name;
	
	/**
	 * 方法名
	 * @var unknown
	 */
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
			//反射
			$class = new $namespace();
			if (method_exists($class, self::$_current_action_name))
			{
				$a = self::$_current_action_name;
				$response = $class->$a();
			}
		}
		
		if (!empty($response))
		{
			//给客户端发送响应
			$response->send();
		}
	}
	
	/**
	 * 读取配置
	 * @param unknown $name
	 * @return \framework\unknown
	 */
	static function getConfig($name)
	{
		if (empty(self::$_config))
		{
			self::$_config = require_once './config/app.php';
		}
		
		return self::$_config[$name];
	}
}