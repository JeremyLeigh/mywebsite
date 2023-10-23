$(document).foundation();
$('body').toggleClass('loaded');
new WOW().init();

(function(){

  //About Donation page - SVG Icons

var heart = document.querySelector('#organ-1'),
    tissue = document.querySelector('#organ-2'),
    eyes = document.querySelector('#organ-3'),
    desc = document.querySelector('#iconTitle');


heart.addEventListener('click', function(e){
    e.preventDefault();
    desc.innerHTML = "Restore Sight to 2 People.";
});


tissue.addEventListener('click', function(e){
    e.preventDefault();
    desc.innerHTML = "Ruaerat porro adipisci undeorem ipsum.";
});

eyes.addEventListener('click', function(e){
    e.preventDefault();
    desc.innerHTML = "Lorem ipsum dolor snt quibusdam.";
});


window.onload = function() { window.scrollTo(0, 0); }

  })();
