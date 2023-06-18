<?php
$db_host = 'localhost';
$db_name = 'sport';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM login WHERE uname='$username' AND pwd='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows === 1) {
		// Redirect to menu.php if login is successful
		header("Location: menu.php");
		exit();
	} else {
		// Redirect to exit.php if login is unsuccessful
		header("Location: exit.php");
		exit();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Sports Management System - Admin Login</title>
	<style>
		@import url('./global.css');

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		.form-input {
			margin-bottom: 20px;
		}

		.form-input label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.form-input input[type="text"],
		.form-input input[type="password"] {
			padding: 5px;
			width: 300px;
			background-color: #333;
			color: var(--imput-text-color);
			border: none;
		}

		.login-btn {
			display: flex;
			justify-content: center;
		}

		.button {
			padding: 10px 20px;
			font-size: 18px;
			background-color: #FF5500;
			color: var(--text-secondary-color);
			border: none;
			cursor: pointer;
			text-decoration: none;
			border-radius: 5px;
		}

		.button:hover {
			background-color: #FFBB00;
		}
	</style>
</head>

<body>
	<h1>Admin Login</h1>
	<div class="container">
		<form method="POST" action="">
			<div class="form-input">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="form-input">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="login-btn">
				<button type="submit" class="button">Login</button>
			</div>
		</form>
	</div>
</body>

</html>
