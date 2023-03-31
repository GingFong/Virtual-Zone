<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>   
   <!-- Navbar-->
   <a href="Homepage.html"><img src="img/logo1.png" class="logo"></a>
  <section class="nav">
    <nav>

      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="Homepage.html">Home</a></li>
          <li><a href="library.html">Bibliotheek</a></li>
          <li><a href="Contact.html">Contact</a></li>
          <a href="bestellen.html"><img class="cartlogo" src="img/cart.png" alt="cart"></a>
          <a href="login.php"><img class="profilelogo" src="img/Profile.png" alt="profilelogo"></a>
        </ul>
      </div>
    </nav>
  </section>

    <!-- Einde Navbar-->
<?php

session_start();

// Check if the user is logged in
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="dashboard-box">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>You have successfully logged in to your account.</p>
        <form method="post" action="logout.php">
            <input type="submit" name="submit" value="Logout">
        </form>
    </div>
</body>
</html>
