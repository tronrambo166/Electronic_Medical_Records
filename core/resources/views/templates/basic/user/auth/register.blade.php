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
                <form action="" method="POST">
                    @csrf
                    <div class="top">
                        <a href="{{ 'home' }}" class="d-flex justify-content-center">
                            <h3 class="fw-bold fs-4"> <i class="las la-user"></i> Sign Up</h3>
                        </a>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="username" placeholder="Username"class="form-control" id="username" value="{{ old('username') }}" />
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" id="password" />
                    </div>
                    <div class="mb-3">
                        <input type="text" name="firstname" class="form-control" placeholder="First Name" id="firstname" aria-describedby="firstname" value="{{ old('firstname') }}" />
                    </div>
                    <div class="mb-3">
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" id="lastname" aria-describedby="lastname" value="{{ old('lastname') }}"/>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email1" aria-describedby="emailHelp"  value="{{ old('email') }}"/>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input p-2 my-auto" id="exampleCheck1" name="terms" />
                        <label class="form-check-label" for="exampleCheck1">I aggree to the privacy policy</label>
                    </div>
                    <button type="submit" class="btn--base btn--base-e w-100">signup</button>
                </form>
                <div>
                    <p class="d-block text-center mt-5 create-acc fw-bold">
                        &mdash; Already an account?
                        <a href="{{ route('user.login') }}">Login</a>
                        &mdash;
                    </p>
                </div>
                <div>

                </div>
            </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Login
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection

