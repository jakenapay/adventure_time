const fullname = document.getElementById('fullname')
const username = document.getElementById('username')
const email = document.getElementById('email')
const phone = document.getElementById('phone')
const password = document.getElementById('password')
const confirmpassword = document.getElementById('confirmpassword')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')
const checkbox = document.getElementById('dot-term')

var mes = "";
let format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

//conditions for validation
//function
function checkIfStringHasSpecialChar(_string)
{
    let spChars = /[123456789!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    if(spChars.test(_string)){
      return true;
    } else {
      return false;
    }
}

function checkEmail(_string)
{
    let spChars = /[@.com]/;
    if(spChars.test(_string)){
      return true;
    } else {
      return false;
    }
}

function checkPhone(_string)
{
    let spChars = /[qwertyuiopasdfghjklzxcvbnm!@#$%^&*()_+}{:"?><,./;'}]/;
    if(spChars.test(_string)){
      return true;
    } else {
      return false;
    }
}

form.addEventListener('submit', (e) => {
    
    //fullname
    if (fullname.value === '' || fullname.value == null ){
        mes ="--------------Missing Fullname--------------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }else if(checkIfStringHasSpecialChar(fullname.value)){
        mes ="--------------Invalid Fullname--------------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }
    
    //username
    if (username.value === '' || username.value == null){
        mes = mes + "--------------Missing username-------------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }else if (username.value.length < 8){
        mes = mes + "---Username must be 8 characters and above--";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }

    //email
    if (email.value === '' || email.value == null){
        mes = mes + "----------------Missing email---------------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }else if(checkEmail(email.value)){

    }else{
        mes = mes + "----------------Invalid email---------------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }
    
    //phone number
    if (phone.value === '' || phone.value == null){
        mes = mes + "------------Missing Phone numer----------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
        }else if(checkPhone(phone.value)){
        mes = mes + "------------Invalid Phone number-----------";
            Swal.fire(
                'Invalid Input',
                mes,
                'error',
              )
              e.preventDefault()
        }

    //password
    if (password.value === '' || password.value == null){
        mes = mes + "---------------Missing Password-----------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
        }
        console.log(password);
    //confirm password
    if (password.value.length > 0 && confirmpassword.value === '' || confirmpassword.value == null){
        mes = mes + "--------------Please Confirm Password----------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
        }
    //password match
    if(password.value != confirmpassword.value && password.value.length > 0){
        mes = mes + "------------Passwords don't match----------";
        Swal.fire(
            'Invalid Input',
            mes,
            'error',
          )
          e.preventDefault()
    }

    
    

    mes="";
    
})

function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}

$(function() {  
            $( "#datepick" ).datepicker();  
         });  

