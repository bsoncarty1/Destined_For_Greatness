<?php
// start the session
// session_start();

// unset the username session variable
unset($_SESSION['username']);
setcookie("username", "", time() - 3600, "/");

// destroy the session
session_destroy();

// redirect the user to the index page
header('Location: ../HTML-PHP/Login.html');
exit();
?>