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

</head>

<div id="header">
    <header class="header">

        <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top websiteheader " style="background:currentColor " >

            <div class="whole" style='width:0px auto; margin:0px auto'>
                <div class="row bar" >
                    <div class="col-4 logo">

                        &nbsp &nbsp &nbsp <img src ="images/logo.png"  width="250px" height="110px">
                    </div>

                    <div class="col-5 srch-bar" >

                        <input class="SRB" name="btn" type="button" value="Home" onclick="window.open('index.php')"/> &nbsp &nbsp &nbsp &nbsp

                        <input class="SRB_AB" name="btn" type="button" value="About Us" onclick="window.open('aboutus.php')"/>
                    </div>
                    <div class="col-1 log-in">
                        <input class="LIB" name="btn" type="button" value="<?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}else{/*header('location:index.php')*/echo "";} ?>" onclick="window.open('course.php')"/>
                    </div>
                    <div class="col-2 create-acc">
                        <input class="CAB" name="btn" type="button" value="logout" onclick="window.open('logout.php')"/>

                    </div>

                </div>
            </div>
        </nav>
    </header>
</div>
