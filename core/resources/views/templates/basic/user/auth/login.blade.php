@extends($activeTemplate.'layouts.auth')

@php
$socialIcons =  getContent('social_icon.element',false,'',1);
@endphp


@section('content')

      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Login
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="login bg_img bg-overlay-base" data-background="{{asset($activeTemplateTrue.'/')}}/images/element/contact.jpg">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Login
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


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
@endpush
