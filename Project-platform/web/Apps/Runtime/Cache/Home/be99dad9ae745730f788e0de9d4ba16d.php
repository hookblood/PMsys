<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>报账详情</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="../../../../Public/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="../../../../Public/css/NewGlobal.css" rel="stylesheet" />
    <link href="../../../../Public/css/index.css" rel="stylesheet" />
    <link href="../../../../Public/css/dropload.css" rel="stylesheet" />
    <link href="../../../../Public/css/reimburse_detail.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../../Public/layer/skin/layer.css" />

    <script type="text/javascript" src="../../../../Public/js/zepto.js"></script>
    <script language="javascript" type="text/javascript" src="../../../../Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../../Public/js/dropload.min.js"></script>
    <script type="text/javascript" src="../../../../Public/layer/layer.js"></script>
    <script type="text/javascript" src="../../../../Public/js/jquery.infinitescroll.js"></script>

</head>
<style>
    .transform50{
        -webkit-transform:translateY(50%);
        -moz-transform:translateY(50%);
        -o-transform:translateY(50%);
        -ms-transform:translateY(50%);
        transform: translateY(50%);
    }
    .bordern{
        border: 1px solid #ccc;
    }
</style>
<body>
<div class="header">
    <a href="" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString">报账详情</div>
        <a href="" class="back" onclick="history.go(-1)">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
</div>
<form>
<div class="container">
    <div class="row clearfix" style="padding-right: 15px;padding-left: 15px">
        <div class="row clearfix row_head">
        <div class="col-md-12 col-xs-12 column">
            <span class="">业务项目：<span class="pro">不动产</span></span>
            <select class="form-c bordern" style="display: none">
                <option>不动产</option>
                <option>不动产</option>
                </select>
            <span class="">所属项目：<span class="pro">不动产</span></span>
            <select class="form-c bordern" style="display: none">
                <option>不动产</option>
                <option>不动产</option>
            </select>
        </div>
            </div>
        <div class="row clearfix row_head">
            <div class="col-md-12 col-xs-12 column">
                <span class="time">2016-02-22</span>
                <span id="add_time" style="display: none">选择时间：<input class="form-c" type="date"></span>
                </div>
            </div>
        <div class="row clearfix row_tit">
            <div class="col-md-4 col-xs-4 column">
                报销项目
            </div>
            <div class="col-md-4 col-xs-4 column">
                摘要
            </div>
            <div class="col-md-4 col-xs-4 column">
                金额
            </div>
        </div>
        <div class="row clearfix detail_row">
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_pro" type="text" value="不动产" disabled>
                <select class="form-c width100 bordern" style="display: none">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input" type="text" value="" disabled>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input money" type="number" value="200" disabled>
            </div>
        </div>
        <div class="row clearfix detail_row">
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_pro" type="text" value="不动产" disabled>
                <select class="form-c width100 bordern" style="display: none">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input" type="text" value="" disabled>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input money" type="number" value="200" disabled>
            </div>
        </div>
        <div class="row clearfix detail_row">
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_pro" type="text" value="不动产" disabled>
                <select class="form-c width100 bordern" style="display: none">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input" type="text" value="" disabled>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 list_input money" type="number" value="200" disabled>
            </div>
        </div>
        <div class="money_div">合计：<span id="total">0</span><span>元</span></div>
        <div class="money_div">原借款：<span>0</span><span>元</span></div>
        <div class="money_div">应退(补)款：<span>0</span><span>元</span></div>
</div>
    </div>
<input type="button" class="form-control" id="mod" value="修改">
<input type="button" class="form-control bg1 bgred del" value="删除">
<input type="button" class="form-control btn-success pass" style="display: none" value="通过">
<input type="button" class="form-control bg1 bgred notpass" style="display: none" value="不通过">
    </form>
<script type="text/javascript">
    $(document).ready(function(){
        var total_money=0;
        $(".detail_row .money").each(function(){
            total_money+=Number($(this).val());
        })
        $("#total").html(total_money);
    })
$("#mod").click(function(){
    if($(this).val()=="修改") {
        $(".row_head .pro").hide();
        $("#add_time").show();
        $(".row_head .time").hide();
        $(".detail_row .list_pro").hide();
        $(".detail_row .list_input").css("border", "1px solid #ccc");
        $(".detail_row .list_input").removeAttr("disabled");
        $(".money_div input").css("border", "1px solid #ccc");
        $(".money_div input").removeAttr("disabled");
        $("select").show();
        $(this).val("完成");
    }else{
        if($("#add_time").val()==null||$("#add_time").val()==""){
            layer.msg("请选择时间",{icon:2});
            return;
        }
        $(".row_head .pro").show();
        $(".row_head .time").show();
        $("#add_time").hide();
        $(".detail_row .list_pro").show();
        $(".detail_row .list_input").css("border", "none");
        $(".detail_row .list_input").attr("disabled","disabled");
        $(".money_div input").css("border", "none");
        $(".money_div input").attr("disabled","disabled");
        $("select").hide();
        $(this).val("修改");
    }
})
    $(".del").click(function(){
        layer.confirm("是否确定删除",{
            btn:["删除","取消"]
        },function(){

        })
    })
    $(".money").bind("blur",function(){
        var total_money=0;
        $(".detail_row .money").each(function(){
            total_money+=Number($(this).val());
        })
        $("#total").html(total_money);
    })
</script>

</body>
</html>