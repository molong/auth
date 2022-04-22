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
use tensent\auth\exception\AuthorizationException;

class Authorize{
	protected $auth;

	public function __construct(Auth $auth){
		$this->auth = $auth;
	}

	public function handle($request, Closure $next, $ability, ...$args){
		$user = $this->auth->user();

		if (!can($user, $ability, ...$args)) {
			throw new AuthorizationException;
		}

		return $next($request);
	}
}
