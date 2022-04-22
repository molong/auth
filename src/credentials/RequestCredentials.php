<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\credentials;

use think\Request;

class RequestCredentials extends BaseCredentials{
	public function __construct(Request $request){
		parent::__construct(['request' => $request]);
	}

	/**
	 * @return Request|\think\Request
	 */
	public function getRequest(){
		return $this->offsetGet('request');
	}
}
