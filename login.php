<?php require "header.php";
require "db.php";

session_start();
$error_msg='';
if(isset($_POST['log_in']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $login_user = "select * from users where email='$email' AND password='$password'";
    $run_user = mysqli_query($conn, $login_user);
    $check_user = mysqli_num_rows($run_user);
    if ($check_user == 0) {
        $error_msg = 'Password or Email is wrong, try again';
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email']=$email;
        $_SESSION['userName']=$row['userName'];
        setcookie('email', $email, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('password', $password, time() + (10 * 365 * 24 * 60 * 60));
        header('location:courses.php');
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

            <p style="color: white"><b>Username: </b> </p>

            <input class="form-control" type="email" size="25%" placeholder="Your Email" name="email" class="textInput" value="<?php echo @$_COOKIE['email']?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

          <br><br>

            <p style="color: white"><b>Password: </b> </p>

            <input class="form-control" type="password"  size="25%" placeholder="Your Password" name="password" class="textInput" value="<?php echo @$_COOKIE['password']?>" required pattern="^((\d|\w)+){4,}$">

        <br> <br> <br>

            <input type="submit" class="CbtnL btn btn-block" size="50%" name="log_in" value="Log in">

            <br> <br> <br>
            </form>

        </div>
        </div>


    </div>

</div>


<?php
require_once("footer.php")
?>



