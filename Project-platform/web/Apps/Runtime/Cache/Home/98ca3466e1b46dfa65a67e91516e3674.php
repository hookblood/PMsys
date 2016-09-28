<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招投标信息</title>
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
    <script type="text/javascript" src="/Public/index/js/jquery-1.6.4.js"></script>
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
    .transform501{
        right: 0;top:50%;
        -webkit-transform:translateY(-50%);
        -moz-transform:translateY(-50%);
        -o-transform:translateY(-50%);
        -ms-transform:translateY(-50%);
        transform: translateY(-50%);
    }
    .ellip{
        max-width: 50%;
        white-space:nowrap;
        overflow:hidden;
        text-overflow:ellipsis;
    }
    .juzhong{
        position: absolute;
        top: 40%;
        left:0;
        right:0;
        bottom: 0;
        margin:auto;
    }
    .formC{
        height: 34px;
        padding: 6px 6px;
        font-size: 14px;
        line-height: 1.42857143;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .mar-l10{
        margin-left: 10px;;
    }
</style>
<body>
 <div class="header">
 <a href="index.php?c=Showphone&a=index" class="home">
            <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
</a>
<div class="title" id="titleString">信息列表</div>
<a href="index.php?c=Zhaobiao&a=tender&title=<?php echo ($title); ?>&startime=<?php echo ($stime); ?>&endtime=<?php echo ($etime); ?>&diqu=<?php echo ($diqu); ?>" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
 </div>

<div class="container width100 pt20 ">
    <!--<div>-->
        <!--<?php if(($state == 2) OR ($state == 3)): ?>-->
            <!--<div class="width100">-->
                <!--<span class="width20">开始日期</span>-->
      <!--<input class="formC w80" type="date" id="txtBeginDate" value="<?php echo ($stime); ?>" name="startime" style="color: #808080"/>-->
           <!--</div>-->
            <!--<div class="mart10 width100">-->
                <!--<span class="width20">结束日期</span>-->
      <!--<input class="formC w80" type="date" id="txtEndDate" value="<?php echo ($etime); ?>" name="endtime" style="color: #808080"/>-->
      <!--</div>-->
            <!--<div class="mart10 width100">-->
                <!--<input class="" type="hidden" id="st" name="state" value="<?php echo ($state); ?>"/>-->
                <!--<span class="width20">类<span style="margin-left: 2em">型</span></span>-->
                <!--<select class="formC width65" name="sel" id="sele">-->
                <!--<option value="">请选择</option>-->
                <!--<option value="1">设备</option>-->
                <!--<option value="2">平台</option>-->
                <!--<option value="3">业务</option>-->
                <!--</select>-->
            <!--<input class="formC btn-success" type="submit" id="sel" value="搜索"/>-->
            <!--</div>-->
                <!--&lt;!&ndash;</form>&ndash;&gt;-->
        <!--<?php endif; ?>-->
    <!--</div>-->

  <div class="control-group width100 clr borders">

      <br/>
      <?php if($list): ?><ul class="unstyled hotellist1 news_list" >
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xinwen): $mod = ($i % 2 );++$i;?><li style="position: relative">
              <?php if(($count[$xinwen['cg_id']]['project_sum']) and ($_SESSION["state"] == 1 OR $_SESSION["state"] == 5)): ?><div class="radius50  color3 radiusStyle fl text_center transformXY" >1</div><?php endif; ?>
              <div style="margin-left: 20px;">
                  <div><?php echo ($xinwen["gg_xmmc"]); echo ($xinwen["did"]); ?></div>
                  <div class="font12"><?php echo date('Y-m-d H:i:s',$xinwen['ctime']);?></div>
              </div>
              <a href="<?php echo U('Home/Zhaobiao/er',array('id'=>$xinwen['gg_id'],'state'=>$xinwen['table_type']));?>" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
          <?php else: ?>
          没有数据<?php endif; ?>
  </div><br>

    <div class="page" style="position:fixed;bottom:0px;"> <?php echo ($page); ?></div>
</div>

<script type="text/javascript">
    $("#sel").click(function(){
//        alert(111);
        var url="index.php?c=Zhaobiao&a=see_more&title=<?php echo ($title); ?>&diqu=<?php echo ($diqu); ?>&startime=<?php echo ($stime); ?>&endtime=<?php echo ($etime); ?>&startime="+$("#txtBeginDate").val()+"&endtime="+$("#txtEndDate").val()+"&sel="+$("#sele").val()+"&state="+$("#st").val();

        location.href=url;
    });
    $('li').click(function(){
//        layer.load(2);
        var href=$(this).find("a").attr("href");
        window.location.href=href;
    });
    $(document).ready(function(){
        var currPage=parseInt("<?php echo $p;?>");
        var baseUrl=$(".page a.next").attr("href");
        baseUrl=baseUrl.replace("&p="+(currPage+1),"&");
//        alert(baseUrl);
        currPage=currPage?currPage:1;
        $(".news_list").infinitescroll({
            navSelector: ".page",    //页面分页元素--本页的导航，意思就是一个可以触发ajax函数的模块
            nextSelector: ".page a.next", //下页对象必须是一个有href的a
            itemSelector: ".news_list li" , //选择的是要加载的那一个块
            animate: false,       //是否加载完成就滚动到新内容处
            hideNav:false,//默认是插件调用成功后会自动隐藏翻页的标签
           // state:{currPage:currPage},//告诉当前是第几页 默认是第一页
            //path:[baseUrl+"p=", ""],
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