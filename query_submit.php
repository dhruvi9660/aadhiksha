

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
        $your_name=$_GET['y_name'];
if(isset($_POST['submit'])){
      $answer=$_POST['answer'];
    $sql3="UPDATE contact SET query_ans='$answer' where your_name='$your_name'";
    if($conn->query($sql3)==TRUE){
      echo "<br><h3>Thank You.<br>answer posted";
    }}
    echo "<br><br><center><a type='submit' value='submit' class='btn btn-primary btn-xl text-uppercase ' href='http://localhost/aadhiksha/solve_queries.php' name='submit' >Solve more queries</a></center>";
      }
    ?>

</body>
</html?>