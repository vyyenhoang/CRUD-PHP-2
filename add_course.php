<?php
require 'header.html';
//check for authentication before we show any data
session_start();
//if (!isset($_SESSION['user_id'])) {
//    header('location:login.htm');
//    exit();
//}
?>
    <section class="wrapper">
        <section class="admin-row-1">
            <h1>Add A New Course</h1>
        </section>
        <section class="admin-row-2">
            <form method="post" action="save_course.php" enctype="multipart/form-data">

                <div><input name="city" placeholder="City"/></div>

                <div><input type="date" name="date" placeholder="Date"/></div>

                <div><input name="location" placeholder="Location"></div>

                <div>
                    <label for="course_type">Select a Course Type</label>

                    <?php


                    // Create database variables
                    require 'connect.php';

                    $sql2="SELECT course_type FROM course_types";
                    $result=mysqli_query($conn,$sql2) or die ("Could not execute query!");

                    if(!$result){
                        echo"Error with results";
                    }
                    if (mysqli_num_rows($result) > 0) {
                        //open the select tag before the loop
                        echo"<select name='course_type'>";
                        //populate the select
                        echo"<option> ---Select Course Type---  </option>";
                        while($row = mysqli_fetch_assoc($result)) {
                            $course_type = $row["course_type"];

                            echo"<option value= " .$course_type.">  ".$course_type."  </option>"  ;
                        }
                        //close the select tag after the loop
                        echo"</select>";
                        echo "<br>";
                    }
                    else {
                        echo "0 results";
                    }
                    ?>

                </div>
                <div><input type="submit" name="submit" value="Register" /></div>

            </form>
        </section>
    </section>
<?php require 'footer.html'; ?>