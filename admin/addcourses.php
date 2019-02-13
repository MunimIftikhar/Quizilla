<?php require "header.php";
require "db.php";
?>
<br><br><br><br><br><br>
<div class="row LI">
    <div class="col-12 sig ">
        <div id="main">
            <div class="article login">

                        <div class="row">
                            <div class="col-12 color6">
                                <form action="uploadpic.php" method="post" enctype="multipart/form-data">
                                    <h1 style="color: white" align="center" class="mt-3" >Add courses</h1><br>

                                    <p style="color: white"><b>course Name</b> </p>

                                    <input class="form-control textInput" type="text" size="25%" placeholder="Couse Name" id="course_name" name="course_name">

                                    <br><br>
                                    <p style="color: white"><b>course Photo</b> </p>

                                    <input class="form-control" type="file" size="25%" placeholder="Couse Photo" id="course_photo" name="course_photo">

                                    <br><br>
                                    <input type="submit" value="Submit" class="CbtnL btn btn-block" size="50%">
                                </form>
                            </div>
                        </div>
            </div>
        </div>


    </div>

</div>
