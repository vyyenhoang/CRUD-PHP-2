<html>
<head><title>Save|Vy Hoang|Linh Duong</title></head>
<body>
<!--Create unordered list to navigate-->
<ul>
    <li><a href="courses.php">Go back and View Course List</a></li>

</ul>
<?php
// Create database variables

require  'connect.php';

// Store the user inputs in variables

if(isset($_POST['city']) && isset($_POST['date'])&& isset($_POST['location'])&& isset($_POST['course_type'])) {
    $city = $_POST ['city'];
    $date = $_POST ['date'];
    $location = $_POST ['location'];
    $course_type = $_POST ['course_type'];

}

$complete= true; //create variable indicating if form is complete or not
// Check each user input & show any error messages

if (empty ($city)) {
    $complete=false;
}

if (empty ($date)) {
    $complete=false;
}

if (empty ($location)) {
    $complete=false;
}

if (empty ($course_type)) {
    $complete=false;
}



// Check if there any errors, if not connect
if ($complete == true) {

    require 'connect.php';
    $sql = "INSERT INTO courses(city, date, location, course_type) VALUES ('$city', '$date', '$location', '$course_type')";



    //Execute the save
    if ( ($conn -> query ($sql) ) )   {
        echo "New course information created successfully. ";

    }

    else {
        echo "Error:" . $sql . "<br>" .$conn->error;
    }
    $conn -> close ();

    // Disconnect
    $conn = null;

    //Display a confirmation message
    echo "Your update was saved";

}
?>
</body>
</html>