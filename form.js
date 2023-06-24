// varibles for forms
const accessCodeForm = document.querySelector('#access-code-form');
const loginForm = document.querySelector('#login-form');
const ForgotPasswordForm = document.querySelector('#forgot-password-form');
const regisForm = document.querySelector('#regis-form');

// variables for form containers
const accessCodeContainer = document.querySelector('#access-code-section');
const regisFormContainer = document.querySelector('#regis-form-section');
const loginFormContainer = document.querySelector('#login-form-section');
const forgotPasswordFormContainer = document.querySelector('#forgot-password-form-section');

// varibles for inputs
const accessCodeInput = document.querySelector('#access-code');
const forgotPasswordInput = document.querySelector('#forgot-password-input');

if(accessCodeInput) {
  accessCodeForm.addEventListener('submit', function(event) {
    event.preventDefault();
  
    const accessCode = accessCodeInput.value;
    if (accessCode === '1234') {
      regisFormContainer.style.display = 'block';
      regisForm.style.display = 'flex';
      accessCodeForm.style.display = 'none';
      accessCodeContainer.style.display = 'none';
  
    } else {
      alert('Incorrect access code')
    }
  })
}

if (loginForm){
  loginForm.addEventListener('click',function(event) {

    if (event.target === forgotPasswordInput) {
      loginForm.style.display = 'none';
      loginFormContainer.style.display = 'none';
      ForgotPasswordForm.style.display = 'flex';
      forgotPasswordFormContainer.style.display = 'block';
      }
  })
}

hamburger = document.querySelector(".hamburger");
            hamburger.onclick = function() {
            navBar = document.querySelector(".site-traverse");
            navBar.classList.toggle("active");
            }


  
  

