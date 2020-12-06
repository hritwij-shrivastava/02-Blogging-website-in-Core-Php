function loginpage(){
  window.open("../login/login-page.php","_self")
}
function signuppage(){
  window.open("signup-page.php","_self")
}

var myInput = document.getElementById("pass-fill");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var not_match = document.getElementById("not-match");
var ok_match = document.getElementById("ok-match");
var confirmpass = document.getElementById("conf-fill");
var displayName = document.getElementById("name-fill");
var emailfill = document.getElementById("emailfill");
var submit = document.getElementById("submitbtn");
var fieldarea = document.getElementById("fieldarea");
var cntempty = document.getElementById("cntempty");
var invalidemail = document.getElementById("invalidemail");
var invalidpass = document.getElementById("invalidpass");
var lowerCaseLetters = /[a-z]/g;
var upperCaseLetters = /[A-Z]/g;
var numbers = /[0-9]/g;
var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})/g;
// var response = grecaptcha.getResponse();

displayName.onblur = function() {
  if(displayName.value.length >0) {  
    cntempty.style.display = "none";
  } else {
    cntempty.style.display = "block";
  }
}
displayName.onkeyup = function() {
  if(displayName.value.length >0) {  
    cntempty.style.display = "none";
  } else {
    cntempty.style.display = "block";
  }
} 


emailfill.onblur = function() {
  if(emailfill.value.match(mailformat)) {  
    invalidemail.style.display = "none";
  } else {
    invalidemail.style.display = "block";
  }
}     
emailfill.onkeyup = function() {
  if(emailfill.value.match(mailformat)) {  
    invalidemail.style.display = "none";
  } else {
    invalidemail.style.display = "block";
  }
}   





// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
document.getElementById("message").style.display = "block";
if( (!myInput.value.match(lowerCaseLetters)) || (!myInput.value.match(upperCaseLetters)) || (!myInput.value.match(numbers)) || (!myInput.value.length >= 8) ){
  invalidpass.style.display = "block";
} else {
  invalidpass.style.display = "none";
}
}
// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
document.getElementById("message").style.display = "none";

if( (!myInput.value.match(lowerCaseLetters)) || (!myInput.value.match(upperCaseLetters)) || (!myInput.value.match(numbers)) || (!myInput.value.length >= 8) ){
  invalidpass.style.display = "block";
} else {
  invalidpass.style.display = "none";
}

}
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
// Validate lowercase letters

if(myInput.value.match(lowerCaseLetters)) {  
  letter.classList.remove("invalid");
  letter.classList.add("valid");
} else {
  letter.classList.remove("valid");
  letter.classList.add("invalid");
}

// Validate capital letters

if(myInput.value.match(upperCaseLetters)) {  
  capital.classList.remove("invalid");
  capital.classList.add("valid");
} else {
  capital.classList.remove("valid");
  capital.classList.add("invalid");
}

// Validate numbers

if(myInput.value.match(numbers)) {  
  number.classList.remove("invalid");
  number.classList.add("valid");
} else {
  number.classList.remove("valid");
  number.classList.add("invalid");
}

// Validate length
if(myInput.value.length >= 8) {
  length.classList.remove("invalid");
  length.classList.add("valid");
} else {
  length.classList.remove("valid");
  length.classList.add("invalid");
}
}

confirmpass.onblur = function() {
  if(confirmpass.value==myInput.value){
    ok_match.style.display = "block";
    not_match.style.display = "none";
  }
  else{
    not_match.style.display = "block";
    ok_match.style.display = "none";
  }
}
confirmpass.onkeyup = function() {
  if(confirmpass.value==myInput.value){
    ok_match.style.display = "block";
    not_match.style.display = "none";
  }
  else{
    not_match.style.display = "block";
    ok_match.style.display = "none";
  }
}





$(document).ready(function () {

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
      $('#spinnertop').toggleClass('spinner-top');
      $('#spinnermiddle').toggleClass('spinner-middle');
      $('#spinnerbottom').toggleClass('spinner-bottom');
  });
  $('#sidebarCollapse2').on('click', function () {
      $('#sidebar').toggleClass('active');
      $('#spinnertop1').toggleClass('spinner-top');
      $('#spinnermiddle2').toggleClass('spinner-middle');
      $('#spinnerbottom3').toggleClass('spinner-bottom');
      
  });

});

function submission(){
  // (response.length != 0) &&
  if(  (myInput.value == confirmpass.value) && (myInput.value.match(lowerCaseLetters)) && (myInput.value.match(upperCaseLetters)) &&  (myInput.value.match(numbers)) && (myInput.value.length >= 8) && (displayName.value.length >0 )){
    document.getElementById("fieldarea").submit();
  }
  
  if( (!myInput.value.match(lowerCaseLetters)) || (!myInput.value.match(upperCaseLetters)) || (!myInput.value.match(numbers)) || (!myInput.value.length >= 8) ){
  invalidpass.style.display = "block";
  } 
  if ( (myInput.value != confirmpass.value)){
    not_match.style.display = "block";
  }
  if( (displayName.value.length == 0 )){
    cntempty.style.display = "block";
  }
  if(!emailfill.value.match(mailformat)) {  
    invalidemail.style.display = "block";
  }
}


