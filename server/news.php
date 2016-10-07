<?php
header("content-type:application/json;charset=utf8");

$mysqli = mysqli_connect('localhost', 'root', 'root', 'baidunews');

if ($mysqli->connect_errno) {
	header("status: 404 Not Found");
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/*mysqli_close($mysqli);*/
/*$arr = array(
	array(
    "newType" => "baijia",
    "newImge" => "http://t12.baidu.com/it/u=49510244,367766167&fm=170&s=2F366F80D042DAE71C84550A0300C0D1&w=218&h=146&img.JPEG",
    "newTitle" => "测试新闻3",
    "newPubDate"=> "12分钟以前",
    "newMark"=> "热点",
    "newurl"=> "#"
	)
);
echo json_encode($arr); */
mysqli_query($mysqli,'set names utf8');//防止乱码
$res = $mysqli->query("SELECT id,newType,newImge,newTitle,newPubDate,newMark,newurl FROM news ORDER BY id DESC");

$res->data_seek(0);
$news_list=array();
while ($row = $res->fetch_assoc()) {
    $news_item=array(
    		"newType"=>$row['newType'], 
    		"newImge"=>$row['newImge'],
    		"newTitle"=>$row['newTitle'],
    		"newPubDate"=>$row['newPubDate'],
    		"newMark"=>$row['newMark'],
    		"newurl"=>$row['newurl']
    	);
    $news_list[]=$news_item;
}
echo json_encode($news_list);
?>