<?php
require_once 'config.php';
//header("content-type:application/json;charset=utf8");
$_id = $_POST['id'];
$_newtype=$_POST['newtype'];
$_newImge=$_POST['newImge'];
$_newTitle=$_POST['newTitle'];
$_newPubDate=$_POST['newPubDate'];
$_newMark=$_POST['newMark'];
$_newurl=$_POST['newurl'];
//$mysqli = mysqli_connect('localhost', 'root', 'root', 'baidunews');
// printf("%s,%s,%s,%s,%s,%s",$_newtype,$_newImge,$_newTitle,$_newPubDate,$_newMark,$_newurl);
//mysqli_query($mysqli,'set names utf8');//防止乱码
if ($mysqli->connect_errno) {
	header('HTTP/1.1 500 Internal Server Error');
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!($stmt = $mysqli->prepare("INSERT INTO news(newtype,newImge,newTitle,newPubDate,newMark,newurl) VALUES(?,?,?,?,?,?)"))) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
if (!$stmt->bind_param("ssssss", $_newtype,$_newImge,$_newTitle,$_newPubDate,$_newMark,$_newurl)) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
}
if (!$stmt->execute()) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}
echo mysqli_insert_id($mysqli);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>