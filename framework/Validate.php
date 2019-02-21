<?php
namespace framework;
/**
 * 验证器
 * 用于验证数据是否正确
 * @author jin12
 *
 */
class Validate
{
	/**
	 * 验证失败的时候保存失败信息
	 * @var unknown
	 */
	protected $_message;
	
	/**
	 * 获取失败信息
	 * @return \framework\unknown
	 */
	function getMessage()
	{
		return $this->_message;
	}
	
	/**
	 * 验证方法
	 * @param unknown $data
	 */
	function check($data)
	{
		
	}
}