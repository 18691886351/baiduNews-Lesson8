$(document).ready(function() {
    refreshNews();
});


var refreshNews = function() {
    $.ajax({
        type: "post",
        url: "../../server/news.php",
        error: function(data) {
            console.log(data);
        },
        success: function(data) {
            console.log(data);
            $("#news-table tbody").empty();
            $.each(data, function(index, item) {
                var th1 = $("<th></th>").html(item.newType);
                /*var th2 = $("<th></th>").html(item.newImge);*/
                var th3 = $("<th></th>").html(item.newTitle);
                var th4 = $("<th></th>").html(item.newPubDate);
                var th5 = $("<th></th>").html(item.newMark);
                var th6 = $("<th></th>").html(item.newurl);
                var th7 = $("<th></th>");
                var button1 = $("<button></button>").attr("type", "button").addClass("btn btn-info").html("编辑");
                var button2 = $("<button></button>").attr("type", "button").addClass("btn btn-danger").html("删除");
                var _div = $("<div></div>").addClass("operation").append(button1, button2);
                th7.append(_div);
                var tr = $("<tr></tr>").append(th1, th3, th4, th5, th6, th7);
                $("#news-table tbody").append(tr);
            })
        },
        dataType: "json"
    });
}
