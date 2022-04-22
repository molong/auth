<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth;

class Role{
	/** @var array 权限列表 */
	protected $permissions = [];

	/** @var string 角色名称 */
	protected $name;

	public function __construct($name, $permissions = []){
		$this->name        = $name;
		$this->permissions = $permissions;
	}

	public function getName(){
		return $this->name;
	}

	/**
	 * 设置角色权限
	 * @param $permissions
	 */
	public function setPermissions($permissions){
		$this->permissions = $permissions;
	}

	/**
	 * 获取权限列表
	 * @return array
	 */
	public function getPermissions(){
		return $this->permissions;
	}
}
