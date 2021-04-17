<!DOCTYPE html>
<head>
<title>Donate</title>
<link href="bootstrap.css" rel="stylesheet" />
<style>body{background-color:rgb(255, 204, 204);}</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#" style="font-family: Brush script MT;font-size:250%;">
    <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt=""style=" border-radius: 50%">
    Aadhiksha
  </a>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="main.php"><b>Logout</b></a>
      </li>
</ul>
</div>

</nav>
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
$sql =  "UPDATE organisation SET org_location='$loc',org_interest='$int' WHERE org_username='$u_name'";

if($conn->query($sql)==TRUE){
    echo "<div class='container'><br><h1 class='display-3'>SUCCESSFUL!!!<br>your preferences are entered successfully</h1><br><br>";
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</body>
</html>