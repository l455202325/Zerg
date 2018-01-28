<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/28
 * Time: 1:21
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //Http状态码 200 400 404...
    public $code = 400;

    //异常描述
    public $msg = '参数错误';

    //自定义的错误码
    public $errorCode = 10000;


    public function __construct($params = [])
    {
       if (!is_array($params )){
//           throw new Exception('参数必须是数组');
           return;
       }

       if (array_key_exists('code',$params)){
           $this->code = $params['code'];
       }
        if (array_key_exists('msg',$params)){
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode',$params)){
            $this->errorCode = $params['errorCode'];
        }
    }
}