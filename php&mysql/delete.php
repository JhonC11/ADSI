<?php 
session_start();
	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		include "include/db.php";

		$sql = "DELETE FROM avatars WHERE id=$id";

		if (mysqli_query($conx, $sql)) {
			$_SESSION ['action'] = 'delete';
				echo "<script>window.location.replace('index.php');</script>";
		}
	}