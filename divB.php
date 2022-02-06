<?php
if(isset($_POST['submit']))
{ 
if(empty($_POST['uname']) || empty($_POST['sapid']))
    header("location:divB.php");
else
{
    $a=$_POST['uname'];
    $b=$_POST['sapid'];
    $c=$_POST['email'];
    $d=$_POST['phone'];
    date_default_timezone_set('Asia/Kolkata');
    $e=date('y.m.d');
    $time=strtotime($e);
    $month=date("F",$time);
}
$dbHost = 'localhost:3307';
$dbName = 'tip';
$dbUsername = 'root';
$dbPassword = ''; 

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected Successfully";


$sql = "CREATE TABLE if not exists divB(
    name VARCHAR(30) NOT NULL,
    sapid int NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone int NOT NULL,
    month VARCHAR(20) NOT NULL,
    attendance int NOT NULL)";
if(mysqli_query($conn, $sql))
{
    //echo "<br>Table created successfully</br>";
} 
else
{
    echo "ERROR: Could not create table " . mysqli_error($conn);
}


$sql = "INSERT INTO divB VALUES ('$a','$b','$c','$d','$month','0')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Student Added')</script>";
} 
else
{
    echo "ERROR: Could not insert values " . mysqli_error($conn);
}


mysqli_close($conn);

 }
 else
 {
    header("location:divB.php");
 }
?>
