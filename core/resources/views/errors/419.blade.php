{{-- <!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $general->sitename($pageTitle ?? '419 | Session has expired') }}</title>
  <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="{{ asset('{{ asset('assets/errors')}}/errors/css/bootstrap.min.css') }}">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="{{ asset('{{ asset('assets/errors')}}/errors/css/main.css') }}">
</head>
  <body>


  <!-- error-404 start -->
  <div class="error">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <img src="{{ asset('{{ asset('assets/errors')}}/errors/images/error-419.png') }}" alt="@lang('image')">
          <h2 class="title"><b>@lang('419')</b> @lang('Sorry your session has expired.')</h2>
          <p>@lang('Please go back and refresh your browser and try again')</p>
          <a href="{{ route('home') }}" class="cmn-btn mt-4">@lang('Go to Home')</a>
        </div>
      </div>
    </div>
  </div>
  <!-- error-404 end -->


  </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>419 - Error Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- favicon -->
    {{-- <link rel="shortcut icon" href="#0" type="image/x-icon"> --}}
    <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/errors')}}/css/bootstrap.min.css">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/errors')}}/css/line-awesome.min.css">

    <style>

        html {
            font-size: 100%;
            scroll-behavior: smooth;
        }

        body {
            background-color: transparent;
            font-family: "Exo 2", sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 1.5em;
            color: #6B768A;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            min-height: 100vh;
            overflow-x: hidden;
        }

        a {
            display: inline-block;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        blockquote {
            margin: 0 0 1.3em;
        }

        p {
            margin-bottom: 15px;
            line-height: 1.7em;
        }
        p:last-child {
            margin-bottom: 0px;
        }
        @media only screen and (max-width: 1199px) {
        p {
            line-height: 1.7em;
        }
        }
        img {
            max-width: 100%;
            height: auto;
        }
        button:focus,
        input:focus,
        textarea:focus {
            outline: none;
        }
        button, input[type=submit], input[type=reset], input[type=button] {
            border: none;
            cursor: pointer;
        }
        input, textarea {
            padding: 12px 25px;
            width: 100%;
        }
        span {
            display: inline-block;
        }
        a, a:focus, a:hover {
            text-decoration: none;
            color: inherit;
        }
        blockquote {
            background-color: #FFF6E6;
            padding: 20px;
            color: #353448;
            border-radius: 3px;
            font-weight: 500;
            font-style: italic;
            position: relative;
        }
        blockquote .quote-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 120px;
            opacity: 0.1;
        }
        h2{
            font-weight: 600;
            margin: 0;
            line-height: 1.4;
        }
        .btn--base {
            margin-top: 20px;
            position: relative;
            background: #39ac31;
            -webkit-box-shadow: 0 0 0 #39ac31;
            box-shadow: 0 0 0 #39ac31;
            border: 1px solid transparent;
            color: #fff;
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
        }
        .btn--base.active {
            background: transparent;
            position: relative;
            border: 1px solid #d6d6d6;
            font-weight: 600;
            color: #353448;
        }
        .btn--base.active:focus, .btn--base.active:hover {
            color: #353448;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .btn--base:focus, .btn--base:hover {
            color: #fff;
            -webkit-box-shadow: 0 0 24px -6px #4582ff;
            box-shadow: 0 0 24px -6px #4582ff;
        }
        .page_404{
            margin: auto 0;
            background:#fff;
            font-family: 'Arvo', serif;
        }
        .page_404  img {
            width: 100%;
        }
        .four_zero_four_bg{
            background-image: url({{ asset('assets/errors')}}/images/dribbble_1.gif);
            background-position: center;
            background-repeat: no-repeat;
            height: 500px;
        }
        .four_zero_four_bg h1{
            font-size: 80px;
        }
        .four_zero_four_bg h3{
            font-size: 80px;
        }
        .contant_box_404 {
            margin-top:-50px;
        }
        .contant_box_404  h3{
            font-size: 32px;
            font-weight: 600;
        }
        .contant_box_404  h3 b{
            font-size: 46px;
            font-weight: 700;
            color: #e31919;
        }
    </style>


</head>
<body>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="page_404">
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
                <div class="wrapper-419">
                    <div class="four_zero_four_bg">
                        <h1 class="text-center ">419</h1>
                    </div>
                    <div class="contant_box_404">
                        <h3>
                            <b>419</b>
                            Sorry your session has expired.
                        </h3>
                        <p>Please go back refresh your browser and try agin.!</p>
                        <a href="{{ route('home') }}" class="btn--base"><i class="las la-angle-left"></i> GO TO HOME</a>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




<!-- bootstrap js -->
<script src="{{ asset('assets/errors')}}/js/bootstrap.bundle.min.js"></script>


</body>
</html>

