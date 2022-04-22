<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

use tensent\auth\model\User;

return [
	'default'          => 'web',
	'guards'           => [
		'web' => [
			'type'     => 'session',
			'provider' => 'user',
		],
		'api' => [
			'type'     => 'token',
			'provider' => 'user',
		],
	],
	'providers'        => [
		'user' => [
			'type'  => 'model',
			'model' => User::class,
		],
	],
	'password'         => [
		'provider' => 'user',
	],

	"fields" => [],

	'policy_namespace' => '\\app\\policy\\',
	'policies'         => [],
];
