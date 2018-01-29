<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 21:36
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定的主题不存在，请检查主题ID';
    public $errorCode = 30000;

}