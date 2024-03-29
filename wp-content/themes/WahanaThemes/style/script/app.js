/*Tab*/
$(document).ready(function() {
  $('ul.nav-pills li:first').addClass('active');
  $('.tab-content .tab-pane:first').addClass('active');
  $('.tab-content .tab-pane:first').addClass('show');
});



// Mobile NavBar
$(document).ready(function() {
  // Transition effect for navbar

  $(window).scroll(function() {
    // checks if window is scrolled more than 500px, adds/removes solid class
    if($(this).scrollTop() > 200) {
      $('.nav2').addClass('solid');
      $('.nav2').addClass('nav2.solid li a');
      $('.nav2').addClass('nav2.solid li span');
      $('ul.bars').addClass('on-scroll');
      $('ul.bars-normal').addClass('on-scroll');
      $(".kkk a img").attr("src", 'http://okular.co.id/Astraproperty/wp-content/themes/Astraproperty/images/logo-color.png');
    } else {
      $('.nav2').removeClass('solid');
      $('.nav2').removeClass('nav2.solid li a');
      $('.nav2').removeClass('nav2.solid li span');
      $('ul.bars').removeClass('on-scroll');
      $('ul.bars-normal').addClass('on-scroll');
      $(".kkk a img").attr("src", 'http://okular.co.id/Astraproperty/wp-content/themes/Astraproperty/images/logo.png');
    }
  });
});


// ============Carousel===============
$(document).ready(function() {

  // About Carousel
  $('.wahana_carousel').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    loop: true,
    autoplay: true,
    navText: ["<img src='http://localhost/wahana/wp-content/themes/WahanaThemes/images/home/partials/left.png'>","<img src='http://localhost/wahana/wp-content/themes/WahanaThemes/images/home/partials/right.png'>"],
    responsive:{
      /*Mobile*/
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      /*Tab*/
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      /*Desktop*/
      1000: {
        items: 1,
        loop: true,
        autoplay: true,
        dots: true,
        nav: true
      }
    }
  })

  $('.home-carousel').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      1000: {
        items: 1,
        loop: true,
        autoplay: true,
        dots: true,
        nav: true
      }
    }
  })
  $('.home-carousel2').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      1000: {
        items: 1,
        navText: ["<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-left-box.png'>","<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-right-box.png'>"],
        loop: true,
        dots: true,
        nav: true
      }
    }
  })
  $('.home-carousel3').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 10,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      1000: {
        items: 2,
        navText: ["<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-left-box.png'>","<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-right-box.png'>"],
        loop: true,
        dots: true,
        nav: true
      }
    }
  })
  $('.career-carousel').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 50,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      1000: {
        items: 3,
        navText: ["<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-left-box.png'>","<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-right-box.png'>"],
        loop: false,
        autoplay: false,
        dots: true,
        nav: true
      }
    }
  })
  $('.contact-carousel').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 50,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: true
      },
      600: {
        items: 1,
        dots: true,
        nav: true
      },
      1000: {
        items: 1,
        navText: ["<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-left-box.png'>","<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/homepage/arrow-right-box.png'>"],
        loop: false,
        autoplay: false,
        dots: true,
        nav: true
      }
    }
  })
})

//Entended
// Milestone
$(document).ready(function() {
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 5; //globaly define number of elements per page
  var syncedSecondary = true;
  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    dots: false,
    loop: true,
    // touchDrag  : false,
    // mouseDrag  : true,
    responsiveRefreshRate : 200,
    navText: ["<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/about/partials/arrow-07.png'>","<img src='http://localhost/corpus/wp-content/themes/CorpusID/images/about/partials/arrow-06.png'>"],
  }).on('changed.owl.carousel', syncPosition);
  sync2
      .on('initialized.owl.carousel', function () {
        sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
        items : slidesPerPage,
        dots: false,
        nav: false,
        smartSpeed: 200,
        slideSpeed : 500,
        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
        responsiveRefreshRate : 100
      }).on('changed.owl.carousel', syncPosition2);
  function syncPosition(el) {
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});



// ============Animation===============
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  $(window).scroll(function() {
    $(".slideanimX").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideX");
        }
    });
  });
  $(window).scroll(function() {
    $(".slideanimLeft").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideLeft");
        }
    });
  });
  /*Animation motif*/
  $(document).ready(function(){
    $(window).scroll(function(){
      windowTop = $(window).scrollTop();
      $('.move-right').css({
        'transform':'translateX('+(windowTop) * 0.1  +'px)'
      });
      $('.move-left').css({
        'transform':'translateX('+(windowTop) * -0.1 +'px)'
      });
      $('.move-top').css({
        'transform':'translateY('+(windowTop) * -0.1 +'px)'
      });
      $('.move-topcontact').css({
        'transform':'translateY('+(windowTop) * -0.1 +'px)'
      });
    });
  });

// ============Function===============
// Navbar Mobile
$(document).ready(function() {
  $('.bars').click(function() {
    $(".bars").addClass("active");
    $(".fa-times").addClass("active");
    $(".sidenav").removeClass("slideOut");
    $(".sidenav").addClass("slideIn");
  })
})
$(document).ready(function() {
  $('.fa-times').click(function(){
    $(".bars").removeClass("active");
    $(".fa-times").removeClass("active");
    $(".sidenav").addClass("slideOut");
  })
})
// Tab Click & Hover
$(document).ready(function() {
  $('.nav-tab').click(function() {
      $(this).find('.color').addClass('active');
      $(this).find('.icon').addClass('active');
  }, function() {
      $(this).find('.color').removeClass('active');
      $(this).find('.icon').removeClass('active');
  });
  $('.nav-tab').hover(function() {
      $(this).find('.color').addClass('active');
      $(this).find('.icon').addClass('active');
      $(this).find('.arrow-up.color').removeClass('active');
  }, function() {
      $(this).find('.color').removeClass('active');
      $(this).find('.icon').removeClass('active');
  });
});
//Dropdown
$(document).ready(function() {
  document.querySelectorAll(".dropmulti-select").forEach((el)=> {
    el.addEventListener("click", function (e){
    this.classList.toggle("dropmulti-collapsed");
    });
  });
})
// Tabs
  $(function(tabs){
    /*Nav Tabs Active First*/
    $(".nav-tab:first").addClass("active");
    /*Content Active First*/
    $('.tabs').hide().first().show();
    // $('.sub-tab').hide().first().show();
    $('.nav-tab').click(function(){
      $('.tabs').hide();
      $(".nav-tab").removeClass("active");
      $(this).addClass("active");
      // $(this).addClass("active");
      var $targetTab = $('#tab-'+$(this).attr('target'));
      // $targetTab.find('.sub-tab').hide().first().show();
      $targetTab.fadeIn(200);
    });
  });
  $(function(tabs2){
    /*Nav Tabs Active First*/
    $(".nav-tab2:first").addClass("active");
    /*Content Active First*/
    $('.tabs2').hide().first().show();
    // $('.sub-tab').hide().first().show();
    $('.nav-tab2').click(function(){
      $('.tabs2').hide();
      $(".nav-tab2").removeClass("active");
      $(this).addClass("active");
      // $(this).addClass("active");
      var $targetTab = $('#tab2-'+$(this).attr('target'));
      // $targetTab.find('.sub-tab').hide().first().show();
      $targetTab.fadeIn(200);
    });
  });
  $(function(tabs3){
    /*Nav Tabs Active First*/
    $(".nav-tab3:first").addClass("active");
    /*Content Active First*/
    $('.tabs3').hide().first().show();
    // $('.sub-tab').hide().first().show();
    $('.nav-tab3').click(function(){
      $('.tabs3').hide();
      $(".nav-tab3").removeClass("active");
      $(this).addClass("active");
      // $(this).addClass("active");
      var $targetTab = $('#tab3-'+$(this).attr('target'));
      // $targetTab.find('.sub-tab').hide().first().show();
      $targetTab.fadeIn(200);
    });
  });

$(window).on('load', () => {
  $('.loadergif').delay(3000).fadeOut();
    })

$(document).ready(function() {
  // OPEN MENU
  $('.ham-bars').click(function() {
    $(".side-nav").addClass("open");
  })
  // CLOSE MENU
  $('.kloset').click(function(){
    $(".side-nav").removeClass("open");
  })

})


// ======================HOMEPAGE HEADER====================================
$(document).ready(function() {
  // Detect request animation frame
  var scroll = window.requestAnimationFrame ||
      // IE Fallback
      function(callback){ window.setTimeout(callback, 1000/60)};
  var elementsToShow = document.querySelectorAll('.show-on-scroll');

  function loop() {

    Array.prototype.forEach.call(elementsToShow, function(element){
      if (isElementInViewport(element)) {
        element.classList.add('is-visible');
      } else {
        element.classList.remove('is-visible');
      }
    });

    scroll(loop);
  }

  // Call the loop for the first time
  loop();

  // Helper function from: http://stackoverflow.com/a/7557433/274826
  function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
        (rect.top <= 0
            && rect.bottom >= 900) //bottomfadeout
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }
})
$(document).ready(function(){
  $(window).scroll(function() {
    if ($(this).scrollTop() > 2000) {
      $('#navbarcorpus').fadeOut();
      $('#navbarcorpus').addClass('hiddennav');
      $('#navbarcorpus').removeClass('shownav');
      $('#homemotif-1').fadeOut();
      $('#homemotif-2').fadeOut();
      $('#homemotif-3').fadeOut();
    } else {
      $('#navbarcorpus').fadeIn();
      $('#navbarcorpus').removeClass('hiddennav');
      $('#navbarcorpus').addClass('shownav');
      $('#homemotif-1').fadeIn();
      $('#homemotif-2').fadeIn();
      $('#homemotif-3').fadeIn();
    }
  });
});