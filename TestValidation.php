<?php
/**
 * Created by PhpStorm.
 * User: jalen
 * Date: 2016/11/29
 * Time: 14:36
 * 测试
 */
include('validation.php');
$ip_1 = '127.2.2.6';
$ip_2 = '22.3.5';

if(Validation::isIpAddress($ip_1)){
	echo "the $ip_1 is ip address";
}else{
	echo "the $ip_1 is not ip address";
}
echo "<br>";
if(Validation::isIpAddress($ip_2)){
	echo "the $ip_2 is ip address";
}else{
	echo "the $ip_2 is not ip address";
}
echo "<br>";

$num_1 = 5;
$num_2 = '8';
if(Validation::isBetween($num_1, 2, 6)){
	echo "the $num_1 is between 2 and 6";
}else{
	echo "the $num_1 is not between 2 and 6";
}
echo "<br>";
if(Validation::isBetween($num_2, 2, 6)){
	echo "the $num_2 is between 2 and 6";
}else{
	echo "the $num_2 is not between 2 and 6";
}
echo "<br>";

$email_1 = 'qianwenjun@yaochufa.com';
$email_2 = 'www.bilibili.com';
if(Validation::isEmail($email_1)){
	echo "the $email_1 is an e-mail address";
}else{
	echo "the $email_1 is not an e-mail address";
}
echo "<br>";
if(Validation::isEmail($email_2)){
	echo "the $email_2 is an e-mail address";
}else{
	echo "the $email_2 is not an e-mail address";
}
/**
 * 程序输出如下：
   the 127.2.2.6 is ip address
   the 22.3.5 is not ip address
   the 5 is between 2 and 6
   the 8 is not between 2 and 6
   the qianwenjun@yaochufa.com is an e-mail address
   the www.bilibili.com is not an e-mail address
 */