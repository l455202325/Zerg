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
        'id' => 'require|idMastBePositiveInteger'
    ];

    protected function idMastBePositiveInteger($value ,$rule = '',$data = '',$field = ''){
        if (is_numeric($value) && is_int($value+0) && ($value + 0) > 0){
            return true;
        }else{
            return $field.'必须为正整数';
        }
    }
}