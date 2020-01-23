
(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $('.sidebar .collapse').collapse('hide');
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

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

})(jQuery); // End of use strict
//----------------------------------------------------------------------------------------
//my Changes

$('#article').summernote({

    height:285,
    placeholder: '* Article',
    maximumImageFileSize: 5239000 ,
});



function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#img-pre').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#image").change(function() {
    readURL(this);
  });







String.prototype.permalink = function (){
return this.toString().trim().toLowerCase().replace(/\s/g,'-');
};

$('.origin-text').on('focusout', function (){


  $('.target-text').val($(this).val().permalink());

});


String.prototype.title = function (){
  return this.toString().trim().toLowerCase();
  };

  $('.origin-text').on('focusout', function (){


    $('.target-title').val($(this).val().title());

  });



// $('.add-to-cart').on('click', function () {


//     $.ajax({

//         url: BASE_URL + 'shop/add-to-cart',
//         type: 'GET',
//         dataType: 'html',
//         data: {
//             pid: $(this).data('pid')
//         },
//         success: function () {
//             window.location.reload();
//         }
//     })
// })
