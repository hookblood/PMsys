<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>项目管理系统-商务经理列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="/Public/index/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
    <link href="/Public/index/css/NewGlobal.css" rel="stylesheet" />
    <link href="/Public/index/css/index.css" rel="stylesheet" />
    <link href="/Public/index/css/dropload.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/Public/index/layer/skin/layer.css" />

    <script type="text/javascript" src="/Public/index/js/zepto.js"></script>
    <script language="javascript" type="text/javascript" src="/Public/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/index/js/dropload.min.js"></script>
    <script type="text/javascript" src="/Public/index/layer/layer.js"></script>
    <script type="text/javascript" src="/Public/index/js/jquery.infinitescroll.js"></script>

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
    <a href="index.php?c=Showphone&a=index" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString"><?php if($name): echo ($name); ?>-<?php endif; ?>商务经理列表</div>
        <a href="index.php?c=Showphone&a=index" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
</div>

<div class="container width80 pt20 ">
            <div class="control-group width100 clr">
                <?php if($list): ?><ul class="unstyled hotellist1 news_list" >

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><li class="li" style="padding-left: 5px">
                        <!--<?php echo ($info[uid]); ?>-->
                        <?php if(($count[$info['uid']]['project_sum']) AND ($_SESSION["state"] == 1 OR $_SESSION["state"] == 5)): ?><div class="radius50 color3 radiusStyle fl text_center transformXY">
                        <?php echo ($count[$info['uid']]['project_sum']); ?></div><?php endif; ?>
                        <?php echo ($info["uname"]); ?>
                        <a href='index.php?c=Bussiness&a=project_list&uid=<?php echo ($info[uid]); ?>&areaid=<?php echo ($areaid); ?>' title='' class='glyphicon glyphicon-chevron-right fr color1 transform50'>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>
                    <?php else: ?>
                    <li style="width:100%;padding: 10px 0px;background-color:#ffffff;list-style: none;text-align: center;color: #808080"><?php echo ($name); ?>暂时没有数据</li><?php endif; ?>
    </div><br>
    <div class="page" style="position:fixed;bottom:0px;"> <?php echo ($pages); ?></div>
</div>

<script type="text/javascript">
    $('.li').click(function(){
//        layer.load(2);
        var url = $(this).find('a').attr('href');
        window.location.href=url;
    });
    $(document).ready(function(){
        var currPage=parseInt("<?php echo $p;?>");
        var baseUrl=$(".page a.next").attr("href");
        if(baseUrl)
            baseUrl=baseUrl.replace("&p="+(currPage+1),"&");
        else
            baseUrl="";
        currPage=currPage?currPage:1;
        $(".news_list").infinitescroll({
            navSelector: ".page",    //页面分页元素--本页的导航，意思就是一个可以触发ajax函数的模块
            nextSelector: ".page a.next", //下页对象必须是一个有href的a
            itemSelector: ".news_list li" , //选择的是要加载的那一个块
            animate: false,       //是否加载完成就滚动到新内容处
            hideNav:false,//默认是插件调用成功后会自动隐藏翻页的标签
            state:{currPage:currPage},//告诉当前是第几页 默认是第一页
            path:[baseUrl+"p=", ""],
            loading: {
                msgText : '正在为您努力加载，请稍后...',
                img: "",
                finishedMsg:"",
                finished:function(){
                    $(".page a.num").eq(currPage).addClass("current").siblings(".current").removeClass("current");
                    currPage++;
                }
            }
        });
    });
</script>

</body>
</html>