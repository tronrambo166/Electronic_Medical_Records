@extends('admin.layouts.master')

@section('content')
    <!-- page-wrapper start -->
    <div class="page-wrapper">
        <div class="sidebar">
            <button class="res-sidebar-close-btn">
                <i class="las la-times"></i>
            </button>
            @include('admin.partials.sidenav')
        </div>
        <div class="main-wrapper">
            <div class="main-body-wrapper">
                <!-- navbar-wrapper-start -->
                @include('admin.partials.topnav')
                <!-- body-wrapper-start -->
                <div class="body-wrapper">
                    @yield('panel')
                </div>
            </div>
            <!-- copyright-wrapper-start -->
            @include('admin.partials.footer')
        </div>
    </div>



@endsection
