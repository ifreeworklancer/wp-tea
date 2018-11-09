import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;

window.Popper = require('popper.js');
require('bootstrap');

(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').on('click', function () {
    $(this).toggleClass('active');
    $('.menu').toggleClass('active');
  })

  /**
   * Form-label
   */

  $('.form-control').on('focus', function () {
    $(this).parents('.form-group').addClass('in-focus');
  });

  $('.form-control').on('blur', function () {
    if ($(this).val() !== "") {
      $(this).parents('.form-group').addClass('in-focus');
    } else {
      $(this).parents('.form-group').removeClass('in-focus');
    }
  });

  /**
   * Scroll Link
   */
  $(".scroll-link").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = $(id).offset().top;

      $('body,html').animate({
        scrollTop: top
      }, 1500);

      $('.burger-menu').removeClass('active');
      $('.menu').removeClass('active');
    }
  });

  /**
   * Order
   */
  $('.order-link').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = $(id).offset().top;

      $('body,html').animate({
        scrollTop: top
      }, 1500);
    }

    var productTitle = $(this).parents('.product-card').find('.product-card__title');

    var productTitleText = $(productTitle).text();

    var userMessage = $('#user-message--order');

    var userMessageText = productTitleText.replace(/\s+/g, ' ').trim();

    $(userMessage).parents('.form-group').addClass('in-focus');

    $('#user-message--order').val(userMessageText);
  });


  /**
   * Animate
   */
  ScrollReveal().reveal('.intro-item', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.best-slider', {
    origin: 'bottom',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.exclusive-slider', {
    origin: 'bottom',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.about-video', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.about-item', {
    origin: 'right',
    delay: 400,
    distance: '200px',
  });

   /**
     * Youtube video
     */
    $('[data-src]').on('click', function (e) {
      e.preventDefault();

      var id = $(this).data('src'),
          padding = $(window).width() > 768 ? 120 : 30,
          ratio = 608 / 1080,
          width = $(window).width() - padding,
          height = width * ratio,
          html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
          'src="' +
          id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';

      $('body').append('<div class="outer">' + html + '</div>');
  });

  $(document).mouseup(function (e) {
      var container = $('.outer iframe');

      if (!container.is(e.target) && container.has(e.target).length === 0) {
          $('.outer').remove();
      }
  });

  $(document).on('keyup', function (e) {
      console.log(e.keyCode)
      if (e.keyCode === 27) {
          $('.outer').remove();
      }
  })

  /**
   * Sliders
   */
  if ($('.best-slider')) {

    var elem1 = document.querySelector('.best-slider');
    if (elem1) {

      const flkty1 = new Flickity(elem1, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: true,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowOpportunities = document.querySelector('.slider-arrow-item--prev-best');

      prevArrowOpportunities.addEventListener('click', function () {
        flkty1.previous(true, false);
      });

      var nextArrowOpportunities = document.querySelector('.slider-arrow-item--next-best');

      nextArrowOpportunities.addEventListener('click', function () {
        flkty1.next(true, false);
      });
    }
  }

  if ($('.exclusive-slider')) {

    var elem2 = document.querySelector('.exclusive-slider');
    if (elem2) {

      const flkty2 = new Flickity(elem2, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: true,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowOpportunities = document.querySelector('.slider-arrow-item--prev-exclusive');

      prevArrowOpportunities.addEventListener('click', function () {
        flkty2.previous(true, false);
      });

      var nextArrowOpportunities = document.querySelector('.slider-arrow-item--next-exclusive');

      nextArrowOpportunities.addEventListener('click', function () {
        flkty2.next(true, false);
      });
    }
  }

})(jQuery)