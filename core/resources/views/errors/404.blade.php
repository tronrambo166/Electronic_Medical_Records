@extends($activeTemplate.'layouts.frontend')
@php
  $pageTitle = 'Page Not Found!'
@endphp
@section('content')
   <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start 404 Page
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="error ptb-80">
      <div class="container-xl mx-auto">
          <div class="row content justify-content-center align-items-center">
              <div class="col-lg-12 text-center">
                  <img src="{{asset($activeTemplateTrue.'/')}}/images/element/404.png" alt="error" />
                  <h2 class="title"><span>Oops!</span> That page can't be found</h2>
                  <p>
                      The page you are looking for might have been removed had its name
                      changed or is temporarily unavailable.
                  </p>
                  <a href="{{ route('home') }}" class="btn--base btn--base-e mt-3">
                      <i class="las la-arrow-alt-circle-left pe-2"></i>Go Back to Home</a>
              </div>
          </div>
      </div>
  </section>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
      End 404 Page
@endsection
