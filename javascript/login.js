
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
       window.location.href = "index.php";
    }, 1000);
        }
    }


    
 