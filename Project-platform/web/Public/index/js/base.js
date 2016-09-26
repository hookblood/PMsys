/**
 * Created by Administrator on 2016/8/5.
 */
//三级联动地区选择
function areaChoose(){
    $(".selectList").each(function(){
        var url = "js/area.json";
        var areaJson;
        var temp_html;
        var oProvince = $(this).find(".province");
        var oCity = $(this).find(".city");
        var oDistrict = $(this).find(".district");
        //初始化省
        var province = function(){
            $.each(areaJson,function(i,province){
                temp_html+="<option value='"+province.p+"'>"+province.p+"</option>";
            });
            oProvince.html(temp_html);
            city();
        };
        //赋值市
        var city = function(){
            temp_html = "";
            var n = oProvince.get(0).selectedIndex;
            $.each(areaJson[n].c,function(i,city){
                temp_html+="<option value='"+city.ct+"'>"+city.ct+"</option>";
            });
            oCity.html(temp_html);
            district();
        };
        //赋值县
        var district = function(){
            temp_html = "";
            var m = oProvince.get(0).selectedIndex;
            var n = oCity.get(0).selectedIndex;
            if(typeof(areaJson[m].c[n].d) == "undefined"){
                oDistrict.css("display","none");
            }else{
                oDistrict.css("display","inline");
                $.each(areaJson[m].c[n].d,function(i,district){
                    temp_html+="<option value='"+district.dt+"'>"+district.dt+"</option>";
                });
                oDistrict.html(temp_html);
            }
        };
        //选择省改变市
        oProvince.change(function(){
            city();
        });
        //选择市改变县
        oCity.change(function(){
            district();
        });
        //获取json数据
        $.getJSON(url,function(data){
            areaJson = data;
            province();
        });
    });
}


//人员联动组织机构选择
function peopleChoose() {
    $(".selectList").each(function () {
        var url = "js/people.json";
        var areaJson;
        var temp_html;
        var oProvince = $(this).find(".province");
        var oCity = $(this).find(".city");
        var oDistrict = $(this).find(".district");
        var oCityorg= $(this).find(".cityorg");
        var oDisorg= $(this).find(".disorg");
        //初始化机构
        var province = function () {
            $.each(areaJson, function (i, province) {
                temp_html += "<option value='" + province.p + "'>" + province.p + "</option>";
            });
            oProvince.html(temp_html);
            city();
        };
        //赋值省
        var city = function () {
            temp_html = "";
            var n = oProvince.get(0).selectedIndex;
            $.each(areaJson[n].c, function (i, city) {
                temp_html += "<option value='" + city.ct + "'>" + city.ct + "</option>";
            });
            oCity.html(temp_html);
            district();
        };
        //赋值省级机构（赋值市）
        var district = function () {
            temp_html = "";
            var m = oProvince.get(0).selectedIndex;
            var n = oCity.get(0).selectedIndex;
            if (typeof(areaJson[m].c[n].d) == "undefined") {
                oDistrict.css("display", "none");
            } else {
                oDistrict.css("display", "inline");
                $.each(areaJson[m].c[n].d, function (i, district) {
                    temp_html += "<option value='" + district.dt + "'>" + district.dt + "</option>";
                });
                oDistrict.html(temp_html);
                cityorg();
            }
        };
        //赋值市级机构（赋值县）
        var cityorg = function () {
            temp_html = "";
            var m = oProvince.get(0).selectedIndex;
            var n = oCity.get(0).selectedIndex;
            var x=oDistrict.get(0).selectedIndex;
            if (typeof(areaJson[m].c[n].d[x].z) == "undefined") {
                oCityorg.css("display", "none");
            } else {
                oCityorg.css("display", "inline");
                $.each(areaJson[m].c[n].d[x].z, function (i, cityorg) {
                    temp_html += "<option value='" + cityorg.zt + "'>" + cityorg.zt + "</option>";
                });
                oCityorg.html(temp_html);
                disorg();
            }
        };

        //赋值县级机构
        var disorg = function () {
            temp_html = "";
            var m = oProvince.get(0).selectedIndex;
            var n = oCity.get(0).selectedIndex;
            var x=oDistrict.get(0).selectedIndex;
            var y=oCityorg.get(0).selectedIndex;
            if (typeof(areaJson[m].c[n].d[x].z[y].o) == "undefined") {
                oDisorg.css("display", "none");
            } else {
                oDisorg.css("display", "inline");
                $.each(areaJson[m].c[n].d[x].z[y].o, function (i, disorg) {
                    temp_html += "<option value='" + disorg.ot + "'>" + disorg.ot + "</option>";
                });
                oDisorg.html(temp_html);
            }
        };
        //选择机构改变省
        oProvince.change(function () {
            if($(this).val()=="省级(直辖市)机构"){
                $(".cityorg").css("display","none");
                $(".disorg").css("display","none");
            }else if($(this).val()=="市级机构"){
                $(".cityorg").css("display","inline");
                $(".disorg").css("display","none");
            }else if($(this).val()=="县级机构"){
                $(".cityorg").css("display","inline");
                $(".disorg").css("display","inline");
            }
            city();
        });
        //选择省改变市
        oCity.change(function () {
            district();
        });
        //选择市改变机构
        oDistrict.change(function () {
            cityorg();
        });
        //选择县改变机构
        oCityorg.change(function () {
            disorg();
        });
        //获取json数据
        $.getJSON(url, function (data) {
            areaJson = data;
            province();
        });
    });
}

/*
 *查询地区公共方法
 *返回json格式数组
 */
//查询省份(因为所有页面省份都是默认显示的，所以此方法暂时不用)
function queryProvince(){
    $.ajax({ 
       type: "POST", 
       url: "index.php?c=index&a=query_province", 
       dataType: "json", 
       data:'',
       success: function (data) { 
           return data;
       }, 
       error: function (XMLHttpRequest, textStatus, errorThrown) { 
               alert(errorThrown); 
               // $("#loading").html("");
               // $("#loginBtn").attr("disabled",false);
           } 
       });
}
//查询市,传入省ID
function queryCity(pid){
    $.ajax({ 
       type: "POST", 
       url: "index.php?c=index&a=query_city", 
       //async:true,
       dataType: "json", 
       data:'pid='+pid,
       success: function (data) { 
        //alert(data[1].dname)
           // arr = data;
           // console.log('====='+ arr);
           cityfeedback(data);//回调调用页面的cityfeedback方法，将异步data回传，注意调用页面回调方法要和cityfeedback名称一致
       }, 
       error: function (XMLHttpRequest, textStatus, errorThrown) { 
               alert(errorThrown); 
               // $("#loading").html("");
               // $("#loginBtn").attr("disabled",false);
           } 
       });
    //alert(1);
}
//查询区县,传入市ID
function queryDis(cid){
    $.ajax({ 
       type: "POST", 
       url: "index.php?c=index&a=query_dis", 
       //async:true,
       dataType: "json", 
       data:'cid=' + cid,
       success: function (data) { 
           disfeedback(data);//回调调用页面的disfeedback方法，将异步data回传，注意调用页面回调方法要和disfeedback名称一致
       }, 
       error: function (XMLHttpRequest, textStatus, errorThrown) { 
               alert(errorThrown); 
               // $("#loading").html("");
               // $("#loginBtn").attr("disabled",false);
           } 
       });
}