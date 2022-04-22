<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.tensent.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@tensent.cn> <http://www.tensent.cn>
// +----------------------------------------------------------------------
namespace tensent\auth\model;

use think\Model;
use tensent\auth\interfaces\Authorizable;
use tensent\auth\interfaces\CanResetPassword;
use tensent\auth\traits\AuthorizableUser;
use tensent\auth\traits\CanResetPasswordUser;

/**
 * 默认用户模型
 * Class User
 * @package think\auth\model
 */
class User extends Model implements Authorizable, CanResetPassword{
	use AuthorizableUser, CanResetPasswordUser;
}
