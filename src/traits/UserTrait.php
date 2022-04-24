<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\traits;

use tensent\auth\AuthorizationUserInterface;

trait UserTrait{
	public function hasUserByUserName($username): bool{
		return $this->where('username', $username)->find() ? true : false;
	}

	public function getUserByUserName($username): AuthorizationUserInterface{
		return $this->where('username', $username)->find();
	}

	public function verifyPassword($password): bool{
		return password_verify($password, $this->password);
	}

	public function setUserName($username): AuthorizationUserInterface{
		$this->username = $username;

		return $this;
	}

	public function setPassword($password): AuthorizationUserInterface{
		$this->password = $password;

		return $this;
	}
}