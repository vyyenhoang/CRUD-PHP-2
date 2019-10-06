<?php
require 'header.html';
//check for authentication before we show any data
session_start();
//if (!isset($_SESSION['user_id'])) {
//    header('location:login.htm');
//    exit();
//}
//else {
    //set up query
    $sql = "SELECT * FROM courses";
    //run the query and store the results
    $result = $conn->query($sql);
    //start our table
    //loop through the data and create a new row with 2 columns for each record
//start our table
echo '<table border="1"><tr><th>ID</th><th>City</th><th>Date</th><th>Location</th><th>Course Type</th>';

//loop through the data and create a new row with 3 columns for each record
foreach ($result as $row) {
    echo '<tr>
            <td>' . $row['id']  . '</td>
            <td>' . $row['city']  . '</td>
			<td>' . $row['date']  . '</td>
			<td>' . $row['location']  . '</td>
			<td>' . $row['course_type']  . '</td>
			
			
			<td><a href="edit_course.php?id=' . $row['id'] . '">Edit</a></td>
			<td><a href="delete_course.php?id=' . $row['id'] . '"
			onclick="return confirm(\'Are you sure you want to delete ' . $row['city'] . '?\');">Delete</a></td></tr>';
}


//close the table
echo '</table>';

//disconnect
$conn = null;

require 'footer.html';
?>