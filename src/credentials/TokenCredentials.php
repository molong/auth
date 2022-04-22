<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\credentials;

class TokenCredentials extends BaseCredentials
{
	public function __construct(string $token){
		parent::__construct(['token' => $token]);
	}

	public function getToken(){
		return $this->offsetGet('token');
	}
}
