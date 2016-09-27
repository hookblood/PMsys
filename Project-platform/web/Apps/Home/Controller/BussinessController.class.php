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
	 * 
	 */
    public function get_pmlist(){
        //获取
        $list = $this->Yar->managerlist_Interface(1);
        $this->assign('list',$list);
//        var_dump($list);
        $this->display('bussiness/bussiness_list');
        }
    /**
     * 获取商务经理的项目列表
     *
     */
    public function get_projectlist($pmid){
        //获取
        $list = $this->Business_Yar->get_projectlist($pmid);
        $this->assign('list',$list);
        $this->assign('uid',$_COOKIE['user_id']);
//        var_dump($list);
        $this->display('bussiness/project_list');
    }
    }