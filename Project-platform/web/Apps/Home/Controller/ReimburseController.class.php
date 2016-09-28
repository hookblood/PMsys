<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 功能模块：前台入口
 * 开发人员：xufei
 * 开发日期：2016年09月23日21:50:03
 */
class ReimburseController extends BaseController {
	/**
	 *首页
	 * 
	 */
    public function index(){
        $this->display("reimburse/reimburse_tpye");
    }
    /**
     *x新增页面
     *
     */
    public function reimburse_add(){
        $this->display("reimburse/reimburse_add");
    }
    /**
     *详情页面
     *
     */
    public function reimburse_detail(){
        $this->display("reimburse/reimburse_detail");
    }
    /**
     *列表页面
     *
     */
    public function reimburse_list(){
        $this->display("reimburse/reimburse_list");
    }
}