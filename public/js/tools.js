/**
 * 时间戳操作
 */
//时间戳转换为北京时间
$(function(){
    $('#firstbutton').click(function(){

        var firstunixtime = $("#firstunixtime").val();

        if (!firstunixtime) {
            alert('时间戳不能为空');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/unixtimeAction",
            dataType: "json",
            data:{firstunixtime:firstunixtime},
            success: function(data){
                //console.log(data);
                if(data.code == 0){
                    $("#firsttimeshow").val(data.data.time);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
//北京时间转换为时间戳
$(function(){
    $('#secondbutton').click(function(){

        var secondunixtime = $("#secondunixtime").val();

        if (!secondunixtime) {
            alert('时间不能为空');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/unixtimeAction",
            dataType: "json",
            data:{secondunixtime:secondunixtime},
            success: function(data){
                if(data.code == 0){
                    $("#secondtimeshow").val(data.data.unixtime);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
//北京时间转换为时间戳二
$(function(){
    $('#thirdbutton').click(function(){

        var year    = $("#year").val();
        var month   = $("#month").val();
        var day     = $("#day").val();
        var hour    = $("#hour").val();
        var minute  = $("#minute").val();
        var second  = $("#second").val();

        if (!year || !month || !day || !hour || !minute || !second) {
            alert('需填写完整的时间');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/unixtimeAction",
            dataType: "json",
            data:{year:year,month:month,day:day,hour:hour,minute:minute,second:second},
            success: function(data){
                if(data.code == 0){
                    $("#thirdtimeshow").val(data.data.unixtime);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
/**
 * Base64操作
 */
//编码
$(function(){
    $('#base64Enc').click(function(){

        var encode    = $("#textarea-enc").val();

        if (!encode) {
            alert('请输入需要加密的内容');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/baseAction",
            dataType: "json",
            data:{encode:encode},
            success: function(data){
                if(data.code == 0){
                    $("#textarea-enc-show").val(data.data.encode);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
//解码
$(function(){
    $('#base64Dec').click(function(){

        var decode    = $("#textarea-dec").val();

        if (!decode) {
            alert('请输入需要解密的内容');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/baseAction",
            dataType: "json",
            data:{decode:decode},
            success: function(data){
                if(data.code == 0){
                    $("#textarea-dec-show").val(data.data.decode);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
/**
 * urlencode操作
 */
//加密
$(function(){
    $('#urlencode').click(function(){

        var encode    = $("#textarea-urlen").val();

        if (!encode) {
            alert('请输入需要加密的url');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/urlAction",
            dataType: "json",
            data:{encode:encode},
            success: function(data){
                if(data.code == 0){
                    $("#textarea-enc-show").val(data.data.encode);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
//解密
$(function(){
    $('#urldecode').click(function(){

        var decode    = $("#textarea-urlde").val();

        if (!decode) {
            alert('请输入需要解密的url');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/urlAction",
            dataType: "json",
            data:{decode:decode},
            success: function(data){
                if(data.code == 0){
                    $("#textarea-dec-show").val(data.data.decode);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});
/**
 * 短链接操作
 */
$(function(){
    $('#tdurlen').click(function(){

        var tdurlen    = $("#textarea-tdurlen").val();

        if (!tdurlen) {
            alert('请输入需要生成短链接的原url地址');
            return false;
        }

        $.ajax({
            type: "post",
            url: "/tools/tdurlAction",
            dataType: "json",
            data:{tdurlen:tdurlen},
            success: function(data){
                if(data.code == 0){
                    $("#textarea-enc-show").val(data.data.tdurlen);
                }else{
                    alert(data.msg);
                }
            }
        });
    });
});





















