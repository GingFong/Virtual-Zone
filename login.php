<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
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
          <script src="cart.js" defer></script>
        </ul>
      </div>
    </nav>
  </section>
<body>
	<div class="login-box">
		<h1>Login</h1>
		<form method="post" action="login.php">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" placeholder="Enter your username">

			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter your password">

			<input type="submit" name="submit" value="Login">
		</form>
	</div>
</body>
</html>


<?php

session_start();

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "login_system");
    
    // Check connection
    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists in database
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }

    mysqli_close($conn);
}

?>
