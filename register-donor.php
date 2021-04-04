<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>register-donor</title>
         <link rel="stylesheet" type="text/css" href="login1.css">    
    </head>
<body>
 <div class="col-md-2">
 <img   class="logo" src="logo.png" alt="logo" >
 <p>Aadhiksha</p>
</div>
<div class="col-md-4">
    <h1>Donor-Registration</h1>
    <img src="lock.jpg" alt="lock">
<form class="login-form" action="email_send2.php" method="post">
  <input type="email" class="login-username" autofocus="true" required="true" placeholder="Email" name="email" />
  <input type="text" class="login-username" autofocus="true" required="true" placeholder="Username" name="username" />
  <input type="text" class="login-username" autofocus="true" required="true" placeholder="Name" name="name" />
  <input type="password" class="login-password" required="true" placeholder="Password" name="password" />
  <button type="submit" value="submit" class="login-submit" name="submit" >Create</button>
</form>
<p class="acc">Already have an account?</p>
<a href="login_donor.php">click here to login</a>
  </div>
  </body>
</html>