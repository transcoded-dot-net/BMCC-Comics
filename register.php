
<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the users table.

$page_title = 'Register';

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	// Check for a last name:
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}
	
	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}
	//Check for DOB
	if (empty($_POST['date_of_birth'])) {
		$errors[] = 'You forgot to enter your date of birth.';
	} else {
		$d = mysqli_real_escape_string($dbc, trim($_POST['date_of_birth']));
	}
	// Check for a password and match against the confirmed password:
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your password did not match the confirmed password.';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your password.';
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO users (FNAME, LNAME, EMAIL, PASSWORD, DOB) VALUES ('$fn', '$ln', '$e', '$p', '$d' )";				
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>You are now registered! </p><p><br /></p>';

		} else { // If it did not run OK.

			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

		} // End of if ($r) IF.

		mysqli_close($dbc); // Close the database connection.

		// Quit the script:
		exit();

	} else { // Report the errors.

		echo '<h1>Error!</h1>
		<p>The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';

	} // End of if (empty($errors))

	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>
<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css"></head>
<body>
    <div class="banner">
        <img class="bannerimage" src="img/comics-background.jpg">
        <a href="index.php"><img class="logo" src="img/CBDB.png"></a>
    </div>

    <div style="padding-top: 0; float:right;" class="topnav">
        <a href="series.php">Series</a>
        <a href="teams.php">Teams</a>
        <a href="characters.php">Characters</a>
        <a href="creators.php">Creators</a>
        <a class="active" href="register.php">Register</a>
        <a href="login.php">Login</a>
    </div>
<div ><h1 style="text-align:center">Register</h1>
    <form action="register.php" method="post" style="margin-left: 42%;">
        <p class="w3-group" style =" display:flex; align-items:center">  <label class = "w3-label">First Name:</label><input class="w3-input" style = "width:200px" type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></p>
        <p class="w3-group" style =" display:flex; align-items:center"><label class = "w3-label">Last Name:</label><input class="w3-input" style = "width:200px"type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p>
        <p class="w3-group" style ="display:flex; align-items:center">  <label class = "w3-label">Username:</label><input class="w3-input" style = "width:200px" type="text" name="username" size="15" maxlength="20" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/></p>
        <p class="w3-group" style ="display:flex; align-items:center"><label class = "w3-label">Email Address:</label> <input class="w3-input" style = "width:200px" type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /> </p>
        <p class="w3-group" style ="display:flex; align-items:center"><label class = "w3-label">Date of Birth:</label> <input class="w3-input"  style = "width:200px"type="text" name="date_of_birth" size="15" maxlength="10" value="<?php if (isset($_POST['date_of_birth'])) echo $_POST['date_of_birth']; ?>" />  </p>
        <p class="w3-group" style ="display:flex; align-items:center"><label class = "w3-label">Password:</label> <input class="w3-input" style = "width:200px" type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>"  /></p>
        <p class="w3-group" style ="display:flex; align-items:center"><label class = "w3-label">Confirm Password:</label> <input class="w3-input" style = "width:200px" type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>"  /></p>
        <p><input class="w3-input" type="submit" style="width:200px" name="submit" value="Register"/></p>
    </form></div>
</body>
</html>
<?php //include ('includes/footer.html'); ?>