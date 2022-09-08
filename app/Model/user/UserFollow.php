<?php
// +----------------------------------------------------------------------
// | CRMEB [ CRMEB赋能开发者，助力企业发展 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2020 https://www.crmeb.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed CRMEB并不是自由软件，未经许可不能去掉CRMEB相关版权
// +----------------------------------------------------------------------
// | Author: CRMEB Team <admin@crmeb.com>
// +----------------------------------------------------------------------

namespace app\model\user;

use app\model\activity\combination\StoreCombination;
use crmeb\basic\BaseModel;
use crmeb\traits\ModelTrait;

/**
 * Class UserBill
 * @package app\model\user
 */
class UserFollow extends BaseModel
{
    use ModelTrait;
    /**
     * 数据表主键
     * @var string
     */
    protected $pk = 'id';
    /**
     * 模型名称
     * @var string
     */
    protected $name = 'user_follow';

}