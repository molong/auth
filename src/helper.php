<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------

use tensent\auth\facade\Gate;

/**
 * @param mixed $user
 * @param string $ability
 * @param array $args
 * @return bool
 */
function can($user, $ability, ...$args){
	return Gate::forUser($user)->can($ability, ...$args);
}