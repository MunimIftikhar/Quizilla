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

    <nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top websiteheader " style="background:black " >
        <div>
                <a href="index.php">
                    <img src="images/logo.png" alt="logo" style="width: 250px;height:110px">
                </a>
            </div>
        <button class="navbar-toggler navbar-right navbarbutton" type="button" data-toggle="collapse" data-target="#collapse_target"  >
            <span class="sr-only">Togggle navigation</span>
            <div  class="fa fa-align-justify fa-2x nav navbar-right" ></div>
        </button>
<div class=" collapse navbar-collapse" id="collapse_target">
    <ul class= "nav navbar-nav navbar-right navbarcolumn"  >

        <li ><a href="index.php"><i class="fa fa-sign-in-alt" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white"> Home</label> </a></li>
        <li> <a href="aboutus.php"><i class="fa fa-user" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white"> About</label></a></li>
        <?php
        if(!isset($_SESSION['email']))
        {
            ?><li> <a href="login.php"><i class="fa fa-sign-in-alt" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white">LogIn</label></a></li>
            <li> <a href="signup.php"><i class="fa fa-sign-in-alt" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white">SignUp</label></a></li>
        <?php }
        else
        {
            ?>
        <li> <a href="courses.php"><i class="fa fa-user" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white"><?php echo $_SESSION['userName']; ?></label></a></li>
        <li> <a href="courses.php"><i class="fa fa-sign-in-alt" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white">ViewCourses</label></a></li>
        <li> <a href="logout.php"><i class="fa fa-sign-in-alt" style="color: white"></i><label style="font-size: medium; font-family: cursive;
    font-weight: bold; color: white">LogOut</label></a></li>
       <?php }

        ?>
    </ul>
</div>
    </nav>
</header>
</div>
</html>