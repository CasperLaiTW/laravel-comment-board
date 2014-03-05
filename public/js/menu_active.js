$(function(){
    //設定目前menu位置
    var active_val = $("#menu_active").val();
    var http = location.protocol;
    var slashes = http.concat("//");
    var host = slashes.concat(window.location.hostname);
    var $active_menu = $("#menu a[href='" + host + active_val +"']");
    $active_menu.parent('li').addClass('active').siblings().removeClass('active');
});