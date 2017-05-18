// HEADER

var header = document.querySelector('header');

var revues = document.querySelector('.revues');
var recherche = document.querySelector('.recherche');

var menusvg = document.querySelector('.menuburger');
var menuburger = document.querySelector('.menuburger-div');
var svg = document.querySelector('#svgmenu');
var activemenup = document.querySelector('.activemenusvg');

menusvg.addEventListener('click', function() {
  menuburger.classList.toggle('show');
  svg.classList.toggle('header-active');
  activemenup.classList.toggle('header-active');
  revues.classList.toggle('hide');
  recherche.classList.toggle('hide');
});
