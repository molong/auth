<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------

use tensent\auth\drive\Session;
use tensent\auth\model\Users;

return [
	'default' => 'api',
	'stores' => [
		'api' => [
			'drive' => Session::class,
			'key' => 'uid',
			'model' => Users::class
		]
	]
];