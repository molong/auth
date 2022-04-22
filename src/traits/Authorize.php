<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\traits;

use ErrorException;
use think\helper\Str;
use tensent\auth\exception\AuthorizationException;
use tensent\auth\facade\Gate;

/**
 * 控制器鉴权
 * Class Authorize
 *
 * @package tensent\auth\traits
 */
trait Authorize{
	protected function authorize($ability, ...$args){
		$result = Gate::raw($ability, ...$args);

		if ($result !== true) {
			throw new AuthorizationException($result);
		}
	}

	public function __call($method, $args){
		if (preg_match('/^authorize_(\w+)(?:\|([\w\\\]+))?$/', $method, $match)) {

			$ability = $match[1];
			$object  = isset($match[2]) ? $match[2] : null;
			if (isset($match[2]) && isset($this->{$match[2]})) {
				$object = $this->{$match[2]};
			}

			$method = "authorize" . Str::studly($ability);

			if (method_exists($this, $method)) {
				if (!$this->$method($object)) {
					throw new AuthorizationException;
				}
			} else {
				$this->authorize($ability, $object);
			}
		} else {
			throw new ErrorException("Call to undefined method {$method}");
		}
	}
}