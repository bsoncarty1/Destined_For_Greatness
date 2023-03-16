<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Exercise</title>
</head>
<link href="../CSS/style.css" rel="stylesheet">
<link href="../CSS/normalize.css" rel="stylesheet">
<body>
<div class="logo">
    <a href="../HTML-PHP/index.php"><img id="D4gLogo" src="../Images/logoD4g.png" alt="logo"></a>
</div>
<div class="Title">
    <h3>DESTINED 4 GREATNESS</h3>
</div>
<nav class="navigation-bar">
    <ul id="Nav">
        <li><a href="Breeds.php">Breeds</a></li>
        <li><a href="Grooming.php">Grooming</a></li>
        <li><a href="Exercise.php">Exercise</a></li>
        <li><a href="About.php">About</a></li>
        <?php if (isset($_COOKIE['username'])):   ?>     
            <li><a href="#" id="username1">Welcome, <?php echo $_COOKIE['username']; ?></a></li>
            <li><a href="logout.php" id="logout">Logout</a></li>
        <?php else: ?>
            <li><a href="Login.html" id="login">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>
<div class="ellipse" id="exerciseellipse"></div>
<div class="pawprints">
    <img id="exerciseprints" src="../Images/pawPrints.png" alt="pictures of paw prints.">
</div>
<div class="homepagedog">
    <img id="buckydog" src="../Images/bucky.png" alt="picture of dog">
</div>
<div class="exerciseInfo">
    <p>Just like humans, your dog needs exercise. Making sure your dog gets the proper exercise will keep them
        healthier for longer along with reducing behavioral problems like barking, chewing and digging. A few forms of
        exercise can be playing catch, going on hikes or runs. Yes, taking your small dog for a walk might be just
        enough to wear them out but for bigger dogs it might not be enough, they might need to run and play to get the
        proper exercise. If you have a dog or are wanting to get a dog, always keep in mind what kind of exercise they
        will need and what you can provide. </p>
</div>
<div class="ExerciseTips">
    <h1>Exercise Tips!</h1>
</div>
</body>
</html>