const button = document.getElementById('btn')

document.addEventListener('DOMContentLoaded', function(){
          button.addEventListener('click', function(){
                    window.alert('button clicked')
          })
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
function myFunction() {
          document.getElementById("dob").value = "*-*-";
        }
        