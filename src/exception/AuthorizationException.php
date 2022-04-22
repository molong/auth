<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\exception;

use think\exception\HttpException;

class AuthorizationException extends HttpException{
	public function __construct($message = 'Forbidden'){
		parent::__construct(403, $message);
	}
}
