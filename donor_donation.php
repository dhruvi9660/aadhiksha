
<!DOCTYPE html>
<head>
<title>Donate main</title>
</head>
<body>
<div class="col-md-2">

 <p>Aadhiksha</p>
</div>
<div class="col-md-4">
    <h1>interests and location</h1>
    <?php
$u_name=$_GET['u_name'];
print "my" . $u_name . "is";
echo
"<form class='login-form' action='http://localhost/aadhiksha/d_don.php?u_name=$u_name' method='post'>

<h3>Enter location:</h2>
  <input type='text' class='login-username' autofocus='true' required='true' placeholder=' Your location' name='location' />
<h3>Enter choice of interest for donation:</h3>
  <input type='text' class='login-username' autofocus='true' required='true' placeholder=' first choice of interest' name='interest1' />
  <input type='text' class='login-username' autofocus='true' required='true' placeholder=' second choice of interest' name='interest2' />
  <input type='text' class='login-username' autofocus='true' required='true' placeholder=' third choice of interest' name='interest3' />

  <button type='submit' value='submit' class='login-submit' name='submit' >Submit</button>
</form>";
?>
</body>
</html>

