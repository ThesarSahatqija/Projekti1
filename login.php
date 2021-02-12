<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="style/logreg.css">
    <title>Login</title>
    <?php

include './components/navbar.php' ?>
</head>
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="mainForm" action="verifylogin.php" method="post" onsubmit="return validate()">
        <label><b>User Name</b>    
        </label>    
        <input type="text" class="input" name="username" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" class="input" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input id="submit" type="submit" name='login-btn' class="input submit" value="Login"/>
 
  
  
    </form>     
</div>   
<script src="javascript/login.js"></script>

</body>    
</html>