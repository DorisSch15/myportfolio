// navigationHamburger

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



