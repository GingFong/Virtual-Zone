<html>

<head>
    <title>Register - Online Gameshop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Create Your Account</h1>
    <form method="post" action="register.php">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Create Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="">Select a Country</option>
            <option value="usa">USA</option>
            <option value="uk">UK</option>
            <option value="canada">Canada</option>
        </select><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        <label for="newsletter">Subscribe to Newsletter:</label>
        <input type="checkbox" id="newsletter" name="newsletter" value="yes"><br><br>
        <input type="submit" value="Create Account">
    </form>
</body>

</html>