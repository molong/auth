<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\password;

use think\Cache;
use think\helper\Str;
use tensent\auth\interfaces\CanResetPassword;

class Token{

	protected $cache;

	public function __construct(Cache $cache){
		$this->cache = $cache;
	}

	public function create(CanResetPassword $user){
		$email = $user->getEmailForResetPassword();

		$token = $this->createNewToken();

		$this->cache->set($this->getCacheKey($user), $this->getPayload($email, $token));

		return $token;
	}

	protected function getPayload($email, $token){
		return ['email' => $email, 'token' => $token, 'create_time' => time()];
	}

	protected function getCacheKey(CanResetPassword $user){
		return 'password:reset:' . md5($user->getEmailForResetPassword());
	}

	protected function createNewToken(){
		return sha1(Str::random(40));
	}

	public function exists(CanResetPassword $user, $token){
		$tokenCache = $this->cache->get($this->getCacheKey($user));

		return $tokenCache && $tokenCache['token'] == $token && $tokenCache['create_time'] + 30 * 60 > time();
	}

	public function delete(CanResetPassword $user){
		$this->cache->delete($this->getCacheKey($user));
	}
}