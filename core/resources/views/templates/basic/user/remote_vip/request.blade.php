@extends($activeTemplate.'layouts.dashboard')

@section('content')
<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">

                <!-- table -->
                <div class="table-area pt-20 pb-30">
                    <div class="dash-section-title my-escrow">
                        <div>
                            <h4>Request VIP Remote Monitoring</h4>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="table-area">
                                <table class="custom-table">
                                    <tbody>
                                        <tr>
                                            <th class="main_title"><i class="las la-file-alt"></i> Basic
                                                Information</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="information">
                                        <div class="i_title">
                                            <label for="title">Title <i
                                                    class="lar la-question-circle"></i></label>
                                            <input type="text" name="title" id="title"
                                                class="form-control">
                                        </div>
                                        <div class="other_features">
                                            <label>Other Features</label>
                                            <div class="warning">
                                                <p class="small">Please choose category to display filters</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control"
                                                    id="inputAddress" placeholder="1234 Main St" name="address">
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputAddress2">Friendly Address <i
                                                        class="lar la-question-circle"></i></label>
                                                <input type="text" class="form-control"
                                                    id="inputAddress2"
                                                    placeholder="Apartment, studio, or floor" name="friendly_address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6 region">

                                                    <label class="">Country<span class="text-danger">*</span></label>
                                                    <div>
                                                        <div class="form-item">
                                                            <input id="country_selector" type="text" class="form-control w-100" name="country" value="{{ old('country') }}">
                                                            <label for="country_selector" style="display: none;">Select a country here...</label>
                                                        </div>
                                                        <div class="form-item" style="display: none;">
                                                            <input type="text" id="country_selector_code" name="country_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                                                            <label for="country_selector_code">...and the selected country code will be updated here</label>
                                                        </div>

                                                </div>

                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6">
                                                <label for="inputMaps">Google Maps Place ID <i
                                                        class="lar la-question-circle"></i></label>
                                                <input type="text" class="form-control" id="inputMaps" name="map_id">
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6">
                                                <label for="inputLongitude">Longitude</label>
                                                <input type="text" class="form-control"
                                                    id="inputLongitude" name="longitude">
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6">
                                                <label for="inputLatitude">Latitude</label>
                                                <input type="text" class="form-control"
                                                    id="inputLatitude" name="latitude">
                                            </div>
                                            <div class="text_editor">
                                                <label class="details"><i class="las la-file-invoice"></i> Details</label>
                                                <hr>
                                                <div> <small>Description</small>
                                                    <textarea class="content" name="details"></textarea>
                                                </div>
                                            </div>
                                            <div class="phone" style="width: 100%;">
                                                <label for="inputPhone">Phone Number</label>
                                                <input type="text" name="phone" id="phone" class="form-control" style="width:100%;">
                                            </div>
                                            <div class="email">
                                                <label for="inputEmail">Email</label>
                                                <input type="email" name="email" id="inputEmail"
                                                    class="form-control" placeholder="user@email.com">
                                            </div>
                                            <div class="gallery">
                                                <label class="details"><i class="las la-image"></i> Gallery</label>
                                                <hr>
                                                <div class="warning text-primary">
                                                    <p class="small">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, soluta quisquam. Eum mollitia non, aut vero, atque repellendus inventore velit molestias voluptas porro magni architecto perferendis doloribus repellat debitis labore.</p>
                                                </div>
                                                    <div class="file-loading">
                                                        <input id="file-0a" class="file" name="image" type="file" >
                                                    </div>
                                            </div>
                                            <div class="my-3 col-12">
                                                <button type="submit" class="btn--base w-100">Send Request</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="exampleModalLabel">Property Delete Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('user.my.listing.delete') }}" method="POST">
                @csrf
                    <input type="hidden" name="id" id="id">
                    <div>
                        <p class="text-danger text-start">Are You Sure To Delete This?</p>
                    </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary rounded" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger rounded">Yes, Delete</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script>
    (function($){
        "use strict";
        $('.deleteBtn').on('click', function() {
            var modal = $('#deleteModal');
            var id = $(this).data('id');
            modal.find('input[name=id]').val(id);
            modal.modal('show');
        });

    })(jQuery);

</script>

@endpush
