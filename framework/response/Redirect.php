<?php
namespace framework\response;
use framework\Response;

class Redirect extends Response
{
	function __construct($path)
	{
		list($c,$a) = explode('/', $path);
		$this->setHeader('Location:./index.php?c='.$c.'&a='.$a);
	}
}