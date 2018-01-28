<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 0:01
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected function prefixUrl($value,$data){
        $finalUrl = $value;
        if ($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }

        return $finalUrl;
    }
}