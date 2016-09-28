<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>报账列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="../../../../Public/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="../../../../Public/css/NewGlobal.css" rel="stylesheet" />
    <link href="../../../../Public/css/index.css" rel="stylesheet" />
    <link href="../../../../Public/css/dropload.css" rel="stylesheet" />
    <link href="../../../../Public/css/reimburse_list.css" rel="stylesheet" />
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
    <div class="title" id="titleString">报账列表</div>
        <a href="" class="back" onclick="history.go(-1)">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
</div>
<input id="add_account" type="button" class="btn btn-success form-control" onclick="finance_add()" value="新增报账">
<div class="container w90 pt20">
            <div class="control-group width100 clr">
                <ul class="unstyled hotellist1 news_list" >
                    <li class="li" style="">
                        <div class="row clearfix">
                            <div class="col-md-1 col-xs-1 column num">
①
                                </div>
                            <div class="col-md-10 col-xs-10 column finance_con">
                               <div>
                                   <span>报账类别：</span>
                                   <span class="span2">出差</span>
                               </div>
                                <div>
                                    <span>报账金额：</span>
                                    <span class="span2">1000元</span>
                                </div>
                                <div>
                                    <span>报账时间：</span>
                                    <span class="span2">2016-05-11</span>
                                </div>
                                <div>
                                    <span>所属项目：</span>
                                    <span class="span2">富顺不动产</span>
                                </div>
                                <div>
                                    <span>状态：</span>
                                    <span class="span2">审批中</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-xs-1 column people">
张三
                            </div>
                            </div>
                    </li>
                    <li class="li" style="">
                        <div class="row clearfix">
                            <div class="col-md-1 col-xs-1 column num">
                                ②
                            </div>
                            <div class="col-md-10 col-xs-10 column finance_con">
                                <div>
                                    <span>报账类别：</span>
                                    <span class="span2">出差</span>
                                </div>
                                <div>
                                    <span>报账金额：</span>
                                    <span class="span2">1000元</span>
                                </div>
                                <div>
                                    <span>报账时间：</span>
                                    <span class="span2">2016-05-11</span>
                                </div>
                                <div>
                                    <span>所属项目：</span>
                                    <span class="span2">富顺不动产</span>
                                </div>
                                <div>
                                    <span>状态：</span>
                                    <span class="span2">审批中</span>
                                </div>
                            </div>
                            <div class="col-md-1 col-xs-1 column people">
                                张三
                            </div>
                        </div>
                    </li>

        </ul>
    </div><br>
</div>

<script type="text/javascript">
$("li").click(function(){
    window.location.href="index.php?s=/Home/Reimburse/reimburse_detail"
})
    function finance_add() {
        window.location.href="index.php?s=/Home/Reimburse/reimburse_add"
    }
</script>

</body>
</html>