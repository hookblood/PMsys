<?php

namespace Home\Model;

/**
 * 功能模块：首页服务
 * 开发人员：shijunli
 * 开发日期：2016-9-13 09:19:11
 */
class IndexModel extends BaseModel {
    /**
     * 登陆验证
     * Enter description here ...
     */


    protected $tableName = 'admin_user';

    public function getWhereInfo($where){
        return $this->field('uid,alias,upassword')->where($where)->find();
    }

}