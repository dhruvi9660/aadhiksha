<head>
  <style>
  table{
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  td, th{
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;
  }
  tr:nth-child(even){
    backgroud-color: #dddddd;
  }
  </style>
</head>
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
echo "Connected successfully";
$query  = "SELECT * FROM organisation WHERE org_username='$u_name'";  
$result1 = $conn->query($query);

while($row1= $result1->fetch_assoc()) {
    $org_name = $row1['org_name'];
    echo $org_name;
}

$sql="SELECT donar.d_name,donar.d_email from donar,organisation WHERE donar.donated_to='$org_name' and organisation.org_username='$u_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "<table>";
    echo "<tr><td><b>Donor Names</b> </td><td><b>Email-id</b></td></tr>";
      while($row = $result->fetch_assoc()){
        echo"<tr><td>" . $row["d_name"] . "</td><td>" . $row["d_email"] . "</td></tr>";
      }
      echo "</table>";
}
    echo "<h3>if u have received donation from these donars then please enter their name.</h3>";
  echo 
"<form class='login-form' action='#' method='post'>
<input type='text'  autofocus='true' required='true' placeholder='donor name' name='donor_name' />
<button type='submit' value='submit' class='login-submit' name='submit' >Submit</button>
</form>";
if(isset($_POST['submit'])){
  $donor_name=$_POST['donor_name']; 
  $sql3="UPDATE donar SET org_received_don='yes' where donated_to='$org_name' and d_name='$donor_name'";
}
if($conn->query($sql3)==TRUE){
  echo "thank you";
}

}
?>