<?php
namespace framework\response;
use framework\Response;
use framework\Application;

class View extends Response
{
	private $_path;
	
	private $_assign = [];
	
	function __construct($path = '')
	{
		if (empty($path))
		{
			$m = Application::getCurrentModuleName();
			$c = Application::getCurrentControllerName();
			$a = Application::getCurrentActionName();
			$this->_path = './app/'.$m.'/view/'.$c.'/'.$a.Application::getConfig('default_suffix');
		}
	}
	
	function assign($key,$value)
	{
		$this->_assign[$key] = $value;
	}
	
	function send()
	{
		if (file_exists($this->_path))
		{
			ob_start();
			ob_implicit_flush(false);
			extract($this->_assign, EXTR_OVERWRITE);
			require $this->_path;
			$this->setBody(ob_get_clean());
		}
		else
		{
			throw new \Exception('template file not exist:'.$this->_path);
		}
		parent::send();
	}
}