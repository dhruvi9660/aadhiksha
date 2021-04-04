<?php

$u_name=$_GET['u_name'];

$loc=$_POST['location'];
$int=$_POST['interest'];

$servername="localhost";
$username="root";
$password="";
$dbname="aadhiksha";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected successfully";
$sql =  "UPDATE organisation SET org_location='$loc',org_interest='$int' WHERE org_username='$u_name'";

if($conn->query($sql)==TRUE){
    echo "<h1><center>SUCCESSFUL!!!</center></h1>";
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();
?>
