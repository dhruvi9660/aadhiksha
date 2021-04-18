<html>
    <head>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
                background-color:rgb(255, 255, 204);
            }
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid pink;
                width: 1750px;
                height: 880px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: #994d33;
                font-family: Brush script MT;
                font-size:250%;
            }

            .marquee {
                color: #993399;
                font-size: 48px;
                margin: 20px;
                
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 20px;
            }
        </style>
    </head>
    <body>

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
    echo "        <div class='container'>

    <div class='logo-design' >
        <img src='logo.png' style='width:200px ;height:200px ; border-radius:50%'></img>
    </div>
    
    <div class='logo' >
        Aadhiksha
    </div>

    <div class='marquee'>
        Certificate of Appreciation
    </div>

    <div class='assignment'>
        This certificate is presented to <i><b>$d_name</b></i>
    </div>

    <div class='person'>
        
    </div>

    <div class='reason'>
        For their valuable contribution towards the NGO <i><b>' $donated_to '</b></i> that they have supported.
    </div>
</div>";
}
elseif($org_received_don=='no'){
    echo "<br><center><p style='font-size:150%'> organisation has not received your donation.<br>please check later.</center></p>";
}
      ?>

   
    </body>
</html>
