<?php
/**
 * Created by PhpStorm.
 * User: zixing
 * Date: 2018/1/27
 * Time: 23:33
 */

namespace app\api\validate;



use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取Request实例
        $request = Request::instance();
        //获取所有参数
        $params = $request->param();
        //对对参数进行校验
        $result = $this->batch()->check($params);
        //判断校验结果
        if (!$result){
            throw new ParameterException([
                'msg' => $this->error
            ]);
        }else{
            return true;
        }
    }

    protected function isPositiveInteger($value ,$rule = '',$data = '',$field = ''){
        if (is_numeric($value) && is_int($value+0) && ($value + 0) > 0){
            return true;
        }else{
            return false;
//            return $field.'必须为正整数';
        }
    }

    protected function isNotEmpty($value ,$rule = '',$data = '',$field = ''){
        if (empty($value)){
            return false;
        }else{
            return true;
        }
    }

}