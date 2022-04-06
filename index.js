// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction();myFunction2()};

// Get the header
var header = document.getElementById("navbar");
var header2= document.getElementById("navbar-icon");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function myFunction2() {
  if (window.pageYOffset > sticky) {
    header2.classList.add("sticky2");
  } else {
    header2.classList.remove("sticky2");
  }
}