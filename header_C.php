<?php
session_start();
?>
<!DOCTYPE>
<html lang="en">
<head>
    <title>PROJECT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<div id="header">
    <header class="header">

        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top websiteheader " style="background:currentColor " >

            <div class="whole" style='width:0px auto; margin:0px auto'>
                <div class="row bar" >
                    <div class="col-4 logo">

                        &nbsp &nbsp &nbsp <img src ="images/logo.png"  width="250px" height="110px">
                    </div>

                        <div class="col-3 srch-bar " >

                        <input class="SRB" name="btn" type="button" value="Home" onclick="window.open('index.php')"/> &nbsp &nbsp &nbsp &nbsp
                    </div>
                    <div class="col-3 srch-bar" >
                        <input class="SRB_AB" name="btn" type="button" value="About Us" onclick="window.open('aboutus.php')"/>
                    </div>
                    <div class="col-3  log-in">
                        <input class="LIB" name="btn" type="button" value="<?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}else{/*header('location:index.php')*/echo "";} ?>" onclick="window.open('course.php')"/>
                    </div>
                    <div class="col-3 ">
                        <input class="CAB" name="btn" type="button" value="logout" onclick="window.open('logout.php')"/>

                    </div>
                </div>
        </div>
        </nav>
    </header>
</div>
