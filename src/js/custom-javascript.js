// Add your custom JS here.
//TOGGLE CLICK
console.log("custom javascript");
jQuery('.navbar-toggle').click(function () {
    console.log("navbar-toggle click");
    const self = jQuery(this);
    jQuery('.navigation').addClass('d-block');
    jQuery(this).toggleClass('active');
    setTimeout(function () {
      jQuery('body').toggleClass('menu-on');
    }, 5);
  
    document.querySelector('.navigation').addEventListener('transitionend', function () {
      if (!self.hasClass('active')) {
        jQuery('.navigation').removeClass('d-block');
      }
    });
  });
  
  jQuery('.has-sub-menu').click(function () {
    jQuery(this).find('ul').toggleClass('d-block');
  });
  
  function circleHeight() {
    jQuery('#empowering-list li').each(function (_, el) {
      const self = jQuery(this);
      const targetImg = el.getElementsByTagName('img');
      const img = new Image();
      img.src = targetImg[0].getAttribute('src');
      img.onload = function () {
        jQuery(self).children('span').css('width', img.width);
      };
    });
  }
  
  function equalHeight() {
    const selector = document.querySelectorAll('.equalHeight');
    let parentClass;
    const maxHeights = [];
    selector.forEach(function (el) {
      parentClass = el.parentNode.parentNode.parentNode.getAttribute('class');
    });
    document.querySelectorAll('.' + parentClass).forEach(function (parent) {
      const heights = [];
      parent.querySelectorAll('.equalHeight').forEach(function (el) {
        heights.push(el.clientHeight);
      });
      maxHeights.push(Math.max(...heights));
    });
  
    document.querySelectorAll('.' + parentClass).forEach(function (parent, index) {
      parent.querySelectorAll('.equalHeight').forEach(function (el) {
        for (let i = 0; i < maxHeights.length; i++) {
          if (index === i) {
            el.style.height = maxHeights[i] + 'px';
          }
        }
      });
    });
  }
  
  // LOAD CAROUSEL
  function loadCarousel() {
    const browserWidth = jQuery(window).outerWidth();
  
    if (browserWidth < 992) {
      jQuery('#testimonials').addClass('owl-carousel');
      jQuery('#testimonials').owlCarousel({
        margin: 10,
        nav: true,
        items: 1,
        dots: false,
        autoHeight: true,
      });
    }
  }
  
  jQuery(window).on('load', function () {
    circleHeight();
    equalHeight();
    loadCarousel();
  });
  