<?php
header("content-type:application/json;charset=utf8");

$mysqli = mysqli_connect('localhost', 'root', 'root', 'baidunews');

if ($mysqli->connect_errno) {
	header('HTTP/1.1 500 Internal Server Error');
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

$id = $_POST['id'];

if($id==""){
    $res = $mysqli->query("SELECT id,newType,newImge,newTitle,newPubDate,newMark,newurl FROM news ORDER BY id DESC");
    $res->data_seek(0);
    $news_list=array();
    while ($row = $res->fetch_assoc()) {
        $news_item=array(
            "id" => $row['id'],
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
}else{
    /*echo PHP_VERSION;*/
    $stmt = $mysqli->stmt_init();
    $query="SELECT id,newType,newImge,newTitle,newPubDate,newMark,newurl FROM news WHERE id = ?";
    if(!$stmt->prepare($query))
    {
        print "Failed to prepare statement\n";
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
    /*$res = $stmt->get_result();*/
    $stmt->bind_result($_id, $_newType,$_newImge,$_newTitle,$_newPubDate,$_newMark,$_newurl);
    $news_list=array();
    while ($stmt->fetch()) {
        $news_item=array(
        "id" => $_id,
        "newType"=>$_newType, 
        "newImge"=>$_newImge,
        "newTitle"=>$_newTitle,
        "newPubDate"=>$_newPubDate,
        "newMark"=>$_newMark,
        "newurl"=>$_newurl
        );
        $news_list[]=$news_item;
    }
    /* close statement */
    mysqli_stmt_close($stmt);
    echo json_encode($news_list);
}
/* close connection */
mysqli_close($mysqli);
?>