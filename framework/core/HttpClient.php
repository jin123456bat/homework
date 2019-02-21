<?php
namespace framework\core;
class HttpClient
{
	/**
	 * 发送post请求
	 *
	 * @param unknown $url
	 * @param unknown $data
	 */
	static function post($url, $data = array())
	{
		$curl = curl_init($url);
		$user_agent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.59 Safari/537.36';
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $data,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HTTPHEADER => array(
				'User-Agent: ' . $user_agent,
				'Content-Type: application/json;charset=UTF-8'
			),
			CURLOPT_USERAGENT => $user_agent,
			CURLINFO_HEADER_OUT => true
		));
		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}
	
	/**
	 * 发送get请求
	 *
	 * @param string $url
	 *        请求的地址
	 * @param array $data
	 *        请求的额外参数 默认是添加到?号后面
	 * @param bool $use_curl
	 *        是否使用curl,默认是不使用
	 */
	static function get($url, array $data = array())
	{
		$url = $url . (! empty($data) ? ('?' . http_build_query($data)) : '');
		$curl = curl_init($url);
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_POST => false,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLINFO_HEADER_OUT => true
		));
		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
	}
}