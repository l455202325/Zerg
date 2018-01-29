<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 22:54
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;

class Product
{

    public function getRecent($count=20){
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if (!$products){

        }
        return $products;
    }
}