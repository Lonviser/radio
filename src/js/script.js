const humburger = document.querySelector('.humburger');
const menu = document.querySelector('.menu');
const closeMenu = document.querySelector('.menu__close');

humburger.addEventListener('click', () =>{
    menu.classList.add('active');
})

closeMenu.addEventListener('click', () =>{
    menu.classList.remove('active');
})