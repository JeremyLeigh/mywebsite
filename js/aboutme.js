//Vars
//slide
var moveMe = document.querySelector('#bgBox');
var middleSwitch = 0;
var leftSwitch = 0;
var rightSwitch = 0;
var aboutButtons = document.querySelectorAll('.aboutB');
var buttonHit = document.querySelectorAll('.aboutB .hit');
var desB = buttonHit[1];
var devB = buttonHit[2];
var desBack = buttonHit[0];
var devBack = buttonHit[3];
//transform
var centerBg = document.querySelector('#aboutCenter');
var aboutWrap = document.querySelector("#aboutBox");
var learnMore = document.querySelectorAll('.learnP');
var aboutTitle = document.querySelector('#aboutTitle');
var learnLine = document.querySelector('#learnLine');
var hider = document.querySelector('#aboutHider');
var aboutActive = 0;
var scaleValue = 1;
//designer
var desImgs = document.querySelectorAll('#designBottom ul li');
//developer
var devImgs = document.querySelectorAll('#devBottom ul li');

//Functions

function moveToSide(i)
{
if (middleSwitch == 1) {
  moveMe.style.transform = 'translateX(0)';
  middleSwitch = 0;
  leftSwitch = 0;
  rightSwitch = 0;
}
else
{
  moveMe.style.transform = 'translateX('+i+'100vw)';
  for (var i = 0; i < desImgs.length; i++) {
    iDelay = i/15;
    TweenMax.fromTo(desImgs[i], 0.3, {y: 1000}, {y:0, delay:iDelay, ease:"none"});
  }
  for (var i = 0; i < devImgs.length; i++) {
    iDelay = i/15;
    TweenMax.fromTo(devImgs[i], 0.3, {y: 1000}, {y:0, delay:iDelay, ease:"none"});
  }
  //console.log("des assigned");
  middleSwitch = 1;
}
}
var middleHider = document.querySelector('#swipeWrap');
function aboutChange()
{
  if (aboutActive == 0)
  {
  canCall = false;
  aboutWrap.style.top = "10vh";
  centerBg.style.filter = "brightness(0.4)";
  aboutTitle.style.transform = "scale(0.8)";
  learnMore[0].innerHTML = "Exit";
  learnMore[0].style.paddingTop = "15px";
  hider.style.height = '400px';
  middleHider.style.height = '102px';
  scaleValue = 1.1;
  centerBg.style.transform = "scale("+scaleValue+")";
  for (var i = 0; i < aboutButtons.length; i++) {
    aboutButtons[i].style.display = "flex";
  }
  aboutActive = 1;
  setTimeout(function(){
    canCall = true;
  }, 300);
  }
  else
  {
  scaleValue = 1;
  aboutWrap.style.top = "40vh";
  centerBg.style.transform = "scale("+scaleValue+")";
  learnMore[0].style.paddingTop = "0px";
  learnLine.style.transform = "translateY(0)";
  aboutTitle.style.transform = "translateY(0)";
  aboutTitle.style.transform = "scale(1)";
  learnMore[0].innerHTML = "View More";
  hider.style.height = '0';
  middleHider.style.height = '0';
  if (window.innerWidth >= 800)
  {
    centerBg.style.filter = "brightness(1)";
  }

  for (var i = 0; i < aboutButtons.length; i++) {
    aboutButtons[i].style.display = "none";
  }
  aboutActive = 0;
  }
}

  function backToCenter()
  {
  moveMe.style.transform = 'translateX(0)';
  middleSwitch = 0;
  leftSwitch = 0;
  rightSwitch = 0;
  }

  //designer

  function assignDes()
  {
    for (var i = 0; i < desImgs.length; i++) {
      desImgs[i].style.backgroundImage = "url('images/des/des"+[i+1]+".webp')";
    }
    //console.log("des assigned");
  }

  function assignDev()
  {
    for (var i = 0; i < devImgs.length; i++) {
      devImgs[i].style.backgroundImage = "url('images/dev/logo"+[i+1]+".webp')";
    }
    //console.log("dev assigned");
  }

var arrows = document.querySelectorAll(".swipeArrow");
//El
desB.addEventListener('click', event => {
    if (leftSwitch == 0)
    {
    i = "";
    leftSwitch = 1;
    moveToSide(i);
    }
    else {
      //console.log("Already Left");
    }
});
arrows[0].addEventListener('click', event => {
    if (leftSwitch == 0)
    {
    i = "";
    leftSwitch = 1;
    moveToSide(i);
    }
    else {
      //console.log("Already Left");
    }
});
devB.addEventListener('click', event => {
    if (rightSwitch == 0)
    {
    i = "-";
    rightSwitch = 1;
    moveToSide(i);
    }
    else {
      //console.log("Already Right");
    }
});
arrows[1].addEventListener('click', event => {
    if (rightSwitch == 0)
    {
    i = "-";
    rightSwitch = 1;
    moveToSide(i);
    }
    else {
      //console.log("Already Right");
    }
});

//mobile swipe
let touchstartX = 0
let touchendX = 0

const slider = document.getElementById('Page2')
function handleGesture() {
  if (aboutActive == 1) {
  //console.log("Touch Start = "+touchstartX+", Touch End = "+touchendX);
  if (touchendX < touchstartX)
  {
    touchDif = touchstartX - touchendX;
    //console.log("left by"+touchDif);
    if (touchDif > 90)
    {
      i = "-";
      moveToSide(i);
    }
  }
  if (touchendX > touchstartX)
  {
    touchDif = touchendX - touchstartX;
    //console.log("right by"+touchDif);
    if (touchDif > 90)
      {
        i = "";
        moveToSide(i);
      }
  }
}
else{
  //console.log("Swiping Disabled While About Not Active");
}
}

slider.addEventListener('touchstart', e => {
  touchstartX = e.changedTouches[0].screenX
}, {passive:true});

slider.addEventListener('touchend', e => {
  touchendX = e.changedTouches[0].screenX
  handleGesture()
});

window.addEventListener('load', assignDes, false);
window.addEventListener('load', assignDev, false);
desBack.addEventListener('click', backToCenter, false);
devBack.addEventListener('click', backToCenter, false);

learnMore.forEach(item => {
  item.addEventListener('click', aboutChange, false);
});
