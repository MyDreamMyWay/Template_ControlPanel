<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 检测是否登陆
session_start();
if (empty($_SESSION['user'])) {
	if (empty($_GET['c'])) {
		echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['SCRIPT_NAME'].'?c=Account&a=login">';
		exit();
	} elseif ($_GET['c']!='Account') {
		echo '<meta http-equiv="refresh" content="0;url='.$_SERVER['SCRIPT_NAME'].'?c=Account&a=login">';
		exit();
	}
}

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 绑定入口文件到CP模块访问
define('BIND_MODULE','CP');

// 定义应用目录
define('APP_PATH','./Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单