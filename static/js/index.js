$(document).ready(function() {

    /*
    动态的根据nav li的字数来进行排列
    */
    $(".container nav ul li").each(function(index, item) {
        var _deviceWidth = $("body").width();
        if ($(item).find("a").html().length > 2) {
            $(item).width(_deviceWidth / 3);
        } else {
            $(item).width(_deviceWidth / 6);
        }
    })


    /*nav li点击后
    1.对应的ul显示，兄弟ul隐藏
    2.li a 显示下划线
    */
    $(".container nav ul li a").click(function() {
        $(this).addClass("choice");
        $(this).parent().siblings().find("a").removeClass("choice");
        var _list_item = "#" + $(this).attr("data") + "-item-list";
        /*alert(_list_item);
*/
        $(_list_item).removeClass("hide");
        $(_list_item).siblings().addClass("hide");
    });
})
