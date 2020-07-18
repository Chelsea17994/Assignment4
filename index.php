<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$Phone_number = $_POST["phone_number"];
	$enquiries = $_POST["enquiries"];

	$conn = mysqli_connect("localhost", "root", "", "movies") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO enquiries (name, email,phone_number,enquiries) VALUES ('" . $name. "', '" . $email. "','" . $phone_number. "','" . $enquiries. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "enquiries.php";
?>