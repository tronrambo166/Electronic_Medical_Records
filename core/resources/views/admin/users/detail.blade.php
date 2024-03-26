@extends('admin.layouts.app')

@section('panel')
<div class="user-detail-area">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="overview-wrapper">
                <div class="user-detail-badge mb-20">
                    <span class="badge text-start"><i class="las la-dot-circle"></i>
                        Overview</span>
                </div>
                <div class="user-detail-thumb">
                    <div class="thumb">
                        <img src=" {{ getImage(imagePath()['profile']['user']['path'].'/'.$user->image,imagePath()['profile']['user']['size'])}} " alt="user">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-8 col-md-8">

            <div class="user-info-header two ">
                <h5 class="title">Information of {{ ucfirst($user->fullname) }}</h5>
            </div>
            <div class="dashboard-form-area two">
                <form class="dashboard-form" method="POST" action="{{ route('admin.users.update',$user->id) }}">
                    @csrf
                    <div class="row justify-content-center mb-10-none">
                        <div class="col-lg-6 form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form--control" value="{{ $user->firstname }}">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form--control" value="{{ $user->lastname }}">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Email <span class="text--danger">(unchangable)</span></label>
                            <input type="email" name="email" class="form--control" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label>Phone Number</label>
                            <input type="number" name="mobile" class="form--control" value="{{ $user->mobile }}">
                        </div>


                        </div>
                    </div>

                <div class="switch-area mt-20">
                    <div class="row ">
                        <div class="col-xxl-6 col-lg-6  col-md-6 col-sm-6 text-center mb-30">
                            <label>Status</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Active" data-off="Deactive" name="status"
                            @if($user->status) checked @endif >
                        </div>
                        <div class="col-xxl-6 col-lg-6  col-md-6 col-sm-6 text-center mb-30">
                            <label>Email Verification</label>
                            <input type="checkbox" data-width="100%" data-size="large" data-onstyle="-success" data-offstyle="-danger" data-toggle="toggle" data-on="Verified" data-off="Unverified" name="ev"
                            @if($user->ev) checked @endif >
                        </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
