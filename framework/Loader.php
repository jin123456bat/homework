<?php
class Loader
{
	/**
	 * 
	 */
	static function register()
	{
		spl_autoload_register(function($namespace){
			$path = str_replace('\\','/', ltrim($namespace)).'.php';
			if (file_exists($path))
			{
				include_once $path;
			}
		});
	}
}