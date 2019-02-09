<?php
require "header.php";
require "db.php";

session_start();
$error_msg='';
if (isset($_POST['sign_up'])) {

    $username=$_POST['userName'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['confirmpassword'];
    $check=true;
    if($_POST['password']!=$_POST['confirmpassword'])
    {
       $check=false;
        $error_msg = 'Password or Email is wrong, try again';
    }
    if(check!=false) {
        $query = "INSERT INTO users (userName, password, email) VALUES('$username', '$password','$email')";
        mysqli_query($conn, $query);
        $_SESSION['email'] = $email;
        setcookie('email', $email, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('password', $pass1, time() + (10 * 365 * 24 * 60 * 60));
        header('location: login.php');
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
            <div class="article">

                <form method="post" enctype="multipart/form-data" >
                    <label style="color: white"><?php echo $error_msg; ?></label>
                    <br>
                    <h1 style="color: white" align="center" class="mt-3" >SignUp On  <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

                    <p style="color: white"><b>User Name: </b> </p>

                    <input type="text" size="25%" class="form-control" placeholder="User Name" name="userName" required pattern = "[A-Za-z](\d|\w|\.|-){2,30}" class="textInput" >

                    <br><br>

                    <p style="color: white"><b>Email: </b> </p>

                    <input type="email" size="25%" class="form-control" name="email" class="textInput" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="Email" >

                    <br><br>
                    <p style="color: white"><b>Password: </b> </p>

                    <input type="password"  size="25%" class="form-control" placeholder="Password" name="password" class="textInput" required pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$">
                    <br><br>
                    <p style="color: white"><b>Confirm Password: </b> </p>
                    <input type="password" size="25%" class="form-control" placeholder="Confirm Password" name="confirmpassword" class="textInput" required pattern="^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$" >

                    <br> <br> <br>

                    <input type="submit" size="50%" value="Sign uP" class="btn btn-block CbtnL" name="sign_up" id="sign_up">

                    <br> <br> <br>
                </form>

            </div>
        </div>
        
    </div>
</div>
</body>
<?php
require_once("footer.php")
?>

