<!DOCTYPE html>
<html>

<body>

<?php
require 'connect.php';
//get the unique id
$id = $_GET['id'];
//Construct the delete sql
$sql = "DELETE FROM courses WHERE id='$id'";
$retval = mysqli_query($conn, $sql);
if ($retval == true){
    // die('could not delete data: '. mysqli_error($conn));
    echo "Deleted data successfully\n";
}
else {
    die('could not delete data: '. mysqli_error($conn));
}
header('location: courses.php');
?>


</body>

</html>