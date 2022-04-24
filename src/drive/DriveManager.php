<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\drive;

use tensent\auth\AuthorizationUserInterface;
use tensent\auth\config\Config;
use tensent\auth\drive\DriveInterface;
use tensent\auth\exception\Unauthorized;

class DriveManager{
	/**
	 * @var Config
	 */
	protected $config;

	/**
	 * @var DriveInterface
	 */
	protected $drive;

	public function __construct(Config $config){
		$this->config = $config;

		$this->init();
	}

	protected function init(){
		$class =  $this->config->getDrive();
		$this->drive = new $class();
	}

	public function getDrive(){
		return $this->drive;
	}

	public function isLogin(){
		$key = $this->config->getKey();

		return $this->drive->has($key);
	}

	protected function makeUser(){
		$class = $this->config->getModel();
		$key = $this->config->getKey();
		$id = $this->drive->get($key);

		$model = new $class();
		if ($model instanceof AuthorizationUserInterface) {
			return $model->getUserById($id);
		} else {
			throw new Unauthorized('implements ' . AuthorizationUserInterface::class);
		}
	}

	public function user(){
		if ($this->isLogin() !== false) {
			return $this->makeUser();
		} else {
			throw new Unauthorized('未登录');
		}
	}
}
