<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\password;

class Exception extends \InvalidArgumentException{
	const INVALID_USER = 'passwords.user';

	const INVALID_PASSWORD = 'passwords.password';

	const INVALID_TOKEN = 'passwords.token';

	public function __construct($message){
		parent::__construct($message);
	}
}