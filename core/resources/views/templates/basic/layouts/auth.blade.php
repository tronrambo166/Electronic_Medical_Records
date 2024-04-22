

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

    <script>

    //MODAL
         function passShow(){
            $('#inputPassword').attr('type','text');
            $('#hideButton').attr("onclick","passHide()");
            document.getElementById("hide").innerHTML="Hide";
            $('#passIcon').attr('src','images/randomIcons/hide.png');
        }
        function passHide(){
            $('#inputPassword').attr('type','password');
            $('#hideButton').attr("onclick","passShow()");
            document.getElementById("hide").innerHTML="Show";
            $('#passIcon').attr('src','images/randomIcons/see.png');
        }


        function email_ck(value) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(regex.test(value) == true)
                $('#er_email').addClass('collapse');
            else
                $('#er_email').removeClass('collapse');
        }


        function pass_ck(value) {
            email = $('#inputEmailAddress').val().length;
            pass = value.length;

            if(email > 9 && pass > 7){
            $('#login_btn').prop("disabled", false);
            $('#login_btn').css('background','#014811');
            }
        }

        function next() {
            $('#step_one').addClass('collapse');
            $('#step_two').removeClass('collapse');
            $('#reg_back').removeClass('collapse');
            document.getElementById('steps').innerHTML = '2';
        }

        function step_one() {
            $('#step_two').addClass('collapse');
            $('#step_one').removeClass('collapse');
            $('#reg_back').addClass('collapse');
            document.getElementById('steps').innerHTML = '1';
        }

        //For Register
        function passShow2(){
            $('#inputPassword2').attr('type','text');
            $('#hideButton2').attr("onclick","passHide2()");
            document.getElementById("hide2").innerHTML="Hide";
            $('#passIcon2').attr('src','assets/randomIcons/hide.png');
        }
        function passHide2(){
            $('#inputPassword2').attr('type','password');
            $('#hideButton2').attr("onclick","passShow2()");
            document.getElementById("hide2").innerHTML="Show";
            $('#passIcon2').attr('src','assets/randomIcons/see.png');
        }

         function passShow3(){
            $('#inputPassword3').attr('type','text');
            $('#hideButton3').attr("onclick","passHide3()");
            document.getElementById("hide3").innerHTML="Hide";
            $('#passIcon3').attr('src','assets/randomIcons/hide.png');
        }
        function passHide3(){
            $('#inputPassword3').attr('type','password');
            $('#hideButton3').attr("onclick","passShow3()");
            document.getElementById("hide3").innerHTML="Show";
            $('#passIcon3').attr('src','assets/randomIcons/see.png');
        }

        function email_ck2(value) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(regex.test(value) == true)
                $('#er_email2').addClass('collapse');
            else
                $('#er_email2').removeClass('collapse');
        }

        $('#next_reg').prop("disabled", true);


        function fill(value) {  
            var filled = 0;
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var mname = $('#mname').val();
            var month = $('#month').val();
            var day = $('#day').val();
            var year = $('#year').val();

            if(fname != '' && lname != '' && mname != '' && month != '' && day != ''
             && year != '')
                filled = 1;  //console.log(filled)

            if(filled == 1){
            $('#next_reg').prop("disabled", false);
            $('#next_reg').css('background','#014811');
            }
            else{
            $('#next_reg').prop("disabled", true);
            $('#next_reg').css('background','#01481140');
            }
        }

        function pass_match1(value) {
            sessionStorage.setItem('pass1',value);
        }
        function pass_match2(value) {
            //var pass1 = sessionStorage.getItem('pass1');
            //if(pass1 =='')
            pass1 = $('#inputPassword3').val();
            var filled = $('#filled').val();

            if(value == pass1){
                 $('#er_pass').addClass('collapse');
            }
            else{
                $('#er_pass').removeClass('collapse');
            }
            
        }


        function fill2(value) {  
            var filled = 0;
            var p1 = $('#inputPassword3').val();
            var mname = $('#inputEmailAddress2').val();
            var p2 = $('#inputPassword2').val();
            var captcha = 1; //$('#captcha').val();

            if(p1 != '' && p2 != '' && mname != '' && captcha != '' &&  p1 == p2)
                filled = 1;  console.log(filled+'YES')


            if( filled == 1 ){
            $('#proceed_reg').prop("disabled", false);
            $('#proceed_reg').css('background','#014811');
           
            }
            else{
            $('#proceed_reg').prop("disabled", true);
            $('#proceed_reg').css('background','#01481140');
            
            }
        }
    </script>
    @stack('script')
    @include('partials.notify')

</body>


</html>
