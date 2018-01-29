<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 20:38
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = ['update_time','delete_time','head_img_id','topic_img_id'];
    public function topicImg()
    {
        return $this->belongsTo('Image','topic_img_id','id');
    }
    public function headImg()
    {
        return $this->belongsTo('Image','head_img_id','id');
    }

    public function products(){
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');
    }

    public static function getThemeWithProduct($id){
//        $theme = self::with(['headImg','topicImg','products'])
//            ->find($id);
        $theme = self::with('headImg,topicImg,products')->find($id);
        return $theme;
    }
}