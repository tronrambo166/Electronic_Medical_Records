

<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- Asos CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- nice-select -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/nice-select.css">
    @stack('style')
</head>

<body>
    <button type="button" id="btn-back-to-top">
        <i class="fas fa-arrow-up scroll-top"></i>
    </button>
    <div class="mb-5">
        @yield('content')
    </div>
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
    <script>
        AOS.init({ duration: 1200, });
    </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.nice-select.js"></script>
    <script>
        $("select").niceSelect()
    </script>
    @stack('script')
    @include('partials.notify')

</body>


</html>
