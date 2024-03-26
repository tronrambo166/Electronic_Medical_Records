
@extends('admin.layouts.app')
@section('panel')
<div class="user-detail-area">
    <div class="user-info-header two">
        <h5 class="title">{{ $pageTitle }}</h5>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-form-area two mt-10">
                <form class="dashboard-form" action="" method="POST">
                    @csrf
                    <div class="dashboard-form">
                        <div class="row justify-content-center mb-10-none ps-3 pe-3">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="google_play_link">Google Play Link*</label>
                                <textarea name="google_play_link" id="google_play_link" cols="30" rows="10" class="form--control">{{ $general->google_play_link??'' }}</textarea>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 form-group">
                                <label for="apple_store_link">Apple Store Link*</label>
                                <textarea name="apple_store_link" id="apple_store_link" cols="30" rows="10" class="form--control">{{ $general->apple_store_link??'' }}</textarea>
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
