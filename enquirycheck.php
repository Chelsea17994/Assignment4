<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "forms";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $name = $_POST['name1'];  
    $email = $_POST['email'];
    $num = $_POST['number1'];

      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $email = stripcslashes($email); 
        $num = stripcslashes($num); 
        $name = mysqli_real_escape_string($con, $name);  
        $email = mysqli_real_escape_string($con, $email);  
        $num = mysqli_real_escape_string($con, $num);



        if(isset($_POST['submit'])){
            $conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);
            $sql = "SELECT  * from enquiries where name = '".$_POST["name1"]."' and email = '".$_POST["email"]."' and number = '".$_POST["number1"]."'";
            
                                    if($result = mysqli_query($conn, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                                
                                                echo "<h4> Name:\r\r". $row['name'] ."</h4>\n";
                                                echo "<h4>Number:\r\r". $row['phone_number'] ."</h4>\n";
                                                echo "<h4>Email:\r\r". $row['email'] ."</h4>\n";
                                                echo "<h4>Enquiry:\r\r". $row['enquiry'] ."</h4>\n";
                                            }
                                            mysqli_free_result($result);
                                        } else{
                                            echo '<h4 class="no-annot">No Record</h4>';
                                        }
                                    } else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                                    }
                                }
      
        
?>  