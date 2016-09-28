<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>新增报账</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="../../../../Public/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="../../../../Public/css/NewGlobal.css" rel="stylesheet" />
    <link href="../../../../Public/css/index.css" rel="stylesheet" />
    <link href="../../../../Public/css/dropload.css" rel="stylesheet" />
    <link href="../../../../Public/css/reimburse_add.css" rel="stylesheet" />
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

</style>
<body>
<div class="header">
    <a href="" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString">新增报账</div>
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
                <span>业务项目：<select class="form-c">
                    <option>富顺不动产</option>
                    <option>富顺不动产</option>
                </select></span>
                <span>所属项目：<select class="form-c">
                    <option>富顺不动产</option>
                    <option>富顺不动产</option>
                </select></span>
            </div>
        </div>
        <div class="row clearfix row_head">
            <div class="col-md-12 col-xs-12 column">
                选择时间： <input id="add_time" class="form-c" type="date" value="">
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
        <div id="add_content">
        <div class="row clearfix detail_row" id="list1">
            <div class="col-md-4 col-xs-4 column">
                <select class="form-c width100">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100" type="text" value="">
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 money" type="number" value="">
            </div>
        </div>
        <div class="row clearfix detail_row">
            <div class="col-md-4 col-xs-4 column">
                <select class="form-c width100">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100" type="text" value="">
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 money" type="number" value="">
            </div>
        </div>
        <div class="row clearfix detail_row">
            <div class="col-md-4 col-xs-4 column">
                <select class="form-c width100">
                    <option>不动产</option>
                    <option>不动产</option>
                </select>
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100" type="text" value="">
            </div>
            <div class="col-md-4 col-xs-4 column">
                <input class="form-c width100 money" type="number" value="">
            </div>
        </div>
            </div>
        <div class="money_div">合计：<span id="total_money">0</span><span>元</span></div>
        <div class="money_div">原借款：<span>0元</span></div>
        <div class="money_div">应退(补)款：<span>0元</span></div>
    </div>
</div>
    <div class="row clearfix detail_row" id="add">
        <div class="col-md-12 col-xs-12 column text_center" style="cursor: pointer;font-size: 12px;">
            +增加报销项目+
        </div>
    </div>
    <input id="save" type="button" class="form-control btn-success" value="保存">
</form>
<script type="text/javascript">
    $("#add").click(function(){
        $("#add_content").append('<div class="row clearfix detail_row">'
               +' <div class="col-md-4 col-xs-4 column">'
        +' <select class="form-c width100">'
                +'<option>不动产</option>'
                +'<option>不动产</option>'
                +'</select>'
        +'  </div>'
        +' <div class="col-md-4 col-xs-4 column">'
        +'  <input class="form-c width100" type="text" value="">'
        +'  </div>'
        +'  <div class="col-md-4 col-xs-4 column">'
        +'  <input class="form-c width100 money" type="number" value="">'
        +' </div>'
        +'  </div>')
        $(".money").bind("blur",function(){
            var total_money=0;
            $(".detail_row .money").each(function(){
                total_money+=Number($(this).val());
            })
            $("#total_money").html(total_money);
        })
    })

    $(".money").bind("blur",function(){
        var total_money=0;
        $(".detail_row .money").each(function(){
            total_money+=Number($(this).val());
        })
        $("#total_money").html(total_money);
    })

    //保存
    $("#save").click(function(){
        if($("#add_time").val()==null||$("#add_time").val()==""){
            layer.msg("时间不能为空",{icon:2});
            return;
        }
        $("#list1 input").each(function(){
            if($(this).val()==null||$(this).val()==""){
                layer.msg("请至少填写一条报销记录",{icon:2})
                return;
            };
        });
    })
</script>

</body>
</html>