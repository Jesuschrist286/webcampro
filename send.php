<?php

session_start();
include "db.php";
$msg = $_POST['msg'];
$name = $_SESSION['name'];
$_SESSION = $_POST['msg'];
$sql = "insert into posts(msg,name) values('$msg','$name');";
$result = $conn->query($sql);

header("Location:home.php");


?>