function ValidateForm(){
   var name= document.getElementById("name");
   int roll_no = document.getElementById("roll_no");
   var skillk= document.getElementById("skillk");
   var username= document.getElementById("username");
   var password= document.getElementById("password");
   var valid=true;
   if(name.value.length==0){
       name.nextElementSibling.innerHTML="Username can't be blank";
       valid=false;
   }
   if(roll_no.value>60){
    phoneNum.nextElementSibling.innerHTML="Contact number cannot be greater than 60";
    valid=false;
   }
   if(skillk.value.length==0){
       name.nextElementSibling.innerHTML="enter some skills";
       valid=false;
   }
   if(username.value.length==0){
       username.nextElementSibling.innerHTML="Username can't be blank";
       valid=false;
   }
   if(password.value.length<6){
    password.nextElementSibling.innerHTML="Password cannot be less than 6";
    valid=false;
   }
   if(password.value!=confirm_password.value){
    confirm_password.nextElementSibling.innerHTML="Password does not match";
    valid=false;
   }
   return valid;
}
