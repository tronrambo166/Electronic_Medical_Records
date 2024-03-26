@extends($activeTemplate.'layouts.auth')
@php
    $authText = @getContent('authentication.content', true)->data_values;
@endphp


@section('content')
    <section class="login bg_img bg-overlay-base" data-background="{{asset($activeTemplateTrue.'/')}}/images/element/contact.jpg">
        <div class="container mx-auto">
            <div class="form">
                <form action="{{ route('user.password.email') }}" method="POST">
                    @csrf
                    <div class="top">
                        <a href="{{ route('home') }}" class="d-flex justify-content-center">
                            <h3 class="fw-bold fs-4 py-4">{{ $pageTitle }}</h3>
                        </a>

                    </div>

                    <div class="mb-3">
                        <label for="code" class="form-label">Enter Your Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <button type="submit" class="btn--base btn--base-e w-100">Send Code</button>
                </form>
                <p class="d-block text-center mt-5 create-acc fw-bold">
                    &mdash; If You  have a safe  account?
                    <a href="{{ route('user.login') }}">Login</a>
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
@endpush
