  //GLOBAL VAR LIST

  //selectors
  var body = document.body;
  var nextButton = document.querySelector('#P1circle');
  var blackBar = document.querySelector('#P1black');
  var regArrow = document.querySelector('#P1arrow');
  var altArrow = document.querySelector('#P1arrow2');
  var animationState = false;
  //page var
  var pageHeight;
  var page3;
  var page4;
  var nextPageStart;

  //FUNCTIONS

  //HEIGHT READER
  function heightReader()
  {
    var pageHeight = window.innerHeight;
    var page3 = pageHeight * 2;
    var page4 = pageHeight * 3;
    var nextPageStart = window.pageYOffset;
  }

  //PAGE RESIZE
function autoResizeDiv()
{
    var Pages = document.querySelectorAll('.resizePage'), i;
    for (i = 0; i < Pages.length; ++i) {
      Pages[i].style.height = window.innerHeight +'px';
    }
    //console.log(window.innerHeight);
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
  console.log(nextPageStart);
  console.log(pageHeight);
  //Animation Trigger
  if (animationState !== true){
  //Conditions
  if (nextPageStart >= 0 && nextPageStart < pageHeight){
  TweenMax.to(window, 1.8, {scrollTo:pageHeight, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
  }
  else if (nextPageStart >= pageHeight && nextPageStart < page3){
  TweenMax.to(window, 1.8, {scrollTo:page3, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
  }
  else if (nextPageStart >= page3 && nextPageStart < page4){
  TweenMax.to(window, 1.8, {scrollTo:page4, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
  //console.log("Only Last Page");
  TweenMax.to(regArrow, 0.25, {borderBottomColor:'#000003', borderTopColor:'transparent'});
  TweenMax.to(altArrow, 0.25, {borderBottomColor:'#FFFFF3', borderTopColor:'transparent'});
  }
  else {
  TweenMax.to(window, 1.8, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
  //console.log('miscastDown');
  TweenMax.to(regArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#000003'});
  TweenMax.to(altArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#FFFFF3'});
  }
  }
}
  //PREVIOUS PAGE
  function prevPage()
  {
    //console.log(nextPageStart);
    //console.log(pageHeight);
    //Animation Trigger
    if (animationState !== true){
    //Conditions
    if (nextPageStart >= page4 && nextPageStart <100000){
    TweenMax.to(window, 1.8, {scrollTo:page3, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    //console.log("Only Last Page2");
    TweenMax.to(regArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#000003'});
    TweenMax.to(altArrow, 0.25, {borderBottomColor:'transparent', borderTopColor:'#000003'});
    }
    else if (nextPageStart >= page3 && nextPageStart < page4){
    TweenMax.to(window, 1.8, {scrollTo:pageHeight, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    else if (nextPageStart >= pageHeight && nextPageStart < page3){
    TweenMax.to(window, 1.8, {scrollTo:0, onStart: function(){animationState = true;},onComplete: function(){animationState = false;}});
    }
    }
  }

  //BUTTON ANIMATE
function arrowAnimate()
{
    console.log("In");
  if (nextPageStart >= page3){
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
  console.log("Out");
  if (nextPageStart >= page3){
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

  // EVENT LISTENERS
window.onresize = autoResizeDiv;
autoResizeDiv();
body.addEventListener("wheel" ,scrollFunction, {passive: false}, false);
nextButton.addEventListener("click", nextPage, false);
nextButton.addEventListener("mouseover", arrowAnimate, false);
nextButton.addEventListener("mouseout", arrowAnimateOut, false);
