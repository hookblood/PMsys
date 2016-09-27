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
        //后台服务调用
//        $res=$this->Yar->managerInterface('1');
//        $res=$this->Yar->login(I('post.UserName'),md5(I('post.Password')));
//            return $res;
            $this->display('bussiness/bussiness_list');
        }
    }