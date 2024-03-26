(function ($) {
  "user strict";

// wow
if ($('.wow').length) {
  var wow = new WOW({
    boxClass: 'wow',
    // animated element css class (default is wow)
    animateClass: 'animated',
    // animation css class (default is animated)
    offset: 0,
    // distance to the element when triggering the animation (default is 0)
    mobile: false,
    // trigger animations on mobile devices (default is true)
    live: true // act on asynchronously loaded content (default is true)
  });
  wow.init();
}
// select-2 init
$('.select2-basic').select2();
$('.select2-multi-select').select2();
$(".select2-auto-tokenize").select2({
  tags: true,
  tokenSeparators: [',']
});
//Create Background Image
(function background() {
  let img = $('.bg_img');
  img.css('background-image', function () {
    var bg = ('url(' + $(this).data('background') + ')');
    return bg;
  });
})();

// sidebar
$(".sidebar-menu-item > a").on("click", function () {
  var element = $(this).parent("li");
  if (element.hasClass("active")) {
    element.removeClass("active");
    element.children("ul").slideUp(500);
  }
  else {
    element.siblings("li").removeClass('active');
    element.addClass("active");
    element.siblings("li").find("ul").slideUp(500);
    element.children('ul').slideDown(500);
  }
});

//sidebar Menu
$(document).on('click', '.navbar__expand', function () {
  $('.sidebar').toggleClass('active');
  $('.navbar-wrapper').toggleClass('active');
  $('.body-wrapper').toggleClass('active');
  $('.copyright-wrapper').toggleClass('active');
});

//dark version
$(document).on('click', '.version-btn', function () {
  // $('body').toggleClass('dark-version');
  $('.page-wrapper').toggleClass('dark-version');
});


// notification
$(".notification-btn").click(function(){
  $(".notification-wrapper").slideToggle();
});

// Switch toggle
$(document).on('click', '.switch', function () {
  $(this).toggleClass('active');
});

// Input toggle
$(document).on('click', '.switch', function () {
  $('.input-toggle').toggleClass('show');
});

// responsive sidebar expand js 
$('.navbar__mobile_expand').on('click', function (){
  $('.sidebar').addClass('open');
});

$('.res-sidebar-close-btn').on('click', function (){
  $('.sidebar').removeClass('open');
});

// color version change
$(document).on('click', '.version-btn', function() {
  setVersion(localStorage.getItem('page-wrapper'));
});


if (localStorage.getItem('page-wrapper') == 'light-version') {
  localStorage.setItem('page-wrapper', 'light-version');
} else {
  localStorage.setItem('page-wrapper', 'light-version');
}

setVersion(localStorage.getItem('page-wrapper'));

function setVersion(version) {


  if (version == 'dark-version') {
      localStorage.setItem('page-wrapper', 'light-version');
      $('.page-wrapper').addClass(version);
      $('.sidebar__main-logo img').attr('src', $('.sidebar__main-logo img').attr('dark-img'));
      $('.version-btn').html('<i class="las la-sun"></i>');

  } else {
      //  console.log('light')
      localStorage.setItem('page-wrapper', 'dark-version');
      $('.page-wrapper').removeClass('dark-version');
      $('.sidebar__main-logo img').attr('src', $('.sidebar__main-logo img').attr('white-img'));
      $('.version-btn').html('<i class="las la-moon"></i>');
  }

}

$('.iconPicker').iconpicker().on('change', function (e) {
  $(this).parent().siblings('.icon').val(`<i class="${e.icon}"></i>`);
});

})(jQuery);