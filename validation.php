<?php
/**
 * User: jalen 钱文军
 * e-mail: qianwenjun@yaochufa.com
 * Date: 2016/11/29
 * Time: 14:20
 * 过滤器工具类
 */
class Validation{
	/**
	 * 验证邮箱.
	 */
	public static function isEmail($emailAddr){
		return filter_var($emailAddr, FILTER_VALIDATE_EMAIL);
	}
	/**
	 * 验证ip.
	 */
	public static function isIpAddress($ipAddr){
		return filter_var($ipAddr, FILTER_VALIDATE_IP);
	}

	/**
	 * 验证整数的范围.
	 */
	public static function isBetween($num, $minRange, $maxRange){
		$options = array(
			'options' => array(
				'min_range' => $minRange,
				'max_range' => $maxRange,
			)
		);
		return filter_var($num,FILTER_VALIDATE_INT,$options);
	}

}
