<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\exception;

class UnauthorizedHttpException extends AuthenticationException{
	public function __construct(string $challenge, $message = null){
		$headers = [
			'WWW-Authenticate' => $challenge,
		];

		parent::__construct($message, $headers);
	}
}
