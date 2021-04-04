
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

echo
"<form class='login-form' action='http://localhost/aadhiksha/org_don.php?u_name=$u_name' method='post'>
  <input type='text' class='login-username' autofocus='true' required='true' placeholder=' Your location' name='location' />
<h3>which type of donation do your organisation wants?</h3>
  <input type='text' class='login-username' autofocus='true' required='true' placeholder='required donation' name='interest' />


  <button type='submit' value='submit' class='login-submit' name='submit' >Submit</button>
</form>";
?>
</body>
</html>

