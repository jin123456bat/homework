<?php
namespace framework\response;
use framework\Response;

/**
 * 给浏览器跳转的响应类
 * @author jin12
 *
 */
class Redirect extends Response
{
	function __construct($path)
	{
		list($c,$a) = explode('/', $path);
		$this->setHeader('Location:./index.php?c='.$c.'&a='.$a);
	}
}