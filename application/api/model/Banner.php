<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/28
 * Time: 0:38
 */

namespace app\api\model;


class Banner extends BaseModel
{

    protected $hidden = ['update_time','delete_time'];

    public function items(){
        // 1 关联模型 2.关联模型外键（关联的字段） 3.当前模型的主键
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function getBannerById($id){
        //TODO:根据Banner Id 号获取banner 信息
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
    }
}