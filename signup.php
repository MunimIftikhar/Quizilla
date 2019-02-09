

<?php
require_once("header.php")
?>

<div class="row SU">

    <div class="col-12 sig">
        <div id="main">
            <div class="article">

                <form method="post" action="sign.php">
                    <br>
                    <h1 style="color: white" align="center" class="mt-3" >SignUp On  <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

                    <p style="color: white"><b>Name: </b> </p>

                    <input type="email" size="25%" placeholder="Your Email" name="Your_Email" class="textInput">

                    <br><br>

                    <p style="color: white"><b>Email: </b> </p>

                    <input type="email" size="25%" placeholder="Your Email" name="Your_Email" class="textInput">

                    <br><br>
                    <p style="color: white"><b>Password: </b> </p>

                    <input type="password"  size="25%" placeholder="Password" name="Your Password" class="textInput" >
                    <br><br>
                    <p style="color: white"><b>Confirm Password: </b> </p>
                    <input type="password" size="25%" placeholder="Confirm Password" name="Confirm_Password" class="textInput" >

                    <br> <br> <br>

                    <input type="submit" class="CbtnL" size="50%" name="C_btn" value="Sign uP">

                    <br> <br> <br>
                </form>

            </div>
        </div>
        
    </div>
</div>

<?php
require_once("footer.php")
?>

