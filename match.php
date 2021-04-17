<!DOCTYPE html>
<head>
<title>Donate</title>
<link href="bootstrap.css" rel="stylesheet" />
<style>body{background-color:rgb(255, 255, 204);}</style>
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
$servername="localhost";
$username="root";
$password="";
$dbname="aadhiksha";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
else{

$sql="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest1=organisation.org_interest and donar.d_username='$u_name' and donar.reserved='no'";
$result = $conn->query($sql);
$sql1="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest2=organisation.org_interest and donar.d_username='$u_name' and donar.reserved='no'";
$result1=$conn->query($sql1);
$sql2="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest3=organisation.org_interest and donar.d_username='$u_name'and donar.reserved='no'";
$result2=$conn->query($sql2);

if ($result->num_rows > 0){
echo "<br><table class='table'>";
echo "<thead class='thead-light'><th><b>Organisation Names</th><th>location</th><th>interest</th><th>Address</th></thead>";
  while($row = $result->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
} 
else if($result1->num_rows > 0){
  echo "<br><table class='table'>";
  echo "<thead class='thead-light'><th><b>Organisation Names</th><th>location</th><th>interest</th><th>Address</th></thead>";
  while($row = $result1->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
  echo "<h3 class='display-4'>you have been allotted your second choice as first choice was not avaliable</h3>";
}
else if($result2->num_rows > 0){
  echo "<br><table class='table'>";
  echo "<thead class='thead-light'><th><b>Organisation Names</th><th>location</th><th>interest</th><th>Address</th></thead>";
  while($row = $result2->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
  echo "<h3 class='display-4'>you have been allotted your third choice as first and second choices were not avaliable</h3>";
}
else{
  echo "<h3 class='display-4'>no results found</h3>";
  echo "<br><h3 class='display-4'>There are no organizations that matches your criteria</h3>";
 
}
if($result->num_rows > 0||$result1->num_rows > 0||$result2->num_rows > 0){
echo
"<div class='container'><form class='form-group' action='#service' method='post'>
<h3 >please choose and enter name of any one organisation of your choice</h3>
<input type='text' class='form-control' autofocus='true' required='true' placeholder='organisation name' name='org_name' /><br><br>
<button type='submit' value='submit' class='btn btn-primary btn-xl text-uppercase form-control ' name='submit' >Submit</button>
</form></div>";
if(isset($_POST['submit'])){
  $org_name=$_POST['org_name']; 
  $sql3="UPDATE donar SET reserved='yes',donated_to='$org_name' WHERE d_username='$u_name'";
  if($conn->query($sql3)==TRUE){
    echo "<h3 class='display-4' id='#service' >Thank you for your donation<br>
  please submit your donation at respective organisation.<br>Address for the same is provided above</h3>";
  
  }
} 


}

$conn->close();

}
?>
</body>
</html>
