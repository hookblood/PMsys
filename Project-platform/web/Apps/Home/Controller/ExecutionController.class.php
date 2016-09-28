<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 功能模块：前台入口
 * 开发人员：xufei
 * 开发日期：2016年09月23日21:50:03
 */
class ExecutionController extends BaseController {
	/**
	 * 人员显示
	 * 
	 */
    public function index(){
            $info=$this->Yar->getUser(I('get.mid'));
            $this->assign('info',$info);
            $this->display('execution/implement');
    }
    /**
     * 项目显示
     *$uid=>人员uid
     */
    public function project(){
        $info=$this->Execution_Yar->server_Project(I('get.id'));
        $this->assign('uid',I('get.id'));
        $this->assign('info',$info);
        $this->display('execution/project');
    }
    /**
     * 项目详情
     *$uid=>人员uid；￥jid=》项目id
     */
    public function detailed(){
        $data=$this->Execution_Yar->detail_Project(I('get.id'));
        $list=$this->Execution_Yar->showPerson(I('get.id'));
        $detailed=$this->Execution_Yar->showDetailed(I('get.id'));
        $type=$this->Execution_Yar->get_Type(I('get.id'));
        $name=$this->Yar->showPerson(I('get.uid'));
//        $cid="";
        $user="";
            foreach($detailed as $k){
//                $cid.=$k['cid'].",";
                $user.=$k['uid'].",";
            }
//        $cid = rtrim($cid, ',');
        $user = rtrim($user, ',');
        $execution=$this->Yar->pushExecution($user);
        $str="";
        foreach($list as $k){
            $str.=$k['uid'].",";
        }
        $str = rtrim($str, ',');
        dump($execution);
        $info=$this->Yar->showPerson($str);
        $this->assign('info',$info);
        $this->assign('data',$data);
        $this->assign('login',$name);
        $this->assign('detailed',$detailed);
        $this->assign('execution',$execution);
        $this->assign('type',$type);
        $this->assign('id',I('get.id'));
        $this->assign('uid',I('get.uid'));
        $this->display('execution/detailed');
    }
    /**
     * 报告详情
     *id=>报告id
     */
    public function comment_attr(){
        $data=$this->Execution_Yar->show_Report(I('get.id'));

        $info=$this->Yar->showPerson($data[0]['uid']);
        $list=$this->Execution_Yar->get_Report(I('get.id'));
        $this->assign('list',$list);
        $this->assign('data',$data);
        $this->assign('info',$info);
//        $this->assign('id',I('get.id'));
        $this->display('execution/comment_attr');
    }
    /**
     * 报告详情回复
     *id=>报告id
     */
    public function add_comment_attr(){
        return $this->Execution_Yar->add_Report(I('post.id'),I('post.content'),I('post.uid'));
    }
    /**
     * 报告数据新增
     *$jid=》项目id;$content=>内容；$type=>报告类型
     */
    public function detailed_Add(){
        return $this->Execution_Yar->insert_Report(I('post.id'),I('post.content'),I('post.type'));
    }
    /**
     * 项目信息修改
     *$jid=》项目id
     */
    public function detailUpdate(){
        if($this->Execution_Yar->update_Report(I('post.jid'),I('post.pjd'),I('post.pdbsw'),I('post.pjlzj'))){
            $this->success('新增成功');
        }
    }
    public function peo_detail(){
        $list=$this->Yar->showPerson(I('get.uid'));
//        dump($info);
        $this->assign('list',$list);
        $this->assign('id',I('get.id'));
        $this->display('execution/peo_detail');
    }
}