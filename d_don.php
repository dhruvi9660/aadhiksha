<?php

$u_name=$_GET['u_name'];

$loc=$_POST['location'];
$int1=$_POST['interest1'];
$int2=$_POST['interest2'];
$int3=$_POST['interest3'];
$servername="localhost";
$username="root";
$password="";
$dbname="aadhiksha";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected successfully";
$sql =  "UPDATE donar SET d_location='$loc',d_interest1='$int1',d_interest2='$int2',d_interest3='$int3' WHERE d_username='$u_name'";

if($conn->query($sql)==TRUE){
    echo "<h1><center>SUCCESSFUL!!!</center></h1>";
    echo "<button><a href='http://localhost/aadhiksha/match.php?u_name=$u_name'>look for organisations to donate</a></button>";
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();
?>
