// Wrap every letter in a span
function changeText() {
  var initialsText = document.querySelectorAll(".funkyInit");
  initialsText[0].innerHTML = initialsText[0].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  initialsText[1].innerHTML = initialsText[1].textContent.replace(/\S/g, "<span class='letter'>$&</span>");


  //console.log("Working! from text.js changeText");
anime.timeline({loop: false})
  .add({
    targets: '.funkyInit .letter',
    translateY: [20,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 100 + 30 * i
  }).add({
    targets: '.funkyInit .letter',
    duration: 1200,
    delay: (el, i) => 33 + 30 * i
  });
};


function changeText2() {
var learnMore = document.querySelectorAll('.cursorD');
for (var i = 0; i < learnMore.length; i++) {
    learnMore[i].innerHTML = learnMore[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}
anime.timeline({loop: false})
  .add({
    targets: '.cursorD .letter',
    translateY: [20,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 100 + 30 * i
  })
};
