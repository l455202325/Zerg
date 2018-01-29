<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/30
 * Time: 0:04
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;
}