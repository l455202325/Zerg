<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 22:57
 */

namespace app\api\validate;


class Count extends BaseValidate

{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,20'
    ];
    protected $message = [
        'count' => 'count必须为正整数，并且必须在1-20之间'
    ];
}