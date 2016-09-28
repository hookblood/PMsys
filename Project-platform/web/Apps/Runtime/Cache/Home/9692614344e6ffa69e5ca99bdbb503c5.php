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
    .w90{
        width:90%;
    }
    .transform100{
        -webkit-transform:translateY(-100%);
        -moz-transform:translateY(-100%);
        -o-transform:translateY(-100%);
        -ms-transform:translateY(-100%);
        transform: translateY(-100%);
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
    .mt10{
        margin-top: 10px;
    }
    .height40{
        height:40px;
    }
    .w30{
        width: 41.5%;
    }
</style>
<body>
 <div class="header">
 <a href="index.php?c=Showphone&a=index" class="home">
            <span class="header-icon header-icon-home"></span>
            <span class="header-name">主页</span>
</a>
<div class="title" id="titleString">招投标信息</div>

<a href="index.php?c=Showphone&a=index" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
 </div>

<div class="container width100 pt20 ">
<form action="<?php echo U('Zhaobiao/tendering');?>" method="post">
    <div class="">

        <input class="form-control height40" type="text" placeholder="请输入要搜索的项目名称" id="title" name="title" value="<?php echo ($search["gg_xmmc"]); ?>" />
        <input class="form-control height40 mt10" type="text" placeholder="采购方式" id="caigou" name="fangshi" value="<?php echo ($search["gg_cgfs"]); ?>" />
        <input class="form-control height40 mt10" type="text" placeholder="项目编号" id="bianhao" name="bianhao" value="<?php echo ($search["gg_xmbh"]); ?>" />
        <input class="form-control height40 mt10" type="text" placeholder="行政区划" id="quhua" name="quhua" value="<?php echo ($search["gg_xzqh"]); ?>" />
        <input class="form-control height40 mt10" type="text" placeholder="公告类型" id="leixing" name="leixing" value="<?php echo ($search["gg_gglx"]); ?>" />
        <input class="form-control height40 mt10" type="text" placeholder="采购人" id="cgperson" name="caigou" value="<?php echo ($search["gg_cgr"]); ?>" />
        <input class="form-control height40 mt10" type="date" placeholder="公告发布时间" id="times" name="time" value="<?php echo ($search["ctime"]); ?>" />
        <input class="form-control btn-success mt10 height40" id="tijiao" type="button" value="立即搜索"/>
    </div>
</form>

    <?php if(is_array($list)): $keys = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($keys % 2 );++$keys; if($list): ?><div class="control-group width100 clr padd borders bg1 mart10">
        <?php if($count): ?><div class="radius50  color3 radiusStyle fl text_center transformXY">
                <!--<?php echo ($count); ?>-->
            </div><?php endif; ?>
        <span ><?php echo ($name[$keys-1]['name']); ?></span>
        <a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/info_list',array_merge($search,array('state'=>$keys)));?>">查看更多</a>

      <ul class="unstyled hotellist1" >
          <?php if(is_array($vo)): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><li style="position: relative">
              <div>
                  <div><?php echo ($vos["gg_xmmc"]); echo ($vos["did"]); ?></div>
                  <div class="font12"><?php echo date('Y-m-d H:i:s',$vos[ctime]);?></div>
              </div>
              <a href="<?php echo U('Home/Zhaobiao/er',array('id'=>$vos['gg_id'],'state'=>$vos['table_type']));?>" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>

    </div><br><?php endif; endforeach; endif; else: echo "" ;endif; ?>

<!--不要了-->
    <!--<div class="control-group width100 clr padd borders bg1">-->
        <!--<?php if($count1): ?>-->
            <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                <!--<?php echo ($count1); ?></div>-->
        <!--<?php endif; ?>-->
        <!--<span>采购公告</span>-->
        <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>2,'areaid'=>$areaid)));?>">查看更多</a>-->
        <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
            <!--<ul class="unstyled hotellist1" >-->
                <!--<li style="position: relative">-->
                    <!--<div class="width95 disblock">-->
                        <!--<div>-->
                            <!--<span class="width50" style="display: inline-block"><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</span>-->
                            <!--<span class="font12 fr"><?php echo ($vo["ctime"]); ?></span>-->
                        <!--</div>-->
                        <!--<div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="disblock juzhong">-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=2" class="glyphicon glyphicon-chevron-right fr color1"></a>-->
                    <!--</div>-->


                <!--</li>-->

            <!--</ul>-->
        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
    <!--</div><br>-->


    <!--<div class="control-group width100 clr padd borders bg1">-->
        <!--<?php if($count2): ?>-->
            <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                <!--<?php echo ($count2); ?></div>-->
        <!--<?php endif; ?>-->
        <!--<span>询价采购公告</span>-->
        <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>3,'areaid'=>$areaid)));?>"> 查看更多</a>-->
        <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
            <!--<ul class="unstyled hotellist1" >-->
                <!--<li style="position: relative">-->
                    <!--<div class="width95 disblock">-->
                        <!--<div>-->
                            <!--<span class="width50" style="display: inline-block"><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</span>-->
                            <!--<span class="font12 fr"><?php echo ($vo["ctime"]); ?></span>-->
                        <!--</div>-->
                        <!--<div>-->

                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="disblock juzhong">-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=3" class="glyphicon glyphicon-chevron-right fr color1"></a>-->
                    <!--</div>-->
                <!--</li>-->
            <!--</ul>-->
        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
    <!--</div><br>-->


    <!--<div class="control-group width100 clr padd borders bg1">-->
        <!--<?php if($count3): ?>-->
            <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                <!--<?php echo ($count3); ?></div>-->
        <!--<?php endif; ?>-->
        <!--<span>竞争性磋商采购公告</span>-->
        <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>4,'areaid'=>$areaid)));?>">查看更多</a>-->
        <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
            <!--<ul class="unstyled hotellist1" >-->
                <!--<li style="position: relative">-->
                    <!--<div style="">-->
                        <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                        <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                    <!--</div>-->
                    <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=4" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                <!--</li>-->
            <!--</ul>-->
        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
    <!--</div><br>-->





        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count4): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count4); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>征求意见公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>5,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=5" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->


        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count5): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count5); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>更正公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>6,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=6" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->


        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count6): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count6); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>竞争性谈判结果公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>7,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=7" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->


        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count7): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count7); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>竞争性磋商结果公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>8,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=8" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->


        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count8): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count8); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>询价结果公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>9,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=9" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->


        <!--<div class="control-group width100 clr padd borders bg1">-->
            <!--<?php if($count9): ?>-->
                <!--<div class="radius50  color3 radiusStyle fl text_center transformXY">-->
                    <!--<?php echo ($count9); ?></div>-->
            <!--<?php endif; ?>-->
            <!--<span>结果公告</span>-->
            <!--<a class="fr underline color1" href="<?php echo U('Home/Zhaobiao/see_more',array_merge($search,array('state'=>10,'areaid'=>$areaid)));?>">查看更多</a>-->
            <!--<?php if(is_array($$list)): $i = 0; $__LIST__ = $$list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<ul class="unstyled hotellist1" >-->
                    <!--<li style="position: relative">-->
                        <!--<div style="">-->
                            <!--<div><?php echo ($vo["cg_xmmc"]); ?>(<?php echo ($vo["sheng"]); echo ($vo["shi"]); echo ($vo["xian"]); ?>)</div>-->
                            <!--<div class="font12"><?php echo ($vo["ctime"]); ?></div>-->
                        <!--</div>-->
                        <!--<a href="index.php?c=Zhaobiao&a=xiangqing&uid=<?php echo ($vo["did"]); ?>&nid=<?php echo ($vo["cg_id"]); ?>&zhuangtai=10" class="glyphicon glyphicon-chevron-right color1 posi transform501"></a>-->
                    <!--</li>-->
                <!--</ul>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
        <!--</div><br>-->



</div>

<script type="text/javascript">
    $("#tijiao").click(function(){
        var url="index.php?s=/Home/Zhaobiao/tendering&title="+$("#title").val()
                +"&caigou="+$("#caigou").val()+"&bianhao="+$("#bianhao").val()+"&quhua="+$("#quhua").val()
        +"&leixing="+$("#leixing").val()+"&cgperson="+$("#cgperson").val()+"&times="+$("#times").val();

        location.href=url;
    })
    $('li').click(function(){
//        layer.load(2);
        var href=$(this).find("a").attr("href");
        window.location.href=href;
    });
    function search_tltle(){
        var url="index.php?c=Zhaobiao&a=tender&title="+$("#title").val();
        location.href=url;
    }
</script>

</body>
</html>