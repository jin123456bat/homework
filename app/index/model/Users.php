<?php
namespace app\index\model;
use framework\core\HttpClient;
use framework\Model;

class Users extends Model
{	
	private static function parse($data)
	{
		return [
			'name' => $data['first_name'].' '.$data['last_name'],
			'username' => $data['user_name'],
			'email'=> $data['email'],
		    'address'=>[
		    	'street' => $data['street'],
		    	'suite' => $data['country'],
		    	'city' => $data['city'],
		    	'zipcode' => $data['zipcode'],
		    	'geo' => [
		    		'lat'=> '-37.3159',
		    		'lng'=> '81.1496'
		    	]
		    ],
			'company'=> [
				'name' => $data['company_name'],
				'catchPhrase' => $data['company_description'],
			],
		    'phone'=> '1-770-736-8031 x56442',
		    'website'=> 'hildegard.org',
		];
	}
	
	static function select()
	{
		$url = 'https://jsonplaceholder.typicode.com/users';
		return json_decode(HttpClient::get($url),true);
	}
	
	
	
	static function insert($data)
	{	
		$data = self::parse($data);
		$url = 'https://jsonplaceholder.typicode.com/users';
		HttpClient::post($url,json_encode($data));
		return true;
	}
}