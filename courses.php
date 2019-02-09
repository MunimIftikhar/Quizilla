<?php
require_once("header_C.php")
?>
<div class="row slider">
    <div id="wrapper">
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

                                <a herf="quiz.php?courseId=1"><img src="images/itcs.jpg" width="100%" height="355px" alt="Course class="img-responsive"></a>

                            </div>
                        </div>
                        <div class="item">
                            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                                <center>
                                    <a herf="quiz.php?courseId=2"><img src="images/lts.jpg" width="100%" height="380px"alt="Course" class="img-responsive"></a>
                                </center>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-12 d-inline" style="padding-left: 0px; padding-right: 0px">
                                <center>
                                    <a herf="quiz.php?courseId=3"><img src="images/ooads.jpg" width="100%" height="380px"alt="Course" class="img-responsive"></a>
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

<div class="row subjects">
    <div class="class col-4 itc">

        <a herf="quiz.php?courseId=1"><img src="images/itc.jpg" width="300px" height="300px"><br><h1 style="color: white">Intoduction To Computing</h1></a>
        <p>

        </p>

    </div>
    <div class="class col-4 lt">

        <a herf="quiz.php?courseId=2"><img src="images/lt.jpg" width="300px" height="300px"><br><h1 style="color: white">Logical Thinking</h1></a>
        <p>

        </p>

    </div>
    <div class="class col-4 ooad">

        <a herf="quiz.php?courseId=3"><img src="images/ooad.jpg" width="300px" height="300px"><br><h1 style="color: white">Object Oriented Programming</h1></a>
        <p>

        </p>

    </div>
</div>

<?php
require_once("footer.php")
?>
