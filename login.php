<?php
	session_start();
	include('config.php'); 

	$user = [];
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$password = isset($_POST["password"]) ? $_POST["password"] : "";


	$sql = "SELECT id, first_name, last_name, email FROM korisnik WHERE email = '$email' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	        $user['id'] = $row["id"];
	        $user['first_name'] = $row["first_name"];
	        $user['last_name'] = $row["last_name"];
	        $user['email'] = $row["email"];
	    }

	     $_SESSION["user"] = $user;
	   
	} else {
	    unset($_SESSION['user']);
	}
	$conn->close();

	header("Location: index.php");

?>