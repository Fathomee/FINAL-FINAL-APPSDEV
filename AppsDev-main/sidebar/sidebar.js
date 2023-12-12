
const icon = document.querySelector('.icon');
const aside = document.querySelector('.aside');
const svg = document.querySelector('.svg');

icon.addEventListener('click', () =>{
 icon.classList.toggle('icons');
 aside.classList.toggle('asides');
 svg.classList.toggle('svgs');
});



