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

$query  = "SELECT * FROM organisation WHERE org_username='$u_name'";  
$result1 = $conn->query($query);

while($row1= $result1->fetch_assoc()) {
    $org_name = $row1['org_name'];
    
}

$sql="SELECT donar.d_name,donar.d_email from donar,organisation WHERE donar.donated_to='$org_name' and organisation.org_username='$u_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "<br><table class='table'>";
    echo "<thead class='thead-light'><th>Donor Names</th><th>Email-Id</th></thead>";
      while($row = $result->fetch_assoc()){
        echo"<tr><td>" . $row["d_name"] . "</td><td>" . $row["d_email"] . "</td></tr>";
      }
      echo "</table>";
       echo 
      "<div class='container'><form class='form-group' action='#' method='post'><br><br>
      <p style='font-size: 1.75rem;'>if you have received donation from any of these donars then please enter their name.</p>
      <input type='text'class='form-contol'  autofocus='true' required='true' placeholder='donor name' name='donor_name' /><br><br>
      <button type='submit' value='submit' class='btn btn-primary btn-xl text-uppercase form-control' name='submit' >Submit</button></form></div>";
     

      if(isset($_POST['submit'])){
        $donor_name=$_POST['donor_name']; 
        $sql3="UPDATE donar SET org_received_don='yes' where donated_to='$org_name' and d_name='$donor_name'";
        if($conn->query($sql3)==TRUE){
          echo "<br><br><br><h3 class='display-4'>Thank You.<br>Certificate of appreciation is generated for respective donor.";
        }
      }
}
else{
  echo "<br><h3 class='display-4'>no results found.<br>No donors have yet donated to your organisation</h3>";
}
}
?>
</body>
</html>
