<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model;
use Think\Controller\YarController;

class IndexController extends BaseController {
    /**
     *获取成员项目
     *￥uid=》成员id
     */
    public function server_Project($uid){
        $check=D('Index')->getProject($uid);
        return  $check;
    }
    /**
     * 项目详情
     *￥jid=》项目id
     */
    public function detail_Project($jid){
        $check=D('Index')->getDetail($jid);
        return  $check;
    }
    /**
     * 项目详情人员
     *￥jid=》项目id
     */
    public function showPerson($jid){
        $check=D('Index')->getPerson($jid);
        return  $check;
    }
    /**
     * 项目详情信息
     *￥jid=》项目id
     */
    public function showDetailed($jid){
        $check=D('Index')->getDetailed($jid);
        return  $check;
    }
    /**
     * 项目详情信息类型
     *￥jid=》项目id
     */
    public function get_Type($jid){
        $check=D('Index')->getType($jid);
        return  $check;
    }
    /**
     * 报告详情
     *￥cid=》报告id
     */
    public function show_Report($cid){
        $check=D('Index')->showReport($cid);
        return  $check;
    }
    /**
     * 报告详情回复
     *$id=》报告id;$content=>内容；$uid=>人员id
     */
    public function add_Report($id,$content,$uid){
        $check=D('Index')->addReport($id,$content,$uid);
        return  $check;
    }
    /**
     * 报告回复数据
     *$id=》报告id
     */
    public function get_Report($cid){
        $check=D('Index')->getReport($cid);
        return  $check;
    }
    /**
     * 报告数据新增
     *$jid=》项目id;$content=>内容；$type=>报告类型
     */
    public function insert_Report($jid,$content,$type,$uid){
        $check=D('Index')->insertReport($jid,$content,$type,$uid);
        return  $check;
    }
    /**
     * 项目信息修改
     *$jid=》项目id
     */
    public function update_Report($jid,$pjd,$pdbsw,$pjlzj){
        $check=D('Index')->updateReport($jid,$pjd,$pdbsw,$pjlzj);
        return  $check;
    }

}