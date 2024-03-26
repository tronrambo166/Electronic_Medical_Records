@extends('admin.layouts.app')
@section('panel')
<div class="user-detail-area">
    <div class="user-info-header two">
        <h5 class="title">Image Assets</h5>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-form-area two mt-10">
                <form class="dashboard-form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-10-none justify-content-center">

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label>Site Logo</label>
                            <div class="image-upload style-three">
                                <div class="thumb">
                                    <div class="avatar-preview">
                                        <div class="profilePicPreview bg_img" data-background="{{ getImage(imagePath()['logoIcon']['path'].'/logo.png', '?'.time()) }}">
                                            <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="avatar-edit">
                                        <input type='file' class="profilePicUpload" name="logo"
                                            id="logo" accept=".png, .jpg, .jpeg" />
                                        <label for="logo"><i class="las la-cloud-upload-alt"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <label>Site Logo White</label>
                            <div class="image-upload style-three">
                                <div class="thumb">
                                    <div class="avatar-preview">
                                        <div class="profilePicPreview bg_img bg-secondary" data-background="{{ getImage(imagePath()['logoIcon']['path'].'/whiteLogo.png', '?'.time()) }}">
                                            <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="avatar-edit">
                                        <input type='file' class="profilePicUpload" name="whiteLogo"
                                            id="whiteLogo" accept=".png, .jpg, .jpeg" />
                                        <label for="whiteLogo"><i class="las la-cloud-upload-alt"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <label>Site Favicon</label>
                            <div class="image-upload style-three">
                                <div class="thumb" style="width: 115px;">
                                    <div class="avatar-preview">
                                        <div class="profilePicPreview bg_img" data-background="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png', '?'.time()) }}">
                                            <button type="button" class="remove-image"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="avatar-edit">
                                        <input type='file' class="profilePicUpload" name="favicon"
                                            id="favicon" accept=".png, .jpg, .jpeg" />
                                        <label for="favicon"><i class="las la-cloud-upload-alt"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-5">
                            <div class="logo-fab-content" style="text-align: center !important">
                                <span class="text-center" >Please clear cache or hard reload (CTRL + SHIFT + R) after uploading new logo and favicon </span>
                            </div>
                        </div>
                    </div>


                    <div class="info-two-btn">

                        <button type="submit" class="btn btn--base w-100 "><i class="las la-cloud-upload-alt"></i> Update</button>
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

