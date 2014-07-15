<?php
header("Content-type: text/html; charset=utf-8");
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value); 
		return $value; 
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE); 
}
define('APP_DEBUG',1);
define('APP_NAME', 'cms');
define('CONF_PATH','./VfanData/Conf/');
define('RUNTIME_PATH','./VfanData/logs/');
define('TMPL_PATH','./tpl/');
define('HTML_PATH','./VfanData/html/');
define('APP_PATH','./VfanCms/');
define('CORE','./VfanCms/_Core');
require(CORE.'/VfanCms.php');
?>
