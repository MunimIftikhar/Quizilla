

<?php
require_once("header.php")
?>

    <div class="row LI">
    <div class="col-12 sig">
        <div id="main">
        <div class="article">

            <form method="post" action="login.php">
            <br>
            <h1 style="color: white" align="center" class="mt-3" >Login On  <img class="logo" src="images/logo.png"  width="200px" height="110px"> </h1><br>

            <p style="color: white"><b>Username: </b> </p>

            <input type="email" size="25%" placeholder="Your Email" name="Your_Email" class="textInput">

          <br><br>

            <p style="color: white"><b>Password: </b> </p>

            <input type="password"  size="25%" placeholder="Your Password" name="Your_Password" class="textInput" >

        <br> <br> <br>

            <input type="submit" class="CbtnL" size="50%" name="C_btn" value="Log in">

            <br> <br> <br>
            </form>

        </div>
        </div>


    </div>

</div>


<?php
require_once("footer.php")
?>



