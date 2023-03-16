<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// check if the create account form has been submitted
if (isset($_POST['create_account'])) {
    // get the form data
    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);

    // insert the new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($db, $query);

    // set the session variable for the user
    $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), "/");
    // redirect the user to the index page
    header('Location: ../HTML/index.php');
    exit();
}

// check if the login form has been submitted
if (isset($_POST['login'])) {
    // get the form data
    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $password = mysqli_real_escape_string($db, $_POST['psw']);

    // check if the username and password are correct
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        // set the session variable for the user
        $_SESSION['username'] = $username;
    setcookie('username', $username, time() + (86400 * 30), "/");
        // redirect the user to the index page
        header('Location: ../HTML/index.php');
        exit();
    } else {
        // display an error message using javascript alert
        echo "<script>alert('Invalid username or password.'); window.location.href='../HTML/Login.html';</script>";
        exit();
    }
}

//this is a test but we dont use this currently and dont really need it as of now
if (isset($_POST['pull_data'])) {
    $query = "SELECT * FROM dogstats";
    $dog_breeds = mysqli_query($db, $query);
    $_SESSION['dog_breeds'] = $dog_breeds;
    header('Location: ../HTML/Breeds.php');
    exit();
}
?>