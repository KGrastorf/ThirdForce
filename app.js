(function($) {

  var leiAnna = $('#leiAnna'),
    troy = $('#troy'),
    logo = $('#logo'),
    logoText1 = $('#logoText1'),
    logoText2 = $('#logoText2'),
    homeTitle1 = $('#home-title1'),
    homeTitle2 = $('#home-title2'),
    home = $('#home'),
    tl = new TimelineLite;

  tl.from(leiAnna, 4.5, {
      ease: Power4.easeOut,
      // y: -200,
      x: -700,
      autoAlpha: 0
    })
    .from(troy, 4.5, {
      ease: Power4.easeOut,
      // y: -200,
      x: 700,
      autoAlpha: 0
    }, '-=4.5')
    .from(logo, 2.5, {
      opacity: 0,
      delay: 1.5
    }, '-=4.5')
  .from(logoText1, 2.5, { opacity: 0, delay: 1.5 }, '-=4.5')
  .from(logoText2, 4.5, { opacity: 0, delay: 1.5 }, '-=4.5')
  ;
  //
  // TweenMax.from(homeTitle1, 4.5, { ease: Power4.easeOut, y: 200, opacity: 0 });
  //
  // TweenMax.from(homeTitle2, 4.5, { ease: Power4.easeOut, y: 200, opacity: 0 });
  //
  // TweenMax.from(home, 4.5, { ease: Power4.easeOut, y: 200, autoAlpha: 0 });

})(jQuery);


$(document).ready(function() {

  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  var logo = $('#logo'),
    logoText1 = $('#logoText1'),
    logoText2 = $('#logoText2');

  var homePicScene = new ScrollMagic.Scene({
      triggerElement: '.home-img',
      triggerHook: 0.5,
      reverse: false
    })
    .setTween(TweenMax.from('.home-img', 3, {
      // ease: Expo.easeIn,
      // y: -50,
      autoAlpha: 0
    }))
    // .addIndicators({
    //   name: "pic (duration: 0)"
    // })
    .addTo(controller)

  // var homeTitleScene1 = new ScrollMagic.Scene({
  //     triggerElement: '.home-title1',
  //     triggerHook: 0.7,
  //     reverse: false
  //   })
  //   .setTween(TweenMax.from('.home-title1', 1.5, {
  //     ease: Power1.easeIn,
  //     y: -50,
  //     autoAlpha: 0
  //   }))
    // .addIndicators({
    //   name: "home-title1 (duration: 0)"
    // })
  //   .addTo(controller)
  //
  // var homeTitleScene2 = new ScrollMagic.Scene({
  //     triggerElement: '.home-title2',
  //     triggerHook: 0.7,
  //     reverse: false
  //   })
  //   .setTween(TweenMax.from('.home-title2', 1.5, {
  //     ease: Power1.easeIn,
  //     y: -50,
  //     autoAlpha: 0
  //   }))
    // .addIndicators({
    //   name: "home-title2 (duration: 0)"
    // })
    .addTo(controller)

  var homeTitleScene3 = new ScrollMagic.Scene({
      triggerElement: '.home-title3',
      triggerHook: 0.7,
      // reverse: false
    })
    .setTween(TweenMax.from('.home-title3', 1.5, {
      ease: Power1.easeIn,
      y: -50,
      autoAlpha: 0
    }))
    // .addIndicators({
    //   name: "home-title3 (duration: 0)"
    // })
    .addTo(controller)

    var snowTl = new TimelineMax();
		snowTl
    .from("#lei-anna3", 4.5, {
        ease: Power4.easeOut,
        // y: -200,
        x: 700,
        autoAlpha: 0
      })
      .from("#troy3", 4.5, {
        ease: Power4.easeOut,
        // y: -200,
        x: -700,
        autoAlpha: 0
      }, '-=4.5')

});
