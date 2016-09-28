<?php
/**
 * Created by PhpStorm.
 * User: fanfan
 * Date: 2016/9/27
 * Time: 9:54
 */
namespace Home\Controller;

use Think\Controller;

class ZhaobiaoController extends BaseController
{

    public function tendering()
    {
      $a=I('get.title');
      $b=I('get.caigou');
      $c=I('get.bianhao');
      $d=I('get.quhua');
      $e=I('get.leixing');
      $f=I('get.cgperson');
      $g= I('get.times');
        if($a){
            $where['gg_xmmc']=array('like',"%$a%");
            $search['gg_xmmc']=$a;
        }

        if($b){
            $where['gg_cgfs']=array('like',"%$b%");
            $search['gg_cgfs']=$b;
        }

        if($c){
            $where['gg_xmbh']=array('like',"%$c%");
            $search['gg_xmbh']=$c;
        }

        if($e){
            $where['gg_gglx']=array('like',"%$e%");
            $search['gg_gglx']=$e;
        }

        if($f){
            $where['gg_cgr']=array('like',"%$f%");
            $search['gg_cgr']=$f;
        }

        if($g){
            $where['ctime']=array(array('gt',strtotime($g)),array('lt',strtotime($g)+86400));
            $search['ctime']=$g;
        }
//        dump($where);die();
        for ($i = 1; $i <= 10; $i++) {
            $list[$i] = $this->Yar->refer($i,$where, 3);
        }

        $name = array(
            array('name' => '竞争性谈判采购公告', 'state' => 1),
            array('name' => '采购公告', 'state' => 2),
            array('name' => '询价采购公告', 'state' => 3),
            array('name' => '竞争性磋商采购公告', 'state' => 4),
            array('name' => '征求意见公告', 'state' => 5),
            array('name' => '更正公告', 'state' => 6),
            array('name' => '竞争性谈判结果公告', 'state' => 7),
            array('name' => '竞争性磋商结果公告', 'state' => 8),
            array('name' => '询价结果公告', 'state' => 9),
            array('name' => '结果公告', 'state' => 10),
        );
        $this->assign('a', $a);
        $this->assign('list', $list);
        $this->assign('search',$search);
        $this->assign('name', $name);
        $this->display();
    }

    //查看更多
    public function info_list()
    {
        $state = I('get.state');

        //标题
        if($title=I('get.gg_xmmc'))
        {
            $where['gg_xmmc']=array('like','%'.$title.'%');
        }
        //采购方式
        if($caigou=I('get.gg_cgfs')){
            $where['gg_cgfs']=array('like',"%$caigou%");
        }
        //时间
        if($time=I('get.ctime')){
            $where['ctime']=array('like',"%$time%");

        }
        //项目编号
        if($bianhao=I('get.gg_xmbh')){
            $where['gg_xmbh']=array('like',"%$bianhao%");
        }
        //行政区划
        if($quhua=I('get.gg_xzqh')){
            $where['gg_xzqh']=array('like',"%$quhua%");
        }
        //公告类型
        if($leixin=I('get.gg_gglx')){
            $where['gg_gglx']=array('like',"%$leixin%");
        }
        //采购人
        if($cg=I('get.gg_cgr')){
            $where['gg_cgr']=array('like',"%$cg%");
        }

        $p=I('get.p');
        $p=$p?$p:1;
        $page_size=20;
        $list = $this->Yar->see($state,$where,$p,$page_size);  //查询条件
        $count = $this->Yar->get_info_count($state,$where);// 查询满足要求的总记录数
        $Page = new \Think\Page($count, $page_size);// 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();// 分页显示输出
        $this->assign('page', $show);// 赋值分页输出

        $this->assign('list',$list);
        $this->display();
    }
    //查看详情

    public function er(){
        $id=I('get.id');
        if(!$id)
            $this->error('参数id丢失！');
        $state=I('get.state');
        if(!$state)
            $this->error('参数state丢失！');
        $info=$this->Yar->get_info_detail($state,$id);
        $this->assign('local',$info);
        $this->display();
    }

}
