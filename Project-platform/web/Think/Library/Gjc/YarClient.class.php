<?php
namespace Gjc;
/**
 * 模块名称：服务类
 * 开发人员：shijunli
 * 开发日期：2016-6-1 10:00:21
 */
class YarClient {
    /**
     * 初始化服务接口
     * @param string $m 模块名
     * @param string $c 控制器
     * @return Ambigous <NULL, \Yar_client>
     */
    public static function &get_instance($m='',$c='') {
        // 获取配置信息
        $ServiceUrl = C('ServiceUrl');
        if(!empty($m)||!empty($c)){
            $ServiceUrl = $ServiceUrl . '/' . $m . '/'. $c;
        }
        static $obj = null;
        if ($obj == null) {
            $obj = new \Yar_client($ServiceUrl);
        }
        return $obj;
    }
    /**
     * 初始化商务团队服务接口
     * @param string $m 模块名
     * @param string $c 控制器
     * @return Ambigous <NULL, \Yar_client>
     */
    public static function &get_instance_bussiness($m='',$c='') {
        // 获取配置信息
        $ServiceUrl = C('BussinessServiceUrl');
        if(!empty($m)||!empty($c)){
            $ServiceUrl = $ServiceUrl . '/' . $m . '/'. $c;
        }
        static $obj = null;
        if ($obj == null) {
            $obj = new \Yar_client($ServiceUrl);
        }
        return $obj;
    }
    public static function &get_execution($m='',$c='') {
        // 获取配置信息
        $ServiceUrl = C('ExecutionServiceUrl');
        if(!empty($m)||!empty($c)){
            $ServiceUrl = $ServiceUrl . '/' . $m . '/'. $c;
        }
        static $obj = null;
        if ($obj == null) {
            $obj = new \Yar_client($ServiceUrl);
        }
        return $obj;
    }
    function __construct() {
        $this->init ();
    }
    function init() {
       
    }
}