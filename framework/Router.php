<?php
namespace framework;
class Router
{
	function getModuleName()
	{
		$m = Request::get('m');
		if ($m !== NULL)
		{
			return $m;
		}
		return Application::getConfig('default_module');
	}
	
	function getControllerName()
	{
		$c = Request::get('c');
		if ($c !== NULL)
		{
			return $c;
		}
		return Application::getConfig('default_controller');
	}
	
	function getActionName()
	{
		$a = Request::get('a');
		if ($a !== NULL)
		{
			return $a;
		}
		return Application::getConfig('default_action');
	}
}