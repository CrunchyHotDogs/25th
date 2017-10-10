<?php
	$link;
	function startConnection(&$link) {
		if (1 == 1) {
			$host = "localhost";
			$user = "kyle"; //Connection info for the database.
			$pass = "password";
			$db = "25th";
		}
		else {
			$host = "127.6.220.130";
			$user = "adminrYxzhMK"; //Connection info for the database.
			$pass = "yVMxzb9aiaHS";
			$db = "25th";
		}
		
		@$link = mysqli_connect($host, $user, $pass, $db);
		//Checks to see if the database connected successfully.
		if (mysqli_connect_errno()) { //If the database didn't connect.
			echo mysqli_connect_error();
			$_SESSION['DatabaseConnected'] = FALSE;
		}
		else { //If the database did connect.
			$_SESSION['DatabaseConnected'] = TRUE;
		}
	}
	
	function closeConnection(&$link) {
		mysqli_close($link);
	}
	
	function isDatabaseConnected() { //Checks to see if the database is connected. Will return true if the database is connected and false if the database is not connected.
		$isDatabaseConnectedFLAG = FALSE;
		if (isset($_SESSION['DatabaseConnected'])) {
			$isDatabaseConnectedFLAG = $_SESSION['DatabaseConnected'];
		}
		
		return $isDatabaseConnectedFLAG;
	}
	
	function sql_LoadGuestList() {
		return 'SELECT * FROM `25th`.`guest_list` ORDER BY `name`';
	}
	function sql_AddNewGuest($name, $email, $phone, $total) {
		return "INSERT INTO `25th`.`guest_list` (`name`, `email`, `phone`, `total`) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', " . $total . ")";
	}
	
	function sql_LoadSaying() {
		return 'SELECT * FROM `25th`.`sayings` ORDER BY `name`';
	}
?>