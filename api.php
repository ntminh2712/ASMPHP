<?php
require_once ("database.php");

if (isset($_POST['action'])) {
	$action = $_POST['action'];
	switch ($action) {
		case 'add_student':
			addStudent();
			break;
	}
}

function addStudent() {
	if (!empty($_POST)) {
		$fullname     = $_POST["fullname"];
		$email        = $_POST['email'];
		$gender       = $_POST['gender'];
		$phone_number = $_POST['phone_number'];

		//query data
		$query = "INSERT INTO users(FullName, Gender, Email, Phone) VALUES('$fullname', '$email', '$gender', '$phone_number')";
		execute($query);
	}
}