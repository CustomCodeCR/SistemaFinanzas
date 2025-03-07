<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";
$conn->query($sql);

header("Location: userList-view.php");
exit();
?>
