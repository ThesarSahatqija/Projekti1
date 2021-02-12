

const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')

function validate() {
     let inputs = document.querySelectorAll("input");
     usrname = inputs[0].value;
     password = inputs[1].value;
     if (usernameReg.test(usrname) && password != "") {
         return true;
     }
     return false;
}



