<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>详情</title>
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
    #sele{
        padding: 0 2%;
        margin: 0;
        font-size: 0.8em;
    }
    #sele option{
        text-align: center;
    }
    .spanl{
        position: absolute;
        left:0;
    }
    .span2{
        position: absolute;
        right:0;
    }
    #content{
        text-align: left;
        background-color: white;
        padding: 10px 20px 40px 20px;
        /*margin-left: 10px;*/
        /*margin-right: 10px;*/
    }
    #content ul{
        /*border: 1px solid #ccc;*/
        margin-top: 10px;
        padding: 10px 10px 10px 10px;
        border-radius: 4px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -ms-border-radius: 4px;
        -o-border-radius: 4px;
    }
    textarea{
        width: 100%;
        margin-top: 10px;
        padding: 4px 2px;
        min-height: 80px;
    }
    .font22{
        font-size: 18px;
    }
    .marl20{
        margin-left: 20px;
    }
    .tips{
        border-bottom: 1px solid #e7e8eb;
    }
    .tipdiv{
        position: relative;
        text-align: center;
        padding: 10px 0px 10px 0px;
        font-size: 15px;
    }
    .posire{
        position: relative;
    }
    .borderr{
        border-right: 1px solid #e7e8eb;
    }
    .borderb{
        border-bottom: 1px solid #e7e8eb;
    }
    body .layui-layer-style .layui-layer-title {
        padding: 0 80px 0 20px;
        height: 42px;
        line-height: 42px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        color: #333;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        background-color: #F8F8F8;
        border-radius: 2px 2px 0 0;
    }
    /*body .layui-layer-style .layui-layer-title{background:#6ac134; color:#fff; border: none;}*/
    .hotellist1 li{
        padding-left: 15px;
        margin-top: 0px;
    }
    .radius{
        width: 10px;
        height: 10px;
        background-color: red;
        /*overflow: hidden;*/
    }
</style>
<body>
<div class="header" id="header1">
    <a href="index.php?c=Showphone&a=index" class="home">
        <span class="header-icon header-icon-home"></span>
        <span class="header-name">主页</span>
    </a>
    <div class="title" id="titleString">详情</div>
    <a href="index.php?c=Execution&a=project&id=<?php echo ($uid); ?>" class="back">
        <span class="header-icon header-icon-return"></span>
        <span class="header-name">返回</span>
    </a>
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
    <div class="padd2 bg3" style="padding-bottom: 10px;line-height: 40px;">
        <div class="borderb">
            <span>负责人：</span><?php if(is_array($login)): $i = 0; $__LIST__ = $login;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$login): $mod = ($i % 2 );++$i;?><a class="color2" href="index.php?s=/Home/Execution/peo_detail&uid=<?php echo ($login["uid"]); ?>&id=<?php echo ($id); ?>"><?php echo ($login["alias"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="borderb">
            <span>入场时间：</span><span class="color2"><?php if($data[ctime]): echo date('Y-m-d H:i:s',$data['ctime']); endif; ?></span>
        </div>
        <div class="borderb">
            <span>团队成员：</span>
             <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["yesno"] == 2): ?><a class="color2" href="index.php?s=/Home/Execution/peo_detail&uid=<?php echo ($vo["uid"]); ?>&id=<?php echo ($id); ?>" style="color: red"><?php echo ($vo["alias"]); ?>&nbsp
                        </a>
                     <?php else: ?>
                     <a class="color2" href="index.php?s=/Home/Execution/peo_detail&uid=<?php echo ($vo["uid"]); ?>&id=<?php echo ($id); ?>"><?php echo ($vo["alias"]); ?>&nbsp
                         <!--<?php if($vo[state]): ?>(<?php echo ($vo["state"]); ?>天)<?php endif; ?>-->
                     </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
        <div class="borderb">
            <span>团队身份：</span><span class="color2"><?php echo ($list["pzytd"]); ?></span>
        </div>
        <form action="index.php?s=/Home/Execution/detailUpdate" method="post">
            <div class="borderb">
                <input type="hidden" name="jid" value="<?php echo ($data["jid"]); ?>"/>
                <span>进度：</span>
                <span class="readOnly color2"><?php echo ($data["pjd"]); ?></span>
                <textarea style="margin-top: 5px" name="pjd" value=""><?php echo ($data["pjd"]); ?></textarea>
            </div>
            <div class="borderb">
                <span>待办事务：</span>
                <span class="readOnly color2"><?php echo ($data["pdbsw"]); ?></span>
                <textarea style="margin-top: 5px" name="pdbsw" value=""><?php echo ($data["pdbsw"]); ?></textarea>
            </div>
            <div class="borderb">
                <span>结论总结：</span>
                <span class="readOnly color2"/><?php echo ($data["pjlzj"]); ?></span>
                <textarea style="margin-top: 5px"  name="pjlzj" value=""/><?php echo ($data["pjlzj"]); ?></textarea>
            </div>
            <div class="mart10">
            <input class="btn btn-success" id="edit"  type="button" value="编辑"/>
            <input class="btn btn-success" id="save" type="submit" value="保存"/>
                </div>
        </form>
</div><br>
<div id="content">
    <span>项目跟进情况：</span>
    <ul class="unstyled bg9" style="padding-bottom: 20px;">
        <?php if($detailed): if(is_array($detailed)): $i = 0; $__LIST__ = $detailed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$detailed): $mod = ($i % 2 );++$i; if($count[$info['id']]['project_sum']): ?><div class="radius50 color3 radius fl mart10">
                      </div><?php endif; ?>
                    <a href="index.php?s=/Home/Execution/comment_attr&id=<?php echo ($detailed[cid]); ?>&jid=<?php echo ($id); ?>&type=1&uid=<?php echo ($uid); ?>">
                        <li class="paddtb20 borderb">
                            <?php echo ($execution[$i-1][0]["project_sum"]); ?>
                            <?php if($execution[uid] == $detailed[uid]): echo ($execution[alias]); endif; ?>
                        (<?php echo ($type[$detailed[cid]][project_sum]); ?>)
                        :<span class="color2 styles"><?php echo ($detailed["content"]); ?></span><span class="fr font12"><?php echo date('Y-m-d H:i:s',$detailed['ctime']);?></span>
                    </li>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php else: ?>
            <li style="text-align: center">没有数据</li><?php endif; ?>
    </ul><br>
        新增报表：
        <!--<textarea class="" id="text"></textarea>-->

    <script id="editor" type="text/plain" style="width:100%;height:200px;"></script>
        <div class="fr" style="font-size: 13px;">
            <!--<input type="checkbox"/>发送提示短信&nbsp;-->
            <button class="btn btn-success" onclick="reply_msg()">发布</button>
        </div>
    </div>

</div>
<!--<div id="content2" style="display: none">-->
    <!--<ul class="unstyled hotellist1">-->
        <!--<li class="">-->
            <!--<a onclick="choose(this)">飞飞1</a>-->
        <!--</li>-->
        <!--<li class="">-->
            <!--<a onclick="choose(this)">飞飞2</a>-->
        <!--</li>-->
        <!--<li class="">-->
            <!--<a onclick="choose(this)">飞飞3</a>-->
        <!--</li>-->
    <!--</ul>-->
<!--</div>-->
<script>
    $(document).ready(function(){
        $(".styles").each(function(){
            var maxwidth=20;
            if($(this).text().length>maxwidth){
                $(this).text($(this).text().substring(0,maxwidth));
                $(this).html($(this).html()+'…');
            }
        });

        $("#save").hide();
        $("form textarea").hide();
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
        if($("#text").val()==''){
            layer.alert('请输入内容!!!');
        }else{
            //自定页
            layer.open({
                title:"选择报表类型",
                type: 1,
                skin: 'layui-layer-style', //样式类名
                closeBtn: 1, //不显示关闭按钮
                shift: 2,
                shadeClose: true, //开启遮罩关闭
                content: '<div class="padd2 font22 tips"><input type="radio" name="daily" value="1" checked/> 日报<input style="margin-left: 20px" type="radio" name="daily" value="2"/> 周报<br><input type="radio" name="daily" value="3"/> 月报<input style="margin-left: 20px" type="radio" name="daily" value="4"/> 评估<input style="margin-left: 20px" type="radio" name="daily" value="5"/> 预算</div><div class="tipdiv" onclick="sure_type()">确  定</div>'
            });
//
        }
//        alert(<?php echo ($id); ?>);

    }
    function sure_type(){
        var strobj = getContent();
        var str=strobj.toString();
//        alert($('input:radio:checked').val());
        $.ajax({
                type:'POST',
                url:"index.php?s=/Home/Execution/detailed_Add",
                data:"id="+<?php echo ($id); ?>+"&content="+str+"&type="+$('input:radio:checked').val(),
                success:function(data){
//                    layer.closeAll();
//                    var obj = JSON.parse(data);
////                alert($("#text").val());
//                    $(".unstyled").append('<li class="pt1">'+obj[0].hfuid+' :'+'<span class="color2">'+obj[0].comment+'</span>'+'<span class="fr">'+obj[0].ctime+'</span>'+'</li>')
//                alert(data);
                    window.location.reload();
//                    UE.getEditor('editor').setContent('');
//                layer.msg('添加成功');
                }
            })
    }
//编辑保存按钮切换
$("#edit").click(
        function(){
            $("#edit").hide();
            $("#save").show();
            $("form .readOnly").hide();
            $("form textarea").show();
        }
)
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
        $("#content textarea").append(str);
        $("#content2").hide();
        $("#header2").hide();
        $("#header1").show();
        $("#content1").show();
    }
</script>
</body>
</html>