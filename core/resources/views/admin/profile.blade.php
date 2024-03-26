@extends('admin.layouts.app')

@section('panel')

<div class="user-detail-area">
    <div class="user-info-header two">
        <h5 class="title">Profile Settings</h5>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-form-area two mt-10">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" class="dashboard-form">
                   @csrf
                    <div class="row mb-30-none">
                        <div class="col-lg-4 mb-30">
                            <div class="overview-wrapper">
                                <div class="user-detail-thumb two">
                                    <span class="title">Profile Image: (350x300px)</span>
                                    <div class="image-upload">
                                        <div class="thumb">
                                            <div class="avatar-preview">
                                                <div class="profilePicPreview bg_img" data-background="{{ getImage(imagePath()['profile']['admin']['path'].'/'.$admin->image,imagePath()['profile']['admin']['size'])}}">
                                                    <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                                </div>
                                            </div>
                                            <div class="avatar-edit">
                                                <input type='file' class="profilePicUpload" name="image"
                                                    id="profilePicUpload2" accept=".png, .jpg, .jpeg" />
                                                <label for="profilePicUpload2"><i class="las la-pen"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 mb-30">
                            <div class="row justify-content-center mb-10-none">
                                <div class="col-lg-12 form-group">
                                    <label>Your Name*</label>
                                    <input type="text" name="name" class="form--control"
                                        placeholder="enter your name" value="{{ @$admin->name??'' }}">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label>Your Email*</label>
                                    <input type="email" name="email" class="form--control"
                                        placeholder="enter your email" value="{{ @$admin->email??''}}">
                                </div>
                                <div class="col-lg-12 col-md-6 form-group">
                                    <label>Phone Number*</label>
                                    <input type="text" name="mobile" class="form--control"
                                        placeholder="enter your mobile" value="{{ @$admin->mobile??'' }}">
                                </div>
                                <div class="col-lg-12 col-md-6 form-group">
                                    <label>Address*</label>
                                    <input type="text" name="address" class="form--control"
                                        placeholder="enter your address" value="{{ $admin->address??'' }}">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>City*</label>
                                    <input type="text" name="city" class="form--control"
                                        placeholder="enter your city" value="{{ $admin->city }}">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>State*</label>
                                    <input type="text" name="state" class="form--control"
                                        placeholder="enter your state" value="{{ $admin->state??'' }}">
                                </div>
                                <div class="col-lg-6 col-md-6 form-group">
                                    <label>Zip/Postal*</label>
                                    <input type="text" name="zip" class="form--control"
                                        placeholder="enter your zip" value="{{$admin->zip}}">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Country</label>
                                  <div class="form-item"  >
                                    <input  id="country_selector" type="text"
                                        class="form-control w-100" name="country" value="{{ $admin->country??"" }}" style=" width:100% !important">
                                    <label for="country_selector"
                                        style="display:none;">Select a
                                        country here...</label>
                                </div>
                                <div class="form-item" style="display:none;">
                                    <input type="text" id="country_selector_code"
                                        name="country_code"
                                        data-countrycodeinput="1" readonly="readonly"
                                        placeholder="Selected country code will appear here" />
                                    <label for="country_selector_code">...and the selected
                                        country
                                        code will be updated here</label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pro-btn-area mt-30">
                        <button type="submit" class="btn btn--base w-100">Save & Change</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function proPicURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      var preview = $(input).parents('.thumb').find('.profilePicPreview');
      $(preview).css('background-image', 'url(' + e.target.result + ')');
      $(preview).addClass('has-image');
      $(preview).hide();
      $(preview).fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$(".profilePicUpload").on('change', function () {
  proPicURL(this);
});

$(".remove-image").on('click', function () {
  $(this).parents(".profilePicPreview").css('background-image', 'none');
  $(this).parents(".profilePicPreview").removeClass('has-image');
  $(this).parents(".thumb").find('input[type=file]').val('');
});
</script>

@endpush
