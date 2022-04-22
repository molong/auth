<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\middleware;

use Closure;
use tensent\auth\Auth;
use tensent\auth\exception\AuthenticationException;

/**
 * 用户身份认证
 * Class Authentication
 *
 * @package think\auth\behavior
 */
class Authentication{

	protected $auth;

	public function __construct(Auth $auth){
		$this->auth = $auth;
	}

	public function handle($request, Closure $next, $guards = null){
		$this->authenticate((array) $guards);

		return $next($request);
	}

	protected function authenticate($guards){
		if (empty($guards)) {
			return $this->auth->authenticate();
		}

		$lastException = null;

		foreach ($guards as $guard) {
			try {
				$this->auth->guard($guard)->authenticate();
				return $this->auth->shouldUse($guard);
			} catch (AuthenticationException $e) {
				$lastException = $e;
			}
		}

		throw $lastException;
	}
}