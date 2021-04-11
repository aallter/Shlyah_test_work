/* menu mobile*/
let imgMobMenu = document.getElementById('mob-menu-butt-open');
console.log(imgMobMenu);
let blockMobileMenu = document.querySelector('.mob-menu-full');
let imgCloseMobMenu = document.getElementById('mob-menu-butt-close');

let ShowMenuMobile = () =>{
    blockMobileMenu.classList.toggle('d-none');
    imgCloseMobMenu.classList.toggle('d-none');
    imgMobMenu.classList.toggle('d-none');
}
imgMobMenu.addEventListener('click',ShowMenuMobile);
imgCloseMobMenu.addEventListener('click',function(){
    blockMobileMenu.classList.toggle('d-none'); 
    imgCloseMobMenu.classList.toggle('d-none');
    imgMobMenu.classList.toggle('d-none');
});

// media
let menuMob = document.querySelector('.menu-mob-block');
let menuDesc = document.querySelector('.main-menu-ul');
let menuDesc2 = document.querySelector('.second-menu');
var handleMatchMedia = function (mediaQuery) {
        if (mediaQuery.matches) {
            menuMob.classList.remove('d-none');
            menuDesc.classList.add('d-none');
            menuDesc2.classList.add('d-none');
        }else{
            menuMob.classList.add('d-none');
            menuDesc.classList.remove('d-none');
            menuDesc2.classList.remove('d-none');
        }
    },
    mql = window.matchMedia('all and (max-width: 479px)');

handleMatchMedia(mql);
mql.addListener(handleMatchMedia);

// modal window 

let slider_button = document.getElementById('slider_button');
console.log(slider_button);
let blockModalCallback = document.querySelector('.window-callback');
let closeWindow = document.getElementById('close_callback');

let ShowCallback = () =>{
    blockModalCallback.classList.toggle('d-none');
}
slider_button.addEventListener('click',ShowCallback);
closeWindow.addEventListener('click',function(){
    blockModalCallback.classList.toggle('d-none');
});

// checkbox
// var checkbox = document.getElementById('checkbox');
// form.onchange = function(){
    
//     if(checkbox.disabled) checkbox.disabled = false;
//     else checkbox.disabled = true;
//   }

/*Validation form */
let btn = document.getElementById("button-send");

btn.forEach(item =>{
  item.addEventListener('click',function(e){

    let inputs = document.querySelectorAll('form input');

    inputs.forEach(item => {
    if(item.checkValidity()){
      item.classList.remove('is-invalid');
      item.classList.add('is-valid');
		alert("Ваше сообщение отправлено");
    //   checkbox.disabled = false
    }else{
      item.classList.remove('is-valid');
      item.classList.add('is-invalid');
    }

    });
    let form = document.querySelector('form');

    if(!form.checkValidity()){
      e.preventDefault();
    }
  });

});

