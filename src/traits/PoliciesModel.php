<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\traits;

use tensent\auth\Collection;
use tensent\auth\facade\Gate;

trait PoliciesModel{
	public function withPolicies($abilities){
		if (is_string($abilities)) {
			$abilities = explode(',', $abilities);
		}

		$this->withAttr('policies', function () use ($abilities) {
			$data = [];
			foreach ($abilities as $ability) {
				$data[$ability] = Gate::can($ability, $this);
			}
			return $data;
		});

		$this->append(['policies']);

		return $this;
	}

	public function toCollection(iterable $collection = [], string $resultSetType = null): \think\Collection{
		return parent::toCollection($collection, Collection::class);
	}
}
