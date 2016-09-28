<?php
/**
 * Created by PhpStorm.
 * User: fanfan
 * Date: 2016/9/27
 * Time: 10:49
 */
namespace Home\Model;


class ZhaobiaoModel
{
    protected $tables;

    public function __construct()
    {
        $table_res = M('gg_dic')->select();
        foreach ($table_res as $v) {
            $this->tables[$v['id']] = $v['gg_table'];
        }
        unset($table_res);
    }

    /**
     * @param string $table_type  表类型ID
     * @param $where              查询条件
     * @param $limit              限制条数
     * @return mixed
     */
    public function getBaseInfo($table_type = '', $where, $limit)
    {
        if($where=='')
            $where=array();
        if ($table_type)
            $where['table_type'] = $table_type;
         return M('gg_baseinfo')->where($where)->limit($limit)->select();

    }
    //数据统计
    public function getInfoCount($table_type = '', $where)
    {
        if($where=='')
            $where=array();
        if ($table_type)
            $where['table_type'] = $table_type;
        return M('gg_baseinfo')->alias('A')
            ->join($this->tables[$table_type] . ' AS B ON A.gg_id=B.gg_id')
            ->where($where)->count();
    }
    //详情
    public function getInfoList($table_type = '', $where, $offest,$limit)
    {
        if($where=='')
        $where=array();
        if ($table_type)
            $where['table_type'] = $table_type;
        return M('gg_baseinfo')->alias('A')
            ->join($this->tables[$table_type] . ' AS B ON A.gg_id=B.gg_id')
            ->where($where)->page($offest.','.$limit)->select();
    }

}