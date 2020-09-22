<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die('<p style="color:red">'."Database connection failed: " . $conn->connect_error);
}
// END of connect to DB

if (isset($_GET['first']))
    {
        $mykid = $_GET['first'];
        $sql = "SELECT mykid, patientName FROM `patient_info` WHERE mykid='$mykid'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["patientName"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["mykid"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["patientName"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }

?>