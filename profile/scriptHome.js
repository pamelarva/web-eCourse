// script.js
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  navbar.classList.toggle("navbar-scroll", window.scrollY > 0);
});

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('nav');
    if (window.scrollY > 0) {
      navbar.classList.add('transparent');
    } else {
      navbar.classList.remove('transparent');
    }
  });

  
  