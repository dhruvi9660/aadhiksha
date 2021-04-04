
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
            
            echo "<h1>Login successful</h1>";
            echo "<center><button><a class='btn btn-primary btn-xl text-uppercase js-scroll-trigger' href='http://localhost/aadhiksha/org_donation.php?u_name=$username'>proceed to donation page</a></button></center>";
            echo "<center><button><a href='main.php'>Back to main page</a></button></center><br><br>"; 
            
             
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1> ";
            echo "<center><button><a href='main.php'>Back to main page</a></button></center><br><br>";
        }     
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="login.css"> 
</head>
<body>

</body>
</html>