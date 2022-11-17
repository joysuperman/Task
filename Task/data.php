<?php

/**
 * @Author: SUPERMAN
 * @Date:   2022-06-13 22:50:04
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-06-13 23:56:32
 */

include_once "config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$connection) {
	throw new Exception("Can Not COnnect TO Database");	
}
else{

	

	//INSERT INTO task (fname, lname, roll) VALUES('', '', '');
	echo mysqli_query($connection,"INSERT INTO student_info (fname, lname, roll) VALUES('hello', 'hi', '10')");
}