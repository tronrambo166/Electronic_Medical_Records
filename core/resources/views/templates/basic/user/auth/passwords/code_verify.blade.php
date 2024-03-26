@extends($activeTemplate.'layouts.auth')
@php
    $authText = @getContent('authentication.content', true)->data_values;
    $socialIcons =  getContent('social_icon.element',false,'',1);
@endphp


@section('content')


    <section class="login bg_img bg-overlay-base" data-background="{{asset($activeTemplateTrue.'/')}}/images/element/contact.jpg">
        <div class="container mx-auto">
            <div class="form">
                <form action="{{ route('user.password.verify.code') }}" method="POST">
                    @csrf
                    <div class="top">
                        <a href="{{ route('home') }}" class="d-flex justify-content-center">
                            <h3 class="fw-bold fs-4 py-4">{{ $pageTitle }}</h3>
                        </a>

                    </div>
                    <input type="hidden" name="email" value="{{ $email }}">

                    <div class="mb-3">
                        <label for="code" class="form-label">Verification Code <span class="text-danger">*</span></label>
                        <input id="code" type="text" class="form-control" name="code" required required placeholder="Enter Code">
                    </div>
                    <div class="mb-3 form-check" style="padding-left: 0 !important">

                        <p class="d-block text-center mt-5 create-acc">
                            &mdash; @lang('Check including your Junk/Spam Folder. if not found, you can')
                            <a href="{{ route('user.password.request') }}">@lang('Try to send again')</a>
                            &mdash;
                        </p>

                     </div>
                    <button type="submit" class="btn--base btn--base-e w-100">Confirmed</button>
                </form>
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

<script>
    (function($){
        "use strict";
        $('#code').on('input change', function () {
          var xx = document.getElementById('code').value;

              $(this).val(function (index, value) {
                 value = value.substr(0,7);
                  return value.replace(/\W/gi, '').replace(/(.{3})/g, '$1 ');
              });

      });
    })(jQuery)
</script>
@endpush

