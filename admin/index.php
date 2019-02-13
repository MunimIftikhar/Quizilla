<?php require "header.php";
require "db.php";

session_start();
$error_msg='';
$check=true;
if(isset($_SESSION['adminemail']))
{
    header('location:addcourses.php');
}
else if(isset($_COOKIE['adminemail'])){
    $_SESSION['adminemail'] = $_COOKIE['adminemail'];
    $_SESSION['adminName'] = $_COOKIE['adminName'];
    header('location:addcourses.php');
}
else {

    if (isset($_POST['log_in'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login_user = "select * from admin where email='$email' AND password='$password'";
        $run_user = mysqli_query($conn, $login_user);
        $check_user = mysqli_num_rows($run_user);
        $reg_email = '^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$';
        $reg_pass = "^((\d|\w)+){4,}$";
        if (!(preg_match($reg_email, $email) AND preg_match($reg_pass, $password))) {
            $check = false;
            $error_msg = "plz follow the format";
        }
        if ($check_user == 0 AND check == false) {
            $error_msg = 'Password or Email is wrong, try again';
        } else {
            $row = mysqli_fetch_array($run_user);
            $_SESSION['adminemail'] = $email;
            $_SESSION['adminName'] = $row['adminName'];
            setcookie('adminemail', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('adminadminName', $row['adminName'], time() + (10 * 365 * 24 * 60 * 60));
            setcookie('adminpassword', $password, time() + (10 * 365 * 24 * 60 * 60));
            header('location:addcourses.php');
        }

    }
}
?>

<?php
require_once("header.php")
?>

<div class="row LI">
    <div class="col-12 sig ">
        <div id="main">
            <div class="article login">

                <form method="post" action="">
                    <label style="color: white"><?php echo $error_msg; ?></label>
                    <br>
                    <h1 style="color: white" align="center" class="mt-3" >Log On to <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

                    <p style="color: white"><b>Email: </b> </p>

                    <input class="form-control" type="email" size="25%" placeholder="Your Email" name="email" class="textInput" value="<?php echo @$_COOKIE['adminemail']?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                    <br><br>

                    <p style="color: white"><b>Password: </b> </p>

                    <input class="form-control" type="password"  size="25%" placeholder="Your Password" name="password" class="textInput" value="<?php echo @$_COOKIE['adminpassword']?>" required pattern="^((\d|\w)+){4,}$">
                    <span style=" font-weight: bold; font-size: 15px;font-family: 'sans-serif';color: white ; float: left">
            <a href="forgetpassword.php" style="float: left;color: white ; ">Forgot Password</a><br>
            </span>
                    <br> <br> <br>
                    <input type="submit" class="CbtnL btn btn-block" size="50%" name="log_in" value="Log in">

                    <br> <br> <br>

                </form>
            </div>
        </div>


    </div>

</div>


