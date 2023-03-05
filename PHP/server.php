<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the form data
    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);

    // insert the new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($db, $query);

    // redirect the user to the login page
    header('Location: Login.html');
    exit();
}
?>
