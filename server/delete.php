<?php
header("content-type:application/json;charset=utf8");
$id = $_POST['id'];
$mysqli = mysqli_connect('localhost', 'root', 'root', 'baidunews');

if ($mysqli->connect_errno) {
	header('HTTP/1.1 500 Internal Server Error');
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!($stmt = $mysqli->prepare("DELETE FROM news where id=?"))) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
if (!$stmt->bind_param("i", $id)) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
}
if (!$stmt->execute()) {
    header('HTTP/1.1 500 Internal Server Error');
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
echo $id;
?>