<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model;
use Think\Controller\YarController;


class IndexController extends BaseController {
    /**
     * 登陆
     *
     */    public function login($username,$password)
{
    if(!$username)
        return '用户名不能为空！';
    $check=D('Index')->getPrivileges(array('alias'=>$username));
    if(!$check)
        return '登录用户不存在';
    if($check['upassword']!=($password.$check['salt']))
        return '密码错误!';
    return $check=D('Index')->getDiction();
}
    /**
     * 退出登陆
     *
     */
    public function loginout(){
        return setcookie("user_id", "", time()-3600).setcookie("username", "", time()-3600).setcookie("password", "", time()-3600);
    }
    /**
     * 获取权限
     *
     */
    public function diction($username){
        $check=D('Index')->getdiction(array('d.alias'=>$username));
        return $check;
    }
    /**
     * 首页登陆
     *
     */
    public function newadd($uid){
        $check=D('Index')->NewAdd($uid);
        return  $check;
    }
    /**
     * 验证session数据
     *
     */
    public function newshow($username){
        return $check=D('Index')->getDiction(array('alias'=>$username));
    }
    /**
     * 删除session数据
     *
     */
    public function sign_Out($uid){
        $check=D('Index')->SignOut($uid);
        return  $check;
    }
}   
