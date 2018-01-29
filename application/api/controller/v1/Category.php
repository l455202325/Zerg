<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 23:56
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    public function getAllCategories(){

        $categories = CategoryModel::with('img')
            ->select();
        if ($categories->isEmpty()){
            throw new CategoryException();
        }

        return $categories;
    }
}