<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Video Game Library</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">

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

    <header>
        <nav>
        <input id="hamburger" type="checkbox" />
        <label class="hamburger_btn" for="hamburger">
        <span></span>
        </label>
        <ul class="hamburger_menu">
        <li><a class="menu_item" href="index.html">Home</a></li>
        <li><a class="menu_item" href="projecten.html">Projecten</a></li>
        <li><a class="menu_item" href="projecten.html">Services</a></li> 
        <li><a class="menu_item" href="profiel.html">Profiel</a></li> 
        <li><a class="menu_item" href="inloggen.html">Inloggen</a></li> </ul>
        
        </nav>
        </header>
