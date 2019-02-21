<?php
/**
 * 自动加载
 * @author jin12
 *
 */
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