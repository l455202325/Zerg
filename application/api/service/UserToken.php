<?php
/**
 * Created by PhpStorm.
 * User: Oliver
 * Date: 2018/1/30
 * Time: 21:04
 */
namespace app\api\service;
class UserToken
{
    protected $code;
    protected $wxAppId;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    function __construct($code)
    {
        $this->code = $code;
        $this->wxAppId = config('wx.app_id');
        $this->wxAppSecret = config('wx.app_secret');
        $this->wxLoginUrl = sprintf(config('wx.login_url')
            ,$this->wxAppId,$this->wxAppSecret,$this->code);
    }

    public function get(){

    }
}