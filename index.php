<!DOCTYPE html>
<html>
<head>
    <link rel="Stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="login-page">
<?php 
   if(isset($_GET['pesan'])){
     if($_GET['pesan'] == "gagal"){
       echo "<center>Login gagal! username atau password salah </center>";
     }
   }
  ?>
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="login.php">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="submit" id="login" value="Login">
    </form>
  </div>
</div>

</body>
</html>
