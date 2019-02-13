<?php require "header.php";
require "db.php";
if(isset($_POST['ForgetPass']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $password2=$_POST['cpass'];
    $reg_email='^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$';
    $reg_pass='^[a-zA-z0-9]+[^#&<>\~;$^%{}?,]$';
    if(!(preg_match($reg_email, $email) AND preg_match($reg_pass, $password) AND preg_match($reg_pass, $password2)))
    {
        echo "plz follow the format";
    }

    else
    {
        if($password == $password2)
        {
            $insert = "update admin set password = '$password' where email = '$email'";
            $inserts = mysqli_query($con, $insert);
            header('location:login.php');
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
                        <br>
                        <h1 style="color: white" align="center" class="mt-3" >Log On to <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

                        <p style="color: white"><b>Username: </b> </p>

                        <input class="form-control" type="email" size="25%" placeholder="Your Email" name="email" class="textInput" value="<?php echo @$_COOKIE['email']?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                        <br><br>

                        <p style="color: white"><b>Password: </b> </p>

                        <input class="form-control" type="password"  size="25%" placeholder="Your Password" name="password" class="textInput" required pattern="^((\d|\w)+){4,}$">

                        <br> <br> <br>
                        <p style="color: white"><b>Confirm Password: </b> </p>

                        <input class="form-control"  type="password"  size="25%" placeholder="Your Password" name="cpass" id="cpass" class="textInput" required pattern="^((\d|\w)+){4,}$">

                        <br> <br> <br>
                        <input type="submit" class="CbtnL btn btn-block" size="50%" name="log_in" value="Log in">

                        <br> <br> <br>
                    </form>
                </div>
            </div>


        </div>

    </div>