

<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')


    <!-- favicon link -->
    <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,600&display=swap"
    rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/fontawesome-all.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/bootstrap.min.css">
    <!-- favicon -->
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
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/custom.css">
    <!-- Asos CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- nice-select -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/nice-select.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.css" />
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/responsive.css">
    @stack('style')
</head>

<body>
    <button type="button" id="btn-back-to-top">
        <i class="fas fa-arrow-up scroll-top"></i>
    </button>


    <!-- header-section start -->
    @include('templates.basic.partials.header')
    <!-- header-section end -->



    @yield('content')



    @include('templates.basic.partials.footer')



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
    <script src="https://unpkg.com/fluidify-video"></script>
    <!-- Panaroma Viewer -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script> --}}
    <!-- Panaroma Viewer -->
    <script src="https://cdn.jsdelivr.net/npm/three/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core/index.min.js"></script>

    <!-- Google Map -->
    <script src="assets/js/google-maps.min.js"></script>
    <!-- main -->
    <script src="{{asset($activeTemplateTrue.'/')}}/js/multislider.min.js"></script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/main.js"></script>


    <!-- asos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1200, });
    </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.nice-select.js"></script>
    <script>
        $("select").niceSelect()
    </script>
    <script>
        var swiper = new Swiper(".client-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                speed: 1000,
                delay: 3000,
            },
            speed: 1000,
            breakpoints: {
                '480': {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                '768': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                '820': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                '912': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
        });
        var swiper = new Swiper(".blog-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                speed: 1000,
                delay: 3000,
            },
            speed: 1000,
            breakpoints: {
                '480': {
                    slidesPerView: 1,
                    spaceBetween: 30,
                },
                '768': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                '820': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                '912': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
            },
        });
    </script>

    @stack('script')
    @include('partials.notify')
</body>
</html>
