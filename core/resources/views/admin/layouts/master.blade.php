<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $general->sitename($pageTitle ?? '') }}</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png', '?'.time()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- fav link -->
    {{-- <link rel="shortcut icon" href="{{asset('assets/admin/')}}/images/logo/fav.png" type="image/x-icon"> --}}
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/line-awesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/bootstrap.min.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/themify.css">




    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/animate.css">

    <!-- main style css link -->
    <link rel="stylesheet" href="{{asset('assets/admin/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset("assets/admin/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/admin/css/countrySelect.css")}}">



    @stack('style')
</head>
<body>
@yield('content')



<!-- jquery -->
<script src="{{asset('assets/admin/')}}/js/jquery-3.5.1.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/admin/')}}/js/bootstrap.bundle.min.js"></script>

<!-- wow js file -->
<script src="{{asset('assets/admin/')}}/js/wow.min.js"></script>
<script src="{{asset('assets/admin/')}}/js/toggle.js"></script>
<script src="{{asset('assets/admin/js/select2.min.js')}}"></script>
<!-- apex-charts js file -->
<script src="{{asset('assets/admin/')}}/js/apexcharts.min.js"></script>
<!-- dashboard-charts js file -->
<script src="{{asset('assets/admin/')}}/js/dashboard-chart.js"></script>
<script src="{{asset('assets/admin/js/select2.min.js')}}"></script>
<script src="{{asset('assets/admin/')}}/js/nicEdit.js"></script>
<script src="{{asset('assets/admin/')}}/js/bootstrap-iconpicker.bundle.min.js"></script>

<!-- main -->

<script src="{{asset('assets/admin/')}}/js/main.js"></script>
<script src="{{asset('assets/admin/')}}/js/countrySelect.js"></script>
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "us",
        responsiveDropdown: true,
    });
</script>
<script>
    // fullscreen-btn

    /* Get the documentElement (<html>) to display the page in fullscreen */
    let elem = document.documentElement;

    /* View in fullscreen */
    function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.mozRequestFullScreen) { /* Firefox */
        elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE/Edge */
        elem.msRequestFullscreen();
    }
    }

    /* Close fullscreen */
    function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.mozCancelFullScreen) { /* Firefox */
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) { /* IE/Edge */
        document.msExitFullscreen();
    }
    }

    $('.fullscreen-btn').on('click', function(){
    $(this).toggleClass('active');
    });
</script>


@include('partials.notify')
@stack('script-lib')

{{-- LOAD NIC EDIT --}}
<script>
    "use strict";
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
    (function($){
        $( document ).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain',function(){
            $('.nicEdit-main').focus();
        });

        // Menu Active Code
        var menu_link_item = $('.sidebar-menu-item');
        $.each(menu_link_item,function(index,item){
            if($(item).hasClass('active')) {
                if($(item).parents('.sidebar-dropdown')) {
                    $(item).parents('.sidebar-dropdown').addClass('active');
                    if($(item).parents('.sidebar-dropdown').find('.sidebar-submenu')) {
                        $(item).parents('.sidebar-dropdown').find('.sidebar-submenu').addClass('active');
                        $(item).parents('.sidebar-dropdown').find('.sidebar-submenu').slideDown(300);
                    }
                }
            }
        });

    })(jQuery);
</script>

@stack('script')


</body>
</html>
