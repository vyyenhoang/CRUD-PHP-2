<!DOCTYPE html>
<head>
    <?php
    require 'connect.php';
    //authentication check
    //store the selected from the url
    $id = $_GET['id'];
    //write and run the sql select and store the results
    $sql = "SELECT * FROM courses WHERE id = '$id'";
    $result = $conn -> query($sql);
    //store the name and email into variables
    foreach ($result as $row) {
        $city  = $row['city'];
        $date  = $row['date'];
        $location  = $row['location'];
        $course_type  = $row['course_type'];
    }
    //disconnect
    $conn = null;
    ?>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Update Course</title>
</head>
<body>
<h1>Update Course</h1>
<form action="update_course.php" method="post">
    <div>
        <label for="city">City:</label>
        <input type="text" name="city" value="<?php echo $city; ?>" />
    </div>
    <div>
        <label for="date">Date:</label>
        <input type="date" name="date" value="<?php echo $date; ?>" />
    </div>
    <div>
        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo $location; ?>" />
    </div>
    <div>
        <label for="course_type">Course type:</label>
        <input type="text" name="course_type" value="<?php echo $course_type; ?>" />
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" name="save" value="Save" />
    </div>
</form>
</body>
</html>