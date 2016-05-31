<?php
	include('config.php'); 

	$firstname = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
	$lastname = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$password = isset($_POST["password"]) ? $_POST["password"] : "";


	$sql = "SELECT id, first_name, last_name, email FROM korisnik WHERE email = '$email'";
	$result = $conn->query($sql);

	if ($result->num_rows == 0) {
		$sql = "INSERT INTO korisnik (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
		$conn->query($sql);
		$conn->close();
		header("Location: index.php");

	} else {
		echo "User exists! Please <a href='index.php'>go to index</a>";
	}
?>
