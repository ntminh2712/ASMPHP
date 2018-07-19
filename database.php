<?php
const HOST     = "localhost";
const USER     = "root";
const PASSWORD = "";
const DATABASE = "user";

function execute($query) {
	//init to connect database
	$con = new mysqli(HOST, USER, PASSWORD, DATABASE);
	mysqli_set_charset($con, "utf8");

	mysqli_query($con, $query);

	//close connection
	mysqli_close($con);
}

function myFunction() {
	
}

function executeResult($query) {
	//init to connect database
	$con = new mysqli(HOST, USER, PASSWORD, DATABASE);
	mysqli_set_charset($con, "utf8");

	$result = mysqli_query($con, $query);
	$data   = [];
	while (($row = mysqli_fetch_array($result, 1))) {
		$data[] = $row;
	}

	//close connection
	mysqli_close($con);

	return $data;
}