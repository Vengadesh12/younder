<?php
include "db.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM projects WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    Project Name: <input type="text" name="project_name" value="<?php echo $data['project_name']; ?>">
    <button type="submit">Update</button>
</form>
