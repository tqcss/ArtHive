const body = document.querySelector('body');
const aside = document.querySelector('aside');
const eraContainer = document.querySelector('.era-nav-container');
const eraBadges = eraContainer.children;
const eraNavInfo = document.querySelector('.era-nav-info');
const eraNavInfoContent = document.querySelector('.era-nav-info-wrapper').children;
const eraNavImgWrapper = document.getElementsByClassName('era-nav-img-wrapper');
const slideContainer = document.querySelector('.slide-container');

let currentBadge;
let badgeLabel;
let startHoverTime = 0;
let infoShown = false;


function badgeMouseEnter(event) {
    startHoverTime = Date.now();
    currentBadge = event.target;
    badgeLabel = document.createElement('div');

    body.appendChild(badgeLabel)
    badgeLabel.innerHTML = currentBadge.dataset.name + ' Era';
    badgeLabel.classList.add('era-badge-label');
    badgeLabel.style.top = (event.clientY + 1) + 'px';
    badgeLabel.style.left = (event.clientX + 1) + 'px';

    document.addEventListener('mousemove', badgeMouseMove);
    currentBadge.addEventListener('mouseleave', badgeMouseLeave);
    
    updateInfo(event);
    if (!infoShown) {
        setTimeout(() => {
            if (Date.now() - startHoverTime < 2050) {
                infoShown = true;
                showInfo();
                body.addEventListener('mousedown', loseAsideFocus);
            }
        }, 2000);
    }
}

function badgeMouseMove(event) {
    badgeLabel.style.top = (event.clientY + 5) + 'px';
    badgeLabel.style.left = (event.clientX + 5) + 'px';
}

function badgeMouseLeave() {
    startHoverTime = 0;
    badgeLabel.remove();

    document.removeEventListener('mousemove', badgeMouseMove);
    currentBadge.removeEventListener('mouseleave', badgeMouseLeave);
}

function badgeMouseClick(event) {
    window.location.href = 'index.php?route=traverse&era=' + ((event.target.dataset.name) ? event.target.dataset.name : event.target.parentNode.dataset.name);
}

function loseAsideFocus(event) {
    console.log(1, event.target);
    if (event.target.parentNode === aside || event.target.parentNode.parentNode === aside || event.target.parentNode.parentNode.parentNode === aside) { return; }
    infoShown = false;
    hideInfo();
    document.removeEventListener('mousedown', loseAsideFocus);
}

function showInfo() {
    aside.animate({
        maxWidth: '30rem'
    }, {duration: 500, fill: 'forwards'});

    eraNavInfo.animate({
        maxWidth: '100%'
    }, {duration: 500, fill: 'forwards'});
}

function updateInfo(event) {
    let currentEraData = event.target.dataset;
    eraNavInfoContent[0].innerHTML = currentEraData.name + ' Era';
    eraNavInfoContent[1].innerHTML = currentEraData.desc;

    let eraBackground = event.target.parentNode.parentNode.parentNode.children[1].children[0];
    eraBackground.src = '../assets/images/eras/' + currentEraData.img;

    for (i = 0; i < eraNavInfoContent.length; i++) {
        eraNavInfoContent[i].animate({
            opacity: '0'
        }, { duration: 0, fill: 'forwards'});

        eraNavInfoContent[i].animate({
            opacity: '1'
        }, { duration: 300, fill: 'forwards'});
    }

    eraBackground.animate({
        opacity: '0'
    }, { duration: 500, fill: 'forwards'});

    eraBackground.animate({
        opacity: '0.2'
    }, { duration: 500, fill: 'forwards'});
}

function hideInfo() {
    aside.animate({
        maxWidth: '6rem'
    }, {duration: 500, fill: 'forwards'});

    eraNavInfo.animate({
        maxWidth: '0rem'
    }, {duration: 500, fill: 'forwards'});
}

for (i = 0; i < eraBadges.length; i++) {
    let badge = eraBadges[i].children[0];
    badge.addEventListener('mouseenter', badgeMouseEnter);
    badge.addEventListener('click', badgeMouseClick);
}
