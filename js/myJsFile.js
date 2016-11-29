

$(document).ready(function(){
 
//   // hide our element on page load
  $('#element-to-animate').css('opacity', 0);
 
  $('#element-to-animate').waypoint(function() {
    $('#element-to-animate').addClass('element-to-animate').css('opacity', 1);
      $('#element-to-animate').addClass('zoomIn');
  }, { offset: '80%' });

  

//     // hide our element on page load
  $('#pacific__animate').css('opacity', 0);
 
  $('#pacific__animate').waypoint(function() {
    $('#pacific__animate').addClass('pacific__animate').css('opacity', 1);
      $('#pacific__animate').addClass('zoomIn');
  }, { offset: '80%' });


//     // hide our element on page load
  $('#info').css('opacity', 0);
 
  $('#info').waypoint(function() {
    $('#info').addClass('info').css('opacity', 1);
      $('#info').addClass('fadeIn');
  }, { offset: '40%' });



  $('#boxes-to-animate').css('opacity', 0);
 
  $('#boxes-to-animate').waypoint(function() {
    $('#boxes-to-animate').addClass('boxes-to-animate').css('opacity', 1);
      $('#boxes-to-animate').addClass('fadeIn');
  }, { offset: '60%' });

//     // hide our element on page load
  $('#boxes-to-animate-2').css('opacity', 0);
 
  $('#boxes-to-animate-2').waypoint(function() {
    $('#boxes-to-animate-2').addClass('boxes-to-animate-2').css('opacity', 1);
      $('#boxes-to-animate-2').addClass('fadeIn');
  }, { offset: '60%' });


//     // hide our element on page load
  $('#boxes-to-animate-3').css('opacity', 0);
 
  $('#boxes-to-animate-3').waypoint(function() {
    $('#boxes-to-animate-3').addClass('boxes-to-animate-3').css('opacity', 1);
      $('#boxes-to-animate-3').addClass('fadeIn');
  }, { offset: '60%' });

//     // hide our element on page load
  $('#element-to-animate-2').css('opacity', 0);
 
  $('#element-to-animate-2').waypoint(function() {
    $('#element-to-animate-2').addClass('element-to-animate-2').css('opacity', 1);
      $('#element-to-animate-2').addClass('flipInX');
  }, { offset: '70%' });

//     // hide our element on page load
  $('#text-to-animate-2').css('opacity', 0);
 
  $('#text-to-animate-2').waypoint(function() {
    $('#text-to-animate-2').addClass('text-to-animate-2').css('opacity', 1);
      $('#text-to-animate-2').addClass('fadeInLeft');
  }, { offset: '70%' });
  



// var offset = 100;

// $('navbar').click(function(event) {
//     event.preventDefault();
//     $($(this).attr('href'))[0].scrollIntoView();
//     scrollBy(0, -offset);
// });

// var targetOffset = $("#home").offset().top;


// var $w = $(window).scroll(function(){
//     if ( $w.scrollTop() > targetOffset ) {   
//         $('#main-navbar').css({"opacity":"1"});
//         $('#home').css({"opacity":"1"});
//     } else {
//       // ...
//     }
// });







var wh = window.innerHeight,
  $hero = $('#hero'),
  $heroImg = $('.hero-image'),
  $heroTitle = $('.hero-title'),
  $container = $('.container-fluid'),
  $header = $('.header');

// init
var ctrl = new ScrollMagic.Controller({
  globalSceneOptions: {
    triggerHook: 'onLeave'
  }
});





// Create scene
$hero.each(function() {

  new ScrollMagic.Scene({

      duration: '60%'
    })
    .setPin(this)
    .addTo(ctrl);

});

var fadeScroll = new TimelineMax();
fadeScroll
  .set($heroImg, {
    scale: 1
  })
  .set($container, {
    yPercent: 0
  })

.to($heroImg, 4, {
  yPercent: -5,
  scale: 0.8
}, '0')

.to($heroTitle, 4, {
  scale:  1.2
}, '0')

.fromTo($heroImg, 2, {
    opacity: 1
  }, {
    opacity: 0
  }, '=-0.2')
  .to($container, .5, {
    autoAlpha: 1
  }, '=-.9')
  .to($container, 2, {
    yPercent: 0
  }, '=-.9')
  .to($header, 1, {
    color: 'black'
  }, '+1.4');

// iPhone back to stylesheet position
new ScrollMagic.Scene({
    duration: '120%'
  })
  .setTween(fadeScroll)
  .triggerElement($hero)
  .addTo(ctrl);



 

  });