@extends('admin.layouts.app')
@section('panel')
<div class="user-detail-area">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="overview-wrapper">
                <div class="user-detail-badge mb-20">
                    <span class="badge text-start"><i class="las la-dot-circle"></i>
                        Gallery</span>
                </div>
                <div class="user-detail-thumb">
                    <div class="thumb">
                        <img src=" {{ getImage(imagePath()['remote_vip']['path'].'/'.$vip->image,imagePath()['remote_vip']['size'])}} " alt="user">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="overview-wrapper">
                <div class="user-info-header two  mb-10">
                    <h5 class="title">Details Informations</h5>
                </div>
                <div class="user-detail-info mb-10">
                    <ul class="user-info-list">
                        <li>Property Name: <span>{{ @$vip->title }}</li>
                        <li>Property Owner: <span>{{ @$vip->user->fullname }}</li>
                        <li>Email Address: <span>{{ @$vip->email }}</li>
                        <li>Mobile Number: <span>{{ @$vip->phone }}</li>
                        <li>Property Address: <span>{{ @$vip->address }}</li>
                        <li>Friendly Address: <span>{{ @$vip->friendly_address }}</li>
                        <li>Country: <span>{{ @$vip->country }}</li>
                        <li>Map ID : <span>{{ @$vip->map_id }}</li>
                        <li>Longitude : <span>{{ @$vip->longitude }}</li>
                        <li>Latitude : <span>{{ @$vip->latitude }}</li>
                    </ul>
                </div>

            </div>
        </div>

</div>
@endsection

@push('breadcrumb-plugins')

       <a href="{{ route('admin.remotevip.list') }}" class="btn btn-sm btn--success box--shadow1 text--small">@lang('Back')</a>

 @endpush

