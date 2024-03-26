@extends('admin.layouts.app')
@section('panel')
<div class="user-detail-area">
    <div class="user-info-header two">
        <h5 class="title">Basic Settings</h5>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-form-area two mt-10">
                <form class="dashboard-form" action="{{ route('admin.setting.update') }}" method="POST">
                    @csrf
                    <div class="dashboard-form">
                        <div class="row  mb-10-none ps-3 pe-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Site Name</label>
                                <input type="text" name="sitename" class="form--control" placeholder="0" value="{{ $general->sitename??'' }}">
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Timezone</label>
                                <select class="form--control" name='timezone'>
                                    @foreach($timezones as $timezone)
                                    <option value="'{{ @$timezone}}'" @if(config('app.timezone') == $timezone) selected @endif>{{ __($timezone) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    <div class="row text-center pt-30 mb-10-none">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group">
                            <label>User Registration</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Activated" data-off="Deactivated" name="registration" @if($general->registration) checked @endif>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group">
                            <label>Agree Policy</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Activated" data-off="Deactivated" name="agree" @if($general->agree) checked @endif>
                        </div>

                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group">
                            <label>Email Verification</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Activated" data-off="Deactivated" name="ev" @if($general->ev) checked @endif>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 form-group">
                            <label>Email Notification</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Activated" data-off="Deactivated" name="en" @if($general->en) checked @endif>
                        </div>
                    </div>
                </div>
                <div class="info-two-btn mt-30">
                    <button type="submit" class="btn btn--base w-100"><i class="las la-cloud-upload-alt"></i> Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
