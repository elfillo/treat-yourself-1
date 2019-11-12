"use strict";

window.App = {
  W: $(window),
  D: $(document),
  H: $('html'),
  B: $('body'),
  ie: false,
  edge: false,
  firefox: false,
  mainpage: false
};


$(function () {
  // Go to 
  $('.js-go-to').on('click', function (e) {
    e.preventDefault();
    var hash = $(this).data('go');
    $('html, body').stop().animate({
      'scrollTop': $(hash).offset().top - 50
    }, 500, 'swing');
  });

  function showSubMenu() {
    $(this).find('ul').css({
      opacity: 1,
      pointerEvents: 'auto',
    });
  };

  function hideSubMenu() {
    $(this).find('ul').css({
      opacity: 0,
      pointerEvents: 'none',
    });
  };

  $('.services-menu_row > ul > li').hover(showSubMenu, hideSubMenu);


  $('.burger-menu').on('click', function() {
    $(this).stop().toggleClass('is-active');

    $('.mobile-menu').stop().toggleClass('show');
  });

});

$(function () {
  var navPos, winPos, navHeight;

  function refreshVar() {
    navPos = $('.head-page_fixed').offset().top;
    navHeight = $('.head-page_fixed').outerHeight(true);
  }

  function fixedMenu() {
    winPos = $(window).scrollTop();

    if (winPos >= navPos) {
      $('.head-page_fixed').addClass('fixed');
      $('.clone-nav').show();

      if ($(window).width() > 1000) {
        setTimeout(function () {
          $('.head-page__row_pl').stop().css('padding-left', '70px');
          $('.logo-hor_hidden').stop().fadeIn('fast');
        }, 0);
      }
    
    } else {
      $('.head-page_fixed').removeClass('fixed');
      $('.clone-nav').hide();

      if ($(window).width() > 1000) {
        setTimeout(function () {
          $('.logo-hor_hidden').stop().fadeOut('fast', function () {
            $('.head-page__row_pl').stop().css('padding-left', '0');
          });
        }, 0);
      }

    }
  }

  refreshVar();
  $(window).resize(refreshVar);

  $('<div class="clone-nav"></div>').insertBefore('.head-page_fixed').css('height', navHeight).hide();

  fixedMenu();
  $(window).scroll(fixedMenu);
});

// Sliders
$(function () {

  var $carouselSectionCarousel = new Swiper('.carousel-section__carousel', {
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
    },
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
  });

  var $teamSectionSlider = new Swiper('.team-section__slider', {
    slidesPerView: 1,
    spaceBetween: 20,
    freeMode: true,
    navigation: {
      nextEl: '.team-section__controls .slider-control_next',
      prevEl: '.team-section__controls .slider-control_prev'
    },
    breakpoints: {
      630: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      900: {
        slidesPerView: 3,
        spaceBetween: 24
      },
    }
  });

  var doctorInfoSertifaicateList = new Swiper('.doctor-info__sertifaicate-list', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    // breakpoints: {
    //   600: {
    //     slidesPerView: 'auto',
    //   }
    // }
  });

  var sertifaicatesList = new Swiper('.sertifaicates__list', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    // breakpoints: {
    //   600: {
    //     slidesPerView: 'auto',
    //   }
    // }
  });


  var doctorsSlider = new Swiper('.doctors-slider', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: '.doctors .slider-control_next',
      prevEl: '.doctors .slider-control_prev'
    },
  });


  var serviceSlider = new Swiper('.service-slider', {
    slidesPerView: 1,
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: '.service-slider .slider-control_next',
      prevEl: '.service-slider .slider-control_prev'
    },
  });

});

// Mobile menu
$(function () {

  $('.burger-menu').on('click', function () {
    $('.mobile-menu').addClass('mobile-menu_show');

    setTimeout(function () {
      $('.mobile-menu__nav').addClass('mobile-menu__nav_show');
    }, 100);
  });

  $('.mobile-menu__overlay').on('click', function () {
    $('.mobile-menu__nav').removeClass('mobile-menu__nav_show');

    setTimeout(function () {
      $('.mobile-menu').removeClass('mobile-menu_show');
    }, 100);
  });

  $('.mobile-menu__close').on('click', function () {
    $('.mobile-menu__nav').removeClass('mobile-menu__nav_show');

    setTimeout(function () {
      $('.mobile-menu').removeClass('mobile-menu_show');
    }, 100);
  });

});

// Pop-up
$(function () {

  $('.close').on('click', function () {
    $.fancybox.close();
  });

});

// Rating
$(function () {

  $('.review__rating').each(function (i, item) {
    var valStars = $(item).data('rating-count');

    for (var i = 0; i < valStars; i++) {
      $(item).append('<svg class="icon rating__icon" width="12" height="12" viewBox="0 0 12 12"><use xlink:href="img/symbol_sprite.svg#icon-star-f"></use></svg>')
    }

    for (var i = 0; i < 5 - valStars; i++) {
      $(item).append('<svg class="icon rating__icon" width="12" height="12" viewBox="0 0 12 12"><use xlink:href="img/symbol_sprite.svg#icon-star-t"></use></svg>')
    }
  });

  $("#rateYo").rateYo({
    rating: 0,
    fullStar: true,
    spacing: "10px",
    onSet: function (rating, rateYoInstance) {
      $('#ratingValue').val(rating);
    }
  });

});


$(function () {

  function autoHeightAnimate(element, time) {
    var curHeight = element.height();
    var autoHeight = element.css('height', 'auto').height();

    element.height(curHeight);
    element.stop().animate({
      height: autoHeight
    }, parseInt(time));
  }

  // Accardeon
  $(".accardeon__head").on("click", function () {

    $(this).toggleClass('is-active');
    var parent = $(this).parents(".accardeon__item");
    var info = $(parent).find('.accardeon__body');
    var animateTime = 300;

    if ($(info).height() === 0) {
      autoHeightAnimate($(info), animateTime)
    } else {
      $(info).stop().animate({
        height: '0'
      }, animateTime);
    }

  });

  $('.mobile-menu__nav > ul > li > a').on('click', function(e) {
    var that = $(this);
    var parent = that.parent();
    var innerList = parent.find('ul');
      
    if (innerList.length) {
      e.preventDefault();
    }
  });


  $('.mobile-menu__nav > ul > li').on('click', function() {
    var that = $(this);
    var innerList = that.find('ul');

    var animateTime = 300;

    if (innerList.length) {
      that.toggleClass('is-active');
    }
    

    if (that.hasClass('is-active')) {

      autoHeightAnimate($(innerList), animateTime)

    } else {
      $(innerList).stop().animate({
        height: '0'
      }, animateTime);
    }

  });

});


// sticky block
$(function () {

  var $stickyBlock = $('.js-sticky-block');

  if ($(document).find('.js-sticky-block').length) {
    $(document).on('scroll', function () {
      var $scrollTop = $(window).scrollTop();

      $stickyBlock.css({
        top: $scrollTop + 80 + 'px'
      });

    });
  }


  function avatarPosition() {

    if ($(window).width() < 1000) {
      $('.doctor-avatar').removeClass('js-sticky-doctor-avatar');
    } else {
      $('.doctor-avatar').addClass('js-sticky-doctor-avatar');
    }

    if ($(document).find('.js-sticky-doctor-avatar').length) {

      var $stickyAvatar = $('.js-sticky-doctor-avatar');
      var $stickyAvatarHeight = $stickyAvatar.height();

      var $teamInnerRow = $('.team-inner__row');
      var $teamInnerRowHeight = $teamInnerRow.height();

      var $scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var $scrollBottom = $scrollTop + $(window).height();

      var $avatarPostionBottom = $stickyAvatar.offset().top + $stickyAvatarHeight;
      var $rowPositionBottom = $teamInnerRow.offset().top + $teamInnerRowHeight;

      if ($scrollBottom >= $rowPositionBottom) {
        $stickyAvatar.css({
          position: 'absolute'
        });
      } else {
        $stickyAvatar.css({
          position: 'fixed'
        });
      }

    }
  }

  avatarPosition();

  $(document).on('scroll', avatarPosition);
  $(window).resize(avatarPosition);

});

// Form submit + validation
$(function () {
  $('.input-upload').each(function () {
    var $input = $(this),
      $label = $input.parent('.js-labelFile'),
      labelVal = $label.html();

    $input.on('change', function (element) {
      var fileName = '';
      if (element.target.value) fileName = element.target.value.split('\\').pop();
      fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
    });
  });


  $.fn.hasAttr = function (name) {
    return this.attr(name) !== undefined;
  };


  var formValidator = function (form, eventType) {
    var $formSubmit = $(form);
    var $required = $formSubmit.find('[data-required]');

    switch (eventType) {
      case 'change':
        handleRequiredField();
        break;
      case 'submit':
        $required.each(function (index, item) {
          validateRequiredField.call(this);
        });
        break;
      default:
        break;
    }

    $('[data-time]').mask("99:99", { autoclear: false });
    $('[data-date]').mask("99.99.9999", { autoclear: false });
    $('[data-phone]').mask("+7(999) 999-99-99", { autoclear: false });

    function handleRequiredField() {
      $required.each(function (index, item) {
        var $input = $(item);

        $input.focus(function () {
          var $that = $(this);
          var $parent = $that.parents('.form__group');

          $parent.removeClass('_error').addClass('_success');

        });

        $input.focusout(validateRequiredField);

      });
    }

    function validateRequiredField() {
      var $that = $(this);
      var $parent = $that.parents('.form__group');
      var $value = $that.val();
      var $valueLanght = $value.length;

      if ($valueLanght === 0) {
        $parent.removeClass('_success').addClass('_error');
      } else {
        $parent.removeClass('_error').addClass('_success');
      }


      if ($that.hasAttr('data-phone')) {
        var $regPhone = /^\+\d{1,3}\s?\(\d{3}\)\s?\d{3}(-\d{2}){2}$/;

        if ($valueLanght === 0) {
          $parent.removeClass('_success').addClass('_error');
        }

        if ($valueLanght > 0 && !$regPhone.test(String($value))) {
          $parent.removeClass('_success').addClass('_error');
        }
      }

    }

  }

  function resetForm(_form) {
    _form.find('[data-required]').each(function (index, item) {
      $(item).val('').parents('.form-group').removeClass('_error');
      $(item).focusout();
    });
  }

  function initForm() {
    $('.js-validate-form').each(function () {

      var $form = $(this);

      formValidator(this, 'change');

      $form.on('submit', function (e) {
        e.preventDefault();

        formValidator(this, 'submit');

        if ($form.find('._error').length > 0) {
          return false;
        }

        $.ajax({
          url: $form.attr('action'),
          data: $form.serialize(),
          type: $form.attr('method') || 'POST',
          context: this,
          success: function (response) {
            // Сообщение об успешной отправке
            console.log('Успешная отправка');



            setTimeout(function () {
              resetForm($form);
            }, 500);
          },
          error: function () {
            // Ошибка отправки
            console.log('Ошибка отправки формы');
          }
        });

      });

      // Отключаем автозаполнение полей в хроме
      $form.find('[type="text"], [type="email"], [type="tel"], [type="password"]').attr('autocomplete', 'new-password');
    });


    // Фикс autocomplete="off" для IE и Edge
    if (App.ie || App.edge) {
      window.onbeforeunload = function () {
        $('form[autocomplete="off"]').each(function () {
          this.reset();
        });
      };
    }

  }

  if ($('.js-validate-form').length) {
    initForm();
  }

});


// Map
$(function () {

  var mapScript = $.getScript('https://maps.api.2gis.ru/2.0/loader.js?pkg=full');

  $.when(mapScript)
    .done(function () {
      var map;
      var centerMap = [54.637335, 39.662147];


      DG.then(function () {
        map = DG.map('map', {
          center: centerMap,
          zoom: 17
        });

        DG.marker(centerMap).addTo(map);
      });
    });

});