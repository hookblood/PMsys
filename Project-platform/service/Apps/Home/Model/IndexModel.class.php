<?php

namespace Home\Model;

/**
 * 功能模块：首页服务
 * 开发人员：shijunli
 * 开发日期：2016-9-13 09:19:11
 */
class IndexModel extends BaseModel {
    /**
     * 登陆验证
     * Enter description here ...
     */
    protected $tableName = 'admin_user';

    public function getPrivileges($where){
        $info=$this->where($where)->find();
        if($info){
            $condition['s_uid']=$info['uid'];
            $condition['expiry_time']=time()+86400*7;
            $condition['session_id']=$info['uid'];
            M('session')->add($condition);
        }
        return  $info;
    }
    /**
     * 权限
     * Enter description here ...
     */
    public function getDiction($where){
        $count=M()->table('__USER_MODULE__ as a,__ROLE_MOD_RELATION__ as b,__USER_ROLE_RELATION__ as c,__ADMIN_USER__ as d')
            ->field('a.mod_name,a.mod_url,d.uid')
            ->where("a.mod_id=b.mod_id AND b.role_id=c.role_id AND c.uid=d.uid")
            ->where($where)
            ->group('a.mod_id')
            ->select();
        return $count;
    }
    /**
     * 新增和验证session数据
     * Enter description here ...
     */
    public function NewAdd($where){
        if($_COOKIE['username']==$where){
            $info=M('session as a')->join('admin_user as b on a.s_uid=b.uid')->where("b.alias='$where'")->find();
            if($info){
                if($info['expiry_time']>time()){
                    return  true;
                }else{
                    setcookie("user_id", "", time()-3600);
                    setcookie("username", "", time()-3600);
                    setcookie("password", "", time()-3600);
                    return  false;
                }
            }
            else{
                return false;
            }
        }
    }
    /**
     * 删除session
     *
     */
    public function SignOut($where){
        if($where){
            $info=M('session')->where("s_uid=$where")->delete();
            return  $info;
        }
    }
    /**
     * 经理人员接口
     *
     */
    public function managerInterface($mid){
        $uid=$_COOKIE['user_id'];
        $condition['role_id']=array('like',"%$uid%");
        $info=M('admin_user as a')->join('user_role_relation as b on a.uid=b.uid')->where($condition)->select();
        if($info){
            if($mid==1){
                return M('admin_user')->where('state=2')->select();
            }elseif($mid==2){
                return M('admin_user')->where('state=3')->select();
            }
        }else{
            return $_COOKIE['username'];
        }
    }
}