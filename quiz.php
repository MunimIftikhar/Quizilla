<?php
require_once("header.php");
require "db.php";
$courseId=$_GET['courseId'];
$Questions = "select * from questions where courseId='$courseId'";
$result = mysqli_query($conn, $Questions);
$ansid=1;
?>

<div class="row QuizRow">
    <div class="col-12 center QuizDiv text-center">
        <form action="result.php?courseId=<?php echo $courseId; ?>" method="post">
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
            }
            for($i=1;$i<=10;$i++){
            if (mysqli_num_rows($result) > 0) {
            while($row =mysqli_fetch_array($result)) {
            ?>
            <br>
            <div class="center" style="color:white">
                <br>
                <p class="">  <?php echo $i ." : ". $row['question']; ?> </p>
                        <div class="">
                            <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['opt1']; ?>" > <?php echo $row['opt1']; ?>
                            <br>
                        </div>
                    <div class="">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['opt2']; ?>" > <?php echo $row['opt2']; ?>
                        <br>
                    </div>
                        <div class="">
                            <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['opt3']; ?>" > <?php echo $row['opt3']; ?>
                            <br>
                        </div>
                            <div class="">
                                <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['opt4']; ?>" > <?php echo $row['opt4']; ?>
                                <br>
                            </div>
                <?php $ansid = $ansid + 1; ?>
                        <?php

                    } }
                }

                ?>
            </div>

            <br>
            <input type="submit" name="submit" Value="Submit" class="CbtnL btn btn-block m-auto d-block" size="50%" /> <br>
        </form>
        </div>
</div>
<?php
require_once("footer.php")
?>




