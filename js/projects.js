//Vars
//transform
var backdrop = document.querySelectorAll(".text");
var viewWrap = document.getElementsByClassName('mySlides');
var viewText = document.querySelectorAll(".textExpand");
var projectLink = document.querySelectorAll(".leftWrap a");
var leftSide = document.querySelectorAll(".leftWrap");
var rightSide = document.querySelectorAll('.rightWrap');
var hiddenText = document.querySelectorAll(".textSecondP");
var viewSwitch = 0;
//Functions
//console.log(viewText);
function expandView(item)
{
  if(viewSwitch == 0)
  {
  //console.log(item.id);
  thisPage = item.id;
  tPCut = thisPage.substring('expand'.length);
  tP = Number(tPCut) - 1;
  //console.log(backdrop[tP]);
  backdrop[tP].style.maxWidth = "100vw";
  viewText[tP].innerHTML = "View Less"+"\xa0";
  rightSide[tP].style.width = "50%";
  leftSide[tP].style.width = "50%";

  var tl = new TimelineMax();
  tl.to(leftSide, 0, {opacity:0, ease:Linear.easeNone});
  tl.to(leftSide, 0.8, {opacity:1, delay: 0.3});
  var tl2 = new TimelineMax();
  tl2.to(rightSide, 0, {opacity:0, ease:Linear.easeNone});
  tl2.to(rightSide, 0.8, {opacity:1, delay: 0.3});

  hiddenText[tP].style.display = "flex";
  hiddenText[tP].style.width = "100%";
  changeText2();
  viewSwitch = 1;
  }
  else
  {
    viewSwitch = 0;
    closeView();
  }
}

function closeView()
{
  for (var i = 0; i < backdrop.length; i++) {
    backdrop[i].style.maxWidth = "500px";
  }
  for (var i = 0; i < viewText.length; i++) {
    viewText[i].innerHTML = "View More";
    changeText2();
  }
  for (var i = 0; i < rightSide.length; i++) {
    rightSide[i].style.width = "0";
  }
  for (var i = 0; i < leftSide.length; i++) {
    leftSide[i].style.width = "320px";
  }
  for (var i = 0; i < hiddenText.length; i++) {
    hiddenText[i].style.width = "0";
    hiddenText[i].style.display = "none";
  }

  var tl = new TimelineMax();
  tl.to(leftSide, 0, {opacity:0, ease:Linear.easeNone});
  tl.to(leftSide, 0.8, {opacity:1, delay: 0.2});
  var tl2 = new TimelineMax();
  tl2.to(rightSide, 0, {opacity:0, ease:Linear.easeNone});
  tl2.to(rightSide, 0.8, {opacity:1, delay: 0.2});
    viewSwitch = 0;
}

//mobile swipe
let ptouchstartX = 0
let ptouchendx = 0

const pslider = document.getElementById('Page3');
function phandleGesture() {
  //console.log("Touch Start = "+ptouchstartX+", Touch End = "+ptouchendx);
  if (ptouchendx < ptouchstartX)
  {
    touchDif = ptouchstartX - ptouchendx;
    //console.log("left by"+touchDif);
    if (touchDif > 90)
    {
      moveNext();
      clickGallery();
    }
  }
  if (ptouchendx > ptouchstartX)
  {
    touchDif = ptouchendx - ptouchstartX;
  //console.log("right by"+touchDif);
    if (touchDif > 90)
      {
        movePrev();
        clickGallery();
      }
  }
}

pslider.addEventListener('touchstart', e => {
  ptouchstartX = e.changedTouches[0].screenX
}, {passive:true});

pslider.addEventListener('touchend', e => {
  ptouchendx = e.changedTouches[0].screenX
  phandleGesture()
});

//EL
viewText.forEach(item => {
  item.addEventListener('click', event =>
  {
    expandView(item);
  });
});
