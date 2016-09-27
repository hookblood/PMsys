<?php

namespace Home\Model;

/**
 * 功能模块：首页服务
 * 开发人员：shijunli
 * 开发日期：2016-9-13 09:19:11
 */
class BussinessxModel extends BaseModel {
    /**
     * 获取项目经理列表
     * Enter description here ...
     */


    protected $tableName = 'admin_user';

    public function get_pmlist($where){
        $info=$this->where($where)->find();
        if(!$info){
            $info = '获取数据失败';
        }
        return  $info;
//        return $privileges;
    }
}