<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<link href="/Public/index/css/bootstrap-2.3.2.min.css" rel="stylesheet" />
    <link href="/Public/index/css/bootstrap-3.3.5.min.css" rel="stylesheet" />
<link href="/Public/index/css/NewGlobal.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/Public/index/layer/skin/layer.css" />
<link href="/Public/index/css/index.css" rel="stylesheet" />
    <link href="/Public/index/css/dropload.css" rel="stylesheet" />

    <!--<script type="text/javascript" src="/Public/index/js/zepto.js"></script>-->
	<script language="javascript" type="text/javascript" src="/Public/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/index/js/dropload.min.js"></script>
	<!--<script type="text/javascript" src="/Public/index/layer/layer.js"></script>-->
	
</head>
<style>
    #sele{
        width: auto;
        padding: 0 2%;
        margin: 0;
        font-size: 0.8em;
    }
    #sele option{
        text-align: center;
    }
    .paddlr{
        padding: 0 20px 0 30px;
    }
    .mar10{
        margin-top: 10px;
    }
    .paddlr10{
        padding-left: 10px;
        padding-right: 10px;
    }
    .paddlr12{
        padding-left: 12px;
        padding-right: 12px;
    }
    .height50{
        height: 70px;
    }
    .lineH{
        line-height: 48px;
    }
    .padd55{
        padding:15px 0px 15px 0px;
    }
</style>
<body>
 <div class="header">
     <a class="home" id="" href="index.php?c=Showphone&a=index">
         <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
        </a>
     <div class="title" id="titleString">首页</div>
     <?php if(is_array($privileges)): $i = 0; $__LIST__ = $privileges;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><div class="text_center bg2 color3">
             <div class="col-xs-12 borders padd55 bg11 height50" onclick="window.location='<?php echo ($info["mod_url"]); ?>'">
                 <!--<?php if(($count2) and ($_SESSION["uid"] == 1)): ?>-->
                 <!--<div class="radius50 posi radiusStyle transformXY1 right0"><?php echo ($count2); ?></div>-->
                 <!--<?php endif; ?>-->
                 <div class="lineH"><?php echo ($info["mod_name"]); ?></div>
             </div>
         </div><?php endforeach; endif; else: echo "" ;endif; ?>
     <form method="post" action="<?php echo U('Index/login_out');?>">
         <button class="btn btn-danger width100" type="submit" style="height: 3.5em;margin-top: 20px" id="login_out">退出登录</button>
     </form>

     <input type="hidden" value="<?php echo ($_COOKIE["username"]); ?>" id="my"/>
<script type="text/javascript">
    $(document).ready(function(){
        var url="<?php echo U('Index/jurisdiction');?>&username="+$("#my").val();
        window.location=url;
    });
        $("#div1").click(function(){
//        alert(<?php echo ($_SESSION['state']); ?>);exit;
        if(<?php echo ($_SESSION['state']); ?>==1 || <?php echo ($_SESSION['state']); ?>==2 || <?php echo ($_SESSION['state']); ?>==5){
            var url='index.php?c=Bussiness&a=bussiness_list';
            location.href=url;
        }else{
            alert('你没有权限操作！');
        }
    })
    $("#div2").click(function(){
//        alert(<?php echo ($_SESSION['state']); ?>);exit;
        if(<?php echo ($_SESSION['state']); ?>==1 || <?php echo ($_SESSION['state']); ?>==3 || <?php echo ($_SESSION['state']); ?>==5){
            var url='index.php?c=Execution&a=implement';
            location.href=url;
        }else{
            alert('你没有权限操作！');
        }
    })
    $("#div3").click(function(){
//        alert(<?php echo ($_SESSION['state']); ?>);exit;
        if(<?php echo ($_SESSION['state']); ?>==1 || <?php echo ($_SESSION['state']); ?>==5){
            var url='index.php?c=Daily&a=implement_daily';
            location.href=url;
        }else{
            alert('你没有权限操作！');
        }
    });
//    $(document).ready(function(){
//        var counter = 0;
//        // 每页展示3个
//        var num = 1;
//        var pageStart = 0,pageEnd = 0;
//
//        //dropload
//        $('#content').dropload({
//            scrollArea : window,
//            domDown : {
//                domClass   : 'dropload-down',
//                domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
//                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
//                domNoData  : '<div class="dropload-noData">暂无数据</div>'
//            },
////            autoLoad : false,
//            loadDownFn : function(me){
//                $.ajax({
//                    type: 'post',
//                    url: 'index.php?c=Showphone&a=index',
//                    //dataType: 'json',
//                    success: function(data){
////                        alert("success");
//                        var result = '';
//                        counter++;
//                        pageEnd = num * counter;
//                        pageStart = pageEnd - num;
//
//                        for(var i = pageStart; i < pageEnd; i++){
//                            $(".hotellist").append("<li><?php echo ($info[dname]); ?><a href='index.php?c=Showphone&a=area_list_city&id=<?php echo ($info[did]); ?>' title='' class='btn btn-success iframe fr'>查看下级</a><a href='index.php?c=Showphone&a=org_list&id=<?php echo ($info[did]); ?>' title='' class='btn btn-success iframe fr'>查看本级</a></li>")
//                            if((i + 1) >= 6){
//                                // 锁定
//                                me.lock();
//                                // 无数据
//                                me.noData();
//                                break;
//                            }
//                        }
//                        // 为了测试，延迟1秒加载
//                        setTimeout(function(){
//                            $('.lists').append(result);
//                            // 每次数据加载完，必须重置
//                            me.resetload();
//                        },1000);
//                    },
//                    error: function(xhr, type){
//                        layer.msg("fail");
//                        me.noData();
//                       // alert('Ajax error!');
//                        // 即使加载出错，也得重置
//                        me.resetload();
//                    }
//                });
//            },
//            threshold : 50
//        });
//    })
    function fsearch(){
//	layer.load(2);
        //TODO:搜索按钮
        var url="index.php?c=Showphone&a=index&content="+$("#search_content").val();
        location.href=url;
    }
    $("#sele").change(function(){
//	layer.load(2);
//       alert($("#sele").val());
        var url="index.php?c=Showphone&a=index&content="+$("#sele").val();
        location.href=url;
    })
//    function fsearch(){
//        //TODO:搜索按钮
//    }
    $('li a').click(function(){
//	layer.load(2);
        //TODO:点击省列表事件
    });
//    $('#login_out').click(function () {
//        var url="<?php echo U('Index/login_out');?>";
//        location.href=url;
//    })
//    function login_out(){
//        $.ajax({
//            type:'POST',
//            url:'index.php?c=Showphone&a=login_out',
//            data:'id='+1,
//            success:function(data){
////                $('#div_th').html(data);
////                 location.replace(location.href);
//                 alert('111');
//            }
//        })
////        var url="index.php?c=Showphone&a=login_out";
////        location.href=url;
//    }
</script>

</body>
</html>