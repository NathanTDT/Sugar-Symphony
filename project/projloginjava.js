// projloginjava.js

function loginsubmit(){
var email=document.getElementById('email');

if (email.value.trim() === '' || !/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(email.value)) {
    alert('Please enter a valid email address.');
    email.focus();
    email.value="";    
    return false;
}
else{
    window.location.href='http://localhost/project/verifylogin.php';
}
}

function signupsubmit(){
    var emailphone=document.getElementById('email');
    var pass=document.getElementById('pass');

if (emailphone.value.trim() === '' || !/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/.test(emailphone.value)) {
    alert('Please enter a valid email address.');
    emailphone.focus();
    emailphone.value="";    
    return false;
    
}
else{
    window.location.href='http://localhost/project/homepage.php';
}
}