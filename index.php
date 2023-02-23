<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

//CHANGES
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Destined 4 Greatness</title>
</head>
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/normalize.css" rel="stylesheet">
<body>
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div class="logo">
    <a href="index.php"><img id="D4gLogo" src="Images/logoD4g.png" alt="logo"></a>
</div>
<div class="Title">
    <h3>DESTINED 4 GREATNESS</h3>
</div>
<nav class="navigation-bar">
    <ul id="Nav">
        <li><a href="Breeds.html">Breeds</a></li>
        <li><a href="Grooming.html">Grooming</a></li>
        <li><a href="Exercise.html">Exercise</a></li>
        <li><a href="About.html">About</a></li>
    </ul>
</nav>
<div class="ellipse"></div>
<div class="pawprints">
    <img  id="prints" src="Images/pawPrints.png" alt="pictures of paw prints.">
</div>

<div class="homepagedog">
    <img id="dog" src="Images/randomDog.png" alt="picture of dog">
</div>

<div class="homepageinfo">
    <h2>All the information about man's best friend, in one location!</h2>
</div>
</body>
</html>