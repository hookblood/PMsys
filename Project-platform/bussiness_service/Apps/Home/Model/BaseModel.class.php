<?php

namespace Home\Model;
use Think\Model;

class BaseModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * 用来处理内容中为空的判断
     */
    public function checkEmpty($data,$isDie = false){
        $rd = array('err'=>0,'msg'=>'');
        foreach ($data as $key=>$v){
            if(trim($v)==''){
                $rd['err'] = -999;
                $rd['msg'] = $key.'为空';
                if($isDie){
                    $rd['key'] = $key;
                    die(json_encode($rd));
                }
                return $rd;
            }
        }
        return $rd;
    }
}

?>