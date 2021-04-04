<?php
 date_default_timezone_set("Asia/Kolkata");
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="aadhiksha";
 
 $conn = new mysqli($servername,$username,$password,$dbname);
 
 if($conn->connect_error){
     die("Connection failed:" . $conn->connect_error);
 }
else{
if(!empty($_GET['code']) &&isset($_GET['code']))
{
$code=$_GET['code'];
$sql=mysqli_query($conn,"SELECT * FROM organisation WHERE activationcode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
$result =mysqli_query($conn,"SELECT org_username FROM organisation WHERE activationcode='$code' and status='$st'");
$result4=mysqli_fetch_array($result);
}
if($result4>0)
   {
$st=1;
$result1=mysqli_query($conn,"UPDATE organisation SET status='$st' WHERE activationcode='$code'");
echo "<h1 style='color:white;font-family:cursive;'>Your account is activated</h1>";
}
else
{
echo "<h1 style='color:white;font-family:cursive;'>Your account is already active,no need to activate again</h1>";
}    

}
}?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="login1.css"> 
</head>
<body>

</body>
</html>