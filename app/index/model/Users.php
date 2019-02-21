<?php
namespace app\index\model;
use framework\core\HttpClient;
use framework\Model;

class Users extends Model
{
	static function select()
	{
		$url = 'https://jsonplaceholder.typicode.com/users';
		return json_decode(HttpClient::get($url),true);
	}
}