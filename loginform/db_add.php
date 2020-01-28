<?php
   if(!empty($_POST['submit'])) {
	    $login = $_POST['login'];
	    $pass = $_POST['password'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "mydb";

		$conn = new mysqli($servername, $username, $password, $database);

		$sql = "INSERT INTO users (login, password) VALUES ('$login', '$pass')";
		$conn->query($sql);
	}
?>