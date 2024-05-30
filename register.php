<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'portfolio';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//if submitted, isset() - check if exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	$_SESSION['error'] = 'Could not get the data that should have been sent';
    header('Location: registerForm.php');
    exit;
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	$_SESSION['error'] = 'Please complete all rows';
    header('Location: registerForm.php');
    exit;
}

//VALIDATION

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$_SESSION['error'] = 'Invalid email';
            header('Location: registerForm.php');
            exit;
}
//username
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    $_SESSION['error'] = 'Invalid username, use only alphanumerical!';
            header('Location: registerForm.php');
            exit;
}
//pass
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 8) {
	$_SESSION['error'] = 'Password must be between 8 and 20 characters long';
    header('Location: registerForm.php');
    exit;
}


//check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM uzytkownicy WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		// Username already exists
		$_SESSION['error'] = 'Username already exists';
    	header('Location: registerForm.php');
   
	} else {
        if ($stmt = $con->prepare('INSERT INTO uzytkownicy (username, password, email) VALUES (?, ?, ?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash the password
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
			//prepare
            header('Location: registerSucces.html');
} else {
	
	$_SESSION['error'] = 'Could not prepare a statement';
    	header('Location: registerForm.php');
}
	}
	$stmt->close();
} else {
	$_SESSION['error'] = 'Could not prepare a statement';
    	header('Location: registerForm.php');
}
$con->close();
?>