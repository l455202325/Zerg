<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/27
 * Time: 23:01
 */

namespace app\api\controller\v2;


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

        return 'this is ver2';
    }
}