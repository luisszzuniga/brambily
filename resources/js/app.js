const maxPortes = 550;
const maxDevanture = 1700;
const bieres = 1800;
const menuAppear = 2700;


window.addEventListener('scroll', (event) => {
    var scrollPosition = window.scrollY;

    if(scrollPosition === 0)
    {
        var porteDroite = document.getElementById('porteDroite');
        var porteGauche = document.getElementById('porteGauche');

        porteDroite.style.transform = "translateX(0)";
        porteGauche.style.transform = "translateX(0)";
    }

    if(scrollPosition <= maxPortes && scrollPosition > 0)
    {
        var porteGauche = document.getElementById('porteGauche');
        var porteDroite = document.getElementById('porteDroite');
        var devanture = document.getElementById('devanture');


        porteGauche.style.transform = "perspective(1200px) translateY(" + scrollPosition / 7 + "px) rotateY(" + scrollPosition / 10 + "deg)";
        porteGauche.style.display = 'inline-block';

        porteDroite.style.transform = "perspective(1200px) translateY(" + scrollPosition / 7 + "px) rotateY(-" + scrollPosition / 10 + "deg)";
        porteDroite.style.display = 'inline-block';

        devanture.style.transform = "scale(1)";
        devanture.style.opacity = 1;
    }

    if(scrollPosition > maxPortes && scrollPosition <= maxDevanture)
    {
        var devanture = document.getElementById('devanture');
        devanture.style.opacity = 1;
        var zoom = 1 + (scrollPosition / 1000);
        devanture.style.transform = "scale(" + zoom + ") translateY(-"+ scrollPosition / 150 +"%)";

        var porteGauche = document.getElementById('porteGauche');
        var porteDroite = document.getElementById('porteDroite');

        porteGauche.style.display = 'none';
        porteDroite.style.display = 'none';
    }

    if(scrollPosition > maxDevanture)
    {
        var devanture = document.getElementById('devanture');
        devanture.style.opacity = 1 - scrollPosition / 1000;

    }

    if(scrollPosition > bieres && scrollPosition <= menuAppear)
    {
        var carteBieres = document.getElementById('carteBieres');
        carteBieres.style.transform = "scale(1)";
    }
    else
    {
        var carteBieres = document.getElementById('carteBieres');
        carteBieres.style.transform = "scale(0)";
    }

    if(scrollPosition > menuAppear)
    {
        var menu = document.getElementById('menu');
        menu.style.transform = "scale(1)";

        var waiter = document.getElementById('waiter');
        waiter.style.marginLeft = '10%';
    }
    else
    {
        var menu = document.getElementById('menu');
        menu.style.transform = "scale(0)";

        var waiter = document.getElementById('waiter');
        waiter.style.marginLeft = '70%';
    }


});


function scrollAnimation(target)
{
    window.scrollTo(0, target);
}

scrollAnimation(0);