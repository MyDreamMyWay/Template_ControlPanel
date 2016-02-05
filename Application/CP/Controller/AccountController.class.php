<?php
namespace CP\Controller;
use Think\Controller;
/**
* 账户相关
*/
class AccountController extends Controller
{
	// 显示登陆界面
	public function login($tx='请输入账号密码')
	{
		// $tx 是登陆框的提醒内容
		$tx = '随便输入后按登录';
		$this->assign('tx',$tx);
		$this->display();
	}
	// 验证登陆信息
	public function verify()
	{
		// 模拟登陆
		$user = I('post.user');
		$password = I('post.password');
		session('user',$user);
		$this->redirect('Index/index');
	}
	// 注销
	public function logout()
	{
		session('user',null);
		$this->redirect('Index/index');
	}
}
?>