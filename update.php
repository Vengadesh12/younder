<?php
include "db.php";
$id = $_POST['id'];
$project_name = $_POST['project_name'];
mysqli_query($conn, "UPDATE projects SET project_name='$project_name' WHERE id=$id");
header("Location: index.php");
?>
