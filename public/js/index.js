var maxPortes = 550;
var maxDevanture = 1700;
var bieres = 1800;
var menuAppear = 2700;
var orderAppear = 3400;



window.addEventListener('scroll', function (event) {
  var scrollPosition = window.scrollY;

  if(scrollPosition > 230)
  {
    var mobileMenu = document.getElementById('mobileNav');
    
    mobileMenu.classList.add('menu-min');
  }
  else
  {
    var mobileMenu = document.getElementById('mobileNav');

    mobileMenu.classList.remove('menu-min');
  }

  if (scrollPosition === 0) {
    var porteDroite = document.getElementById('porteDroite');
    var porteGauche = document.getElementById('porteGauche');
    porteDroite.style.transform = "translateX(0)";
    porteGauche.style.transform = "translateX(0)";
  }

  if (scrollPosition <= maxPortes && scrollPosition > 0) {
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

  if (scrollPosition > maxPortes && scrollPosition <= maxDevanture) {
    var devanture = document.getElementById('devanture');
    devanture.style.opacity = 1;
    var zoom = 1 + scrollPosition / 1000;
    devanture.style.transform = "scale(" + zoom + ") translateY(-" + scrollPosition / 150 + "%)";
    var porteGauche = document.getElementById('porteGauche');
    var porteDroite = document.getElementById('porteDroite');
    porteGauche.style.display = 'none';
    porteDroite.style.display = 'none';
  }

  if (scrollPosition > maxDevanture) {
    var devanture = document.getElementById('devanture');
    devanture.style.opacity = 1 - scrollPosition / 1000;
  }

  if (scrollPosition > bieres && scrollPosition <= menuAppear) {
    var carteBieres = document.getElementById('carteBieres');
    carteBieres.style.transform = "scale(1)";
  } else {
    var carteBieres = document.getElementById('carteBieres');
    carteBieres.style.transform = "scale(0)";
  }

  if (scrollPosition > menuAppear) {
    var menu = document.getElementById('menu');
    menu.style.transform = "scale(1)";
    var waiter = document.getElementById('waiter');
    waiter.style.marginLeft = '10%';
  } else {
    var menu = document.getElementById('menu');
    menu.style.transform = "scale(0)";
    var waiter = document.getElementById('waiter');
    waiter.style.marginLeft = '70%';
  }

  if(scrollPosition > orderAppear)
  {
    var order = document.getElementById('order');
    order.style.transform = "translate(0, 0)";
  }
  else
  {
    var order = document.getElementById('order');
    order.style.transform = "translate(200%, 0)";
  }

  var devanture = document.getElementById('devanture');
  var devantureOpacity = window.getComputedStyle(devanture).getPropertyValue('opacity');
  if(devantureOpacity <= 0)
  {
    devanture.style.display = 'none';
  }
  else
  {
    devanture.style.display = 'block';
  }
});

function scrollAnimation(target) {
  window.scrollTo(0, target);
}

scrollAnimation(0);

function menuBurger()
{
  var menu = document.getElementById('menu-left');
  var style = window.getComputedStyle(menu);

  var button = document.getElementById('burgerButton');

  if(style.width == "0px")
  {
    menu.style.display = "block";
    menu.style.width = "300px";
    button.innerHTML = "<i onclick='menuBurger()' class='fas fa-times'></i>";
  }
  else
  {
    menu.style.display = "none";
    menu.style.width = "0px";
    button.innerHTML = "<i onclick='menuBurger()' class='fas fa-bars'></i>";
  }
  
}


var mobileMain = document.getElementById('mobileMain');
var heightMobileMain = mobileMain.offsetHeight;
var before = document.head.appendChild(document.createElement('style'));
before.innerHTML = '.mobile-main::before{height: '+ heightMobileMain + 'px}';


