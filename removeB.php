<?php

$a = $_GET['a'];

$dbHost = 'localhost:3307';
$dbName = 'tip';
$dbUsername = 'root';
$dbPassword = ''; 

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected Successfully";

$sql = "DELETE FROM divB WHERE sapid = '$a'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Record deleted successfully')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($conn);


?>
