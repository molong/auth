<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\event;


class Login{

	public $user;

	public $remember;

	public function __construct($user, $remember){
		$this->user     = $user;
		$this->remember = $remember;
	}
}