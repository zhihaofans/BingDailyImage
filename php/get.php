<?php
$key_1='g_img=';
$key_2='{url:\'';
$key_3='\',';
$ret = file_get_contents('http://cn.bing.com/');
$num_1=stripos($ret,$key_1,0);
$num_2=stripos($ret,$key_2,$num_1)+6;
$num_3	=stripos($ret,$key_3,$num_2);
$url='http://s.cn.bing.net'.substr($ret,$num_2,$num_3-$num_2);
header('Location: '.$url);
?>
