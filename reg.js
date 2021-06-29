var user = document.querySelector('#user');
user.addEventListener('keyup',function(){
var u_times = document.querySelector('.u_times');
var u_check = document.querySelector('.u_check');
if(user.value.length == 0 || user.value.length < 4){
user.style.border = "1px solid  red";
u_times.style.display = "block";
u_check.style.display = "none";
return false;
}
else{
user.style.border = "1px solid green";
u_times.style.display = "none";
u_check.style.display = "block";
}
})
var pass1 = document.querySelector('#pass1');
pass1.addEventListener('keyup',function(){
var p_times = document.querySelector('.p_times');
var p_check = document.querySelector('.p_check');
if(pass1.value.length == 0){
pass1.style.border = "1px solid  red";
p_times.style.display = "block";
p_check.style.display = "none";
return false;
}
else{
pass.style.border = "1px solid green";
p_times.style.display = "none";
p_check.style.display = "block";
}
})
var pass2 = document.querySelector('#pass2');
pass2.addEventListener('keyup',function(){
var p_times = document.querySelector('.p_times');
var p_check = document.querySelector('.p_check');
if(pass2.value.length == 0 || pass2.value.length < 3 || pass2.value!=pass1.value){
pass.style.border = "1px solid  red";
p_times.style.display = "block";
p_check.style.display = "none";
return false;
}
else{
pass.style.border = "1px solid green";
p_times.style.display = "none";
p_check.style.display = "block";
}

})

function validate(){
if (user.value == 0 || user.value.length < 4){
document.getElementById('error').innerHTML = 'Please fill the required fields!';
return false;
}
else if(pass1.value == 0 || pass1.value.length < 3){
document.getElementById('error').innerHTML = 'Please fill the required fields!';
return false;
}
if (pass1.value!=pass2.value){
document.getElementById('error').innerHTML = 'password is not the same!';
return false;
}



}