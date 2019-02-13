<?php
require_once("header_C.php");
require "db.php";
$courseId=$_GET['courseId'];
$Questions = "select * from questions where courseId='$courseId'";
$result = mysqli_query($conn, $Questions);
$ansid=1;
?>

    <div class="row QuizRow">
        <div class="col-12 center QuizDiv text-center">
            <br><br>
            <?php
            if($courseId==1)
            {
                ?><h1 class="text-center text-white font-weight-bold text-uppercase" >Introduction to Computing </h1><br>
                <?php
            }
            if($courseId==2)
            {
                ?><h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >Logical Thinking </h1><br>
                <?php
            }
            if($courseId==3)
            {
                ?><h1 class="text-center text-white font-weight-bold text-uppercase bg-dark" >Object oriented programming </h1><br>
                <?php
            }?>
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
<?php
require_once("footer.php")
?>