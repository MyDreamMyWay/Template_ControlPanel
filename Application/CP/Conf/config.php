<?php
return array(
	//'配置项'=>'配置值'
	'LAYOUT_ON'=>true,//开启模板渲染
	'TMPL_PARSE_STRING'=>array(//添加自己的模板变量规则
		'__CP__'=>__ROOT__.'/Public/Cp'
	//	'__PUBLIC__'=>__ROOT__.'/Home/Public/',
	//	'__CSS__'=>__ROOT__.'/Home/Public/Css/',
	//	'__JS__'=>__ROOT__.'/Home/Public/Js/',
	//	'__UPLOADS__'=>__ROOT__.'/Home/Public/Uploads/'
	),
);