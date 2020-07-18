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
    border-color: wheat;
    
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
<table>
    <tr>
        <th scope = "col">CLIENT ID</th>
        <th scope = "col"> NAME</th>
        <th scope = "col">EMAIL</th>
        <th scope = "col">NUMBER</th>
        <th scope = "col">ENQUIRY</th>
        <th scope = "col">RESPONSE</th>
    </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "forms");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Client_ID, name1, email, number1, enquiry, response1 FROM clients";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Client_ID"]. "</td><td>" . $row["name1"] . "</td><td>" . $row["email"]. "</td><td>". $row["number1"]."</td><td>" .$row["enquiry"]. "</td><td>" .$row["response1"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<input type="submit" value="Reply Enquiries" class="btn" onclick="window.location.href='replyy.php'">
<input type="submit" value="Return" class= "btn" onclick="window.location.href='index.html'">
</body>
</html>