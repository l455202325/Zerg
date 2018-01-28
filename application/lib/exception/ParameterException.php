<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/28
 * Time: 15:41
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}