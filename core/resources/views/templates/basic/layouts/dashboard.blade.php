<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')
    <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,600&display=swap"
    rel="stylesheet">
<!-- fontawesome css link -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/fontawesome-all.min.css">
<!-- bootstrap css link -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
<!-- favicon -->
<link rel="shortcut icon" href="{{asset($activeTemplateTrue.'/')}}/images/logo/fav.ico" type="image/x-icon">
<!-- swipper css link -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/swiper.min.css">
<!-- lightcase css links -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/lightcase.css">
<!-- line-awesome-icon css -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/line-awesome.min.css">
<!-- animate.css -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/animate.css">
<!-- main style css link -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/style.css">
<!-- Asos CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- chosen CSS -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/chosen.css" />
<!-- nice-select -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/nice-select.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />
<!-- Minimal Rich Text Editor -->
<!-- International Country Code with Flag -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/richtext.min.css">
<!-- File Input -->
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/fileinput.min.css">
<link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/countrySelect.css">
 <!-- Custom CSS -->
 <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/custom.css">


</head>

<body>


      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Page-wrapper
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="page-wrapper">
        @include('templates.basic.partials.dashboard.sidebar')

        <div class="main-wrapper">
            <div class="main-body-wrapper">
                <!-- navbar-wrapper-start -->
                @include('templates.basic.partials.dashboard.header')
                <!-- body-wrapper-start -->
                @yield('content')
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Page-wrapper
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Bottom Nav
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    {{-- <div class="bottom-nav">
        <a href="dashboard-transaction.html">
            <i class="las la-recycle"></i>
            <p>Transactions</p>
        </a>
        <a href="dashboard-escroc-list.html">
            <i class="las la-handshake"></i>
            <p>My EscroW</p>
        </a>
        <a href="dashboard.html" class="mid">
            <i class="las la-home"></i>
            <p>Dashboard</p>
        </a>
        <a href="dashboard-support.html">
            <i class="las llas la-question-circle"></i>
            <p>Support</p>
        </a>
        <a href="user-profile.html">
            <i class="las la-user"></i>
            <p>Account</p>
        </a>
    </div> --}}
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Bottom-nav
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!-- jquery -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery-3.6.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/bootstrap.bundle.min.js"></script>
    <!-- swipper js -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/swiper.min.js"></script>
    <!-- lightcase js-->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/lightcase.js"></script>
    <!-- pace js-->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/pace.js"></script>
    <!-- smooth scroll js -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/smoothscroll.min.js"></script>
    <!-- main -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/main.js"></script>
    <!-- asos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- chosen js -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/chosen.jquery.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/apexcharts.min.js"></script>
    <!-- Minimal Rich Text Editor -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.richtext.min.js"></script>
     <!-- International Country Code with Flag -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
     <script src="{{asset($activeTemplateTrue.'/')}}/js/intl-tel-input.js"></script>
    <!-- File Input -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/sortable.min.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/buffer.min.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/piexif.min.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/fileinput.min.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/countrySelect.js"></script>
    <script>
        AOS.init({ duration: 1200, });
    </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.nice-select.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/three/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.js"></script>

 <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.nice-select.js"></script>
 {{-- <script>
     $("select").niceSelect()
 </script> --}}

<script>
    $("#country_selector").countrySelect({
        defaultCountry: "us",
        responsiveDropdown: true,
    });
</script>



    @stack('script')
    @include('partials.notify')

</body>

</html>
