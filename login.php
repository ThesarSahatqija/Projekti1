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
    <form id="login" method="get">    
        <label><b>User Name</b>    
        </label>    
        <input type="text" class="input" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" class="input" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" class="input submit"  id="log" value="Log In Here" onclick="validate(1)">  
        <div id="error0"></div>     
  
  
    </form>     
</div>   
<script src="javascript/login.js"></script>

</body>    
</html>