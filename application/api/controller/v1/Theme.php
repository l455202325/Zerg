<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/29
 * Time: 20:34
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMastBePositiveInt;
use app\lib\exception\ThemeException;

class Theme
{
    /**
     *
     * @url /theme?ids=id1,id2,id3,...
     * @return 一组Theme模型
     *
     */
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();

        $ids = explode(',',$ids);

        $result = ThemeModel::with('TopicImg,HeadImg')->select($ids);

        if (!$result){
            throw new ThemeException();
        }
        return $result;

    }

    public function getComplexOne($id){
        (new IDMastBePositiveInt())->goCheck();

//        $result = ThemeModel::with('HeadImg,Products')->find($id);
        $result = ThemeModel::getThemeWithProduct($id);

        if (!$result){
            throw new ThemeException();
        }
        return $result;
    }
}