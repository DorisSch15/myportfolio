// // nav/ham toggle

// let navToggle = document.querySelector('.nav__header-ham');
// let nav = document.querySelector('.links');

// navToggle.addEventListener('click', () => {

//     nav.classList.toggle('links--activ');
// });

// // toggle / Schrift ahref schwarz/weiss

// let current_url = document.location;
// document.querySelectorAll(".links__item-a").forEach(function(e){
//    if(e.href == current_url){
//       e.classList += " links__item-a--activ";
//    };
// });

// testing js

    const btnHamIcon = document.getElementById('btn-hamIcon');
    const mobileMenu = document.getElementById('navMobile');
    const btnHamClose = document.getElementById('btn-hamClose');

    btnHamIcon.addEventListener('click', toggleMenu);
    btnHamClose.addEventListener('click', toggleMenu);


function toggleMenu(){
    mobileMenu.classList.toggle('flex')
    mobileMenu.classList.toggle('hidden')

    console.log('i got clicked')
};



