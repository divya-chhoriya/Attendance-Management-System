<?php
	$a = $_GET['a'];
	date_default_timezone_set('Asia/Kolkata');
    $e=date('y.m.d');
    $time=strtotime($e);
	$month=date("F",$time);

    $dbHost = 'localhost:3307';
$dbName = 'tip';
$dbUsername = 'root';
$dbPassword = ''; 

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected Successfully";

$sql = "UPDATE divA SET attendance= attendance+1 WHERE sapid='$a' && month='$month'";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Attendance Marked')</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
