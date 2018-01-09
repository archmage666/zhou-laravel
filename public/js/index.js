/**
 * Created by admin on 2018/1/9.
 */

$(document).ready(function(){

    $(".navbg").capacityFixed();

    $("#navul > li").not(".navhome").hover(function(){
        $(this).addClass("navmoon");
    },function(){
        $(this).removeClass("navmoon");
    });

});