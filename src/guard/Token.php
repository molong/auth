<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\guard;

use think\helper\Str;
use think\Request;
use tensent\auth\credentials\TokenCredentials;
use tensent\auth\interfaces\Authorizable;
use tensent\auth\interfaces\Guard;
use tensent\auth\interfaces\Provider;
use tensent\auth\traits\GuardHelpers;

class Token implements Guard{
	use GuardHelpers;

	protected $request;

	public function __construct(Request $request, Provider $provider){
		$this->provider = $provider;
		$this->request  = $request;
	}

	/**
	 * 获取通过认证的用户
	 *
	 * @return Authorizable|mixed|null
	 */
	public function user(){
		if (!is_null($this->user)) {
			return $this->user;
		}

		$user = null;

		$token = $this->getTokenFromRequest();

		if (!empty($token)) {
			$credentials = new TokenCredentials($token);
			$user        = $this->provider->retrieveByCredentials($credentials);
		}

		return $this->user = $user;
	}

	protected function getTokenFromRequest(){
		$token = $this->request->param('access-token');
		if (empty($token)) {
			$header = $this->request->header('Authorization');
			if (!empty($header)) {
				if (Str::startsWith($header, 'Bearer ')) {
					$token = Str::substr($header, 7);
				}
			}
		}

		return $token;
	}
}