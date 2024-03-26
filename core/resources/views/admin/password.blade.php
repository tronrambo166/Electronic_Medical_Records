@extends('admin.layouts.app')

@section('panel')
<div class="user-detail-area">
    <div class="row">
        <div class="col-lg-12">
            <div class="user-info-header two">
                <h5 class="title">Password Change</h5>
            </div>
            <div class="dashboard-form-area two mt-10">
                <form action="{{ route('admin.password.update') }}" method="POST" class="dashboard-form">
                    @csrf
                    <div class="row justify-content-center mb-10-none">
                        <div class="col-lg-12 form-group">
                            <label>Old Password*</label>
                            <input type="password" class="form--control"
                            type="password" placeholder="@lang('Old Password')" name="old_password">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>New Password*</label>
                            <input type="password" class="form--control"
                            placeholder="@lang('New Password')" name="password">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Confirm Password*</label>
                            <input type="password"  class="form--control"
                            placeholder="@lang('Confirm Password')" name="password_confirmation">
                        </div>
                        <div class="col-lg-12 form-group">
                            <button type="submit" class="btn btn--base w-100 mt-20">Save & Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @push('breadcrumb-plugins')
    <a href="{{route('admin.profile')}}" class="btn btn-sm btn--primary box--shadow1 text--small" ><i class="fa fa-user"></i>@lang('Profile Setting')</a>
@endpush --}}
