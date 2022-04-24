<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\config;

class Config{
	protected $drive;

	protected $key;

	protected $model;

	public function __construct($options){
		foreach ($options as $key => $value) {
			$this->$key = $value;
		}
	}

	public function setModel($model){
		$this->model = $model;
		return $this;
	}

	public function getModel(){
		return $this->model;
	}

	public function setDrive($name){
		$this->drive = $name;
		return $this;
	}

	public function getDrive(){
		return $this->drive;
	}

	public function setKey($key){
		$this->key = $key;
		return $this;
	}

	public function getKey(){
		return $this->key;
	}
}
