<?php
$y_name=$_POST['y_name'];
$y_email=$_POST['y_email'];
$y_phone=$_POST['y_phone'];
$y_msg=$_POST['y_msg'];
$servername="localhost";
$username="root";
$password="";
$dbname="aadhiksha";

$conn = new mysqli($servername,$username,$password,$dbname);


if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

        $sql="INSERT INTO `contact` (`your_name`,`your_email`,`your_phone`,`your_msg`) VALUES('$y_name','$y_email','$y_phone','$y_msg') ";
        if($conn->query($sql)==TRUE){
          echo "<br><br><br><h3>Thank You.<br>your query is registered.</h3>";
        }
      
?>