<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\interfaces;

interface Provider{
	/**
	 * 根据用户输入的数据获取用户
	 * @param mixed $credentials
	 * @return mixed
	 */
	public function retrieveByCredentials($credentials);
}