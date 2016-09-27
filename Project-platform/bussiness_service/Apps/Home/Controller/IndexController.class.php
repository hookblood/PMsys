<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model;
use Think\Controller\YarController;


class IndexController extends BaseController {

    /**
     * 获取商务经理列表（废弃）
     *
     */
    public function get_pmlist()
    {
        //$check=D('Index')->managerInterface();
        return 'caonima';
    }

    /**
     * 获取商务经理管理的项目
     *
     */
    public function get_projectlist($id)
    {
        $condition['uid']=$id;
        $info=M('project')->where($condition)->select();
        return $info;
    }
}