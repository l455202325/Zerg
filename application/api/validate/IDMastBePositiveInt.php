<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/28
 * Time: 0:13
 */

namespace app\api\validate;


class IDMastBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    protected $message = [
        'id' => 'id必须为正整数'
    ];

}