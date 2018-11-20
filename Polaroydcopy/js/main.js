jQuery(document).ready(function($) {
  // Initiate the wowjs
new WOW().init();

// Initiate superfish on nav menu
$('.nav-menu').superfish({
  animation: {
    opacity: 'show'
  },
  speed: 400
});

// jQuery counterUp
$('[data-toggle="counter-up"]').counterUp({
  delay: 10,
  time: 1000
});

// custom code

  // PhotoStack Initi
  if( $('#photostack-1').length) {
    new Photostack(document.getElementById('photostack-1'), {
      callback: function(item) {
        //console.log(item)
      }
    });
  }

  // Full Page menu
  $(".sidemenu").fullpageMenu({
    animationSpeed: 200
  });

  //Portfolio
  var gridContainer = $('#grid-container'), filtersContainer = $('#filters-container');

  // init cubeportfolio
  gridContainer.cubeportfolio({
    defaultFilter: '*',
    animationType: 'rotateRoom',
    gapHorizontal: 0,
    gapVertical: 0,
    gridAdjustment: 'responsive',
    caption: 'overlayBottomAlong',
    displayType: 'bottomToTop',
    displayTypeSpeed: 100,

    // lightbox
    lightboxDelegate: '.cbp-lightbox',
    lightboxGallery: true,
    lightboxTitleSrc: 'data-title',
    lightboxShowCounter: true,
  });

  // add listener for filters click
  filtersContainer.on('click', '.cbp-filter-item', function(e) {
    var me = $(this), wrap;

    // get cubeportfolio data and check if is still animating (reposition) the items.
    if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
      if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = $('.cbp-l-filters-dropdownWrap');
        wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
        wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
        me.addClass('cbp-filter-item-active');
      } else {
        me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
      }
    }
    // filter the items
    gridContainer.cubeportfolio('filter', me.data('filter'), function() {});

  });

  // activate counter for filters
  gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'));

  // activate all tooltips
  $('[data-toggle~="tooltip"]').tooltip({
    container: 'body'
  });

  // activate all popovers
  $('[data-toggle~="popover"]').popover({
    container: 'body'
  });

  //Superslides
	$('#slides').superslides({
	    slide_easing: 'easeInOutCubic',
	    slide_speed: 800,
	    pagination: true,
	    hashchange: false,
	    scrollable: true,
	    animation: 'fade'
	});

});
