<?php

namespace validate;

use service\ToolsService;
use think\Validate;

/**
 * 验证器基类
 * Class BasicValidate
 * @package validate
 * @author 伟彬 <277690572@qq.com>
 * @date: 2018/8/3 18:20
 */
class BasicValidate extends Validate
{
    public function goCheck($params){

        $result = $this->check($params);
        if(!$result){
            ToolsService::error($this->error);
        }else{
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule='', $date='', $field='')
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }else{
            return false;
        }
    }
}