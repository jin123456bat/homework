<?php
namespace framework\core;
class Url
{
	static function build($path)
	{
		$path = array_filter(explode('/', $path));
		if (count($path) == 1)
		{
			return 'index.php?a='.$path[0];
		}
		else if (count($path) == 2)
		{
			return 'index.php?c='.$path[0].'&a='.$path[1];
		}
	}
}