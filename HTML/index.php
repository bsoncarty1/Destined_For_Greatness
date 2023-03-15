<?php
session_start();

// check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = '';
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Destined 4 Greatness</title>
</head>
<link href="../CSS/style.css" rel="stylesheet">
<link href="../CSS/normalize.css" rel="stylesheet">
<body>
<div class="logo">
    <a href="index.php"><img id="D4gLogo" src="../Images/logoD4g.png" alt="logo"></a>
</div>
<div class="Title">
    <h3>DESTINED 4 GREATNESS</h3>
</div>

<nav class="navigation-bar">
    <ul id="Nav">
        <li><a href="Breeds.php">Breeds</a></li>
        <li><a href="Grooming.html">Grooming</a></li>
        <li><a href="Exercise.html">Exercise</a></li>
        <li><a href="About.html">About</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="#" id="username1">Welcome, <?php echo $username; ?></a></li>
            <li><a href="../PHP/logout.php" id="logout">Logout</a></li>
        <?php else: ?>
            <li><a href="Login.html" id="login">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>

<div>

</div>

<div class="ellipse"></div>
<div class="pawprints">
    <img id="prints" src="../Images/pawPrints.png" alt="pictures of paw prints.">
</div>

<div class="homepagedog">
    <img id="dog" src="../Images/scotts_doggo.png" alt="picture of dog">
</div>

<div class="homepageinfo">
    <h2>All the information about man's best friend, in one location!</h2>
</div>
</body>
</html>