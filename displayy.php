<!DOCTYPE html>
<html>
<head>
<title>Display</title>
<style>
    body {
    margin: 0;
    font-family: Arimo,Arial,Helvetica,lucida grande,sans-serif;
   background-color: #1d1d1d;
    color: #fff;
    font-size: 16px;
    letter-spacing: -.03em;
}
    table, thead, tbody, tr { width: 100%; }
    table { table-layout: fixed }
    table > thead > tr > th { width: auto; }
    table {
    border-color: white;
    
    width: 100%;
    color: wheat;
    font-family: monospace;
    font-size: 15px;
    text-align: left;
    }
    th {
    background-color: #1d1d1d;
    color: white;
    }
    tr:nth-child(even) {background-color: #1f1f1f}
    .btn{
        text-align: center;
    vertical-align: middle;
    padding: .3em;
    width: 10%;
    cursor: pointer;
    background-color: red;
    height: 40px;
    color: wheat;
    border-radius: 5px;
    border: 1px solid black;
    background-color: #00908E;
    cursor: pointer;
    }
</style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "forms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    
    $sql = "SELECT  * from clients where name1 = '".$_POST["name1"]."' and email = '".$_POST["email"]."' and number1 = '".$_POST["number1"]."'";
    
                            if($result = mysqli_query($conn, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                       echo "<table>";
                                       echo " <tr>";
                                       echo " <th scope = 'col'>Client_id</th>";
                                       echo " <th scope = 'col'> Name</th>";
                                       echo " <th scope = 'col'>Email</th>";
                                       echo " <th scope = 'col'>Number</th>";
                                       echo "  <th scope = 'col'>Enquiry</th>";
                                       echo "   <th scope = 'col'>Response</th>";
                                       echo " </tr> ";
                                       echo "<tr><td>" . $row["Client_ID"]. "</td><td>" . $row["name1"] . "</td><td>" . $row["email"]. "</td><td>". $row["number1"]."</td><td>" .$row["enquiry"]. "</td><td>" .$row["response1"]. "</td></tr>";
                                    }
                                    echo "</table>";

                                    }
                                    mysqli_free_result($result);
                                } else{
                                    echo '<h4 class="no-annot">No Record</h4>';
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                            }
                        
                    
                        ?>
</table>

<input type="submit" value="Return" class= "btn" onclick="window.location.href='index.html'">
</body>
</html>