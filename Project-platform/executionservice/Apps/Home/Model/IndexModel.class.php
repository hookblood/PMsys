<?php

namespace Home\Model;

/**
 * 功能模块：首页服务
 * 开发人员：shijunli
 * 开发日期：2016-9-13 09:19:11
 */
class IndexModel extends BaseModel {
    /**
     * 获取项目数据
     * ￥uid=》人员id
     */
    protected $tableName = 'project';
    public function getProject($uid){
        $where['b.state']=1;
        $where['a.state']=1;
        $where['b.table_name']='project';
        $where['b.column_name']='typekey';
        $where['a.uid']=$uid;
        return M('project as a')->join('dictionary as b on a.typekey=b.key')->field('a.jid as jid,b.value as value')->where($where)->select();
    }
    /**
     * 项目详情人员
     *$uid=>人员uid；￥jid=》项目id
     */
    public function getPerson($jid){
        return M('project_team')->field('uid')->where("jid=$jid")->select();
    }
    /**
     * 项目详情
     *$uid=>人员uid；￥jid=》项目id
     */
    public function getDetail($jid){
        return M('project')->where("jid=$jid")->find();
    }
    /**
     * 项目报告说明
     *￥jid=》项目id
     */
    public function getDetailed($jid){
            $info=M('project_comment')->where("jid=$jid")->select();
        return $info;
    }
    /**
     * 项目报告类型
     *￥jid=》项目id
     */
    public function getType($jid){
        $where['b.state']=1;
        $where['b.table_name']='project_comment';
        $where['b.column_name']='typekey';
        $where['a.jid']=$jid;
        $count=M()->table('__PROJECT_COMMENT__ as a,__DICTIONARY__ as b')
            ->field('b.value AS project_sum,a.cid')
            ->where('a.typekey=b.key')
            ->where($where)
            ->group('a.cid')
            ->select();
        foreach($count as $v)
        {
            $tmp_count[$v['cid']]=$v;
        }
        unset($count);
        return   $tmp_count;
    }
    /**
     * 报告详情
     *￥cid=》报告id;
     */
    public function showReport($cid){
            $info=M('project_comment')->where("cid=$cid")->select();
        return $info;
    }
    /**
     * 报告详情回复
     *$id=》报告id;$content=>内容；$uid=>人员id
     */
    public function addReport($id,$content,$uid){
        $condition['cid']=$id;
        $condition['content']=$content;
        $condition['uid']=$uid;
        $condition['ctime']=time();
        $condition['state']=1;
        $info=M('project_comment_attr')->add($condition);
        return $info;
    }
    /**
     * 报告评论
     *￥cid=》报告id
     */
    public function getReport($cid){
        $info=M('project_comment_attr')->where("cid=$cid")->select();
        return $info;
    }
    /**
     * 报告数据新增
     *$jid=》项目id;$content=>内容；$type=>报告类型
     */
    public function insertReport($jid,$content,$type,$uid){
        $condition['jid']=$jid;
        $condition['content']=$content;
        $condition['uid']=$uid;
        $condition['ctime']=time();
        $condition['typekey']=$type;
        $condition['state']=2;
        $info=M('project_comment')->add($condition);
        return $info;
    }
    /**
     * 项目信息修改
     *$jid=》项目id
     */
    public function updateReport($jid,$pjd,$pdbsw,$pjlzj){
        $condition['pjd']=$pjd;
        $condition['pdbsw']=$pdbsw;
        $condition['pjlzj']=$pjlzj;
        $where['jid']=$jid;
        return M('project')->where($where)->save($condition);
    }
}