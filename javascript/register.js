
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
       window.location.href = "index.php";
    }, 1000);
        }
    
}
    