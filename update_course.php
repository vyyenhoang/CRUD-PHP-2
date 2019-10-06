<html>
<body>
<?php
require 'connect.php';
$city = mysqli_real_escape_string($conn,$_POST['city']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$course_type = mysqli_real_escape_string($conn,$_POST['course_type']);
//primary key make sure the data is updated in actual id
$id = $_POST['id'];
{
    $sql = "UPDATE courses SET city = '$city', date = '$date', location = '$location', course_type = '$course_type' WHERE id='$id'";
    mysqli_query($conn, $sql) or die('Error updating database.');
    mysqli_close($conn);
    header('Location: courses.php');
}

?>
</body>
</html>