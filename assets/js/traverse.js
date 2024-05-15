const body = document.querySelector('body');
const aside = document.querySelector('aside');
const eraNavInfo = document.querySelector('.era-nav-info');
const eraNavInfoContent = document.querySelector('.era-nav-info-content');
const eraContainer = document.querySelector('.era-nav-container');
const eraBadges = eraContainer.children;

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
    
    if (infoShown) {
        showInfo();
        body.addEventListener('mousedown', loseAsideFocus);
    } else {
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
    badgeLabel.style.top = (event.clientY + 1) + 'px';
    badgeLabel.style.left = (event.clientX + 1) + 'px';
}

function badgeMouseLeave() {
    startHoverTime = 0;
    badgeLabel.remove();

    document.removeEventListener('mousemove', badgeMouseMove);
    currentBadge.removeEventListener('mouseleave', badgeMouseLeave);
}

function badgeMouseClick(event) {
    
}

function loseAsideFocus(event) {
    console.log(event.target.parentNode);
    if (event.target.parentNode == aside || event.target.parentNode.parentNode == aside || event.target.parentNode.parentNode.parentNode == aside) { return; }
    infoShown = false;
    hideInfo();
}

function showInfo() {
    eraNavInfoContent.children[0].innerHTML = currentBadge.dataset.name + ' Era'; 
    eraNavInfo.animate({
        width: '30rem',
        height: '45rem',
        opacity: 1
    }, { duration: 300, fill: 'forwards' });
}

function hideInfo() {
    eraNavInfo.animate({
        width: 0,
        height: 0,
        opacity: 0
    }, { duration: 300, fill: 'forwards' });
}

for (i = 0; i < eraBadges.length; i++) {
    eraBadges[i].addEventListener('mouseenter', badgeMouseEnter);
}
