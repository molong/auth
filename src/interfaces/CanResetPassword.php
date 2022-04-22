<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\interfaces;

interface CanResetPassword{

	/**
	 * 获取邮箱或者手机号码
	 * @return mixed
	 */
	public function getEmailForResetPassword();

	/**
	 * 发送重置密码token通知
	 * @param $token
	 * @return mixed
	 */
	public function sendPasswordResetNotification($token);

}