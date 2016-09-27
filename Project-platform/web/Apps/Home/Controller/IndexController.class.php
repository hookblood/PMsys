<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 功能模块：前台入口
 * 开发人员：xufei
 * 开发日期：2016年09月23日21:50:03
 */
class IndexController extends BaseController {
	/**
	 * 首页登陆
	 * 
	 */
    public function index(){
        //后台服务调用
        if(IS_POST)
        {
//            return $new;
                $res=$this->Yar->login(I('post.UserName'),md5(I('post.Password')));
//            return $res;
                if(is_array($res)){
                $str='';
                foreach ($res as $val)
                {
                    $str =$str.$val['mod_id'].',';
                }
                $strend=trim($str,',');//去除最后个逗号
                    //储存cookie
                    setcookie('user_id',$res[0]['uid'],time()+3600*24*7);
                    setcookie('username',I('post.UserName'),time()+3600*24*7);
                    setcookie('password',I('post.Password'),time()+3600*24*7);
                    $this->assign('privileges',$res);

                    $this->display('show/index');
                }
                else{
                    $this->error($res);
                }
        }
        else{
            $this->display('user/login');
        }
    }
    /**
     * 退出登陆
     *
     */
    public function login_out(){
        $info=$this->Yar->sign_Out($_COOKIE['user_id']);
        setcookie("user_id", "", time()-3600);
        setcookie("username", "", time()-3600);
        setcookie("password", "", time()-3600);
        $this->display('user/login');
    }
}	/**
	 * 首页
	 * 
	 */
    //登陆
    public function index(){
        //后台服务调用
        if(IS_POST)
        {
//            return $new;
                $res=$this->Yar->login(I('post.UserName'),md5(I('post.Password')));
                if(is_array($res)){
//                $str='';
//                foreach ($res as $val)
//                {
//                    $str =$str.$val['mod_id'].',';
//                }
//                $strend=trim($str,',');//去除最后个逗号
                    setcookie('user_id',$res[0]['uid'],time()+3600*24*7);
                    setcookie('username',I('post.UserName'),time()+3600*24*7);
                    setcookie('password',I('post.Password'),time()+3600*24*7);
                    $this->assign('privileges',$res);

                    $this->display('show/index');
                }
                else{
                    $this->error($res);
                }
        }
        else{
            $this->display('user/login');
        }
    }
    public function login_out(){
        setcookie("user_id", "", time()-3600);
        setcookie("username", "", time()-3600);
        setcookie("password", "", time()-3600);
        $this->display('user/login');
    }
}