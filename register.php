
<!DOCTYPE html>
<link rel="icon" href="img/logo.jpg" type="image/icon type">
<html >
<head>
    <link rel="stylesheet" href="logreg.css">
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
<script>
    var inputs=document.getElementsByClassName("input");
    function validate(number){

        varname =   inputs[0];
        varname1=   inputs[0].value.length;
        varpass =   inputs[1];
        varpass1 =  inputs[1].value.length;
        varemail =  inputs[2];
        varemail1 = inputs[2].value.length;
        varphone =  inputs[3];
        varphone1 = inputs[3].value.length;
        
        if(varname.value ==""){
            document.getElementById("error0").innerHTML="Username is missing!";
                 
        }
        else if(varname1<8){
            document.getElementById("error0").innerHTML="Username is short!";
                 
        }
        else if(varpass.value ==""){
            document.getElementById("error0").innerHTML="Password is missing!";
                 
        }
        else if(varpass1<8){
            document.getElementById("error0").innerHTML="Password is short!";
                 
        }
        else if(varemail.value ==""){
            document.getElementById("error0").innerHTML="Email is missing!";
                 
        }
        else if(varemail1<8){
            document.getElementById("error0").innerHTML="Email is short!";
                 
        }
        else if(varphone.value == ""){
            document.getElementById("error0").innerHTML="Phone Number is missing!";
                 
        }
        else if(varphone1<9){
            document.getElementById("error0").innerHTML="Phonenumber is short!";
                 
        }
        else{
            
            document.getElementById("error0").innerHTML="";
            const alertHTML = '<div class="alert">Succesfully Registered</div>';
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