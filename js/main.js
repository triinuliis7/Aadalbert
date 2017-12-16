$(document).ready(function() {
  $(".owl-carousel").each(function() {
    $(this).owlCarousel({
      items: 5,
      itemsDesktop: [1299,5],
      itemsDesktopSmall: [1000,4],
      itemsTablet: [908,3],
      itemsTabletSmall: [768, 2],
      itemsMobile: [479,1],
      mouseDrag: true,
      autoHeight: false
    });
  });

  setTimeout(function(){
    initOwlHeight();
  }, 50);

  $('.arrow-container').on('click', function() {
    var owl = $(".owl-carousel");
    if ($(this).hasClass('arrow--left')) {
      owl.trigger('owl.prev');
    } else if ($(this).hasClass('arrow--right')) {
      owl.trigger('owl.next');
    }
  });
});

function initOwlHeight() {
  var heightChanged = false;
  if (($('.owl-wrapper-outer').height() < 80 || !heightChanged) && $('.owl-wrapper-outer').length) {
    $('.owl-wrapper-outer').each(function() {
      var $height = $(this).find($('.owl-item')).height();
      $(this).find($('.owl-item')).each(function() {
        if ($(this).height < $height) {
          $height = $(this).height;
        }
      });
      $height = $height > 150 ? 150 : $height;
      $(this).css('height', $height);
    });
    heightChanged = true;
    setTimeout(function() {
      initOwlHeight();
    }, 500);
  }
}

function removeLoader() {
  if (($('.owl-wrapper-outer').height() >= 80 || !$('.owl-wrapper-outer').length)) {
    $("#loader-div").fadeOut(500);
  }
}

function updateGalleryHeight(activeGallery) {
  var galleryHeight = $(activeGallery).find('.gallery').outerHeight() == 0 || $(activeGallery).find('.gallery').outerHeight() > 200 ? 200 : $(activeGallery).find('.gallery').outerHeight();
  $(activeGallery).css('height', galleryHeight + 40);
  $(activeGallery).find('li').css('height', galleryHeight - 50);
}

// Needed for the carouse
$(window).on('resize', function() {
  setTimeout(function(){
    initOwlHeight();
  }, 50);
  initGallery();
});

$('a.nav-element').click(function (e) {
  var id = $(this).attr('data-target');
  e.preventDefault();
  $('html, body').animate({
    scrollTop: $(id).position().top
  }, 1000);
});

$(".navbar-collapse li a").click(function(e) {
    $('.navbar-collapse li').removeClass('active');
    $(this).parent().addClass('active');
});

$('.product-card--content').click(function() {
  $(this).closest('.product-card').siblings('.product-card').removeClass('active');
  $(this).closest('.product-card').toggleClass('active');
  initGallery();
});

initGallery = function() {
  $('.product-gallery').removeClass('active');
  $('.product-gallery').css('height', 0);
  $('.product-gallery').css('padding', 0);
  $('.product-gallery--content').hide();

  $('.product-card.active').closest('.product-card').nextAll('.product-gallery:visible').each(function() {
    if ($(this).is(':visible')) {
      updateGalleryHeight($(this));
      $(this).css('padding', '0em 1.5em');
      $(this).toggleClass('active');
      $(this).find('.product-gallery--content.' + $('.product-card.active').attr('id')).css('display', 'flex');
      return false;
    }
  });
}
