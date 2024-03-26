(function ($) {
  ("user strict");

  // preloader
  $(window).on("load", function () {
    $(".preloader").fadeOut(1000);
    var img = $(".bg_img");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  });

  // Rich Text Editor
  $(document).ready(function() {
    $('.content').richText();
});

  //Create Background Image
  (function background() {
    let img = $(".bg_img");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  })();

  (function background() {
    let img = $(".bg_img-2");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  })();

  // lightcase
  $(window).on("load", function () {
    $("a[data-rel^=lightcase]").lightcase();
  });

  // header-fixed
  var fixed_top = $(".header-section");
  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 100) {
      fixed_top.addClass("animated fadeInDown header-fixed");
    } else {
      fixed_top.removeClass("animated fadeInDown header-fixed");
    }
  });

  // navbar-click
  $(".navbar li a").on("click", function () {
    var element = $(this).parent("li");
    if (element.hasClass("show")) {
      element.removeClass("show");
      element.children("ul").slideUp(500);
    } else {
      element.siblings("li").removeClass("show");
      element.addClass("show");
      element.siblings("li").find("ul").slideUp(500);
      element.children("ul").slideDown(500);
    }
  });

  // scroll-to-top
  var ScrollTop = $(".scrollToTop");
  $(window).on("scroll", function () {
    if ($(this).scrollTop() < 100) {
      ScrollTop.removeClass("active");
    } else {
      ScrollTop.addClass("active");
    }
  });

  // sidebar
  $(".sidebar-menu-item > a").on("click", function () {
    var element = $(this).parent("li");
    if (element.hasClass("active")) {
      element.removeClass("active");
      element.children("ul").slideUp(500);
    } else {
      element.siblings("li").removeClass("active");
      element.addClass("active");
      element.siblings("li").find("ul").slideUp(500);
      element.children("ul").slideDown(500);
    }
  });

  //sidebar Menu
  $(document).on("click", ".navbar__expand", function () {
    $(".sidebar").toggleClass("active");
    $(".navbar-wrapper").toggleClass("active");
    $(".body-wrapper").toggleClass("active");
  });

  // Mobile Menu
  $(".sidebar-mobile-menu").on("click", function () {
    $(".sidebar__menu").slideToggle();
  });

  // faq
  $(".faq-wrapper .faq-title").on("click", function (e) {
    var element = $(this).parent(".faq-item");
    if (element.hasClass("open")) {
      element.removeClass("open");
      element.find(".faq-content").removeClass("open");
      element.find(".faq-content").slideUp(300, "swing");
    } else {
      element.addClass("open");
      element.children(".faq-content").slideDown(300, "swing");
      element
        .siblings(".faq-item")
        .children(".faq-content")
        .slideUp(300, "swing");
      element.siblings(".faq-item").removeClass("open");
      element.siblings(".faq-item").find(".faq-title").removeClass("open");
      element.siblings(".taq-item").find(".faq-content").slideUp(300, "swing");
    }
  });

  var swiper = new Swiper(".brand-slider", {
    slidesPerView: 6,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      speed: 1000,
      delay: 3000,
    },
    speed: 1000,
    breakpoints: {
      1199: {
        slidesPerView: 5,
      },
      991: {
        slidesPerView: 4,
      },
      767: {
        slidesPerView: 3,
      },
      575: {
        slidesPerView: 2,
      },
    },
  });
})(jQuery);

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function () {
//   scrollFunction();
// };

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
