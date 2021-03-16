require('./bootstrap');
require('alpinejs');

const maxPortes = 550;
const maxDevanture = 1100;

window.addEventListener('scroll', (event) => {
    var scrollPosition = window.scrollY;

    console.log(scrollPosition);

    if(scrollPosition <= maxPortes)
    {
        var porteGauche = document.getElementById('porteGauche');
        var porteDroite = document.getElementById('porteDroite');
        var devanture = document.getElementById('devanture');

        porteGauche.style.opacity = 1;
        porteDroite.style.opacity = 1;

        porteGauche.style.transform = "perspective(1200px) translateX(-" + scrollPosition / 15 + "px) rotateY(" + scrollPosition / 10 + "deg)";
        porteDroite.style.transform = "perspective(1200px) translateX(" + scrollPosition / 15 + "px) rotateY(-" + scrollPosition / 10 + "deg)";

        devanture.style.transform = "scale(1)";
        devanture.style.opacity = 1;


    }
    
    if(scrollPosition > maxPortes && scrollPosition <= maxDevanture)
    {
        var devanture = document.getElementById('devanture');
        devanture.style.opacity = 1;
        var zoom = 1 + (scrollPosition / 1000);
        devanture.style.transform = "scale(" + zoom + ")";

    }

    if(scrollPosition > maxDevanture)
    {
        var devanture = document.getElementById('devanture');
        devanture.style.opacity = 1 - scrollPosition / 1000;
    }
    
});