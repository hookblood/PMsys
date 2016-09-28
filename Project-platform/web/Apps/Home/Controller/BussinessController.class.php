<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 功能模块：前台入口
 * 开发人员：wanghy
 * 开发日期：2016年09月27日
 */
class BussinessController extends BaseController {


    public function index()
    {
        p($this->Yar->diction('admin'));
        p($this->Business_Yar->get_pmlist());
    }
	/**
	 * 获取商务经理列表
	 * @params:
     *
	 */
    public function get_pmlist(){
        //从接口获取数据
        $list = $this->Yar->managerlist_Interface(1);
        $this->assign('list',$list);
        $this->display('bussiness/bussiness_list');
        }
    /**
     * 获取商务经理的项目列表
     * @params:
     * $pmid  商务经理id
     */
    public function get_projectlist($pmid){
        $list = $this->Business_Yar->get_projectlist($pmid);
        $this->assign('list',$list);
        $this->assign('uid',$_COOKIE['user_id']);
        $this->display('bussiness/project_list');
    }
    /**
 * 获取商务项目详情
 * @params:
 * $jid  项目id
 */
    public function detail($jid){
        $list = $this->Business_Yar->get_projectdetail($jid);
        $this->assign('list',$list);
        $this->display('bussiness/bussiness_detail');
    }
    /**
     * 增加商务跟进情况
     * @params:
     * $id 发布人ID
     * $jid 项目id
     * $content 跟进内容
     * $method 解决方案
     */
    public function addcomment($id,$jid,$content,$method){
        $list = $this->Business_Yar->addcommentC($id,$jid,$content,$method);
    }

    /**
     * 删除项目
     * @params:
     * $id 项目ID
     */
    public function delproject(){
        $id=$_GET['id'];
        $pmid=$_GET['uid'];
//        var_dump($id);die();
        $list =  $this->Business_Yar->delprojectC($id);
        echo "<script LANGUAGE='JavaScript'>";
        echo "location.href='index.php?s=/Home/Bussiness/get_projectlist&pmid=$pmid'";
        echo "</script>";
//        $this->display('bussiness/project_list');
    }

}