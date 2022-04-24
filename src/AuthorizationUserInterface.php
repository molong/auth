<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth;

interface AuthorizationUserInterface{
	public function getUserById($id): AuthorizationUserInterface;

	public function hasUserByUserName($username): bool;

	public function getUserByUserName($username): AuthorizationUserInterface;

	public function verifyPassword($password): bool;

	public function setUserName($username): AuthorizationUserInterface;

	public function setPassword($password): AuthorizationUserInterface;

	public function token(): string;
}
