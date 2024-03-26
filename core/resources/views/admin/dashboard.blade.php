
@extends('admin.layouts.app')
@php
    $all_user = App\Models\User::count();
    $active_user = App\Models\User::active()->count();
    $banned_user = App\Models\User::banned()->count();

@endphp
@section('panel')
<div class="dashboard-area">
    <div class="dashboard-item-area">
        <div class="row justify-content-center mb-30-none">
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="dashbord-user style-two">
                    <div class="dashboard-content">
                        <div class="title">
                            <span>Total Users</span>
                        </div>
                        <div class="user-count d-flex">
                            <span>{{ $all_user }}</span>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('admin.users.all') }}">View All</a>
                        </div>
                    </div>
                    <div class="dashboard-icon-area">
                        <div class="dashboard-icon base-color">
                            <i class="las la-user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="dashbord-user style-two">
                    <div class="dashboard-content">
                        <div class="title">
                            <span>Active Users</span>
                        </div>
                        <div class="user-count d-flex">
                            <span>{{ $active_user }}</span>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('admin.users.active') }}">View All</a>
                        </div>
                    </div>
                    <div class="dashboard-icon-area">
                        <div class="dashboard-icon base-color">
                            <i class="las la-user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-30">
                <div class="dashbord-user style-two">
                    <div class="dashboard-content">
                        <div class="title">
                            <span>Banned Users</span>
                        </div>
                        <div class="user-count d-flex">
                            <span>{{ $banned_user }}</span>
                        </div>
                        <div class="view-all-btn">
                            <a href="{{ route('admin.users.banned') }}">View All</a>
                        </div>
                    </div>
                    <div class="dashboard-icon-area">
                        <div class="dashboard-icon base-color">
                            <i class="las la-user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</div>

@endsection

@push('script')

@endpush
