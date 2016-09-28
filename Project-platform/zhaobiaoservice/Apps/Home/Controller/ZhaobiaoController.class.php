<?php
/**
 * Created by PhpStorm.
 * User: fanfan
 * Date: 2016/9/27
 * Time: 10:47
 */
namespace Home\Controller;

use Think\Controller;
//use Home\Model;
use Think\Controller\YarController;

class ZhaobiaoController extends BaseController
{
    //
    public function refer($table_type = '', $where, $limit)
    {
        return D('Zhaobiao')->getBaseInfo($table_type, $where, $limit);
    }

    //查看更多
    /**
     * @param string $table_type
     * @param $where
     * @param $offest             起始页数
     * @param $limit              查询数量
     * @return mixed
     */
    public function see($table_type = '', $where, $offest, $limit)
    {
        return D('Zhaobiao')->getInfoList($table_type, $where, $offest, $limit);
    }


    public function get_info_count($table_type = '', $where)
    {
        return D('Zhaobiao')->getInfoCount($table_type, $where);
    }

     //查看详情
    public function get_info_detail($table_type, $id){
        if(!$id=intval($id))
            return '';
        $where['A.gg_id']=$id;
        $res= D('Zhaobiao')->getInfoList($table_type,$where,1,1);
        return $res[0];
    }


}

