
@extends($activeTemplate.'layouts.auth')
@php
    $authText = @getContent('authentication.content', true)->data_values;
    $socialIcons =  getContent('social_icon.element',false,'',1);
@endphp


@section('content')

    <section class="login bg_img bg-overlay-base" data-background="{{asset($activeTemplateTrue.'/')}}/images/element/contact.jpg">
        <div class="container mx-auto">
            <div class="form">
                <form action="{{ route('user.password.update') }}" method="POST">
                    @csrf
                    <div class="top">
                        <a href="{{ route('home') }}" class="d-flex justify-content-center">
                            <h3 class="fw-bold fs-4 py-4">{{ $pageTitle }}</h3>
                        </a>

                    </div>
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="c-password" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="c-password">
                    </div>
                    <button type="submit" class="btn--base btn--base-e w-100">Reset Password</button>
                </form>

            </div>
        </div>
        </div>
    </section>


@endsection


