
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
// Change this to your connection info.
    $DATABASE_HOST = 'localhost:3306';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'comichq';
// Try and connect using the info above.
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if (!isset($_POST['username'], $_POST['password'])) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($stmt = $con->prepare('SELECT userid, password FROM users WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if ($_POST['password'] === $password) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                header('Location: home.php');
            } else {
                // Incorrect password
                echo 'Incorrect username and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Series</title>


</head>

<body>
<div class="banner">
    <img class="bannerimage" src="img/comics-background.jpg">
    <a href="index.php"><img class="logo" src="img/CBDB.png"></a>
</div>

<div style="padding-top: 0; float:right;" class="topnav">
    <a href="series.php">Series</a>
    <a href="characters.php">Characters</a>
    <a href="creators.php">Creators</a>
    <a href="register.php">Register</a>
    <a class="active" href="login.php">Login</a>
</div>
<div style="" >
    <h1 style="text-align: center">Login</h1>
    <form style="" action="login.php" method="post"">
        <p class="w3-group" style="margin-left: 45%;">  <label class = "w3-label">Username</label><input class = "w3-input" style = "width:200px" type="text" name="username" placeholder="Username" id="username" required></p>
        <p class="w3-group" style="margin-left: 45%;">  <label class = "w3-label">Password</label><input class = "w3-input" style = "width:200px" type="text" name="password" placeholder="Password" id="password" required></p>
        <p><input class="w3-input"  type="submit" name="submit" value="Login" style = "width:200px; margin-left: 45%"/></p>
    </form>
</div>
</body>

</html>

