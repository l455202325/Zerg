<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/27
 * Time: 23:01
 */

namespace app\api\controller\v1;

use app\lib\exception\BannerMissException;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMastBePositiveInt;


class Banner
{
    /**
     * 获取指定ID的Banner
     * @url banner/:id
     * @http GET
     * @id banner的Id
     *
     */
    public function getBanner($id){
        (new IDMastBePositiveInt())->goCheck();
        $banner = BannerModel::getBannerById($id);
        if ($banner->isEmpty()){
            throw new BannerMissException();
        }
        return $banner;
    }
}