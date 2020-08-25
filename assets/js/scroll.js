
  function myScrollTo(id) {
    var e = document.getElementById(id);
    var box = e.getBoundingClientRect(); 
    // La méthode Element.getBoundingClientRect() renvoie la taille d'un élément et sa position relative par rapport à la zone d'affichage 
   
    var k, inc;
    inc = (box.top >= 0) ? 1 : -1;
    for (k = 0; k < 49; k++) setTimeout("window.scrollBy(0," + Math.floor(box.top / 50) + ")", 10 * k);
    setTimeout("myLastScrollTo('" + id + "')", 500);
  }

  