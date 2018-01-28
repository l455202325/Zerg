<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/27
 * Time: 23:01
 */

namespace app\api\controller\v1;

use app\api\lib\exception\BannerMissException;
use app\api\validate\IDMastBePositiveInt;
use app\api\model\Banner as BannerModel;
use think\response\Json;


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
//        $banner = BannerModel::getBannerById($id);
        $banner = BannerModel::get($id);
        if (!$banner){
            throw new BannerMissException();
        }

        return $banner;
    }
}