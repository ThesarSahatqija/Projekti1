<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="logreg.css">
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
<script>
    var inputs=document.getElementsByClassName("input");

    function validate(number){
      
        var1 = inputs[0];
        var11=inputs[0].value.length;
        var2 = inputs[1];
        var22=inputs[1].value.length;
        if(var1.value==""){
          document.getElementById("error0").innerHTML="Username is missing!";
       
        }
        else if(var11<8){
            document.getElementById("error0").innerHTML="Username is short!";
    
        }
        else if(var2.value==""){
            document.getElementById("error0").innerHTML="Password is missing!";
                
        }
        else if(var22<8){
            document.getElementById("error0").innerHTML="Password is short!";
                
        }
        else{
            document.getElementById("error0").innerHTML="";            
            const alertHTML = '<div class="alert">Succesfully Logged in</div>';
    document.body.insertAdjacentHTML('beforeend', alertHTML);
    setTimeout(() => document.querySelector('.alert').classList.add('hide'), 1000);
    setTimeout(function () {
       window.location.href = "index.html";
    }, 1000);
        }
    }
    
    
</script> 
</body>    
</html>