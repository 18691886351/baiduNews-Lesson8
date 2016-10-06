$(document).ready(function() {


    $(".container nav ul li").each(function(index, item) {
        var _deviceWidth = $("body").width();
        if ($(item).find("a").html().length > 2) {
            $(item).width(_deviceWidth / 3);
        } else {
            $(item).width(_deviceWidth / 6);
        }
    })
})
