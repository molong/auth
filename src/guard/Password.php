<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\guard;

use tensent\auth\interfaces\Guard;
use tensent\auth\interfaces\Provider;
use tensent\auth\traits\GuardHelpers;

abstract class Password implements Guard{
	use GuardHelpers;

	public function __construct(Provider $provider){
		$this->provider = $provider;
	}
}
