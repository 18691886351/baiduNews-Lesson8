$(document).ready(function() {

    var refreshNews = function() {
        $.ajax({
            type: "post",
            url: "../../server/news.php",
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                console.log(data);
                /*    
                for (var i in data) {
                    console.log(data[i]);
                    var _ul = $("#" + data[i].newType + "-item-list")
                    var _li = $("<li></li>").addClass("item").appendTo(_ul);
                    var _a = $("<a></a>").attr("href", "https://m.baidu.com/?action=newsdetail&nid=18010140451430649354").appendTo(_li);
                    var _image_div = $("<div></div>").addClass("image").appendTo(_a);
                    $("<img>").attr("src", data[i].newImge).appendTo(_image_div);
                    var _content_div = $("<div></div>").addClass("content").appendTo(_a);
                    $("<h1></h1>").html(data[i].newTitle).appendTo(_content_div);
                    $("<p></p>").html(data[i].newPubDate).appendTo(_content_div);
                    $("<span></span>").html(data[i].newMark).appendTo(_content_div);
                }*/
                $.each(data, function(index, item) {
                    var _ul = $("#" + item.newType + "-item-list")
                    var _li = $("<li></li>").addClass("item").appendTo(_ul);
                    var _a = $("<a></a>").attr("href", "https://m.baidu.com/?action=newsdetail&nid=18010140451430649354").appendTo(_li);
                    var _image_div = $("<div></div>").addClass("image").appendTo(_a);
                    $("<img>").attr("src", item.newImge).appendTo(_image_div);
                    var _content_div = $("<div></div>").addClass("content").appendTo(_a);
                    $("<h1></h1>").html(item.newTitle).appendTo(_content_div);
                    $("<p></p>").html(item.newPubDate).appendTo(_content_div);
                    $("<span></span>").html(item.newMark).appendTo(_content_div);
                })
            },
            dataType: "json"
        });

        /*脱机测试代码
        var _news_item = {
                    "newType": "jingxuan",
                    "newImge": "http://t12.baidu.com/it/u=2080585901,1074572488&fm=170&s=2941736EEE48045541D0AC8203009093&w=218&h=146&img.JPEG",
                    "newTitle": "测试新闻",
                    "newPubDate": "10分钟以前",
                    "newMark": "热点",
                    "newurl": "https://m.baidu.com/?action=newsdetail&nid=18010140451430649354"
        }*/
    }
    refreshNews();
});
