<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    .mar{
        display: block;
        -webkit-margin-before: 1em;
        -webkit-margin-after: 1em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        font-size: 1em;
        line-height: 1.5em;
        margin: 10px 10px 0;
    }
    *{margin:0;padding:0;font:14px/1.8 "Helvetica Neue","microsoft yahei";}
    ul,li{list-style:none;}
    body{background: #fff; }
    .checkin{margin-top: 20px; }
    .clear {clear:both; height:0; overflow:hidden; display:block; line-height:0}
    .clearfix:after {clear:both;font-size:0; height:0; display:block; visibility:hidden; content:" "; line-height:0}
    .clearfix {zoom:1}/* for IE6 IE7 */
    .title{height: 36px;line-height: 36px;font-size: 16px;margin-bottom: 10px;}
    .title p{height: 36px;line-height: 36px;font-size: 16px;float: right;margin-right: 4%}
    .title select{width: 6em;height:30px;padding: 3px 0px;}
    .checkin li{background: #fff; float: left;text-align: center;position: relative}

    li.able-qiandao{background: #e9c530; }
    li.checked{}
    li.unchecked{background:#fee684 url(/Public/index/images/no.png) no-repeat center;}
    .mask{ width: 100%;height: 100%;position: absolute;top: 0;left: 0; background-color: rgba(0,0,0,0.55);visibility: hidden;transition: all 0.25s ease}
    .modal{background:#fff;width: 450px;height: 400px;border-radius: 10px;position: absolute;margin-top: -200px;margin-left:-225px;left: 50%;top: 50%;border:5px solid #42941a;box-sizing:border-box;overflow: hidden;transform: translateY(-200%);transition: all 0.25s ease}
    a.closeBtn{display: block;position: absolute;right: 10px;top: 5px;font-family: 'simsun';font-size: 18px;text-decoration: none;font-weight: bolder;color: #333}
    .title_h1{text-align: center;font-size: 40px;font-weight: normal;padding-top: 80px;display: block;width: 100%}
    .title_h1 span{display: inline-block;width: 40px;height: 40px;border-radius: 100%;background: #42941a;color: #fff;position: relative;float: left;margin-left: 30%;margin-top: 7px;}
    .title_h1 span::before{width: 10px;height: 2px;background: #fff;position: absolute;left: 8px;top: 23px;display: block;line-height: 0;font-size: 0;content: ""; transform: rotate(52deg);}
    .title_h1 span::after{width: 24px;height: 2px;background: #fff;position: absolute;left: 12px;top: 20px;display: block;line-height: 0;font-size: 0;content: "";transform: rotate(-45deg);}
    .title_h1 em{display: inline-block;font-size: 30px;float: left;margin-left: 10px;}
    .title_h1 i{display: inline-block;font-size: 16px;float: left;margin: 14px 0 0 10px;}
    .title_h2{text-align: center;font-size: 16px;display: block;padding-top: 20px;}
    .title_h2 span{font-size: 36px;color: #b25d06;}
    .trf{visibility: visible;}
    .trf .modal{transform: translateY(0);}

    .day{
        position: absolute;font-size: 2.5em;color: #7c858a; opacity:0.5;width: 100%;line-height: 80px;
    }
    .project{
       width: 100%;
        height: 100%;
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
    }
    .project div{
    }
    .hotel-prompt1{
        clear: both;
        margin: 20px 5px;
    }

</style>
<body>
 <div class="header">
     <a href="index.php?c=Showphone&a=index" class="home">
    <span class="header-icon header-icon-home"></span>
    <span class="header-name">主页</span>
  </a>
  <div class="title" id="titleString"></div>
  <a href="javascript:history.go(-1);location.reload()" class="back">
    <span class="header-icon header-icon-return"></span>
    <span class="header-name">返回</span>
  </a>
</div>


<div class="container">
  <script type="text/javascript">
    $('#titleString').text($(document)[0].title);
  </script>
  <div class="hotel-prompt ">
    <span class="hotel-prompt-title">姓名</span>
      <p><?php echo ($list[0]["alias"]); ?></p>
  </div>
    <div id="" class="hotel-prompt">
     <span class="hotel-prompt-title">职位</span>
     <p><?php if($list["job"] == ''): ?>项目成员 <?php else: echo ($list["job"]); endif; ?>
        </p>
   </div>
    <div id="" class="hotel-prompt">
        <span class="hotel-prompt-title">联系电话</span>
        <a href="tel:111" class="mar"><?php echo ($list["phone"]); ?></a>
    </div>
    <div id="" class="hotel-prompt">
        <span class="hotel-prompt-title">所在项目</span>
        <p>
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if(($count2) OR ($count1) OR ($count3)): if($count2): echo ($count2[$info['jid']][county]); endif; ?>
                <?php if($count1): echo ($count1[$info['jid']][city]); endif; ?>
                <?php if($count1): echo ($count3[$info['jid']][province]); endif; ?>
                    --<?php endif; ?> <?php echo ($info["jname"]); ?>(
                <!--<a class="color2" href="index.php?c=Execution&a=peo_detail&uid=<?php echo ($info["uid"]); ?>">-->

                     <?php echo ($info["uname"]); ?>&nbsp
                <!--<?php if($vo[state]): ?>(<?php echo ($vo["state"]); ?>天)<?php endif; ?>-->
            <!--</a>-->
                )<br/><?php endforeach; endif; else: echo "" ;endif; ?></p>
    </div>
   <div id="" class="hotel-prompt ">
     <span class="hotel-prompt-title">状态</span>
       <p class=""><?php if($list["reason"] == '' ): ?><span style="">在职</span><?php else: ?><span style="color:red">离职</span><?php endif; ?></p>
       <?php if($list[0][entrydate] == ''): else: ?><p>入职时间：<?php echo date('Y-m-d H:i:s',$list['entrydate']);?></p><?php endif; ?>
       <?php if($list[0][departuredate] == ''): else: ?><p>离职时间：<?php echo date('Y-m-d H:i:s',$list['departuredate']);?></p><?php endif; ?>
       <?php if($list[0][reason] == ''): else: ?><p> <p>离职原因：<?php echo ($list["reason"]); ?></p><?php endif; ?>
   </div>
    <div class="hotel-prompt ">
        <span class="hotel-prompt-title">加班情况</span>
    <?php if($po): if(is_array($po)): $i = 0; $__LIST__ = $po;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><?php echo date('Y-m-d',$vo['starttime']);?>到
                <?php echo date('Y-m-d',$vo['stoptime']); echo ($vo["jname"]); ?></p><?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>
    <div id="" class="hotel-prompt1">
        <span class="hotel-prompt-title">出勤详情</span>
        <div class="checkin" style="background-color: #009999"></div>
    </div>
   <div class="hotel-comment-list" id="remark">

        <!--<div class="hotel-user-comment">-->
            <!--<span class="hotel-user">添加备注</span><br>-->
            <!--<input type="text" id="remark_content"/><br>-->
            <!--<select class="" id="sele">-->
                <!--<option>所属项目</option>-->
                <!--<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;?>-->
                    <!--<option value="<?php echo ($show[o_id]); ?>"><?php echo ($show[jname]); ?></option>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--<!--<option>项目2</option>-->
                <!--<!--<option>项目2</option>-->
                <!--<option>项目2</option>-->
            <!--</select><br>-->
          <!--<span title='' class='btn btn-success iframe' onclick="remark()">提交</span>-->
        </div>
<div id="th">
       <?php if(is_array($detail)): $i = 0; $__LIST__ = $detail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;?><div class="hotel-user-comment">
               <span class="hotel-user fl"><?php echo ($show[uname]); ?>:</span>
               <div class="hotel-user-comment-cotent">
                   <p> <?php echo ($show[comment]); ?></p>
                   <span><?php echo ($show[ctime]); ?></span>
               </div>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
    </div>
 </div>
<div style="position: fixed;right: 10px;bottom: 50px;">
    <a onClick="" href="#"><img src="/Public/index/images/totop.png" /></a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
//        alert(<?php echo ($list[uid]); ?>);
        var myDate = new Date();
        var month1=myDate.getMonth()+1;
        var year=myDate.getFullYear();
        if(month1<10){
            var month="0"+month1;
        }else{
            var month=month1;
        }
        getData(year,month);
    })
    function Checkin(ele, options) {
        this.ele = ele;
        this.opt = options;
        this.defaults = {
            width: '100%',
            height: this.width,
            background: '#fff',
            radius: 10,
            color: '#fff',
            padding: 10,
        };
        this.obj = $.extend({}, this.defaults, this.opt);

        var _self = this.ele,
                html = '',
                myDate = new Date(),
                year = options[0],
                month =options[1],
                day = myDate.getDate(),
                weekText = ['日', '一', '二', '三', '四', '五', '六'];
        _self.css({
            width: this.obj.width + 'px',
            height: this.obj.height,
            background: this.obj.background,
            borderRadius: this.obj.radius,
            color: this.obj.color,
            padding: this.obj.padding
        }).html("").append("<div class='title'><select id='sel_year'><option value='2016'>2016年</option><option value='2015'>2015年</option><option value='2014'>2014年</option><option value='2013'>2013年</option><option value='2012'>2012年</option></select>&nbsp;&nbsp;<select id='sel_month'><option value='01'>1月</option><option value='02'>2月</option><option value='03'>3月</option><option value='04'>4月</option><option value='05'>5月</option><option value='06'>6月</option><option value='07'>7月</option><option value='08'>8月</option><option value='09'>9月</option><option value='10'>10月</option><option value='11'>11月</option><option value='12'>12月</option></select><p style='color: #565252'>" + "<span id='year'>"+year+"</span>年<span id='month'>"+(month) +"月</span></p></div>");
        $("<ul class='week clearfix'></ul><ul class='calendarList clearfix'></ul>").appendTo(_self);
        $("#sel_year option").each(function(){
            if($(this).val()==year){
                $(this).attr("selected","selected");
            }
        })
        $("#sel_month option").each(function(){
            if($(this).val()==month){
                $(this).attr("selected","selected");
            }
        })
        for (var i = 0; i < 7; i++) {
            _self.find(".week").append("<li style='line-height: 50px'>" + weekText[i] + "</li>")
        };
        for (var i = 0; i < 42; i++) {
            html += "<li><div class='day'></div><div class='project'><div></div></div></li>"
        };
        _self.find(".calendarList").append(html);
        var $li = _self.find(".calendarList").find("li");
        _self.find(".week li").css({
            width: (_self.width() / 7.3) + 'px',
            height: 50 + 'px',
            borderRight: '1px solid #c3bcbc',
            boxSizing: 'border-box',
            background: '#81c2d6'
        });
        $li.css({
            width: (_self.width() / 7.3) + 'px',
            height: 80 + 'px',
            borderLeft: '1px solid #c3bcbc',
            borderBottom: '1px solid #c3bcbc',
            boxSizing: 'border-box',
            color: "#565252"
        });
        _self.find(".calendarList").find("li:nth-child(7n)").css('borderRight', '1px solid #c3bcbc');
        _self.find(".week li:nth-child(7n)").css('borderRight', '1px solid #c3bcbc');
        var monthFirst = new Date(year, month-1, 1).getDay();
        var d = new Date(year, (month), 0)
        var totalDay = d.getDate(); //获取当前月的天数
        for (var i = 0; i < totalDay; i++) {
            $li.eq(i + monthFirst).find(".day").html(i + 1);
            $li.eq(i + monthFirst).addClass('data' + (i + 1))
        }
        //$li.eq(monthFirst+day-1).css('background','#f7ca8e')
//        _self.find($(".data" + day)).addClass('able-qiandao');
    }
    //        Checkin.prototype.init = function() {
    //
    //        }
    $.fn.Checkin = function(options) {
        var checkin = new Checkin(this, options);
        return checkin;
    }

//获取出勤详情
function getData(year,month){
    var str=year+"-"+month;
    $.ajax({
        type: "POST",
        url: "index.php?s=/Home/Execution/check_work",
        data:"id="+<?php echo ($list[0][uid]); ?>+"&jid="+<?php echo ($id); ?>+"&datatime="+str ,
        success: function (data) {
//                console.log(data);
//                alert(data);
            if(data!="null"){
                // 插件调用
                var options=[year,month];
                $(".checkin").Checkin(options);

                $(".calendarList li").each(function(){
                    //当前时间以后的不能签到
                    var nowdate=new Date();
                    var day=nowdate.getDate();
                    var date1=Number($(this).html());
                    if(date1>day){
                        $(this).removeAttr("onclick");
                    }
                    var date=Number($(this).find(".day").html());
//                    alert(data[0].month);
                    for(var x=0;x<data.length;x++){
                        var jsonData=JSON.parse(data[x].month);
                        for(var i=0;i<jsonData.params.length;i++){
                            if(date==jsonData.params[i].day){
                                $(this).find(".project").find("div").html(data[x].jname);
                            }
                        }
                    }
                })
                $("#sel_year").bind("change",function(){
                   var year=$("#sel_year option:selected").val();
                    var month=$("#sel_month option:selected").val();
                    getData(year,month);
                })
                $("#sel_month").bind("change",function(){
                    var year=$("#sel_year option:selected").val();
                    var month=$("#sel_month option:selected").val();
                    getData(year,month);
                })
            }else{
                var myDate = new Date();
                month=myDate.getMonth();
                // 插件调用
                $(".checkin").Checkin(month);

                $(".calendarList li").each(function(){
                    //当前时间以后的不能签到
                    var nowdate=new Date();
                    var day=nowdate.getDate();
                    var date1=Number($(this).html());
                    if(date1>day){
                        $(this).removeAttr("onclick");
                    }
                })
                $("#sel_year").bind("change",function(){
                    var year=$("#sel_year option:selected").val();
                    var month=$("#sel_month option:selected").val();
                    getData(year,month);
                })
                $("#sel_month").bind("change",function(){
                    var year=$("#sel_year option:selected").val();
                    var month=$("#sel_month option:selected").val();
                    getData(year,month);
                })
            }

        },error:function(data){
            var myDate = new Date();
            month=myDate.getMonth();
            // 插件调用
            $(".checkin").Checkin(month);

            $(".calendarList li").each(function(){
                //当前时间以后的不能签到
                var nowdate=new Date();
                var day=nowdate.getDate();
                var date1=Number($(this).html());
                if(date1>day){
                    $(this).removeAttr("onclick");
                }
            })
            $("#sel_year").bind("change",function(){
                var year=$("#sel_year option:selected").val();
                var month=$("#sel_month option:selected").val();
                getData(year,month);
            })
            $("#sel_month").bind("change",function(){
                var year=$("#sel_year option:selected").val();
                var month=$("#sel_month option:selected").val();
                getData(year,month);
            })
        }
    })
}
</script>
</body>
</html>