<?php
require "header.php";
require "db.php";

session_start();
$error_msg='';
if (isset($_POST['sign_up'])) {

    $username=$_POST['adminName'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['confirmpassword'];
    $check=true;
    $reg_email='^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$';
    $reg_pass="^((\d|\w)+){4,}$";
    if(!(preg_match($reg_email, $email) AND preg_match($reg_pass, $pass1) AND preg_match($reg_pass, $pass2)))
    {
        $check=false;
        $error_msg = "plz follow the format";
    }
    if($pass1!=$pass2)
    {
        $check=false;
        $error_msg = 'Password or Email is wrong, try again';
    }
    if(check!=false) {
        $query = "INSERT INTO admin (adminName, password, email) VALUES('$username', '$pass1','$email')";
        mysqli_query($conn, $query);
        $_SESSION['adminemail'] = $email;
        $_SESSION['adminName'] = $username;
        setcookie('adminemail', $email, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('adminName', $username, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('adminpassword', $pass1, time() + (10 * 365 * 24 * 60 * 60));
        header('location: index.php');
    }
}
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row SU">

    <div class="col-12 sig">
        <div id="main">
            <div class="article signin">

                <form method="post" enctype="multipart/form-data" >
                    <label style="color: white"><?php echo $error_msg; ?></label>
                    <br>
                    <h1 style="color: white" align="center" class="mt-3" >SignUp On  <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

                    <p style="color: white"><b>User Name: </b> </p>

                    <input type="text" size="25%" class="form-control" placeholder="User Name" name="adminName" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" class="textInput" >

                    <br><br>

                    <p style="color: white"><b>Email: </b> </p>

                    <input type="email" size="25%" class="form-control" name="email" class="textInput" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="Email" >

                    <br><br>
                    <p style="color: white"><b>Password: </b> </p>

                    <input type="password"  size="25%" class="form-control" placeholder="Password" name="password" class="textInput" required pattern="^((\d|\w)+){4,}$">
                    <br><br>
                    <p style="color: white"><b>Confirm Password: </b> </p>
                    <input type="password" size="25%" class="form-control" placeholder="Confirm Password" name="confirmpassword" class="textInput" required pattern="^((\d|\w)+){4,}$" >

                    <br> <br> <br>

                    <input type="submit" size="50%" value="Sign uP" class="btn btn-block CbtnL" name="sign_up" id="sign_up">

                    <br> <br> <br>
                </form>

            </div>
        </div>

    </div>
</div>
</body>

