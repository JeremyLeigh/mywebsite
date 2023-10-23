//Variables
var camera = document.getElementById('page1bg');
var aboutBg = document.getElementById('aboutCenter');
var frontObj = document.getElementById('centerArt');
var canCall = true;
//Functions
document.onmousemove = function followMe(){
  if(canCall == true)
  {
  let currentSlide = document.querySelector('.active .slideImage');
  var halfWidth = window.innerWidth/2;
  var halfHeight = window.innerHeight/2;
  var x = event.clientX;
  var y = event.clientY;
  //console.log(halfWidth);
  var overage = x-halfWidth;
  var heightOverage = y-halfHeight;
  var overage2;
  //console.log(x);
  //console.log(currentSlide);
  aboutBg.style.transform = "rotateY("+overage/300+"deg) rotateX("+-heightOverage/300+"deg) translateY("+-heightOverage/100+"px) translateX("+overage/100+"px) scale("+scaleValue+")";
  currentSlide.style.transform = "translateY("+-heightOverage/300+"px) translateX("+overage/300+"px)";
  camera.style.transform = "rotateY("+overage/300+"deg) rotateX("+-heightOverage/300+"deg) translateY("+-heightOverage/100+"px) translateX("+overage/100+"px)";
  frontObj.style.transform = "rotateY("+overage/5000+"deg) translateY("+-heightOverage/200+"px) translateX("+overage/200+"px)";
  //console.log("overage is: "+-overage/300+" heightOverage is :"+-heightOverage/300);
  if (-heightOverage/300 >= Math.abs(overage/300))
  {
    value = 3 - Math.abs(heightOverage/200);
    frontObj.style.filter = "blur("+-heightOverage/300+"px)";
    camera.style.filter = "blur("+value+"px)";
    console.log(1 + Math.abs(-heightOverage/300));
    //console.log("Vert Priority");
  }
  else
  {
    value2 = 3 - Math.abs(overage/200);
    value3 = 3 - Math.abs(-overage/200);
    frontObj.style.filter = "blur("+overage/300+"px)";
    frontObj.style.filter = "blur("+-overage/300+"px)";
    camera.style.filter = "blur("+value2+"px)";
    camera.style.filter = "blur("+value3+"px)";
    //console.log("Hor Priority");
  }
  console.log(camera.style.filter);

  if(overage <= 0)
  {
    overage2 = Math.abs(overage);
    //console.log("This is trimmed "+overage2);
  }
  else {
    overage2 = -overage;
    //console.log("Regular "+overage2);
  }
  canCall = false;
  setTimeout(function(){
    canCall = true;
  }, 10);
}
};

//Event Listeners
window.addEventListener('load', function(){
//console.log("PAGE IS LOADED");
});
