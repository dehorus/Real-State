let hamburger = document.querySelector('.hamburger');
let menu = document.querySelector('.nav-container');



hamburger.addEventListener('click', () => {
 hamburger.classList.toggle("is-active");
 menu.classList.toggle('open');
})
