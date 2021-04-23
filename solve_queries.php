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
        
      $conn = mysqli_connect($host, $user, $password, $db_name);  
      if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error());  
      } 
    
    else{
      $query  = "SELECT * FROM contact WHERE query_ans=''";  
    $result = $conn->query($query);
      if ($result->num_rows > 0){
    //$row = $result->fetch_assoc();
    echo "<br><table class='table'>";
    echo "<thead class='thead-light'><th>Sr.no</th><th>Names</th><th>Query</th><th>answer</th><th>submit answer</th></thead>";
    $count=0;
    while($row = $result->fetch_assoc())
    {
      $count++;
      $your_name=$row["your_name"];
            echo"<tr><td>" . $count . "</td><td>" . $row["your_name"] . "</td><td>" . $row["your_msg"] . "</td><td>" . "<form method='post' action='query_submit.php?y_name=$your_name' ><input type='text' placeholder='enter' name='answer'></input>" . "</td><td>" . "<button type='submit' value='submit' class='btn btn-primary btn-sm text-uppercase form-control' name='submit' >Submit</button></form>" . "</td></tr>";
            "</tr>";
          
          }
    
    echo "</table>";
   
        }
      else {
        echo "<br><br><center><h3>No more queries found</h3></center>";
      }
  }
    
      
    ?>