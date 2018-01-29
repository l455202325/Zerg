<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 23:56
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['update_time','delete_time','topic_img_id','from'];
    public function img(){
        return $this->belongsTo('Image','topic_img_id','id');
    }
}