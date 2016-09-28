<?php

namespace Home\Model;

/**
 * 功能模块：首页服务
 * 开发人员：shijunli
 * 开发日期：2016-9-13 09:19:11
 */
class BussinessModel extends BaseModel {
    /**
     * 获取项目经理列表
     * Enter description here ...
     */


    protected $tableName = 'project';

    /**
     * 获取项目列表
     * @params
     * $id 项目经理id
     */
    public function get_projectlistM($id){
        $condition['uid']=$id;
        $condition['table_name']='project';
        $condition['column_name']='typekey';
        $info=M('project as a')->join('dictionary as b on a.typekey=b.key')->where($condition)->where('a.state=1')->select();
        return $info;
    }
    /**
     * 获取项目详情
     * @params
     * $jid 项目id
     */
    public function get_projectdetailM($jid){
        $condition['table_name']='project';
        $condition['column_name']='typekey';
        $info=M('project as a')->join('dictionary as b on a.typekey=b.key')->join('project_comment as c on c.jid=a.jid')->where("a.jid=$jid")->order('c.ctime DESC')->select();
//        var_dump($info);
        return $info;
    }
    /**
     * 增加商务跟进情况
     * @params
     * $id 发布人ID
     * $jid 项目ID
     * $content 跟进内容
     * $method 解决方案
     */
    public function addcommentM($id,$jid,$content,$method){
        $data['jid']=$jid;
        $data['content']=$content;
        $data['uid']=$id;
        $data['jjfa']=$method;
        $data['ctime']=time();
        $data['mtime']=0;
        $data['state']=1;

        $info=M('project_comment')->add($data);
//        var_dump($info);
        return $info;
    }
    /**
     * 删除商务项目
     * @params
     * $jid 项目ID
     */
    public function delprojectM($jid){
        $where['jid']=$jid;
        $data['state']=0;
        $info=M('project')->where($where)->save($data);
//        return $info;
    }
}