$('.add-to-cart').on('click', function() {


  $.ajax({

    url: BASE_URL + 'shop/add-to-cart',
    type: 'GET',
    dataType: 'html',
    data: {
      pid: $(this).data('pid')
    },
    success: function() {
      window.location.reload();
    }
  })
})





$('.update-cart-btn').on('click', function(e) {
  e.preventDefault();


  $.ajax({

    url: BASE_URL + 'shop/update-cart',
    type: 'GET',
    dataType: 'html',
    data: {
      pid: $(this).data('pid'),
      op: $(this).data('op')
    },
    success: function() {
      window.location.reload();
    }


  });



});






$('#search').on('input', function() {
  var userSearch = $(this).val().trim();

  $('#search-btn').attr("href", BASE_URL + "shop/search/" + userSearch);

  if (userSearch.length > 0) {

    $.ajax({
      type: 'GET',
      url: BASE_URL + 'search/' + userSearch,
      dataType: 'json',

      success: function(products) {

        if (products) {

          var availableTags = [];

          products.forEach(function(product) {
            availableTags.push({
              label: product.ptitle,
              value: BASE_URL + 'shop/' + product.curl + '/' + product.purl
            });

          });

          $("#search").autocomplete({
            source: availableTags,
            focus: function(event, ui) {
              $('#search').val(ui.item.label);
              $('#search-btn').attr("href", ui.item.value);
              return false;
            },
            select: function(event, ui) {
              window.location.href = ui.item.value;
              return false;
            }
          });
        }
      }

    });

  }

});

function blinker() {
  $('.blinking').fadeOut(300);
  $('.blinking').fadeIn(300);
}
setInterval(blinker, 1500);



// Scroll to top button appear
$(document).on('scroll', function() {
  var scrollDistance = $(this).scrollTop();
  if (scrollDistance > 100) {
    $('.scroll-to-top').fadeIn();
  } else {
    $('.scroll-to-top').fadeOut();
  }
});

// Smooth scrolling using jQuery easing
$(document).on('click', 'a.scroll-to-top', function(e) {
  var $anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: ($($anchor.attr('href')).offset().top)
  }, 1000, 'easeInOutExpo');
  e.preventDefault();
});



$('#reloader').click(function() {
  $('#home-content').load(' #home-content');

});

$(function() {
  $('.bxslider1').bxSlider({
    mode: 'fade',
    captions: true,

    auto: true,
    controls: false,
    pause: 4000,
    infiniteLoop: true,
    autoDirection: 'next',
    responsive: true,
    preloadImages: 'all',
    minSlides: 2,
    autoDelay: 0,
    randomStart: false,
    pager: false,
    moveSlideQty: 1,
  });
});
