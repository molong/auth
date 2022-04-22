<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\interfaces;

use tensent\auth\Role;

interface Authorizable{
	/**
	 * 获取用户角色
	 * @return Role[]
	 */
	public function getRoles();

	/**
	 * 是否具有某个角色
	 * @param array|string $name
	 * @param bool         $requireAll
	 * @return bool
	 */
	public function hasRole($name, $requireAll = false);

	/**
	 * 获取用户的所有权限
	 * @return array
	 */
	public function getPermissions();

	/**
	 * 是否具有某个权限
	 * @param      $name
	 * @param bool $requireAll
	 * @return bool
	 */
	public function hasPermission($name, $requireAll = false);

	/**
	 * 检查权限
	 * @param       $action
	 * @param array $args
	 * @return bool|mixed
	 */
	public function can($action, ...$args);

}