@extends($activeTemplate.'layouts.auth')

@php
$socialIcons =  getContent('social_icon.element',false,'',1);
@endphp


@section('content')

      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Login
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <div class="d-block w-100 py-1" style="background: #72C537;">


                <button data-bs-target="#loginModal" data-bs-toggle="modal" style="color:black;cursor: pointer; " class="float-right btn btn-light rounded header_buttons px-3 my-1 px-1 py-1 mx-1 d-inline-block small text-center">
                    <span id="c_to_ac">
                                        Sign Up as a Project Manager</span> 
                </button>

            </div>


           <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            LOGIN MODAL -->
    <div style="" class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 585px;">

                 <button type="button" style="width: 5%;" class="m-0 close float-left text-left d-inline bg-white" data-bs-dismiss="modal" aria-label="Close">
                        <span class="ml-auto" aria-hidden="true">&times;</span>
                    </button>


                <div class="m-auto modal-body text-center" style="width: 75%;">


                    <div class="hidden_currency ">

                        <div class="row justify-content-center mb-2">
                            <div class="px-0 w-100 py-0">


                                <div class="" id="all_registers">

                               
                                    <div class="text-center User-Artist-Select">
                                        <a style="cursor: pointer;" id="reg_back" class="float-left bg-light collapse" onclick="step_one();">
                                            <i class="fa fa-arrow-left"></i> back</a>

                                     <div class="col-md-5"></div>
                                      <div id="errors" class="w-100">
                                        </div>
                                        <div class="card-header d-block w-75 mx-auto mb-4">
                                            <div class="row">
                                                
                                            <div class="col-md-12 text-center sinup_text">
                                                <h2 class="">Registration</h2>
                                                <h4 >Step <span id="steps">1 </span> of 2</h4>
                                            </div>

                                            

                                            </div>
                                        </div>
                                    </div>



                                    <!-- User REG -->

                                    <div id="user_reg" class="px-4 card-body">
                                        <!-- onsubmit="register_main(event);" -->
                                        <form action="{{route('register_p')}}" method="post" action="" id="register_main" enctype="multipart/form-data">
                                            @csrf

                                        <div class="" id="step_one">

                                            <input hidden id="c_to_action" type="text" class="form-control" name="c_to_action" value="">

                                            <div class="row">
                                            <div id="form_fields" class="col-md-6">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">First Name </p></label>
                                           
                                            <input onkeyup="fill(this.value);" class="border w-100 py-2 mr-1" type="text" name="firstname" value="{{ old('fname') }}" id="fname" required />

                                            <span id="er_fname" class="collapse float-left text-danger small">Error: Invalid email</span>
                                            </div>

                                            <div id="form_fields" class="col-md-6">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Last Name </p></label>
                                           
                                            <input onkeyup="fill(this.value);" class="border w-100 py-2 mr-1" type="text" name="lastname" value="{{ old('lname') }}" id="lname" required />

                                            <span id="er_lname" class="collapse float-left text-danger small">Error: Invalid email</span>
                                            </div>

                                            <!-- <div id="form_fields" class="col-md-6">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Middle Name </p></label>
                                           
                                            <input onkeyup="fill(this.value);" class="border w-100 py-2 mr-1" type="text" name="mname" value="{{ old('mname') }}" id="mname" required />

                                            <span id="er_mname" class="collapse float-left text-danger small">Error: Invalid email</span>
                                            </div> -->

                                            </div>

                                            <div id="form_fields" class="">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Userame </p></label>
                                           
                                            <input onkeyup="fill(this.value);" class="border w-100 py-2 mr-1" type="text" name="username" value="{{ old('username') }}" id="username" required />

                                            <span id="er_mname" class="collapse float-left text-danger small">Error: Invalid email</span>
                                            </div>


                                            


                                           <div class="row my-3 form_fields_black" style="width: 80%;">
                                            <div class="col-md-12">
                                                <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small_label">What's your gender?(optional) </p></label>
                                            </div>

                                            <div id="" class="form_fields_black col-md-4">
                                            
                                            <div class="row">
                                            <div class="col-sm-2"><input class="" type="radio" readOnly name="gender" value="F" id="F" />
                                             </div>
                                            <div class="col-sm-8">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left small">Female
                                            </p></label>                                 
                                            </div>
                                            </div>   
                                            </div>

                                            <div id="" class="form_fields_black col-md-3">
                                            
                                            <div class="row">
                                            <div class="col-sm-1"><input class="" type="radio" name="gender" value="M" id="M" />
                                             </div>
                                            <div class="col-sm-8">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left small">Male
                                            </p></label>                                 
                                            </div>
                                            </div>   
                                            </div>

                                            <div id="" class="form_fields_black col-md-5">
                                            
                                            <div class="row">
                                            <div class="col-sm-1"><input class="" type="radio" name="gender" value="N/A" id="N/A" />
                                             </div>
                                            <div class="col-sm-9">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left small">Non-Binary
                                            </p></label>                                 
                                            </div>
                                            </div>   
                                            </div>

                                            </div>
                                


                                            <div class="row my-2">
                                            <div class="col-md-12 form_fields_black">
                                                <label class="mb-0 w-100"><p class="small_label mb-0 d-block w-100 float-left text-left ">What's your date of birth? </p></label>
                                            </div>

                                            <div id="form_fields_black" class="col-md-4">
                                            
                                            <div class="row">
                                            <div class="col-sm-12">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left py-1 small">Month
                                            </p></label>                                 
                                            </div>

                                            <div class="col-sm-12">
                                                <select  onchange="fill(this.value);" name="month" id="month" class="text-center dob border w-100 ">
                                                    <option value="">Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                             </div>

                                            </div>   
                                            </div>

                                            <div id="form_fields_black" class="col-md-4">
                                            
                                            <div class="row">
                                            <div class="col-sm-12">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left py-1 small">Day
                                            </p></label>                                 
                                            </div>

                                            <div class="col-sm-12">
                                                <select  onchange="fill(this.value);" id="day" name="day" class="text-center dob border w-100 ">
                                                    <option value="">day</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    
                                                </select>
                                             </div>

                                            </div>  
                                            </div>

                                            <div id="form_fields_black" class="col-md-4">
                                            
                                            <div class="row">
                                            <div class="col-sm-12">
                                            <label class="mb-0 w-100">
                                                <p class="mb-0 d-block w-100 float-left text-left py-1 small">Year
                                            </p></label>                                 
                                            </div>

                                            <div class="col-sm-12">
                                                <select  onchange="fill(this.value);" id="year" name="year" class="text-center dob border w-100 ">
                                                    <option value="">Year</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                </select>
                                             </div>

                                            </div>  
                                            </div>

                                            </div>

                                            <div class="row mb-3 w-75 m-auto">
                                                <!-- <div class="col-md-12">
                                @if(config('services.recaptcha.key'))
                                    <div class="g-recaptcha"
                                        data-sitekey="{{config('services.recaptcha.key')}}">
                                    </div>
                                @endif
                            </div> -->
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12 ">
                                                    <button id="next_reg" onclick="next();" style="width: 99%;" class="d-block mx-auto my-3 pt-3 proceed_btn" disabled> Next </button>
                                                </div>
                                            </div>

                                            </div>
                                            <!-- Step 1 ENDS -->
                                            <input type="number" hidden id="filled" value="">


                    <!-- Step 2 -->
                                            <div id="step_two" class="collapse">


                                            <div id="form_fields">
                                                <select  onchange="fill(this.value);" name="project_service" id="project_service" class="text-center dob border w-100 ">
                                                    <option hidden value="">Project Service</option>
                                                    <option value="Legal">Legal</option>
                                                    <option value="Photo">Photo</option>
                                                    <option value="Video">Video</option>
                                                </select>
                                            </div>


                                            <div id="form_fields">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Address</p></label>
                                           
                                            <input onkeyup="fill2(this.value);" onkeyup="email_ck2(this.value);" class="border w-100 py-2 mr-1" type="text" name="address" placeholder="" id="address" value="" required />
                                            </div>


                                             <div id="form_fields">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Google Map Id</p></label>
                                           
                                            <input onkeyup="fill2(this.value);" onkeyup="email_ck2(this.value);" class="border w-100 py-2 mr-1" type="text" name="g_map_id" placeholder="" id="g_map_id" value="" required />
                                            </div>


                                            <div class="row">
                                            <div id="form_fields" class="col-md-6">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Latitude (optional) </p></label>
                                           
                                            <input class="border w-100 py-2 mr-1" type="text" name="lat" placeholder="" id="lat" value="" />
                                            </div>

                                            <div id="form_fields" class="col-md-6">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Longitude (optional) </p></label>
                                           
                                            <input class="border w-100 py-2 mr-1" type="text" name="lng" placeholder="" id="lng" value="" />
                                            </div>
                                            </div>


                                            <div id="form_fields">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label">Email Address</p></label>
                                           
                                            <input onkeyup="fill2(this.value);" onkeyup="email_ck2(this.value);" class="border w-100 py-2 mr-1" type="email" name="email" placeholder="" id="inputEmailAddress2" value="" required />

                                            <span id="er_email2" class="collapse float-left text-danger small">Error: Invalid email</span>
                                            </div>

                                            <div id="form_fields2" class="mt-3">
                                                <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left small small_label">Password <span id="hideButton3" onclick="passShow3();" class="hide_see p-0 w-50 text-right small_label px-2">
                                                     <img id="passIcon3" width="15px" src="assets/randomIcons/see.png"> <span id="hide3">Show</span>  
                                                    </span></p>
                                                    
                                                </label>
                                           
                                            <input onkeyup="pass_match1(this.value); fill2(this.value);" class="border w-100 py-2 mr-1" name="password" id="inputPassword3" type="password" value="" required />
                                            </div>

                                            <div id="form_fields2" class="my-3">
                                                <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left small small_label">Confirm Password <span id="hideButton2" onclick="passShow2();" class="hide_see float-right p-0 w-50 text-right small_label px-2">
                                                     <img id="passIcon2" width="15px" src="assets/randomIcons/see.png"> <span id="hide2">Show</span>  
                                                    </span></p>
                                                    
                                                </label>
                                           
                                            <input onkeyup="pass_match2(this.value); fill2(this.value);" class="border w-100 py-2 mr-1" name="password_confirmation" id="inputPassword2" type="password" value="" required />

                                            <span id="er_pass" class="collapse float-left text-danger small">Error: Passwords do not match!</span>

                                            </div>
                                            

                                            <div id="form_fields">
                                            <label class="mb-0 w-100"><p class="mb-0 d-block w-100 float-left text-left small small_label2">By creating an account, you agree to the<a class="small d-inline" target="_black" href="terms">Terms of Use</a> and <a class="small d-inline" target="_black" href="privacy-policy">Privacy Policy</a></p></label>                                            
                                            </div>


                                            <input type="text" id="captcha" hidden value="" name="">
                                            <div id="form_fields4">
                                                <div class="col-md-12 px-0">
                                                    @if(config('services.recaptcha.key'))
                                                        <div class="g-recaptcha" data-callback="thecallback"
                                                            data-sitekey="{{config('services.recaptcha.key')}}">
                                                        </div>
                                                    @endif
                                                </div>                                       </div>

                                            <div class="row my-4">
                                                <div class="col-md-12 ">
                                                    <button id="proceed_reg" type="submit" style="width: 99%;" class="d-block mx-auto my-3 pt-2 proceed_btn text-light " disabled> Register </button>


                                                </div>
                                            </div>

                                        </div>
                    <!-- Step 2 ENDS -->

                                        </form>

                              {{--           <div class="row">
                                            <div class="col-md-4 px-0">
                                                <hr class="thick_border">
                                            </div>
                                            <div class="mb-0 col-md-4 form_fields_black">
                                                <p>Or continue with</p>
                                            </div>
                                            <div class="col-md-4 px-0">
                                                <hr class="thick_border">
                                            </div>
                                        </div>

                                        <div class="row mb-3 w-50 px-4 m-auto">
                                            <div class="col-md-6">
                                                <a href="{{route('login.facebook')}}" class="social_btn text-light">
                                                    <img class="shadow" src="images/randomIcons/fb.png"></a>
                                            </div>
                                        
                                            <div class="col-md-6">
                                                <a href="{{route('login.google')}}" class="social_btn text-dark">
                                                    <img class="shadow" src="images/randomIcons/google.png"></a>
                                            </div>
                                        </div> --}}

                                    </div>

                                 <!-- HIDDEN USER REG -->
                                    
                                </div>



                                <!-- Logout-->

                                {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> --}}



                                <!-- HIDDEN login--> <!-- HIDDEN login--> <!-- HIDDEN login--> <!-- login-->

         
                            </div>
                        </div>

                    </div>


                </div>



            </div>
        </div>
    </div>


    @if(Session::has('register'))
    <div class="float-right">
                <p class="bg-success text-light text-center">{{Session::get('register')}}
                </p>
    </div>
    @endif
  <!--  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



    <section class="login bg_img bg-overlay-base" data-background="{{asset($activeTemplateTrue.'/')}}/images/element/contact.jpg">

            

            <div class="clearfix"></div>

        <div class="container mx-auto">
        <div class="container mx-auto">

            <div class="form">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="top">
                        <a href="{{ 'home' }}" class="d-flex justify-content-center">
                            <h3 class="fw-bold fs-4"> <i class="las la-sign-in-alt"></i> Sign Up</h3>
                        </a>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" id="usename" placeholder="Username/Email" value="{{ old('email') }}" />
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="password" class="form-control" id="password" />
                    </div>

                    <div class="mb-3 form-check d-flex justify-content-between">
                        <div>
                         <input type="checkbox" class="form-check-input p-2 my-auto" id="exampleCheck1" />
                         <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div>

                        <span><a href="{{ route('user.password.request') }}" class="text-danger form-check-label"> Forget Password?</a></span>
                        </div>
                     </div>
                    <button type="submit" class="btn--base btn--base-e w-100">Login</button>
                </form>
                <p class="d-block text-center mt-5 create-acc fw-bold">
                    &mdash; Don't have an account?
                    <a href="{{ route('user.register') }}">Register</a>
                    &mdash;
                </p>
            </div>
        </div>
        </div>




    </section>


 


@endsection

@push('script')

    <script>
        "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">@lang("Captcha field is required.")</span>';
                return false;
            }
            return true;
        }

        $('#rc-anchor-container').css({
            width: '100% !important'
        });


        

    </script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush
