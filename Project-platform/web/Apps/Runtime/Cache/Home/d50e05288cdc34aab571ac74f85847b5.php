<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>详情</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="/Public/index/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="/Public/index/css/NewGlobal.css" rel="stylesheet" />
    <link href="/Public/index/css/index.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/Public/index/layer/skin/layer.css" />
    <link href="/Public/index/css/detail.css" rel="stylesheet" />

    <script type="text/javascript" src="/Public/index/js/zepto.js"></script>
    <script type="text/javascript" src="/Public/index/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/index/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/index/layer/layer.js"></script>
</head>
<style>
    #sele{
        padding: 0 2%;
        margin: 0;
        font-size: 0.8em;
    }
    #sele option{
        text-align: center;
    }
    .color1{
        color: #a1a1a1;
    }
    .row{
        border-bottom: 1px solid #eee;
        padding-bottom: 5px;
    }
</style>
<body>
<div class="header">
    <a href="index.php?c=Showphone&a=index" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString">详情</div>
    <a href="index.php?c=Zhaobiao&a=tender&title=<?php echo ($title); ?>&startime=<?php echo ($stime); ?>&endtime=<?php echo ($etime); ?>&diqu=<?php echo ($diqu); ?>" class="back">
        <span class="header-icon header-icon-return"></span>
        <span class="header-name">返回</span>
    </a>
</div>
<div class="container font1" style="background-color: #fff;padding-left: 0px;padding-right: 0px">
    <div style="padding-left: 15px;padding-right: 15px;margin-top: 10px">
        <span style="font-size: 22px"><?php echo ($local["gg_xmmc"]); ?></span>
    </div>
    <hr>

    <div  style="color: #635b5b;padding-left: 15px;padding-right: 15px;" class="mart10">
    <div class="row clearfix">
        <div class="col-md-2 col-xs-4 column">采购项目编号</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_xmbh"]); ?></div>
    </div>
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">采购方式</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_cgfs"]); ?></div>

    </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购人</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_cgr"]); ?></div>

        </div>
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">公告类型</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_gglx"]); ?></div>

    </div>

    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">公告发布时间</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[gg_ggfbsj]);?></div>

    </div>

    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">采购代理机构名称</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_cgdljgmc"]); ?></div>

    </div>

        <?php if($local[cg_cgdljgmc]): ?><div class="row clearfix mart10">
        <div class="col-md-2 col-xs-4 column">项目包个数</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_xmbgs"]); ?></div>
    </div><?php endif; ?>

        <?php if($local[cg_xmbgs]): ?><div class="row clearfix mart10">
        <div class="col-md-2 col-xs-4 column">采购人地址和联系方式</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_cgrdz"]); ?></div>

    </div><?php endif; ?>
        <?php if($local[cg_gbms]): ?><div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购代理机构地址和联系方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_dljgdz"]); ?></div>
        </div><?php endif; ?>
        <?php if($local[cg_xgcl]): ?><div class="row clearfix mart10">
        <div class="col-md-2 col-xs-4 column">采购项目联系人姓名和电话</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["gg_xmlxr"]); ?></div>

    </div><?php endif; ?>
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">创建时间</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[ctime]);?></div>

    </div>
</div>
        <!--下面开始分各个类型-->
    <!--竞争性谈判采购公告-->
    <div id="div1"  style="color: #635b5b;padding-left: 15px;padding-right: 15px;" class="mart10">
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">备注</div>
        <div class="col-md-10  col-xs-8 column color1"><?php echo ($local["cg_bz1"]); ?></div>

    </div>
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">谈判文件售价</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_wjsj"]); ?></div>

    </div>
    <div class="row clearfix mart10">

        <div class="col-md-2 col-xs-4 column">谈判文件发售及供应商报名地点</div>
        <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmdd"]); ?></div>

    </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商报名方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmfs"]); ?></div>

        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商递交响应文件起止时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_xykssj]);?>至<?php echo date('Y-m-d',$local[cg_xyjssj]);?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商递交响应文件地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_wjdd"]); ?></div>
        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商接受资格审查及参加谈判时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_tpsj]);?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商接收资格审查及参加谈判地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_tpdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz2"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商交纳谈判保证金的金额和缴纳方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>

        </div>


        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">采购预公告链接</div>
            <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_wylj"]); ?>"><?php echo ($local["cg_wylj"]); ?></a></div>
        </div>
</div>

<!--采购公告-->
    <div id="div2" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">

        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">标书发售方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_fsfs"]); ?></div>

        </div>
        <div class="row clearfix mart10">
            <?php if($local[cg_qzsj]): ?><div class="col-md-2 col-xs-4 column">标书发售起止时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_fsks]); echo date('Y-m-d',$local[cg_fsjs]);?></div><?php endif; ?>
        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">标书售价</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_wjsj"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">标书发售地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_tbjz"]); ?></div>

        </div>
        <div class="row clearfix mart10">
            <?php if($local[cg_tbjz]): ?><div class="col-md-2 col-xs-4 column">投标截止时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_tbjz]);?></div><?php endif; ?>
        </div>
        <div class="row clearfix mart10">
            <?php if($local[cg_kbsj]): ?><div class="col-md-2 col-xs-4 column">开标时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_kbsj]);?></div><?php endif; ?>
        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">投标地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_tbdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">开标地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_kbdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">现场考察或标前答疑会时间</div>

            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_dysj]);?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">现场考察或标前答疑会地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_dydd"]); ?></div>

        </div>

        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购预公告链接</div>
            <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_ygglj"]); ?>"><?php echo ($local["cg_ygglj"]); ?></a></div>
        </div>
    </div>


    <!--询价采购公告-->
    <div id="div3" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商参加谈判应当具备的资格条件和应当提供的相关证明材料</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_zmcl"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">询价文件发售方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_fsfs"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">询价文件发售开始结束时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_fsks]); echo date('Y-m-d',$local[cg_fsjs]);?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz1"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">询价文件发售及供应商报名地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购文件售价</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_wjsj"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购文件发售地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_fsdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商报名方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmfs"]); ?></div>

        </div>


        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商接受资格审查及参加询价时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cjxjsj"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商接收资格审查及参加询价地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cjxjdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz2"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商交纳谈判保证金的金额和缴纳方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>

        </div>




        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">采购预公告链接</div>
            <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_ygglj"]); ?>"><?php echo ($local["cg_ygglj"]); ?></a></div>
        </div>
    </div>


    <!--竞争性磋商采购公告-->
    <div id="div4" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">

        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">行政区划</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>

        </div>


        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 col-xs-4 column">采购代理机构名称</div>
            <div class="col-md-10 col-xs-8 col-xs-4 column color1"><?php echo ($local["cg_cgdljgmc"]); ?></div>

        </div>

        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">各包描述</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gbms"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">供应商参加谈判应当具备的资格条件和应当提供的相关证明材料</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_zmcl"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">磋商文件发售方式</div>
            <div class="col-md-10 col-xs-8 column color1">cg_fsfs</div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">磋商文件发售及供应商报名时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmsj"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz1"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">磋商文件售价</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_wjsj"]); ?></div>

        </div>
        <div class="row clearfix mart10">

            <div class="col-md-2 col-xs-4 column">磋商文件发售及供应商报名地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmdd"]); ?></div>

        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商报名方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bmfs"]); ?></div>
        </div>


        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商接受资格审查及参加磋商时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cjxjsj"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商接收资格审查及参加磋商地点</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cjxjdd"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz2"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">供应商交纳谈判保证金的金额和缴纳方式</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_ygglj"]); ?></div>
        </div>


        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">采购预公告链接</div>
            <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_wylj"]); ?>"><?php echo ($local["cg_wylj"]); ?></a></div>
        </div>
    </div>

<!--征求意见公告-->
    <div id="div5" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">行政区划</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
        </div>

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">公告发布时间到公告截止时间</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_ggqzsj"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">采购代理机构名称</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cgdljgmc"]); ?></div>
        </div>

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">各包采购内容</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gbcgnr"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">各包供应商资格条件</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_zgtj"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">各包技术参数指标</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gbjscszb"]); ?></div>
        </div>

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">其他内容</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_qtnr"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
        </div>
    </div>

        <!--更正公告-->
        <div id="div6" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">

            <div class="row clearfix mart10">
                <div class="col-md-2 col-xs-4 column">行政区划</div>
                <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
            </div>


            <div class="row clearfix mart10">
                <div class="col-md-2 col-xs-4 column">采购代理机构名称</div>
                <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cgdljgmc"]); ?></div>
            </div>

            <div class="row clearfix mart10">
                <div class="col-md-2 col-xs-4 column">原公告类型</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_ygglx"]); ?></div>
                </div>
            <?php if($local[cg_yggfbsj]): ?><div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">原公告发布时间</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo date('Y-m-d',$local[cg_yggfbsj]);?></div>
                </div><?php endif; ?>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">更正文件更正事项和内容</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gznr"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">原公告链接</div>
                    <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_ylj"]); ?>"><?php echo ($local["cg_ylj"]); ?></a></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">备注</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
                </div>
            </div>

    <!--竞争性谈判结果公告-->
    <div id="div7" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">行政区划</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">公告类型</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gglx"]); ?></div>
        </div>


        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">更正公告</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gzgg"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">采购代理机构名称</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cgdljgmc"]); ?></div>
        </div>

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">采购结果总金额</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">定标日期</div>
            <div class="col-md-10 col-xs-8 column color1">cg_dbrj</div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">各包中标/成交供应商名称、地址及报价</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gysbj"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">各包合同履行日期</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_lxrq"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">评审委员会成员名单</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cymd"]); ?></div>
        </div>

        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">候选人公告连接</div>
            <div class="col-md-10 col-xs-8 column color1"><a><?php echo ($local["cg_hyrlj"]); ?></a></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">评审情况</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_psqk"]); ?></div>
        </div>
        <div class="row clearfix mart10">
            <div class="col-md-2 col-xs-4 column">备注</div>
            <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
        </div>
    </div>

            <!--竞争性磋商结果公告-->
            <div id="div8" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">行政区划</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">采购结果总金额</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">定标日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_dbrj"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包中标/成交供应商名称、地址及报价</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gysbj"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包合同履行日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_lxrq"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审委员会成员名单</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cymd"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">候选人公告连接</div>
                    <div class="col-md-10 col-xs-8 column color1"><a><?php echo ($local["cg_hyrlj"]); ?></a></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审情况</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_psqk"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">网页链接</div>
                    <div class="col-md-10 col-xs-8 column color1"><a href="<?php echo ($local["cg_wylj"]); ?>"><?php echo ($local["cg_wylj"]); ?></a></div>
                    </div>
                    <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">备注</div>
                    <div class="col-md-10 col-xs-8 column color1"> <?php echo ($local["cg_bz"]); ?></div>
                </div>
            </div>

            <!--询价结果公告-->
            <div id="div9" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">行政区划</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">采购结果总金额</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">定标日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_dbrj"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包中标/成交供应商名称、地址及报价</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_gysbj"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包合同履行日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_lxrq"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审委员会成员名单</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cymd"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">候选人公告连接</div>
                    <div class="col-md-10 col-xs-8 column color1"><a><?php echo ($local["cg_hyrlj"]); ?></a></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审情况</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_psqk"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">备注</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
                </div>
            </div>

            <!--结果公告-->
            <div id="div10" style="color: #635b5b;padding-left: 15px;padding-right: 15px;display: none" class="mart10">


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">行政区划</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_xzqh"]); ?></div>
                </div>

                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">采购结果总金额</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_price"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">定标日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_dbrj"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包中标/成交供应商名称、地址及报价</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">各包合同履行日期</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_lxrq"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审委员会成员名单</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_cymd"]); ?></div>
                </div>


                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">候选人公告连接</div>
                    <div class="col-md-10 col-xs-8 column color1"><a><?php echo ($local["cg_hyrlj"]); ?></a></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">评审情况</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_psqk"]); ?></div>
                </div>
                <div class="row clearfix mart10">
                    <div class="col-md-2 col-xs-4 column">备注</div>
                    <div class="col-md-10 col-xs-8 column color1"><?php echo ($local["cg_bz"]); ?></div>
                </div>
            </div>

    <div style="text-align: left;padding-left: 15px;padding-right: 15px">
       <?php if($local[fileurl]): ?><a class="fr" href='index.php?c=Zhaobiao&a=download&id=<?php echo ($local["id"]); ?>'>下载附件</a><?php endif; ?>
    </div><br>

    <input type="hidden" value="<?php echo ($local["table_type"]); ?>" id="zhi"/>
</div>

</body>
<script>

    $(document).ready(function(){
        if($('#zhi').val()==1){
         $("#div1").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==2){
            $("#div2").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==3){
            $("#div3").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==4){
            $("#div4").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==5){
            $("#div5").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==6){
            $("#div6").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==7){
            $("#div7").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==8){
            $("#div8").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==9){
            $("#div9").css("display","block");
        }else if(<?php echo ($local[table_type]); ?>==10){
            $("#div10").css("display","block");
        }
    })
</script>
</html>