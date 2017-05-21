var links = document.getElementsByClassName('disappear');

var redirect_url;

var myFunction = function(e) {
  e.preventDefault();
  document.getElementById('star1').className += 'disappearing';
  document.getElementById('star2').className += 'disappearing';
  document.getElementById('star3').className += 'disappearing';
  document.getElementById('site-container').className = 'disappearing';
  redirect_url = this.href;
  window.setTimeout(function() {
    window.location.href = redirect_url;
  }, 800);
};

for (var i = 0; i < links.length; i++) {
  links[i].addEventListener('click', myFunction, false);
}
/*
if (el.addEventListener){
  el.addEventListener('click', modifieTexte, false);
} else if (el.attachEvent) {
  el.attachEvent('onclick', modifieTexte);
}*/

var star1 = document.querySelector('#star1'),
  star2 = document.querySelector('#star2'),
  star3 = document.querySelector('#star3');

window.addEventListener('mousemove', function(e){
  var pageX = e.clientX,
    pageY = e.clientY;
  star1.style.marginLeft = '-' + pageX/30 + 'px';
  star2.style.marginLeft = '-' + pageX/10 + 'px';
  star3.style.marginLeft = '-' + pageX/5 + 'px';
});

/*
function addClass(element, className) {
  if (element.classList) {
    element.classList.add(className);
  } else {
    element.className += ' ' + className;
  }
}

function removeClass(element, className) {
  if (element.classList) {
    element.classList.remove(className);
  } else {
    element.className = element.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
  }
}

var site_container = document.getElementById('site-container');
var site_header = document.getElementsByClassName('header')[0];
var y_limit = 10;
var y_limit_reach = false;
var update_navbar = function (event) {
  var doc = document.documentElement;
  var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
  var y = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

  if (y > y_limit) {
    if (!y_limit_reach) {
      y_limit_reach = true;
      addClass(site_container, 'with-fixed-navbar');
      site_header.style.opacity = 0;
      site_header.style.opacity = 1;
    }
  } else {
    if (y_limit_reach) {
      y_limit_reach = false;
      site_header.style.opacity = 1;
      removeClass(site_container, 'with-fixed-navbar');
    }
  }
};

window.addEventListener('scroll', update_navbar);
update_navbar();

*/
