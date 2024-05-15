const body = document.querySelector('body');
const aside = document.querySelector('aside');
const eraContainer = document.querySelector('.era-nav-container');
const eraBadges = eraContainer.children;
const eraNavInfo = document.querySelector('.era-nav-info');
const eraNavInfoContent = document.querySelector('.era-nav-info-wrapper').children;

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
            if (Date.now() - startHoverTime < 2100) {
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
    window.location.href = 'index.php?route=traverse&era=' + event.target.dataset.name;
}

function loseAsideFocus(event) {
    if (event.target.parentNode === aside || event.target.parentNode.parentNode === aside || event.target.parentNode.parentNode.parentNode === aside) { return; }
    infoShown = false;
    hideInfo();
    body.removeEventListener('mousedown', loseAsideFocus);
}

function showInfo() {
    aside.animate({
        width: '30rem'
    }, {duration: 300, fill: 'forwards'});

    eraNavInfo.animate({
        width: '100%'
    }, {duration: 300, fill: 'forwards'});
}

function updateInfo(event) {
    let currentEra = event.target.dataset.name;
    eraNavInfoContent[0].innerHTML = currentEra + ' Era';

    for (i = 0; i < eraNavInfoContent.length; i++) {
        eraNavInfoContent[i].animate({
            opacity: '0'
        }, { duration: 0, fill: 'forwards'});

        eraNavInfoContent[i].animate({
            opacity: '1'
        }, { duration: 300, fill: 'forwards'});
    }
}

function hideInfo() {
    aside.animate({
        width: '6rem'
    }, {duration: 300, fill: 'forwards'});

    eraNavInfo.animate({
        width: '0'
    }, {duration: 300, fill: 'forwards'});
}

for (i = 0; i < eraBadges.length; i++) {
    eraBadges[i].addEventListener('mouseenter', badgeMouseEnter);
    eraBadges[i].addEventListener('click', badgeMouseClick);
}
