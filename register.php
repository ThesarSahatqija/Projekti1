
<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="style/logreg.css">
    <title>Register</title>
    <?php
    
include './components/navbar.php' ?>

</head>
<body>    
<br>
    <div class="register">    
    <form id="register">    
        <label><b>User Name</b>    
        </label>    
        <input type="text" class="input" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    

        <label><b>Password</b>    
        </label>    
        <input type="Password" class="input" name="Pass" id="Pass" placeholder="Password">   
        <br><br> 

        <label><b>Email address </b>    
        </label>    
        <input type="text" class="input" name="Email" id="Email" placeholder="Username">    
        <br><br> 

        <label><b>Phone number</b>    
        </label>    
        <input type="tel" class="input" name="Number" id="Number" placeholder="Phone number"> 
        <br><br>     
        
        <input type="button" name="log" class="input submit"  id="log" value="Register" onclick="validate(1)">       
        <div id="error0"></div>    
  
    </form>     
</div>   
<script src="javascript/register.js"></script>


</body>    
</html>