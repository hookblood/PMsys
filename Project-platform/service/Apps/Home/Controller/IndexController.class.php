<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model;
use Think\Controller\YarController;


class IndexController extends BaseController {
    //登陆
    public function login($username,$password)
    {
        if(!$username)
            return '用户名不能为空！';
        $check=D('Index')->getWhereInfo(array('alias'=>$username));
        if(!$check)
            return '登录用户不存在';
        if($check['upassword']!=($password))
            return '密码错误!';
        return $check=D('Index')->getWhereInfo();
    }
    public function loginout(){
//        echo 111;die();
//        setcookie(time()-1);
        return setcookie("user_id", "", time()-3600).setcookie("username", "", time()-3600).setcookie("password", "", time()-3600);
    }
}