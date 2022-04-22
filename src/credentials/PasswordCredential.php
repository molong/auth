<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\credentials;

class PasswordCredential extends BaseCredentials{
	public function __construct($username, $password){
		parent::__construct([
			'username' => $username,
			'password' => $password,
		]);
	}

	public function getUsername(){
		return $this->offsetGet('username');
	}

	public function getPassword(){
		return $this->offsetGet('password');
	}
}
