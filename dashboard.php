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
