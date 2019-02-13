<?php
require_once("header.php");
require "admin/db.php";
$courseId=$_GET['courseId'];
$courses="select * from courses where courseId='$courseId'";
$course_result = mysqli_query($conn, $courses);
$course_rows = mysqli_fetch_array($course_result);
$Questions = "select * from questions where courseId='$courseId'";
$result = mysqli_query($conn, $Questions);
$ansid=1;
?>
    <br><br><br><br>
    <div class="row QuizRowEXP center">
        <div class="col-12 center QuizDivEXP text-center">
            <br><br>
            <h1 class="text-center text-white font-weight-bold text-uppercase" ><?php echo $course_rows['courseName']; ?></h1><br>
            <br><br>
            <?php
            $Questions = "select * from questions where courseId='$courseId'";
            $result = mysqli_query($conn, $Questions);
            $i = 1;
            while($rows = mysqli_fetch_array($result)) {
                // print_r($rows);
                ?><h6>(<?php echo $i; ?>)</h6><br>
                <h4>Correct Answer:</h4><h6><?php echo $rows['correctAns']; ?></h6><br>
                <h4>Explanation:</h4><h6><?php echo $rows['explaination']; ?></h6><br><?php
                $i++;
            }
            ?>
    </div>
    </div>