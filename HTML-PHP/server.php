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
    if (!mysqli_query($db, $query)) {
        // log the error in errorLog.php
        $error_message = mysqli_error($db);
        $error_file = 'errorLog.php';
        $error_log = fopen($error_file, 'a') or die('Unable to open file!');
        fwrite($error_log, date('Y-m-d H:i:s') . ': ' . $error_message . "\n");
        fclose($error_log);
    }

    // fetch the user's admin status from the database
    $query = "SELECT admin FROM users WHERE username='$username'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $admin = $row['admin'] == 'Y';


    // set the session variable for the user
    $_SESSION['username'] = $username;
    $_SESSION['admin'] = $admin;

    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('admin', $admin, time() + (86400 * 30), "/");

    // redirect the user to the index page
    header('Location: ../HTML-PHP/index.php');
    exit();
}

// get the form data
$username = mysqli_real_escape_string($db, $_POST['uname']);
$password = mysqli_real_escape_string($db, $_POST['psw']);

// check if the username and password are correct
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db, $query);
if (mysqli_num_rows($result) == 1) {
    // fetch the user's admin status from the database
    $row = mysqli_fetch_assoc($result);
    $admin = $row['admin'] == 'Y';

    // check if the user has an admin cookie set
    if (isset($_COOKIE['admin']) && $_COOKIE['admin'] == 'Y') {
        $admin = true;
    }

    // set the session variable for the user
    $_SESSION['username'] = $username;
    $_SESSION['admin'] = $admin;

    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('admin', $admin, time() + (86400 * 30), "/");

    // redirect the user to the index page
    header('Location: ../HTML-PHP/index.php');
    exit();
}

//this is a test but we dont use this currently and dont really need it as of now
if (isset($_POST['pull_data'])) {
    $query = "SELECT * FROM dogstats";
    $dog_breeds = mysqli_query($db, $query);
    $_SESSION['dog_breeds'] = $dog_breeds;
    header('Location: ../HTML-PHP/Breeds.php');
    exit();
}
?>