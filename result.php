<?php
require_once("header_C.php");
require "db.php";
$courseId=$_GET['courseId'];
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
                <h1 class="text-white"> Results </h1>

            <h2>Questions Attempted</h2>

                        <?php
                        $counter = 0;
                        $Resultans = 0;
                        if(isset($_POST['submit'])){
                        if(!empty($_POST['quizcheck'])) {
                        // Counting number of checked checkboxes.
                        $checked_count = count($_POST['quizcheck']);
                        // print_r($_POST);
                        ?>

                        <h3>  <?php
                            echo "Out of 10, You have attempt ".$checked_count." option."; ?></h3>


            <?php
                        // Loop to store and display values of individual checked checkbox.
                        $selected = $_POST['quizcheck'];

                        $Questions = "select * from questions where courseId='$courseId'";
                        $result = mysqli_query($conn, $Questions);
                        $i = 1;
                        while($rows = mysqli_fetch_array($result)) {
                            // print_r($rows);
                            $flag = $rows['correctAns'] == $selected[$i];

                            if($flag){
                                // echo "correct ans is ".$rows['ans']."<br>";
                                $counter++;
                                $Resultans++;
                                // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                            }else{
                                $counter++;
                                // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                            }
                            $i++;
                        }
                        ?>


                    <h2>
                            Your Total score
                    </h2>
                        <h3>
                            <?php
                            echo " Your score is ". $Resultans.".";
                            }
                            else{
                                echo "<b>Please Select Atleast One Option.</b>";
                            }
                            }
                            ?>
                        </h3><br><br>
            <h4>
                For explaination click!
            </h4><br>
            <a href="explanaition.php?courseId=<?php echo $courseId; ?>" class="CbtnL btn btn-block m-auto d-block" size="50%"> Explanaition </a>
            </div>

    </div>
<?php
require_once("footer.php")
?>