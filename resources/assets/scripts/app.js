import './milestones.js';

// Look for .hamburger
var hamburger = document.querySelector(".hamburger");
// On click
hamburger.addEventListener("click", function() {
  // Toggle class "is-active"
  hamburger.classList.toggle("is-active");
  // Do something else, like open/close menu
});


$('.hamburger').click(function(e){
  e.preventDefault();
  $('.mobile-sub-menu').toggle("slide");
  $(this).toggleClass('open');
  var header = $( "header" );
  header.toggleClass('fixed-header');
  console.log(header);
});


//

const userButtons = document.querySelectorAll('.slider-change-container div');
const userTitles = document.querySelectorAll('.current-slide-container h1');

userButtons.forEach(userButton => userButton.addEventListener("click", e => {


userButtons.forEach(x => x.classList.remove("active"));
userTitles.forEach(x => x.classList.remove("active"));
e.target.classList.add("active");
document.getElementById(`${e.target.id}Title`).classList.add("active");



}));
