<?php
namespace framework\response;
use framework\Response;

class Message extends Response
{
	function __construct($msg,$path)
	{
		list($c,$a) = explode('/', $path);
		$this->_body = $msg;
		$this->setHeader('Location:./index.php?c='.$c.'&a='.$a);
		$this->_http_code = 302;
	}
}