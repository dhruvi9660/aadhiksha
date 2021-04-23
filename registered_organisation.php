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
        echo "<br><h3>List of Registered organizations</h3><br>";

        $sql="SELECT * from organisation";
$result = $conn->query($sql);
$count=0;
if ($result->num_rows > 0){
    echo "<br><table class='table'>";
    echo "<thead class='thead-light'><th>Sr.no</th><th>organisation Names</th><th>Email-Id</th><th>Interest</th><th>Address</th><th>Location</th></thead>";
      while($row = $result->fetch_assoc()){
        $count++;
        echo"<tr><td>" . $count . "</td><td>" . $row["org_name"] . "</td><td>" . $row["org_email"] . "</td><td>" . $row["org_interest"] . "</td><td>" . $row["org_address"] . "</td><td>" . $row["org_location"] . "</td></tr>";
      }
      echo "</table>";
    }
else{
    echo "<h3>no registered organisations yet</h3>";
}}
    ?>
    </body>
    </html>