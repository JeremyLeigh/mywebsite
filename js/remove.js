var loadPage = document.querySelector("#loadWrap");
var loadCircle = document.querySelector("#inner-circle");
var loadCounter = document.querySelector("#loadInt");

var firstWord = document.querySelector("#text");
var secondWord = document.querySelector("#text2");
var textWrap = document.querySelector("#aniTextWrap");

Pace.on('done', function()
{
  //TweenMax.fromTo(loadPage, 0.2, {backgroundColor: "#000003"}, {backgroundColor: "#FFFFF3", delay:0, ease:"none"});
  TweenMax.fromTo(loadPage, 0.8, {width:100+"%"}, {width:0, delay:0, ease:""});
  //console.log("W00000000000000000000");
  firstWord.classList.add("ready1");
  secondWord.classList.add("ready2");
  textWrap.classList.add("readyScale");
  myTimeout = setTimeout(function()
  {
    if (loadPage.style.width !== 0+"px")
    {
      //console.log("Backup Collapse");
      TweenMax.fromTo(loadPage, 0.3, {width:100+"%"}, {width:0, delay:0, ease:""});
    }
    else {
      //console.log("No need");
    }
  }, 2000);
})
