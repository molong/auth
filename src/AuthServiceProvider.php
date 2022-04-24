<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth;

use think\Service;

class AuthService extends Service{

	/**
	 * @title 注册服务
	 *
	 * @return void
	 */
	public function register(){
		$this->app->bind('auth', function ($store = null) {
			$auth = new Auth(config('auth'));

			return $auth;
		});
	}
}