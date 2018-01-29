<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 23:18
 */

namespace app\lib\exception;


class ProdcutException extends BaseException
{
    public $code = 400;
    public $msg = '';
    public $errorCode = 40000;

}