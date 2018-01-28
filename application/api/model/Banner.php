<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/28
 * Time: 0:38
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{

    public static function getBannerById($id){
        //TODO:根据Banner Id 号获取banner 信息
        //1.使用原生的sql语句查询
//        $result = Db::query(
//            'select * from banner_item where banner_id=?',[$id]);

        //2.使用构造器查询
//        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();

        $result = Db::table('banner_item')
            ->where(function ($query) use ($id){
                $query->where('banner_id','=',$id);
            })
            ->select();

        //ORM 对象关系映射

        // 模型

        return $result;

    }
}