
window.addEventListener('DOMContentLoaded', function(){
  const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")
})
const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")

eye.addEventListener("click", function(){
  this.classList.toggle("fa-eye-slash")
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
  passwordInput.setAttribute("type", type)
  
})



function myFunc() {
   var patt = new RegExp("\d{3}[\-]\d{2}[\-]\d{4}");
   var x = document.getElementById("ssn");
   var res = patt.test(x.value);
   if(!res){
    x.value = x.value
        .match(/\d*/g).join('')
        .match(/(\d{0,3})(\d{0,2})(\d{0,4})/).slice(1).join('-')
        .replace(/-*$/g, '');
   }
}
// function myFunction() {
//           document.getElementById("dob").value = "*-*-";
//         }
       
        
var burgerdiv= document.querySelector(".mobile-burger")
// console.log(burgerdiv)
var mobilelinks = document.querySelector(".mobile-links")


function giveit(){
   burgerdiv.classList.toggle("showburger")
   mobilelinks.classList.toggle("show-mobile-links")

        }










