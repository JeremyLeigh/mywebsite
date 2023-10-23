$(document).foundation();
$('body').toggleClass('loaded');
new WOW().init();

(function() {

    var leftArrow = document.getElementById('left-button'),
        rightArrow = document.getElementById('right-button'),
        slider = document.getElementById('slider-text');

    var contentMid = 'content content-mid transition',
        contentLeft = 'content content-left transition',
        contentRight = 'content content-right transition';

    function leftArrowClick(e) {
        if (slider.className === contentMid) {
            slider.className = slider.className.replace(/\bcontent-mid\b/, 'content-left');
            colorSwitch();
        } else if (slider.className === contentRight) {
            slider.className = slider.className.replace(/\bcontent-right\b/, 'content-mid');
            colorSwitch();
        }
    }

    function rightArrowClick(e) {
        if (slider.className === contentMid) {
            slider.className = slider.className.replace(/\bcontent-mid\b/, 'content-right');
            colorSwitch();
        } else if (slider.className === contentLeft) {
            slider.className = slider.className.replace(/\bcontent-left\b/, 'content-mid');
            colorSwitch();
        }
    }

    document.onload = arrowCheck();
    function arrowCheck()
    {
      //console.log("Arrow Checked");
    if (leftArrow != null)
    {
      //console.log("Arrow Listeners Assigned");
    leftArrow.addEventListener('click', leftArrowClick, false);
    rightArrow.addEventListener('click', rightArrowClick, false);
    }
    }

    function colorSwitch() {
        var text1 = document.getElementById('text-1'),
            text2 = document.getElementById('text-2'),
            text3 = document.getElementById('text-3');

        var grey = 'grey content-text transition',
            main = 'content-text transition';

        if (slider.className === contentMid) {
            text1.className = grey;
            text2.className = main;
            text3.className = grey;
        } else if (slider.className === contentLeft) {
            text1.className = main;
            text2.className = grey;
            text3.className = grey;
        } else if (slider.className === contentRight) {
            text1.className = grey;
            text2.className = grey;
            text3.className = main;
        }
    }


    window.onload = function() { window.scrollTo(0, 0); }

})();


 //    $(function() {

 //        $(".donorConM").bind('click', { id: '#donorCon' }, scroller);
 //        $(".seconSecM").bind('click', { id: '#seconSec' }, scroller);
 //        $(".thirdSecM").bind('click', { id: '#thirdSec' }, scroller);


 //        function scroller(event) {
 //            var scrollYPos = $(event.data.id).offset().top;
 //            event.preventDefault();
 //            TweenLite.to(window, 2, { scrollTo: { y: scrollYPos, x: 0 }, ease: Power4.easeOut })
 //        }


    // $('a.info').tooltip();
    // $(window).load(function() {
    //     $('.flexslider').flexslider({
    //         animation: "slide",
    //         start: function(slider) {
    //             $('body').removeClass('loading');
    //         }
    //     });
    // });



    // $(document).ready(function() {


    //     $("#owl-demo").owlCarousel({

    //         items: 4

    //             $('ul.superfish').superfish();

    //     });

    //     setTimeout(function() {
    //         $('body').addClass('loaded');
    //     }, 3000);
    // });
