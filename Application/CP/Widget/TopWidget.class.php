<?php
namespace CP\Widget;
use Think\Controller;
/**
* 输出菜单
* echo模板中调用 {~W('Menu/index')}
*/
class TopWidget extends Controller
{
	// 用于生成导航条
	public function navbar()
	{
		$return = '';
		$nav_config = require APP_PATH.BIND_MODULE.'/Conf/nav.php';
		foreach ($nav_config as $key1 => $value) {
			if (!is_array($value)) {
				// 如果只有一级
				$return .= ($key1==CONTROLLER_NAME) ? '<li class="active">' : '<li>' ;
				$return .= '<a href="'.U($key1.'/index').'"> '.$value.' </a></li>';
			} else {
				// 如果有两级
				$return .= ($key1==CONTROLLER_NAME) ? '<li class="dropdown active ">' : '<li class="dropdown">' ;
				$return .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown"> '.$value['_main'].' <b class="caret"></b></a><ul class="dropdown-menu">';
				foreach ($value as $key2 => $value2) {
					if ($key2 != '_main') {
						//$return .= ($key2==ACTION_NAME) ? '<li class="active">' : '<li>' ;
						$return .= '<li>';
						$return .= '<a href="'.U($key1.'/'.$key2).'">'.$value2.'</a></li>';
					}
				}
				$return .= '</ul></li>';
			}
		}
		return $return."\n";
	}
	// 获取消息，需要修改
	public function messages_get()
	{
		// 示例
		$messages = array(
			'0' => array(
				// 链接，可以是U，也可以是一个地址
				'link' => U('Index/index'), 
				// 图片
				'img' => 'http://placehold.it/50x50',
				// 标题
				'title' => '消息1',
				// 消息详情
				'message' => '消息详情……',
				// 消息时间
				'time' => '4:34 PM',
				),
			'1' => array(
				'link' => 'http://www.wolaimang.com', 
				'img' => 'http://placehold.it/50x50',
				'title' => '消息2',
				'message' => '消息详情……',
				'time' => '10:25 AM',
				),
		);
		return $messages;
	}
	// 显示消息
	public function messages()
	{
		$return = '';
		$messages = $this->messages_get();
		foreach ($messages as $key => $onemessage) {
			$return .= '<li class="message-preview">';
			$return .= '<a href="'.$onemessage['link'].'">';
			$return .= '<span class="avatar"><img src="'.$onemessage['img'].'"></span>';
			$return .= '<span class="name"> '.$onemessage['title'].':</span>';
			$return .= '<span class="message">'.$onemessage['message'].'...</span>';
			$return .= '<span class="time"><i class="fa fa-clock-o"></i> '.$onemessage['time'].'</span>';
			$return .= '</a></li><li class="divider"></li>';
		}
		return $return."\n";
	}
	// 显示消息个数
	public function messages_num()
	{
		$messages = $this->messages_get();
		return count($messages);
	}
	// 获取提醒，需要修改
	public function alerts_get()
	{
		// 示例
		$alerts = array(
			'0' => array(
				// 链接
				'link' => U('Index/index'),
				// 提醒内容
				'alert' => '提醒内容1',
				// 等级 可以是 default(默认) primary(主要) success(成功) info(消息) warning(警告) danger(危险),不能是其他
				'grade' => 'default',
				), 
			'1' => array(
				'link' => 'http://www.wolaimang.com',
				'alert' => '提醒内容2',
				'grade' => 'warning',
				), 
			);
		return $alerts;
	}
	// 显示提醒
	public function alerts()
	{
		$return = '';
		$alerts = $this->alerts_get();
		// 每个级别提醒的文字，可修改
		$alerts_name = array('default'=>'默认','primary'=>'主要', 'success'=>'成功', 'info'=>'消息', 'warning'=>'警告', 'danger'=>'危险',);
		foreach ($alerts as $key => $onealert) {
			$return .= '<li><a href="'.$onealert['link'].'"> '.$onealert['alert'].' <span class="label label-'.$onealert['grade'].'">'.$alerts_name["$onealert[grade]"].'</span></a></li>';
		}
		return $return."\n";
	}
	// 显示提醒个数
	public function alerts_num()
	{
		$alerts = $this->alerts_get();
		return count($alerts);
	}
	// 显示用户名字
	public function username()
	{
		return session('user');
	}
	// 显示面包屑
	public function breadcrumb()
	{
		$nav_config = require APP_PATH.BIND_MODULE.'/Conf/nav.php';
		// 二级
		$breadcrumb2 = '';
		if (is_array($nav_config[CONTROLLER_NAME])) {
			$breadcrumb2 = '<li> <a href="'.U(CONTROLLER_NAME.'/index').'">'.$nav_config[CONTROLLER_NAME]['_main'].'</a></li>';
		} elseif (CONTROLLER_NAME!='Index') {
			$breadcrumb2 = '<li> <a href="'.U(CONTROLLER_NAME.'/index').'">'.$nav_config[CONTROLLER_NAME].'</a></li>';
		}
		// 三级
		$breadcrumb3 = '';
		if (ACTION_NAME!='index') {
			$breadcrumb3 = '<li class="active"> <a href="'.U(CONTROLLER_NAME.'/'.ACTION_NAME).'">'.$nav_config[CONTROLLER_NAME][ACTION_NAME].'</a></li>';
		}
		return '<ol class="breadcrumb"><li><a href="'.U('Index/index').'"> 控制中心</a></li>'.$breadcrumb2.$breadcrumb3.'</ol>'."\n";
	}
	// 显示提醒
	public function alertblock()
	{
		// 如果需要提醒 设置session['alertblock'] = array('info'=>'内容','grade'=>'等级')
		// 等级 可以是 default(默认) primary(主要) success(成功) info(消息) warning(警告) danger(危险),不能是其他
		// 如果有链接：<a class="alert-link" target="_blank">http://www.wolaimang.com/</a>
		if (session('?alertblock')) {
			$alertblock = session('alertblock');
			session('alertblock',null);
			return '<div class="alert alert-'.$alertblock['grade'].' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$alertblock['info'].'</div>'."\n";
		}
		
	}
}

?>