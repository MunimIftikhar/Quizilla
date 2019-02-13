<?php
require_once("header.php");
require_once("admin/db.php");

$query='SELECT * FROM courses';
$result=mysqli_query($conn, $query);

?>
<div class="row slider" style="background-color: black">
    <div id="wrapper" style="background-color: black">
        <div id="main-content">
            <div class="container-fluid con" style="padding-left: 0px; padding-bottom: 0px; width: 100%; padding-right: 0px" >
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-bottom: 10px solid white">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">

                                <a href="quiz.php?courseId=3"><img src="images/itcs.jpg" width="100%" height="100%" alt="Course" class="img-responsive"></a>
                                    
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                                <center>
                                    <a href="quiz.php?courseId=1"><img src="images/lts.jpg" width="100%" height="100%"alt="Course" class="img-responsive"></a>
                                </center>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                                <center>
                                    <a href="quiz.php?courseId=2"><img src="images/ooads.jpg" width="100%" height="100%"alt="Course" class="img-responsive"></a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button" style="opacity: 50%">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button" style="opacity: 50%">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div >
        </div >

    </div >
</div>
<div class="row subjects" style="background-color: black">
    <?php
    while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="class col-4 itc">
            <a href="quiz.php?courseId=<?php echo $row['courseId']; ?>">
                <img src="<?php echo $row['coursePhoto']; ?>" alt="?php echo $row['courseName']; ?>" style="width:300px;height:300px;border:0;">
            <br>
            <h1 style="color: white"><?php echo $row['courseName']; ?></h1></a>
        </div>
        <?php
    }
    ?>
</div>

<?php
require_once("footer.php")
?>
