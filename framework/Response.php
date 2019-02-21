<?php
namespace framework;
class Response
{
	protected $_header = [];
	protected $_body;
	protected $_http_code;
	
	function __construct($data,$http_code = 200)
	{
		$this->_http_code = $http_code;
		$this->_body = $data;
	}
	
	function setHttpCode($http_code)
	{
		$this->_http_code = $http_code;
	}
	
	function setHeader($string)
	{
		$this->_header[] = $string;
	}
	
	function setBody($body)
	{
		$this->_body = $body;
	}
	
	function send()
	{
		foreach ($this->_header as $header)
		{
			header($header);
		}
		
		http_response_code($this->_http_code);
		
		echo $this->_body;
		exit();
	}
}