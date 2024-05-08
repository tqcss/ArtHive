function fadeIn(element, delay) {
    setTimeout(() => (element.classList.add('visible')), delay);
}

fadeIn(document.querySelector('.introduction'), 500);
fadeIn(document.querySelector('.feel'), 900);
fadeIn(document.querySelector('.button'), 1200);