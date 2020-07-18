<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "forms";

if(isset($_POST['submit'])){
$conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);
$name = $_POST['name1'];
$email = $_POST['email'];
$number = $_POST['number1'];
$enquiry = $_POST['enquiry'];

if (!empty($name) && (!empty($email)) && (!empty($number)) && (!empty($enquiry))) {    
    $sql = "INSERT INTO clients (name1, email, number1, enquiry) VALUES ('$name', '$email', '$number', '$enquiry')";
    $query_run = mysqli_query($conn, $sql);
    header("Location:return.html");
}
else{
       echo 'Error303';
    } 
    
}


?>