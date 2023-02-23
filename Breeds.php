<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Breeds</title>
</head>
<link href="CSS/style.css" rel="stylesheet">
<link href="CSS/normalize.css" rel="stylesheet">
<body>

<div class="logo">
    <a href="index.php"><img id="D4gLogo" src="Images/logoD4g.png" alt="logo"></a>
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
    </ul>
</nav>

<form>
    <div id="dogbreed">
        <label for="breedInfo">What breed is your dog?</label>
        <input type="text" id="breedInfo" name="breedInfo">
    </div>
    <div  id="weight">
        <label for="dogWeight">How much does your dog weigh?</label>
        <input type="text" id="dogWeight" name="dogWeight">
    </div>
    <div id="age">
        <label for="dogAge">How old is your dog?</label>
        <input type="text" id="dogAge" name="dogAge">
    </div>
</form>
<div class="ellipse" id="breedsEllipse"></div>

<div class="pawprints">
    <img  id="breedsPrints" src="Images/pawPrints.png" alt="pictures of paw prints.">
</div>
<div class="breedDogs">
    <img id="groupOfDogs" src="Images/groupOfDogs.png" alt="picture of dog">
</div>

</body>
</html><?php