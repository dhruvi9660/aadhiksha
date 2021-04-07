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
$sql="SELECT donar.d_name,donar.d_email from donar,organisation WHERE donar.donated_to='$u_name' and organisation.org_username='$u_name'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "<table>";
    echo "<tr><td><b>Donor Names</b> </td><td><b>Email-id</b></td></tr>";
      while($row = $result->fetch_assoc()){
        echo"<tr><td>" . $row["d_name"] . "</td><td>" . $row["d_email"] . "</td></tr>";
      }
      echo "</table>";
    } 
}
?>