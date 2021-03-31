$(document).ready(function() {
  $('#header-menu li.menu-item-has-children').hover(function() {
    if ($('.sub-menu').css('display') == 'block') {
      let numLi = $('.menu-item-has-children ul li').length / 2;
      let h = 59 + 28 * numLi + 'px';
      $('#header-menu').css({
        height: h
      });
    } else {
      $('#header-menu').css({
        height: 'initial'
      });
    }
  });

  $('.burger-container').click(function() {
    $('#container-logo').css('left', '0%');
    $('.slide').css('transform', 'translateX(-50%)');
    $('.header').toggleClass('menu-opened ');
    $('.mobile-menu-darken').toggle();
    $('.mobile-menu').toggle();
    $('.mobile-menu ul li').each(function(index) {
      $(this)
        .delay(60 * index)
        .queue(function(nxt) {
          $(this).removeClass('hidden');
          nxt();
        });
    });
  });

  $('.mobile-menu-darken').click(function() {
    $('#container-logo').css('left', '50%');
    $('.slide').css('transform', 'translateX(0)');
    $('.header').toggleClass('menu-opened ');
    $(this).toggle();
    $('.mobile-menu').toggle();
    $('.mobile-menu ul li').each(function(index) {
      $(this).css('animation-name', 'none');
      $(this).css('animation-name', 'elo');
      $(this).css('animation-duration', '0.2s;');
      $(this).addClass('hidden');
    });
  });

  setTimeout(function() {
    if ($('#container-logo').length) {
      $('#header-menu').css('background-color', 'transparent');
      $('#header-menu')
        .find('li a')
        .css('color', '#2d2d2d');
    }
  }, 15);

  $(window).on('pageshow', function() {
    if ($('#container-logo').length) {
      $('#header-menu').css('background-color', 'transparent');
      $('#header-menu')
        .find('li a')
        .css('color', '#2d2d2d');
    }

    if ($('#gallerie_case').length || $('#gallerie_ubersicht').length) {
      $('.menu-item-has-children a:eq(0)').css('color', '#2d2d2d');
    }
  });

  setTimeout(function() {
    if ($('#about').length) {
      var about_height = $('#about').css('height');
      $('.main_content').css({
        height: about_height,
        'background-color': '#b4b4b4'
      });
    }
  }, 1);

  setTimeout(function() {
    if (
      parseInt($('#gallerie_case').css('height')) - 10 + 59 * 2 >
      window.innerHeight
    ) {
      $('#gallerie_case').css({ top: '100px', transform: 'translate(0,0)' });
    } else {
      var transBy =
        -(parseInt($('#gallerie_case').css('height')) - 10) / 2 + 'px';
      var trans = 'translate(0,' + transBy + ')';
      $('#gallerie_case').css({ top: '50%', transform: trans });
    }
    $('#gallerie_case').css('display', 'flex');
  }, 10);

  // Carousel JS //
  var autoSetFadeOut; // setTimeout variable for auto change
  var manualSlideChangeTimer; // setTimeout variable for manual change
  const carouselIntervalTimeInMS = 5000; // Carousel Slide change interval
  const FadeAnimationTimeInMS = 500; // Fade animation time
  const footerTimeBeforeSlideChangeInMS = 500; // time Slide Footer fades out before SlideChange
  var timeDiffInMS = carouselIntervalTimeInMS - footerTimeBeforeSlideChangeInMS;
  $('#carousel').carousel({
    interval: carouselIntervalTimeInMS,
    pause: false,
    keyboard: true
  });

  //animation-duration of fadeIn / fadeOut varibale so you can change it in JS
  const cssString = FadeAnimationTimeInMS + 'ms';
  $('.carousel-inner')
    .find('footer')
    .css('animation-duration', cssString);

  // Hide all Carousel Footer except active slide
  $('#carousel')
    .find('footer')
    .hide();
  $('#carousel')
    .find('.active')
    .find('footer')
    .show();

  $(document).bind('keyup', function(e) {
    // manual slide change first cancel all pending Timeouts
    clearTimeout(autoSetFadeOut);
    clearTimeout(manualSlideChangeTimer);
    // Add fadeOut class to slide footer
    $('.carousel-inner')
      .find('footer')
      .addClass('fadeOut');
    // Initialize Slide change depening on keypress with Timeout for fadeOut animation to kick in first
    // 'up': 38, 'right': 39, 'left': 37, 'down': 40
    manualSlideChangeTimer = setTimeout(() => {
      if (e.which == 39 || e.which == 40) {
        $('#carousel').data()['bs.carousel']._config.interval = false;
        $('#carousel').carousel('next');
      } else if (e.which == 37 || e.which == 38) {
        $('#carousel').carousel('prev');
        $('#carousel').data()['bs.carousel']._config.interval = false;
      }
    }, footerTimeBeforeSlideChangeInMS);
  });

  // remove classes from all footer and hide them at slide process first
  // then set the Timer for adding the fadeOut class -> time is carouselIntervaltimeInMS - footerTimeBeforeSlideChangeInMS
  // setTimer here because this is based on Interval of Carousel
  $('#carousel').on('slide.bs.carousel', function() {
    $('.carousel-inner')
      .find('footer')
      .removeClass('fadeOut fadeIn');
    $('.carousel-inner')
      .find('footer')
      .hide();

    // console.log($('#carousel').data()['bs.carousel']._config.interval)
    if ($('#carousel').data()['bs.carousel']._config.interval) {
      autoSetFadeOut = setTimeout(() => {
        $('.carousel-inner')
          .find('footer')
          .removeClass('fadeIn');
        $('.carousel-inner')
          .find('footer')
          .addClass('fadeOut');
      }, timeDiffInMS);
    }
  });

  // after slide process is finished: Add the fadeIn class and show footer
  $('#carousel').on('slid.bs.carousel', function() {
    $('.carousel-inner')
      .find('footer')
      .addClass('fadeIn');
    $('.carousel-inner')
      .find('footer')
      .show();
  });

  //

  //FEATHERLIGHT
  $('a.img-container').featherlightGallery({
    previousIcon: '',
    nextIcon: '',
    closeIcon: '',
    galleryFadeIn: 50,
    galleryFadeOut: 50,
    openSpeed: 200,
    loading: 'wird geladen',
    beforeOpen: function() {
      $('.featherlight-loading')
        .find('.featherlight-content')
        .css('text-align', 'center');
      $('.featherlight-loading')
        .find('.featherlight-content')
        .append('<div class="lds-dual-ring"></div>');
      if (window.innerWidth > 600) {
        $('html').css({
          position: 'fixed',
          overflow: 'hidden',
          width: '100%',
          height: '100%'
        });
      }

      $('body').css({
        position: 'fixed',
        overflow: 'hidden',
        width: '100%',
        height: '100%'
      });
    },
    afterContent: function(event) {
      $('.featherlight-content').css('text-align', '');
      $('.lds-dual-ring').remove();
      let height;

      if (this.$content.hasClass('casetext')) {
        //TEXT
        let Fl = parseInt($('.featherlight').css('height'));
        let Fl_inner = parseInt($('.featherlight-inner').css('height'));

        if (Fl > Fl_inner) {
          height = Fl;
        } else {
          height = Fl_inner;
        }

        $('.featherlight-content').css({
          width: '100vw',
          height: '100vh'
        });
      } else {
        //IMG
        height = '';
        $('.featherlight-content').css({
          width: 'inherit',
          height: 'inherit'
        });
      }
      $('.featherlight-close-icon').css('height', height);
      $('.featherlight-previous').css('height', height);
      $('.featherlight-next').css('height', height);
    },
    afterClose: function() {
      if (window.innerWidth > 600) {
        $('html').css({
          position: '',
          overflow: '',
          width: '',
          height: ''
        });
      }

      $('body').css({
        position: '',
        overflow: '',
        width: '',
        height: ''
      });
    }
  });
});
