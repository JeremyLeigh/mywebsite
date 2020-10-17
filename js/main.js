  //GLOBAL VAR LIST

  //selectors
  var body = document.body;
  var animationState = false;
  var allowBar = false;
  //Arrow
  var nextButton = document.querySelector('#P1circle');
  var blackBar = document.querySelector('#P1black');
  var regArrow = document.querySelector('#P1arrow');
  var altArrow = document.querySelector('#P1arrow2');
  //var switchArt = document.querySelector('#module');
  var blackSlide = document.querySelector('#Page2Black');
  //Nav
  var navButtons = document.getElementsByClassName('hit');
  var homeButton = navButtons[0];
  var aboutButton = navButtons[1];
  var projButton = navButtons[2];
  var contButton = navButtons[3];
  //Carousel
  var slides = document.querySelectorAll(".mySlides");
  var totalItems = slides.length;
  var slide = 0;
  var moving = true;
  var next = document.querySelector("#nextB");
  var prev = document.querySelector("#prevB");
  var slideClassName = "mySlides";
  var slideBarWidth;
  var slideBar = document.querySelector("#slideShowBar");
  var innerBar = document.querySelector("#slideInnerBar");
  var galleryBox = document.querySelector("#projects");
  var autoGallery = true;
  //var button = document.getElementsByClassName("button");
  var pH;
  var p3;
  var p4;
  var nPS;
  //FUNCTIONS
  //HEIGHT READER
  function heightReader()
  {
    pH = window.innerHeight;
    p3 = pH * 2;
    p4 = pH * 3;
    nPS = window.pageYOffset;
    console.log(pH);
  }
  //PAGE RESIZE
function autoResizeDiv()
{
    var Pages = document.querySelectorAll('.resizePage'), i;
    for (i = 0; i < Pages.length; ++i) {
      Pages[i].style.height = window.innerHeight +'px';
    }
    //switchArt.style.width = window.innerWidth+'px';
    //console.log(window.innerHeight);
    window.slideBarWidth = window.innerWidth / totalItems;
    slideBar.style.width = slideBarWidth+"px";
    console.log("Resized");
    console.log(slideBarWidth);
    console.log(slideBar);
}

//SCROLL FUNCTIONALITY
function scrollFunction(e)
{
  e.preventDefault();
  var scrollValue = e.deltaY;
//  console.log(scrollValue);
  if (scrollValue > 0){
    nextPage();
    console.log('going down');
  }
  else {
    prevPage();
    console.log('going up');
  }
}
  //NEXT PAGE
function nextPage()
{
  heightReader();
  //Animation Trigger
  if (animationState !== true){
  //Switch Animation
  //Conditions
  if (nPS >= 0 && nPS < pH){
  if (allowBar !== true){
  aboutTransition();
  }
  }
  else if (nPS >= pH && nPS < p3){
  TweenMax.to(window, 1.8, {scrollTo:p3, onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  }
  else if (nPS >= p3 && nPS < p4){
  TweenMax.to(window, 1.8, {scrollTo:p4,onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  arrowChange();
  }
  else {
  TweenMax.to(window, 1.8, {scrollTo:0, onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  //console.log('miscastDown');
  arrowReturn();
  }
  }
}

  function aboutTransition()
  {
    TweenMax.to(window, 1.8, {scrollTo:pH});
    var blackBarAni = new TimelineMax();
    console.log(allowBar);
    TweenMax.to(blackSlide, 1.5, {height:0, delay:0.3});
    TweenMax.to(altArrow,0.3, {opacity:0});
    TweenMax.to(altArrow,0.3, {opacity:1, delay:2.4});
    TweenMax.to(blackBar, 0, {height:pH });
    TweenMax.from(blackBar, 0.5, {marginBottom:-pH,});
    blackBarAni.to(regArrow,0.3, {opacity:0 ,onStart: function(){animationState = true; allowBar = true;}});
    blackBarAni.to(blackBar, 1.6, {marginBottom:pH,});
    blackBarAni.to(blackBar, 0, {height:0, marginBottom:0});
    blackBarAni.to(regArrow,0.3, {opacity:1 ,onComplete: function(){animationState = false; allowBar = false;}});
  }
  //PREVIOUS PAGE
  function prevPage()
  {
    heightReader();
    //Animation Trigger
    if (animationState !== true){
    //Conditions
    if (nPS >= p4 && nPS <100000){
    TweenMax.to(window, 1.8, {scrollTo:p3, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    //console.log("Only Last Page2");
    arrowReturn();
    }
    else if (nPS >= p3 && nPS < p4){
    TweenMax.to(window, 1.8, {scrollTo:pH, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    else if (nPS >= pH && nPS < p3){
    TweenMax.to(window, 1.8, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    }
  }

  //BUTTON ANIMATE
function arrowAnimate()
{
    console.log("In");
  heightReader();
  if (nPS > p3){
    TweenMax.to(blackBar, 0.25, {height: 55});
    TweenMax.to(regArrow, 0.25, {marginTop: -10});
    TweenMax.to(altArrow, 0.25, {marginTop: -10});
    //console.log('Final Page');
}
  else {
    TweenMax.to(blackBar, 0.25, {height: 55});
    TweenMax.to(regArrow, 0.25, {marginTop: 10});
    TweenMax.to(altArrow, 0.25, {marginTop: 10});
    //console.log('Not Final Page');
  }
}
function arrowAnimateOut()
{
  if (allowBar !== true){
  console.log("Out");
  heightReader();
  if (nPS > p3){
    TweenMax.to(blackBar, 0.25, {height: 0});
    TweenMax.to(regArrow, 0.25, {marginTop: 0});
    TweenMax.to(altArrow, 0.25, {marginTop: 0});
    //console.log('Final Page');
}
  else {
    TweenMax.to(blackBar, 0.25, {height: 0});
    TweenMax.to(regArrow, 0.25, {marginTop: 0});
    TweenMax.to(altArrow, 0.25, {marginTop: 0});
    //console.log('Not Final Page');
  }
}
}
function firstLastClick(){
  if (animationState !== true){
    if (nPS > p3){
      TweenMax.to(regArrow, 0.25, {marginTop: 10});
      TweenMax.to(altArrow, 0.25, {marginTop: 10});
    }
    if (nPS >= p3 && nPS < p4){
      console.log("second last");
      TweenMax.to(regArrow, 0.25, {marginTop: -10});
      TweenMax.to(altArrow, 0.25, {marginTop: -10});
    }
  }
}
//Nav
function arrowReturn()
{
  TweenMax.to(regArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#000003'});
  TweenMax.to(altArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#FFFFF3'});
}
function arrowChange()
{
  TweenMax.to(regArrow, 0.25, {borderBottomColor:'#000003', borderTopColor:'transparent'});
  TweenMax.to(altArrow, 0.25, {borderBottomColor:'#FFFFF3', borderTopColor:'transparent'});
}

function goHome()
{
  heightReader();
  TweenMax.to(window, 1.5, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
}

function goAbout()
{
  heightReader();
  TweenMax.to(window, 1.8, {scrollTo:pH});
  var blackBarAni = new TimelineMax();
  console.log(allowBar);
  TweenMax.to(blackSlide, 1.5, {height:0, delay:0.3});
  TweenMax.to(altArrow,0.3, {opacity:0});
  TweenMax.to(altArrow,0.3, {opacity:1, delay:2.4});
  TweenMax.to(blackBar, 0, {height:pH });
  TweenMax.from(blackBar, 0.5, {marginBottom:-pH,});
  blackBarAni.to(regArrow,0.3, {opacity:0 ,onStart: function(){animationState = true; allowBar = true;}});
  blackBarAni.to(blackBar, 1.6, {marginBottom:pH,});
  blackBarAni.to(blackBar, 0, {height:0, marginBottom:0});
  blackBarAni.to(regArrow,0.3, {opacity:1 ,onComplete: function(){animationState = false; allowBar = false;}});
}

function goProj()
{
  heightReader();
  TweenMax.to(window, 1.5, {scrollTo:p3, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
}

function goCont()
{
  heightReader();
  TweenMax.to(window, 1.5, {scrollTo:p4, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
  arrowChange();
}

//Carousel
// Set classes
function setInitialClasses() {
  // This assumes there are at least three items.
  console.log("Init Class Set");
  slides[totalItems - 1].classList.add("prev");
  slides[0].classList.add("active");
  slides[1].classList.add("next");
}
// Next
function moveNext() {
  // Check
  if (!moving) {
    console.log("Next and Not Moving");
    // If it's the last slide, reset to 0, else +1
    if (slide === (totalItems - 1)) {
      slide = 0;
    console.log("Reset Slide");
    TweenMax.to(slideBar, 0.5, {x:0+"%"});
    } else {
      slide++;
      console.log("Next Slide");
      //Move slide bar
      TweenMax.to(slideBar, 0.5, {x:"+=" + 100+"%"});
    }
    // Move carousel to updated slide
    moveCarouselTo(slide);
  }
}
// Prev
function movePrev() {
  // Check
  if (!moving) {
    console.log("Previous and Not Moving");
    // If it's the first slide, set as the last slide, else -1
    if (slide === 0) {
      slide = (totalItems - 1);
      TweenMax.to(slideBar, 0.5, {x:300+"%"});
    } else {
      slide--;
      TweenMax.to(slideBar, 0.5, {x:"-=" + 100+"%"});
    }

    // Move carousel to updated slide
    moveCarouselTo(slide);
  }
}
function disableInteraction() {
  // Set 'moving' to true for the same duration as our transition.
  // (0.5s = 500ms)

  moving = true;
  // setTimeout runs its function once after the given time
  setTimeout(function(){
    moving = false;
  }, 500);
}

//Carousel MAIN FUNCTION

function moveCarouselTo(slide) {
  // Check if carousel is moving, if not, allow interaction
  if(!moving) {
    // temporarily disable interactivity
    disableInteraction();
    console.log("Moving To Next Slide");
    // Update the "old" adjacent slides with "new" ones
    var newPrevious = slide - 1,
        newNext = slide + 1,
        oldPrevious = slide - 2,
        oldNext = slide + 2;
    // Test if carousel has more than three items
    if ((totalItems) > 2) {
      console.log("Meets Req");
      // Checks and updates if the new slides are out of bounds
      if (newPrevious <= 0) {
        oldPrevious = (totalItems - 1);
      } else if (newNext >= (totalItems - 1)){
        oldNext = 0;
      }
      // Checks and updates if slide is at the beginning/end
      if (slide === 0) {
        newPrevious = (totalItems - 1);
        oldPrevious = (totalItems - 2);
        oldNext = (slide + 1);
      } else if (slide === (totalItems -1)) {
        newPrevious = (slide - 1);
        newNext = 0;
        oldNext = 1;
      }
      // Now we've worked out where we are and where we're going,
      // by adding/removing classes we'll trigger the transitions.
      // Reset old next/prev elements to default classes
      console.log(oldNext);
      slides[oldPrevious].className = slideClassName;
      slides[oldNext].className = slideClassName;
      // Add new classes
      slides[newPrevious].className = slideClassName + " prev";
      slides[slide].className = slideClassName + " active";
      slides[newNext].className = slideClassName + " next";
    }
  }
}
function initCarousel() {
  setInitialClasses();
  // Set moving to false so that the carousel becomes interactive
  moving = false;
}
//Gallery Bar
function innerBarSlide()
{
  var tl = new TimelineMax({onComplete:autoPlay});
  tl.to(innerBar, 8, {width:100+"%", ease:Linear.easeNone});
  tl.to(innerBar, 0, {width:0});
}
function autoPlay() {

  if (autoGallery === true) {
  console.log("Auto Play is On");
  innerBarSlide();
  moveNext();
}
  else
  console.log("Auto Play is Off");
}
function clickGallery()
{
  autoGallery = false;
  TweenMax.to(innerBar, 0.3, {width:0});
  console.log("Gallery Clicked");
}
//FrontPage Scene
var artA = document.querySelector("#module");
var artB = document.querySelector("#module2");
var artC = document.querySelector("#module3");
var mover = document.querySelector("#moveThis");
var allowFrame = false;
mover.addEventListener("mousemove", moveScene, false);
setInterval(function(){ allowFrame = true;}, 33);
function moveScene(e) {
  if (allowFrame === true) {
  //console.log(e);
  TweenMax.to(artA, 0.3, {backgroundPositionX: -e.offsetX / 30 +10 +"px", ease:Linear.easeNone});
  TweenMax.to(artA, 0.3, {backgroundPositionY: -e.offsetY / 30 +10 +"px", ease:Linear.easeNone});
  TweenMax.to(artB, 0.3, {backgroundPositionX: e.offsetX / 80 +10 +"px", ease:Linear.easeNone});
  TweenMax.to(artB, 0.3, {backgroundPositionY: e.offsetY / 80 +10 +"px", ease:Linear.easeNone});
  TweenMax.to(artC, 0.3,{backgroundPositionX: -e.offsetX / 100 +10 +"px", ease:Linear.easeNone});
  TweenMax.to(artC, 0.3, {backgroundPositionY: -e.offsetY / 80 +10 +"px", ease:Linear.easeNone});
  allowFrame = false;
}
}
function resetScene() {
  TweenMax.to(artA, 0.8, {backgroundPositionX: 0});
  TweenMax.to(artB, 0.8, {backgroundPositionX: 0});
  TweenMax.to(artC, 0.8, {backgroundPositionX: 0});
}
//Nav Move Scene
function navScene(pos){
  console.log(pos);
  TweenMax.to(artA, 0.4, {backgroundPositionX: pos +"px", ease:Linear.easeNone});
  TweenMax.to(artB, 0.4, {backgroundPositionX: pos +"px", ease:Linear.easeNone});
  TweenMax.to(artC, 0.4, {backgroundPositionX: pos +"px", ease:Linear.easeNone});
}
mover.addEventListener("mouseout", resetScene, false);
  // EVENT LISTENERS
window.onresize = autoResizeDiv;
autoResizeDiv();
body.addEventListener("wheel" ,scrollFunction, {passive: false}, false);
nextButton.addEventListener("click", nextPage, false);
nextButton.addEventListener("mouseover", arrowAnimate, false);
nextButton.addEventListener("mouseout", arrowAnimateOut, false);
nextButton.addEventListener("click", firstLastClick, false);
//nav
//Mouseover
//for (var i = 0; i < button.length; i++) {
//button[i].addEventListener("mouseover", navSwitch, false);
//}
homeButton.addEventListener("mouseover", navScene.bind(null, pos = -100), false);
aboutButton.addEventListener("mouseover", navScene.bind(null, pos = -50), false);
projButton.addEventListener("mouseover", navScene.bind(null, pos = 100), false);
contButton.addEventListener("mouseover", navScene.bind(null, pos = 150), false);
//Click
homeButton.addEventListener("click", goHome, false);
aboutButton.addEventListener("click", goAbout, false);
projButton.addEventListener("click", goProj, false);
contButton.addEventListener("click", goCont, false);
//Carousel
next.addEventListener('click', moveNext);
prev.addEventListener('click', movePrev);
galleryBox.addEventListener('click', clickGallery);
initCarousel();
innerBarSlide();
