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
$sql="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest1=organisation.org_interest and donar.d_username='$u_name'";
$result = $conn->query($sql);
$sql1="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest2=organisation.org_interest and donar.d_username='$u_name'";
$result1=$conn->query($sql1);
$sql2="
SELECT organisation.org_name,organisation.org_location,organisation.org_interest from donar,organisation WHERE donar.d_location=organisation.org_location and donar.d_interest3=organisation.org_interest and donar.d_username='$u_name'";
$result2=$conn->query($sql2);

if ($result->num_rows > 0){
echo "<table>";
echo "<tr><td><b>Organisation Names</b> </td><td><b>Address</b></td><td><b>interest</b></td></tr>";
  while($row = $result->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
}
else if($result1->num_rows > 0){
  echo "<table>";
echo "<tr><td><b>Organisation Names</b> </td><td><b>Address</b></td><td><b>interest</b></td></tr>";
  while($row = $result1->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
  echo "you have been allotted your second choice as first choice was not avaliable";
}
else if($result2->num_rows > 0){
  echo "<table>";
echo "<tr><td><b>Organisation Names</b> </td><td><b>Address</b></td><td><b>interest</b></td></tr>";
  while($row = $result2->fetch_assoc()){
    echo"<tr><td>" . $row["org_name"] . "</td><td>" . $row["org_location"] . "</td><td>" . $row["org_interest"] . "</td></tr>";
  }
  echo "</table>";
  echo "you have been allotted your third choice as first and second choices were not avaliable";
}

$conn->close();

}
?>
