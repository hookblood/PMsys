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
     * @param
     * $id 项目经理id
     */
    public function get_projectlist($id)
    {
        $info=D('Bussiness')->get_projectlistM($id);
        return $info;
    }
    /**
     * 获取商务经理管理的项目
     * @param
     * $jid 项目id
     */
    public function get_projectdetail($jid)
    {
        $info=D('Bussiness')->get_projectdetailM($jid);
        return $info;
    }
    /**
     * 增加商务跟进情况
     * @params:
     * $id 发布人ID
     * $jid 项目ID
     * $content 跟进内容
     * $method 解决方案
     */
    public function addcommentC($id,$jid,$content,$method){
        $info=D('Bussiness')->addcommentM($id,$jid,$content,$method);
        return $info;
    }
    /**
     * 删除商务项目
     * @params:
     * $jid 项目ID
     */
    public function delprojectC($jid){
        $info=D('Bussiness')->delprojectM($jid);
//        return $info;
    }

}