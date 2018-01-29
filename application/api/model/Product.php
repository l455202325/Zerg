<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 20:36
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['update_time','delete_time','create_time','pivot','img_id','from',''];

    public function getMainImgUrlAttr($value,$data){
        return $this->prefixUrl($value,$data);
    }

    public static function getMostRecent($count){
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;
    }
}