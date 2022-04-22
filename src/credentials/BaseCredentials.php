<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\credentials;

use ArrayObject;
use ReflectionClass;

class BaseCredentials extends ArrayObject{

	/**
	 * @param array $credentials
	 * @return static
	 */
	public static function fromArray(array $credentials = []){
		$reflect = new ReflectionClass(static::class);

		/** @var static $object */
		$object = $reflect->newInstanceWithoutConstructor();

		$object->exchangeArray($credentials);

		return $object;
	}
}