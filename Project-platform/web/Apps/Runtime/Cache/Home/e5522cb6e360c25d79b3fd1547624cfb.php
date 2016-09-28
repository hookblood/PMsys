<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>报表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <link href="/Public/index/css/bootstrap-2.3.2.min.css" rel="stylesheet" />
    <link href="/Public/index/css/NewGlobal.css" rel="stylesheet" />
    <link href="/Public/index/css/index.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/Public/index/layer/skin/layer.css" />
    <link href="/Public/index/css/detail.css" rel="stylesheet" />

    <script type="text/javascript" src="/Public/index/js/zepto.js"></script>
    <script type="text/javascript" src="/Public/index/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/index/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/index/layer/layer.js"></script>
    <script type="text/javascript" src="/Public/index/js/insertContent.js"></script>
    <script type="text/javascript" src="/Public/index/js/utf8-php/ueditor.config.js"></script>
    <script type="text/javascript" src="/Public/index/js/utf8-php/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/Public/index/js/utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>
<style>
    textarea{
        width: 100%;
        margin-top: 10px;
        padding: 4px 2px;
        min-height: 80px;
    }
    .unstyled{
        border: 1px solid #DCF4E7;padding-left: 10px;padding-right: 10px;padding-bottom: 10px;border-radius: 8px;
    }
    .hotellist1 li{
        padding-left: 15px;
        margin-top: 0px;
    }
</style>
<body>
<div class="header" id="header1">
    <a href="index.php?c=Showphone&a=index" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString">报表</div>
    <?php if($type == 2): ?><a href="index.php?c=Daily&a=index&id=<?php echo ($uid); ?>" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a>
        <?php else: ?>
        <a href="index.php?c=Execution&a=detailed&id=<?php echo ($jid); ?>&uid=<?php echo ($uid); ?>" class="back">
            <span class="header-icon header-icon-return"></span>
            <span class="header-name">返回</span>
        </a><?php endif; ?>


</div>
<div class="header" id="header2" style="display: none">
    <a class="home">
        <span class="header-icon header-icon-return"></span>
        <span class="header-name">返回</span>
    </a>
    <div class="title" id="titleString">选择提到的人</div>
    <!--<a href="javascript:history.go(-1);" class="back">-->
    <!--<span class="header-icon header-icon-return"></span>-->
    <!--<span class="header-name">返回</span>-->
    <!--</a>-->
</div>
<div class="container font1" id="content1">
    <div class="padd3 bg3">
        <div>
        <span>填写人：</span><span class="color2"><?php echo ($info[0][alias]); ?></span>
         </div>
        <div>
            <span>时间：</span><span class="color2"><?php echo date('Y-m-d H:i:s',$data[0][ctime]);?></span>
        </div>
        <div>
            <span>内容：</span><span class="color2"><?php echo ($data[0][content]); ?></span>
        </div><br>
评论：
<ul class="unstyled mart10">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i; if($_COOKIE[user_id] == $list[uid]): ?><li style="text-align: right">
                <div class="paddtb10" style=""><?php echo ($execution[$i-1][0]["project_sum"]); ?>：</div>
            <div class="bg9 padd2">
            <div>
                <?php echo ($list["content"]); ?>
            </div>
            <div class="font12 pt20" ><?php echo date('Y-m-d H:i:s',$list[ctime]);?></div>
        </div>

                </li>
            <br/>
        <?php else: ?>
            <li>

            <div class="paddtb10"><?php echo ($execution[$i-1][0]["project_sum"]); ?>：<input type="hidden" id="myid" value="<?php echo ($list["uid"]); ?>"/></div>
            <div class="bg9 padd2">
                <div>
                    <?php echo ($list["content"]); ?>
                </div>
                <div class="font12 pt20"><?php echo date('Y-m-d H:i:s',$list[ctime]);?></div>
            </div>
            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
<!--<textarea class="" id="text"></textarea>-->
        <script id="editor" type="text/plain" style="width:100%;height:200px;"></script>
<div class="fr" style="font-size: 13px;">
    <!--<input type="checkbox"/>发送提示短信-->
    &nbsp;<button class="btn btn-success" onclick="reply_msg()">发布</button>
</div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $("#header2 .home").bind("click",function(){
            $("#content2").hide();
            $("#header2").hide();
            $("#header1").show();
            $("#content1").show();
        })
        var ue = UE.getEditor('editor');
    })
    function getContent() {
        var arr = [];
        // arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        // arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        return arr;
        // alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        // arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        // arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        // alert(arr.join('\n'))
        return arr;
    }
    function reply_msg(){
        var strobj = getContent();
        var str=strobj.toString();
        if(str==''||str==null){
            alert($("#myid").val());
            alert('请输入内容!!!');
        }else{
            $.ajax({
                type:'POST',
                url:"index.php?s=/Home/Execution/add_comment_attr",
                data:"id="+<?php echo ($data[0][cid]); ?>+"&content="+str+"&uid="+<?php echo ($_COOKIE[user_id]); ?>,
                success:function(data){
//                    alert(data);
//                    var obj = JSON.parse(data);
////                alert($("#text").val());
//                    $(".unstyled").append('<li>'+'<div>'+obj[0].uname+'</div>'+'<div class="bg2 padd2">'+'<div>'+obj[0].comment+'</div>'+'<div>'+obj[0].ctime+'</div>'+'</div>'+'</li>')
////                alert(data);
//                    UE.getEditor('editor').setContent('');
                    window.location.reload();
//                layer.msg('添加成功');
                }
            })
        }
//        alert(<?php echo ($id); ?>);

    }

    //输入@弹出人员列表
    $("#content textarea").keydown(function(){
        var x = event.which || event.keyCode;
        if(event.shiftKey&&(x==50||x==229)){
            $("#content1").hide();
            $("#header1").hide();
            $("#header2").show();
            $("#content2").show();
        }
    })

    function choose(s){
        var str="@"+$(s).html()+" ";
        $("#content textarea").insertContent(str);
        $("#content2").hide();
        $("#header2").hide();
        $("#header1").show();
        $("#content1").show();
    }
</script>
</html>