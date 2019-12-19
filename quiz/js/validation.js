
var check = function() {
var pwd = document.getElementById('password').value;
var cpwd =  document.getElementById('confirm_password').value;
/*var mail = document.getElementById('email').value;

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mail.value.match(mailformat))
{
    document.getElementById('message').style.cssText="color:green;font-weight: bold;text-align:right";
    document.getElementById('message').innerHTML = 'valid e-mail address';
}
else
{
    document.getElementById('message').style.cssText="color:red;font-weight: bold;text-align:right";
    document.getElementById('message').innerHTML = 'Invalid e-mail address';
     
}

*/


if(pwd == cpwd) {
   if(pwd!='' && cpwd!=''){

document.getElementById('message').style.cssText="color:green;font-weight: bold;text-align:right";
document.getElementById('message').innerHTML = 'Passwords matching';
   }
}

else if(pwd=='' && cpwd==''){
 
 document.getElementById('message').style.cssText="color:red;font-weight: bold;text-align:right";
 document.getElementById('message').innerHTML = 'Enter password';
   
}
else{
 
document.getElementById('message').style.cssText="color:red;font-weight: bold;text-align:right";
document.getElementById('message').innerHTML = 'Passwords not matching';
 
}
}
