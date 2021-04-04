<?php {
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
if(isset($_POST['submit']))

{
$user_name=$_POST['username'];
$name=$_POST['name'];

$email=$_POST['email'];
$pass_word=$_POST['password'];

$status=0;

$activationcode=md5($email.time());

$sql =  "INSERT INTO `donar` (`d_username`,`d_password`,`d_email`,`d_name`,`activationcode`,`status`)
 VALUES ('$user_name','$pass_word','$email','$name','$activationcode','$status')";

 if ($conn->query($sql)==TRUE)

 {

$to=$email;

$msg= "Thanks for Registration.";

$subject= "Email verification (aadhiksha.com)";

$headers = 'From: aadhiksha.com <aadhiksha48@gmail.com>'."\r\n";
$headers ="MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";

$ms="Dear $name,<br>please click the following link to activate your account <br> <a href='http://localhost/aadhiksha/email_ver2.php?code=$activationcode'>click here</a>";
if(mail($to, $subject, $ms, $headers)){
echo "<h1 style='color:white;font-family:cursive;'>Registration successful, please verify your account in the registered Email-Id</h1>";
}
else{
    echo "<h2>mail not sent</h2>";
}
 }
else
{
echo "<h2>data not inserted</h2>";
}    
}
}
}
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="login1.css"> 
</head>
<body>

</body>
</html>
