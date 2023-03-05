<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// check if the create account form has been submitted
if (isset($_POST['create_account'])) {
    // get the form data
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // create a new user in the database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
}


