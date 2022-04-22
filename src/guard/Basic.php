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
use tensent\auth\credentials\PasswordCredential;
use tensent\auth\exception\UnauthorizedHttpException;
use tensent\auth\interfaces\Provider;

class Basic extends Password{
	protected $request;

	public function __construct(Provider $provider, Request $request){
		parent::__construct($provider);
		$this->request = $request;
	}

	public function authenticate(){
		if (!$this->check()) {
			throw new UnauthorizedHttpException('Basic', 'Invalid credentials.');
		}
	}

	protected function retrieveUser(){
		$credentials = $this->getCredentialsFromRequest();

		if (!empty($credentials)) {
			return $this->provider->retrieveByCredentials($credentials);
		}

		return null;
	}

	protected function getCredentialsFromRequest(){
		$header = $this->request->header('Authorization');

		if (!empty($header)) {
			if (Str::startsWith($header, 'Basic ')) {
				$token   = Str::substr($header, 6);
				$decoded = base64_decode($token);
				[$username, $password] = explode(':', $decoded);

				return new PasswordCredential($username, $password);
			}
		}

		return false;
	}
}
