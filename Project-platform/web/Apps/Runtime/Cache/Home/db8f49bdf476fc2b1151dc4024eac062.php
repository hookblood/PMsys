<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>财务管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="../../../../Public/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="../../../../Public/css/NewGlobal.css" rel="stylesheet" />
    <link href="../../../../Public/css/index.css" rel="stylesheet" />
    <link href="../../../../Public/css/dropload.css" rel="stylesheet" />
    <link href="../../../../Public/css/reimburse_type.css" rel="stylesheet" />
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
    <div class="title" id="titleString">财务管理</div>
        <a href="" class="back" onclick="">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
</div>

<div class="container">
            <div class="control-group width100 clr">
                <ul class="unstyled hotellist1 news_list" >
                    <li class="li" style="padding-left: 5px" onclick="toListFinance()">
                        报账
                        <a href='' title='' class='glyphicon glyphicon-chevron-right fr color1 transform50'>
                        </a>
                    </li>

        </ul>
    </div><br>
</div>

<script type="text/javascript">
    function toListFinance(){
        window.location.href="index.php?s=/Home/Reimburse/reimburse_list"
    }
</script>

</body>
</html>