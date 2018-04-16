import './milestones.js';
import './lines.js';

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
const userDescription = document.querySelectorAll('.hero-slider-description-container h4');
const userScreen = document.querySelectorAll('.hero-slider-mockup-container');
const userIconTexts = document.querySelectorAll('.hero-slider-icon-container p');

userButtons.forEach(userButton => userButton.addEventListener("click", e => {

  const buttonClicked = e.target.className.split(' ')[1];

userButtons.forEach(x => x.classList.remove("active"));
userTitles.forEach(x => x.classList.remove("active"));
userDescription.forEach(x => x.classList.remove("active"));
userScreen.forEach(x => x.classList.remove("active"));
userIconTexts.forEach(x => x.classList.remove("active"));

jQuery('#firstIcon').attr('class', 'first-icon-contain');
jQuery('#secondIcon').attr('class', 'second-icon-contain');
jQuery('#thirdIcon').attr('class', 'third-icon-contain');
jQuery('#fourthIcon').attr('class', 'fourth-icon-contain');

e.target.classList.add("active");
document.getElementById(`${e.target.id}Title`).classList.add("active");
document.getElementById(`${e.target.id}Description`).classList.add("active");
document.getElementById(`${e.target.id}Mockup`).classList.add("active");
document.getElementById('firstIcon').classList.add(buttonClicked);
document.getElementById('secondIcon').classList.add(buttonClicked);
document.getElementById('thirdIcon').classList.add(buttonClicked);
document.getElementById('fourthIcon').classList.add(buttonClicked);

var list;
list = document.querySelectorAll(`#FirstIconText${e.target.id}, #SecondIconText${e.target.id}, #ThirdIconText${e.target.id}, #FourthIconText${e.target.id}`);
for (var i = 0; i < list.length; ++i) {
   list[i].classList.add('active');
}


}));

  if ($(window).width() < 600) {
$(document).ready(function(){
  $('.superusers-container').slick({
infinite: true,
speed: 300,
slidesToShow: 1,
centerMode: true,
variableWidth: true
  });
});
}
