<?php
/**
 * Created by PhpStorm.
 * User: Oliver
 * Date: 2018/1/30
 * Time: 20:54
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];
    protected $message = [
        'code' => 'code不允许为空'
    ];
}