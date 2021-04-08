<?php      
      $host = "localhost";  
      $user = "root";  
      $password = '';  
      $db_name = "aadhiksha";  
        
      $conn= mysqli_connect($host, $user, $password, $db_name);  
      if(mysqli_connect_errno()) {  
          die("Failed to connect with MySQL: ". mysqli_connect_error());  
      } 
      $u_name=$_GET['u_name'];
      $sql="SELECT * from donar where d_username='$u_name'";
      $result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $org_received_don = $row['org_received_don'];
    $donated_to = $row['donated_to'];
    $d_name = $row['d_name'];
}

if($org_received_don=='yes'){
    echo "<br>dear $d_name,<p>This is to certify that thank you for your donation at $donated_to </p>";
}
elseif($org_received_don=='no'){
    echo "<p> organisation has not received your donation.please check later</p>";
}
      ?>