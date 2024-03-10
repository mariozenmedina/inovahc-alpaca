/*OBSERVER PARALLAX*/
let parallax = document.querySelectorAll('.parallax');
let observer = new IntersectionObserver((entries, observer) => {
    for(var i=0;i<entries.length; i++){
        entries[i].target.goParallax = entries[i].intersectionRatio > 0 ? true : false;
    }
});
for(var i=0; i<parallax.length; i++){
    parallax[i].goParallax = false;
    parallax[i].plxSpeedDesktop = parseFloat(parallax[i].getAttribute('plx-speed-desktop'));
    parallax[i].plxSpeedMobile = parseFloat(parallax[i].getAttribute('plx-speed-mobile'));
    parallax[i].plxTopDesktop = parseInt(parallax[i].getAttribute('plx-top-desktop'));
    parallax[i].plxTopMobile = parseInt(parallax[i].getAttribute('plx-top-mobile'));
    observer.observe(parallax[i]);
}

function makeParallax() {
    let parallaxList = Array.from(parallax).filter( el => el.goParallax );
    for(var i=0; i<parallaxList.length; i++){
        const boundingRect = parallax[i].getBoundingClientRect();
        const pct = boundingRect.top / window.innerHeight;
        parallax[i].style.top = (parallax[i].plxTopDesktop)+(200 * parallax[i].plxSpeedDesktop * pct)+'px';
        parallax[i].style.top = (parallax[i].plxTopMobile)+(200 * parallax[i].plxSpeedMobile * pct)+'px';
    }
}