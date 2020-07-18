<?php
    if(!isset($_SESSION['name']) && !empty($_SESSION['name'])) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel=" stylesheet " href="css/bootstrap.min.css ">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/popup.css">
    <title>executive</title>
    <link rel="icon" type="image/png" href="img/seenema.png">
</head>
<body>
    <header></header>
    <?php
    $link = mysqli_connect("localhost", "root", "", "movies");
    $sql = "SELECT * FROM user";
   
   
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM enquiry"));
    
    ?>

    <div class="profile-page">
        <h1>Profile Details</h1>

    <?php
    $result = mysqli_query($link, $sql);
    while($row = mysqli_fetch_array($result)){
     echo "<h4>Name:\r\n". $row['name'] ."</h4>\n";
     echo "<h4>Phone_number:\n". $row['phone_number'] ."</h4>\n";
     echo "<h4>Email:\n". $row['email'] ."</h4>\n";
     echo "<h4>your Enquiry:\n". $row['equiries'] ."</h4>\n";
    }
    mysqli_free_result($result);
    ?>

    </div>
    <footer></footer>
        <script src="scripts/jquery-3.3.1.min.js "></script>
        <script src="scripts/script.js "></script>

        <script src="scripts/main.js"></script>
</body>