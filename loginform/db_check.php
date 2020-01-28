<?php
   if(!empty($_POST['submit'])) {
	    $login = $_POST['login'];
	    $pass = $_POST['password'];

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "mydb";

		$conn = new mysqli($servername, $username, $password, $database);

        $sql = "SELECT login, password FROM users";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {
		    if($row["login"] == $login && $row["password"] == $pass) {
		    	echo "<script src = 'showcormess.js'></script>";
		    	exit();
		    }
		}
		echo "<script src = 'showwromess.js'></script>";
		$conn->query($sql);
	}
?>