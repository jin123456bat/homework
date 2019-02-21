<?php
namespace framework\response;
use framework\Response;

class Message extends View
{
	function __construct($msg,$path)
	{	
		parent::__construct('./framework/view/message.php');
		$this->assign('msg', $msg);
		$this->assign('path', $path);
	}
}