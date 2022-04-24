<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\drive;

use tensent\auth\drive\DriveInterface;

class Cookie implements DriveInterface{
	public function has($key){
		return \think\facade\Cookie::has($key);
	}

	public function get($key){
		return \think\facade\Cookie::get($key);
	}

	public function delete($key){
	}
}