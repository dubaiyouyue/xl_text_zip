<?php
/**
 *
 * index(入口文件)
 *
 * @package      	GZPHP
 * @author          wen QQ:52009619 <wei2l99@qq.com>
 * @copyright     	Copyright (c) 2008-2011  (http://www.resonance.com.cn)
 * @license         http://www.resonance.com.cn/license.txt
 * @version        	GzPHP企业网站管理系统 v2.1 2011-03-01 resonance.com.cn $
 */
if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('GZPHP', 'GzPHP');
define('UPLOAD_PATH', './Uploads/');
define('VERSION','v3.7 Released');
define('UPDATETIME','20140525');
define('APP_NAME', 'GZphp');
define('APP_PATH', './GZphp/');
define('APP_LANG',true);
define('APP_DEBUG',true);
define('THINK_PATH','./Core/');
require(THINK_PATH.'/Core.php');
?>
