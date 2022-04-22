<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\guard;

use tensent\auth\credentials\RequestCredentials;
use tensent\auth\interfaces\Guard;
use tensent\auth\interfaces\Provider;
use tensent\auth\traits\GuardHelpers;

class Request implements Guard{
	use GuardHelpers;

	protected $request;
	protected $callback;

	public function __construct(Provider $provider, \think\Request $request){
		$this->provider = $provider;
		$this->request  = $request;
	}

	protected function retrieveUser(){
		$credentials = new RequestCredentials($this->request);
		return $this->provider->retrieveByCredentials($credentials);
	}

}
