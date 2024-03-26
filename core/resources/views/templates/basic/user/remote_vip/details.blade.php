@extends($activeTemplate.'layouts.dashboard')

@section('content')

 <!-- body-wrapper-start -->
 <div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">

                <!-- table -->
                <div class="table-area pt-20 pb-30">
                    <div class="dash-section-title my-escrow">
                        <div class="d-flex justify-content-between">
                            <h4>{{ $pageTitle }}</h4>
                            <a href="{{ route('user.remotevip.list') }}"
                            class="btn btn--base me-0 me-xl-3">Back</a>
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
                                <form action="{{ route('user.my.listing.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $vip->id }}">
                                    <div class="information">
                                        <div class="i_title">
                                            <label for="title">Title <i
                                                    class="lar la-question-circle"></i></label>
                                            <input type="text" name="title" id="title"
                                                class="form-control" value="{{ $vip->title??"" }}">
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
                                                    id="inputAddress" placeholder="1234 Main St" name="address" value="{{ $vip->address??"" }}">
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputAddress2">Friendly Address <i
                                                        class="lar la-question-circle"></i></label>
                                                <input type="text" class="form-control"
                                                    id="inputAddress2"
                                                    placeholder="Apartment, studio, or floor" name="friendly_address" value="{{ $vip->friendly_address??"" }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6 region">

                                                    <label class="">Country<span class="text-danger">*</span></label>
                                                    <div>
                                                        <div class="form-item">
                                                            <input id="country_selector" type="text" class="form-control w-100" name="country" value="{{ $vip->country??"" }}">
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
                                                <input type="text" class="form-control" id="inputMaps" name="map_id" value="{{ $vip->map_id??"" }}">
                                            </div>

                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6">
                                                <label for="inputLongitude">Longitude</label>
                                                <input type="text" class="form-control"
                                                    id="inputLongitude" name="longitude" value="{{ $vip->longitude??"" }}">
                                            </div>
                                            <div class="form-group col-lg-3 col-md-6 col-sm-6 col-6">
                                                <label for="inputLatitude">Latitude</label>
                                                <input type="text" class="form-control"
                                                    id="inputLatitude" name="latitude" value="{{ $vip->latitude??"" }}">
                                            </div>
                                            <div class="text_editor">
                                                <label class="details"><i class="las la-file-invoice"></i> Details</label>
                                                <hr>
                                                <div> <small>Description</small>
                                                    <textarea class="content" name="details"> {{ strip_tags(@$vip->details) }}</textarea>
                                                </div>
                                            </div>

                                            <div class="" style="width: 100%;">
                                                <label for="mobile">Phone Number</label>
                                                <input type="text" name="phone" id="mobile" class="form-control" style="width:100%;" value="{{ @$vip->phone }}">
                                            </div>
                                            <div class="email">
                                                <label for="inputEmail">Email</label>
                                                <input type="email" name="email" id="inputEmail"
                                                    class="form-control" placeholder="user@email.com" value="{{ @$vip->email }}">
                                            </div>
                                            <div class="gallery">
                                                <label class="details"><i class="las la-image"></i> Gallery</label>
                                                <hr>
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="property_img mt-3">
                                                            <div id="viewer" style="width: 100%; height: 400px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
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
@endsection


@push('script')

<script>
    const viewer = new PhotoSphereViewer.Viewer({
        container: document.querySelector('#viewer'),
        panorama: '{{ getImage(imagePath()['remote_vip']['path'].'/'.$vip->image,imagePath()['remote_vip']['size'])}}',
    });
</script>

@endpush
