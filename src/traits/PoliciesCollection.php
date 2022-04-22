<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\traits;

trait PoliciesCollection{

	public function withPolicies($abilities){
		$this->each(function ($model) use ($abilities) {
			/** @var PoliciesModel $model */
			$model && $model->withPolicies($abilities);
		});

		return $this;
	}
}