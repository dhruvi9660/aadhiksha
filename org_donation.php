<!DOCTYPE html>
<head>
<title>Donate main</title>
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
<br>
<h1 align='center'>interests and location</h1><br>
<?php
$u_name=$_GET['u_name'];

echo
"<div class='container'><form class='form-group' action='http://localhost/aadhiksha/org_don.php?u_name=$u_name' method='post'>

  <h3>Enter location:</h3>
  <input type='text' class='form-control' autofocus='true' required='true' placeholder=' Your location' name='location' />
  <h3>Enter address of your organisation:</h3>
  <input type='text' class='form-control' autofocus='true' required='true' placeholder=' Your address' name='address' />
<h3>Which type of donation do your organisation wants?</h3>
  <input type='text' class='form-control' autofocus='true' required='true' placeholder='required donation' name='interest' /><br>

  <button type='submit' value='submit' class='btn btn-primary btn-xl text-uppercase' name='submit' >Submit</button>
</form></div>";
?>
</body>
</html>

 