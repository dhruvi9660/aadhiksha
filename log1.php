
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
      $host = "localhost";  
      $user = "root";  
      $password = '';  
      $db_name = "aadhiksha";  
        
      $con = mysqli_connect($host, $user, $password, $db_name);  
      if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error());  
      } 
    $username = $_POST['username'];  
    $password = $_POST['password']; 
          
      
        $sql = "select *from organisation where org_username = '$username' and org_password = '$password' and status=1";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            
            echo "<br><h1 class='display-3'><center>Login successful</center></h1><br>";
            echo "<center><a class='btn btn-primary btn-xl text-uppercase' href='http://localhost/aadhiksha/org_donation.php?u_name=$username'>proceed to donation page</a></center><br>"; 
            echo "<center><a class='btn btn-primary btn-xl text-uppercase' href='http://localhost/aadhiksha/org_see_donations.php?u_name=$username''>see donations</a></center><br><br>";
            
             
        }  
        else{  
            echo "<br><h1 class='display-3'> Login failed. Invalid username or password.</h1> ";
        }     
?>
</body>
</html>