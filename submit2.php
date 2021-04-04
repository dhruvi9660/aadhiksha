<!DOCTYPE html>
<head>
<style>

h1{
    text-align: center;
    color: white;
    font-size: 300%;
    font-family: cursive;
}
body {
    font-family: 'Open Sans';
    font-weight: 100%;
    background-color: #003366;
}
</style>


</head>
<?php
$user_name=$_POST['username'];
$pass_word=$_POST['password'];
$em_ail=$_POST['email'];
$servername="localhost";
$username="root";
$password="";
$dbname="aadhiksha";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected successfully";
$sql =  "INSERT INTO donar ".
"(d_username,d_password,d_email) ".
"VALUES"."('$user_name','$pass_word','$em_ail')";

if($conn->query($sql)==TRUE){
    echo "<h1><center> You are registered successfully</center></h1>";
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<center><button><a href="main.php">Back to main page</a></button></center><br><br>
<center><button><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="login-donor.php">login</a></button></center>
</body>
</html>
