const login = document.querySelector('.login-link');
const loginBtn = document.querySelector('.button-login');
const register = document.querySelector('.register-link');
const iconClose = document.querySelector('.close');
const box = document.querySelector('.box');
const cartElements = document.querySelector('.cart-counter');
const passLogin = document.querySelector('.pass-login');
const passRegister = document.querySelectorAll('.pass-register')[0];
const confirmPass = document.querySelectorAll('.pass-register')[1];

let elementsInCart = 0;
let isPassVisible = false;

document.addEventListener('DOMContentLoaded', function () {
    passLogin.onclick = function(){
        if (!isPassVisible) {
            isPassVisible = true;
            passLogin.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye');
            passLogin.getElementsByTagName('input')[0].type = "text";

        } else {
            isPassVisible = false;
            passLogin.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye-off');
            passLogin.getElementsByTagName('input')[0].type = "password";
        }
    }
    
    passRegister.onclick = function(){
        if (!isPassVisible) {
            isPassVisible = true;
            passRegister.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye');
            passRegister.getElementsByTagName('input')[0].type = "text";

        } else {
            isPassVisible = false;
            passRegister.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye-off');
            passRegister.getElementsByTagName('input')[0].type = "password";
        }
    }
    
    confirmPass.onclick = function(){
        if (!isPassVisible) {
            isPassVisible = true;
            confirmPass.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye');
            confirmPass.getElementsByTagName('input')[0].type = "text";
        } else {
            isPassVisible = false;
            confirmPass.getElementsByTagName('ion-icon')[0].setAttribute('name', 'eye-off');
            confirmPass.getElementsByTagName('input')[0].type = "password";
        }
    }
});

loginBtn.onclick = function() {
    box.style.display = "flex";
}

function addToCart() {
    elementsInCart++;
    cartElements.innerText = elementsInCart;
}

register.addEventListener('click', ()=> {
    box.classList.add('active');
    box.style.height = "640px";
    isPassVisible = true;
}
);

login.addEventListener('click', ()=> {
    box.classList.remove('active');
    box.style.height = "440px";
    isPassVisible = true;
}

);
iconClose.addEventListener('click', ()=> {
   box.style.display = "none";
   box.style.height = "440px";
   box.classList.remove('active'); 
});