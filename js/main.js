  //GLOBAL VAR LIST
//console.log(document.querySelectorAll(".mySlides"));
  //selectors
  var body = document.body;
  var animationState = false;
  var allowBar = false;
  //Arrow
  var nextButton = navButtons;
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
  var next = navButtons[12];
  var prev = navButtons[11];
  var moveUp = navButtons[5];
  var moveDown = navButtons[6];
  var slideClassName = "mySlides";
  var slideBarWidth;
  var slideBar = document.querySelector("#slideShowBar");
  var innerBar = document.querySelector("#slideInnerBar");
  var galleryBox = document.querySelector("#projects");
  var autoGallery = true;
  var deskLock = false;
  //Image Change
  var clickZone = document.querySelector("#ThreedArt");
  var counter = 1;
  //initials
  var initials = document.querySelector("#initialsHit > .hit");
  //Other
  var pH;
  var p3;
  var p4;
  var nPS;
  //FUNCTIONS

  //MOBILE GATE
  var screenWidth = window.innerWidth;
  //console.log('Screen Width'+screenWidth);

  function mobileGate()
  {
    if (window.innerWidth >= 1000)
    {
      deskLock = true;
      //console.log(deskLock);
      body.addEventListener("wheel" ,scrollFunction,{passive:false}, false);

    }
    else {
      deskLock = false;
      //console.log(deskLock);
      body.removeEventListener("wheel" ,scrollFunction,{passive:false}, false);
    }
    const isTouchDevice = () => {
      return window.matchMedia("(pointer: coarse)").matches
    }
    var touchDevice = isTouchDevice();
    //console.log(touchDevice);
    //Shut Down non-mobile features
    if(touchDevice == false){
    loadScript();
      //console.log("Load All Script");
      autoResizeDiv();
    }
    else {
      //console.log("Mobile. No Mobile Script");
    }
  }


  //HEIGHT READER
  function heightReader()
  {
    pH = window.innerHeight;
    p3 = pH * 2;
    p4 = pH * 3;
    nPS = window.pageYOffset;
    ////console.log(pH);
  }
  //PAGE RESIZE
function autoResizeDiv()
{
    var allPages = document.querySelectorAll('.resizePage'), i;
    for (i = 0; i < allPages.length; ++i) {
      allPages[i].style.height = window.innerHeight +'px';
    }
    //switchArt.style.width = window.innerWidth+'px';
    ////console.log(window.innerHeight);
    window.slideBarWidth = window.innerWidth / totalItems;
    slideBar.style.width = slideBarWidth+"px";
    //console.log("Resized");
    ////console.log(slideBarWidth);
    ////console.log(slideBar);
}

//SCROLL FUNCTIONALITY
function scrollFunction(e)
{
  //console.log("Scrolling Fire");
    //console.log("Yes dude");
e.preventDefault();
  var scrollValue = e.deltaY;
//  //console.log(scrollValue);
  if (scrollValue > 0){
    nextPage();
    ////console.log('going down');
  }
  else {
    prevPage();
    ////console.log('going up');
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
  TweenMax.to(window, 1, {scrollTo:p3, onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  }
  else if (nPS >= p3 && nPS < p4){
  TweenMax.to(window, 1, {scrollTo:p4,onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  }
  else {
  TweenMax.to(window, 1, {scrollTo:0, onStart: function(){animationState = true;}, onComplete: function(){animationState = false;}});
  ////console.log('miscastDown');
  }
  }
}

  function aboutTransition()
  {
    TweenMax.to(window, 1, {scrollTo:pH});
  }
  //PREVIOUS PAGE
  function prevPage()
  {
    heightReader();
    //Animation Trigger
    if (animationState !== true){
    //Conditions
    if (nPS >= p4 && nPS <100000){
    TweenMax.to(window, 1, {scrollTo:p3, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    ////console.log("Only Last Page2");
    }
    else if (nPS >= p3 && nPS < p4){
    TweenMax.to(window, 1, {scrollTo:pH, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    else if (nPS >= pH && nPS < p3){
    TweenMax.to(window, 1, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    }
  }


//Nav

function goHome()
{
  heightReader();
  TweenMax.to(window, 1.5, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
}

function goAbout()
{
  heightReader();
  TweenMax.to(window, 1.5, {scrollTo:pH, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
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
}

//Carousel
// Set classes
function setInitialClasses() {
  // This assumes there are at least three items.
  ////console.log("Init Class Set");
  slides[totalItems - 1].classList.add("prev");
  slides[0].classList.add("active");
  slides[1].classList.add("next");
}

var mobileDots = document.querySelectorAll("#mobileCounter ul li");
// Next
function moveNext() {
  // Check
  closeView();
  if (!moving) {
    ////console.log("Next and Not Moving");
    // If it's the last slide, reset to 0, else +1
    if (slide === (totalItems - 1)) {
      slide = 0;
    ////console.log("Reset Slide");
    TweenMax.to(slideBar, 0.5, {x:0+"%"});
    for (var i = 0; i < mobileDots.length; i++) {
      mobileDots[i].style.backgroundColor = "darkgrey";
    }
      mobileDots[slide].style.backgroundColor = "#fffff3";
    } else {
      slide++;
      //console.log("Next Slide");
      //Move slide bar
      TweenMax.to(slideBar, 0.5, {x:"+=" + 100+"%"});
      //console.log(mobileDots[1]);
      for (var i = 0; i < mobileDots.length; i++) {
        mobileDots[i].style.backgroundColor = "darkgrey";
      }
        mobileDots[slide].style.backgroundColor = "#fffff3";
    }
    // Move carousel to updated slide
    moveCarouselTo(slide);
  }
}
// Prev
function movePrev() {
  closeView();
  //console.log("button is pressed");
  // Check
  if (!moving) {
    // If it's the first slide, set as the last slide, else -1
    if (slide === 0) {
      slide = (totalItems - 1);
      TweenMax.to(slideBar, 0.5, {x:300+"%"});
      for (var i = 0; i < mobileDots.length; i++) {
        mobileDots[i].style.backgroundColor = "darkgrey";
      }
        mobileDots[slide].style.backgroundColor = "#fffff3";
    } else {
      slide--;
        //console.log("Previous");
      TweenMax.to(slideBar, 0.5, {x:"-=" + 100+"%"});
      for (var i = 0; i < mobileDots.length; i++) {
        mobileDots[i].style.backgroundColor = "darkgrey";
      }
        mobileDots[slide].style.backgroundColor = "#fffff3";
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
    ////console.log("Moving To Next Slide");
    // Update the "old" adjacent slides with "new" ones
    var newPrevious = slide - 1,
        newNext = slide + 1,
        oldPrevious = slide - 2,
        oldNext = slide + 2;
    // Test if carousel has more than three items
    if ((totalItems) > 2) {
      ////console.log("Meets Req");
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
      ////console.log(oldNext);
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
  ////console.log("Auto Play is On");
  innerBarSlide();
  moveNext();
}
  else
{
  ////console.log("Auto Play is Off");
}
}
function clickGallery()
{
  autoGallery = false;
  TweenMax.to(innerBar, 0.3, {width:0});
  ////console.log("Gallery Clicked");
}



//initials
var initialsText = document.querySelectorAll("#initials > h5");
function initialsReveal()
{
  //console.log("good to go");
  initialsText[0].innerHTML = 'Jeremy';
  initialsText[0].style.transform = "translateX(-30px) translateY(-20px)";
  initialsText[1].style.transform = "translateX(-30px) translateY(-20px)";
  initialsText[1].innerHTML = 'Leigh&#169;';
  initialsText[0].style.fontSize = "20px";
  initialsText[1].style.fontSize = "20px";

  changeText();
}
function initialsHide()
{
  //console.log("good to go");
  initialsText[0].innerHTML = '20';
  initialsText[1].innerHTML = '22';
  initialsText[0].style.transform = "translateY(-20px)";
  initialsText[1].style.transform = "translateY(-20px)";
  initialsText[0].style.fontSize = "18px";
  initialsText[1].style.fontSize = "18px";
  changeText();
}
initials.addEventListener('mouseover', initialsReveal, false);
initials.addEventListener('mouseout', initialsHide, false);

//Back to top

window.addEventListener('scroll', arrowFlip, false);

var arrowLock = 1;

function  arrowFlip()
{
  var downArrow = document.querySelector("#downArrow");
  heightReader();
  if(nPS >= 0 && nPS < p4){
    //console.log("too short");
  if(arrowLock == 2)
  {
  TweenMax.fromTo(downArrow, 0.5, {paddingLeft: 100, opacity: 0}, {paddingLeft:0, opacity: 1});
  downArrow.innerHTML = "&#10094;";
  arrowLock = 1;
  }
  }
  else{
    //console.log("conditions met");
  if(arrowLock == 1)
  {
  TweenMax.fromTo(downArrow, 0.5, {paddingLeft: 100, opacity: 0}, {paddingLeft:0, opacity: 1});
  downArrow.innerHTML = "Top";
  arrowLock = 2;
  }
}
}
  // EVENT LISTENERS
window.addEventListener('resize', mobileGate, false);
window.addEventListener('load', mobileGate, false);
//Click
homeButton.addEventListener("click", goHome, false);
aboutButton.addEventListener("click", goAbout, false);
projButton.addEventListener("click", goProj, false);
contButton.addEventListener("click", goCont, false);
//Mobile Click
var mobileNavs = document.querySelectorAll("#hamSplash ul li");
var aboutPos = document.querySelector("#Page2");
var projPos = document.querySelector("#Page3");
var contPos = document.querySelector("#Page4");
mobileNavs[0].addEventListener("click",() => {
     goHome();
     triggerHamburger();
});
mobileNavs[1].addEventListener("click",() => {
     //goAbout();
     aboutPos.scrollIntoView({behavior:'smooth'});
     triggerHamburger();
});
mobileNavs[2].addEventListener("click",() => {
     //goProj();
     projPos.scrollIntoView({behavior:'smooth'});
     triggerHamburger();
});
mobileNavs[3].addEventListener("click",() => {
     //goCont();
     contPos.scrollIntoView({behavior:'smooth'});
     triggerHamburger();
});
//Up and down'
moveUp.addEventListener('click', prevPage,false);
moveDown.addEventListener('click', nextPage,false);
//Carousel
next.addEventListener('click',() => {
    moveNext();
    clickGallery();
});
prev.addEventListener('click',() => {
    movePrev();
    clickGallery();
});
galleryBox.addEventListener('click', clickGallery);
initCarousel();
innerBarSlide();
