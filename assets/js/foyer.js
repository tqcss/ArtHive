const header = document.querySelector('header');

function fadeIn(element, delay) {
    setTimeout(() => (element.classList.add('visible')), delay);
}

header.style.backgroundColor = 'transparent';;
header.style.backdropFilter = 'blur(4px)';

fadeIn(document.querySelector('.introduction'), 600);
fadeIn(document.querySelector('.feel'), 900);
fadeIn(document.querySelector('.button'), 1200);
console.log('done2');