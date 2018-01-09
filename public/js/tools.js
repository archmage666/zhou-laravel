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