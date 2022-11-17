<?php

/**
 * @Author: SUPERMAN
 * @Date:   2022-06-13 22:49:53
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-06-14 11:03:39
 */
include_once "config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
	throw new Exception("Can Not COnnect TO Database");	
}
else{
	$action = $_POST['action'] ?? "";

	if (!$action) {
		header('location: index.php');
		die();
	}else{
		if ('add' == $action) {
		 	$fname = $_POST['fname'];
		 	$lname = $_POST['lname'];
		 	$roll = $_POST['roll'];

		 	if ($fname && $lname && $roll) {
		 		$query = "INSERT INTO user_info ." (fname,lname,roll) VALUES ('{$fname}', '{$lname}', '{$roll}')";
		 		echo $query;
		 		mysqli_query($connection, $query);
		 		header('location: index.php?task=added');
		 	}
		} 
	}
}