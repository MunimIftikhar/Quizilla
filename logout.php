<?php
session_start();
session_destroy();
unset($_COOKIE['userName']);
unset($_COOKIE['email']);
unset($_COOKIE['password']);
header('location:index.php');
