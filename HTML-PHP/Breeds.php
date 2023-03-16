<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');

// check if the user is logged in
if (isset($_SESSION['dog_breeds'])) {
    $dog_breeds = $_SESSION['dog_breeds'];
} else {
    $query = "SELECT * FROM dogstats";
    $dog_breeds = mysqli_query($db, $query);
    $_SESSION['dog_breeds'] = $dog_breeds;
}


//get data from database make sure the sorts  
//by coloms weight and breed  
//store in cookie
//js
//getcookies 2 for wight and breesd
//for loop to get index
//use the data for math
$list_weight =  array();
$list_breed =  array();

foreach ($dog_breeds as $key => $value) {
  array_push($list_weight, $value['weight']);
  array_push($list_breed, $value['breed']);
}
setcookie('weight', json_encode($list_weight), time() + (86400 * 30), "/");

setcookie('breed', json_encode($list_breed), time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <title>Breeds</title>
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

  <form id="form">
    <div id="dogbreed">
      <label for="breedInfo">What breed is your dog?</label>
      <select name="breedInfo" id="breedInfo">
        <?php foreach($dog_breeds as $row){ ?>
        <option value="<?php echo $row['breed'] ?>"><?php echo $row['breed'] ?></option>
        <?php  } ?>
      </select>

    </div>
    <div id="weight">
      <label for="dog_breedseight">How much does your dog weigh?</label>
        <input id=dog_weight type="number" placeholder="Enter Weight" name="weight" required>
  
    </div>
    <div id="age">
      <label for="dogAge">How old is your dog?</label>
        <input id=dog_age type="number" placeholder="Enter Age" name="age" required>
    </div>
    <div>
      <input type="submit" id="submit-btn">
    </div>
  </form>

  <div class="ellipse" id="breedsEllipse"></div>

    <div class="pawprints">
      <img id="breedsPrints" src="../Images/pawPrints.png" alt="pictures of paw prints.">
    </div>
    <div class="breedDogs">
      <img id="groupOfDogs" src="../Images/DoggoScott.png" alt="picture of dog">
    </div>
    <script src="../JavaScript/script.js"></script>

</body>
</html>