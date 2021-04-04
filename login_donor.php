<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login-donor</title>
         <link rel="stylesheet" type="text/css" href="login1.css">  
    </head>
<body>
 <div class="col-md-2">
 <img   class="logo" src="logo.png" alt="logo" >
 <p>Aadhiksha</p>
</div>
<div class="col-md-4">
    <h1>Donor-Login</h1>
    <img src="lock.jpg" alt="lock">
<form class="login-form" action="log2.php" method="post">
  <input type="text" class="login-username" autofocus="true" required="true" placeholder="Username" name="username"/>
  <input type="password" class="login-password" required="true" placeholder="Password" name="password"/>
  <button type="submit" value="Submit" class="login-submit" >Login</button>
</form>
<p class="acc">No account?</p>
<a href="register-donor.php">click here to register</a>
  </div>
  </body>
</html>