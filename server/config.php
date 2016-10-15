<?php  
$mysqli = mysqli_connect('localhost', 'root', 'root', 'baidunews');
mysqli_query($mysqli,'set names utf8');//防止乱码
header("content-type:application/json;charset=utf8");
?>