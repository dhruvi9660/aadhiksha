<!DOCTYPE html>
<head>
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
<?php      
      
    $username = $_POST['username'];  
    $password = $_POST['password']; 
          
      
        
          
        if($username=='aadhiksha_admin123' && $password=='1234567' ){  
            echo "<br><h1 class='display-3'><center>Login successful</center></h1><br><br><br>";
            echo "<center><a class='btn btn-primary btn-xl text-uppercase' href='http://localhost/aadhiksha/solve_queries.php'>Solve queries</a></center><br><br>"; 
            echo "<center><a class='btn btn-primary btn-xl text-uppercase' href='registered_donors.php'>see all registered donors</a></center><br><br>";
            echo "<center><a class='btn btn-primary btn-xl text-uppercase' href='registered_organisation.php'>see all registered organisations</a></center><br><br>";
        }  
        else{   
            echo "<br><h1 class='display-3'> Login failed. Invalid username or password.</h1> ";  
        }     
?>
</body>
</html>
