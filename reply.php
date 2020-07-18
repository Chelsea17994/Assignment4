<?php

// php code to Update data from mysql database Table

if(isset($_POST['submit']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "forms";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['Client_ID'];
   $response = $_POST['response1'];

           
   // mysql query to Update data
   $query = "UPDATE `clients` SET `response1`='".$response."' WHERE `Client_ID` = $id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>