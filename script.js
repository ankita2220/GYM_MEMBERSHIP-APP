  // sidebar open close js code
//   let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .menu");
  let menuCloseBtn = document.querySelector(".nav-links .bx-x");
  menuOpenBtn.onclick = function() {
//   navLinks.style.left = "0";
document.getElementById("sidebar").style.left = "0%";
document.getElementById("sidebar").style.display = "block";
  }
  
  menuCloseBtn.onclick = function() {
    document.getElementById("sidebar").style.left = "-100%";
    }
    