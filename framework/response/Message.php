<?php
namespace framework\response;
use framework\Response;

/**
 * 给浏览器消息提示的响应类
 * @author jin12
 *
 */
class Message extends View
{
	function __construct($msg,$path)
	{	
		parent::__construct('./framework/view/message.php');
		$this->assign('msg', $msg);
		$this->assign('path', $path);
	}
}