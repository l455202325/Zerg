<?php
/**
 * Created by PhpStorm.
 * User: Oliver
 * Date: 2018/1/30
 * Time: 20:35
 */

namespace app\api\controller\v1;


    use app\api\service\UserToken;
    use app\api\validate\TokenGet;


    class Token
    {
         public function getToken($code=''){
             (new TokenGet())->goCheck();
             $ut = new UserToken($code);

             $token = $ut->get();

             return $token;
         }
    }