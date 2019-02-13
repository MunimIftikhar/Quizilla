<?php require "header.php";
require "db.php";

if (isset($_POST['submit'])) {
   $ques=$_POST['question'];
    $opt1=$_POST['opt1'];
    $opt2=$_POST['opt2'];
    $opt3=$_POST['opt3'];
    $opt4=$_POST['opt4'];
    $correstAns=$_POST['crt'];
    $exp=$_POST['exp'];
    $courseid=$_POST['Course'];
    $query = "INSERT INTO qustions (quesId,question,opt1,opt2,opt3,opt4,correctAns,explaination,courseId) VALUES('$ques', '$opt1', '$opt2', '$opt3', '$opt4', '$correstAns', '$exp','$courseid')";
    mysqli_query($conn, $query);
    header('location:addquizzez.php');
}

?>
<br><br><br><br>
<div class="row LI">
    <div class="col-12 sig ">
        <div id="main">
            <div class="article login">

                <form action="" method="post" enctype="multipart/form-data">
                    <p style="color: white"><b>quiz Question</b> </p>
                    <input type="text" id="question" name="question" placeholder="question" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>option 1</b> </p>
                    <input type="text" id="opt1" name="opt1" placeholder="option 1" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>option 2</b> </p>
                    <input type="text" id="opt2" name="opt2" placeholder="option 2" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>option 3</b> </p>
                    <input type="text" id="opt3" name="opt3" placeholder="option 3" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>option 4</b> </p>
                    <input type="text" id="opt4" name="opt4" placeholder="option 4" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>Correct Answer</b> </p>
                    <input type="text" id="crt" name="crt" placeholder="Correct Answer" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>Explaination</b> </p>
                    <input type="text" id="exp" name="exp" placeholder="Explaination" class="form-control textInput"size="25%">
                    <br><br>
                    <p style="color: white"><b>Courses</b> </p>
                    <select id="Course" name="Course" class="form-control">
                        <?php
                        $i=0;
                        $query="SELECT * FROM courses ";
                        $result=mysqli_query($conn, $query);
                        while($arow=mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $arow["courseId"];?>"><?php echo $arow["courseName"];?></option>
                            <?php
                            $i = $i + 1;
                        }
                        ?>
                    </select>
                    <br><br>
                    <input type="submit" value="Submit" class="CbtnL btn btn-block" size="50%" name="submit">
                </form>

            </div>
        </div>


    </div>

</div>
