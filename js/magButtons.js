//Create the buttons:
var _btnsHTML = document.getElementsByClassName("nButton");
var _numBtns = _btnsHTML.length;

var _btns = [];
for(var i=0;i<_numBtns;i++){
  _btns.push(new MagneticButton(_btnsHTML[i]));
  _btns[i].addListeners();

}


//Button class:
function MagneticButton(_me){
  var _this = this;
  _this._speed = 0;
  var _meX = 0, _meY = 0, _meRadius = _me.offsetWidth;
  var _curDist = 0, _tweenedDist = 0, _angle= 0, _closeSpeed = 1;
  var _over = false;
  //Create invisible hitlayer on top of all graphics
  var _hit = document.createElement("div");
  _hit.className = "hit"
  _me.appendChild(_hit);
  //Get the grx container (this will be moved independent)
  var _grx = _me.getElementsByClassName("grx")[0];

  //Public add/remove listeners
  _this.addListeners = function(){
    _hit.addEventListener("mouseenter", over);
    _hit.addEventListener("mouseleave", out);
  }
  _this.removeListeners = function(){
    _hit.removeEventListener("mouseenter", over);
    _hit.removeEventListener("mouseleave", out);
  }


  function over(e){
    _over = true;
    //Read my position (to-do: only in resize instead)
    //ADD VALUE AT END TO REEL IT IN
    _meX = _me.offsetLeft+_meRadius/2+30, _meY = _me.offsetTop+_meRadius/2+20;
    _tweenedDist = 0;
    moved(e);
    //Start engine
    TweenMax.ticker.addEventListener("tick", engine);
    //Start measuring distance
    document.addEventListener("mousemove", moved);
    //Tween speed
    TweenMax.killTweensOf(_this);
    _this._speed = 0;
    TweenMax.to(_this, .15, {_speed:.2, ease:Linear.easeNone});
  }
  function moved(e){
    _curDist = pointDist(e.clientX,e.offsetY, _meX, _meY);
    if(_curDist < 40) _closeSpeed = 1;
    else _closeSpeed = .5;
    _angle = angleBetweenPoints(e.clientX,e.offsetY, _meX, _meY);
  }
  function engine(e){
    _tweenedDist += (_curDist-_tweenedDist)*_this._speed*_closeSpeed;
    TweenMax.set(_grx, {x:Math.cos(_angle)*_tweenedDist/2, y:Math.sin(_angle)*_tweenedDist/2, force3D:true});
    if(!_over && Math.abs(_tweenedDist)<.05){
      TweenMax.ticker.removeEventListener("tick", engine);
      TweenMax.set(_grx, {x:0, y:0, force3D:true});
    }
  }

  function out(e){
    _over = false;
    _curDist = 0
    document.removeEventListener("mousemove", moved);
    TweenMax.killTweensOf(_this);
    _this._speed = .05;
    TweenMax.to(_this, .2, {_speed:.2, ease:Linear.easeNone});
  }
}

function pointDist(x1,y1,x2,y2){
  return Math.sqrt( Math.pow((x1-x2), 2) + Math.pow((y1-y2), 2) );
}
function angleBetweenPoints(x1,y1,x2,y2){
  var	dx = x1 - x2,	dy = y1 - y2;
  return Math.atan2(dy,dx);
}
