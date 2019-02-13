<?php
session_start();
session_destroy();
unset($_COOKIE['adminName']);
unset($_COOKIE['adminemail']);
unset($_COOKIE['adminpassword']);
header('location:index.php');
