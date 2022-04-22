<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\interfaces;

/**
 * 保持登录状态
 * Interface StatefulGuard
 * @package tensent\auth\interfaces
 */
interface StatefulGuard extends Guard{
	public function attempt($credentials, $remember = false);

	/**
	 * 设置登录用户
	 *
	 * @param mixed $user
	 * @param bool $remember
	 * @return void
	 */
	public function login($user, $remember = false);

	/**
	 * 用户是否使用了“记住我”
	 *
	 * @return bool
	 */
	public function viaRemember();

	/**
	 * 登出
	 *
	 * @return void
	 */
	public function logout();
}
