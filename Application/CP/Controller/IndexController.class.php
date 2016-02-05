<?php
//APP_PATH.BIND_MODULE
namespace CP\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$alertblock = array('grade' => 'info','info' => 'name', );
		session('alertblock',$alertblock);
		$this->display();
	}
}