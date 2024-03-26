@extends($activeTemplate.'layouts.frontend')
@php
    $banner = @getContent('home_section.content',true)->data_values;

@endphp
@section('content')

 <!-- Property Start -->
 {{-- <section class="property services ptb-60"> --}}
 <!-- Property Deatils Start -->
 <section class="property_details my-3 services ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="property_title">
                    <h2 class="text-center">{{ @$details->title }} </h2>
                    <ul class="property_address d-flex justify-content-between mt-2">
                        <li class="pro_details d-flex align-items-center">
                            <i class="las la-map-marked"></i> <span>{{ @$details->address }}</span>
                        </li>
                        <li class="pro_details d-flex align-items-center">
                            <i class="las la-calendar"></i> <span>Available From: {{ productDate($details->created_at) }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="property_details">
                    {{-- <div class="property_img mt-3">
                        <div id="panorama"></div>
                    </div> --}}
                    <div class="property_img mt-3">
                        <div id="viewer" style="width: 100%; height: 400px;"></div>
                    </div>
                    <div class="property_overview my-4">
                        <div class="tabs">

                            <input type="radio" id="tab1" name="tab-control" checked>
                            <input type="radio" id="tab2" name="tab-control">
                            <input type="radio" id="tab3" name="tab-control">
                            <ul>
                                <li title="Overview"><label for="tab1"
                                        role="button"><br><i class="las la-compress"></i> Overview<span></span></label></li>
                                <li title="Description"><label for="tab2" role="button"><br><i class="las la-info-circle"></i> Description<span>
                                        </span></label></li>
                            </ul>

                            <div class="slider">
                                <div class="indicator"></div>
                            </div>
                            <div class="content">
                                <section>
                                    <h2>Overview</h2>
                                    <div class="overview_part">
                                        <p class="overview_title">Overview</p>
                                        <ul class="property_in d-flex justify-content-start">
                                            <li class="d-flex align-items-center">
                                              <div>
                                                <span class="text-dark fw-bold mr-3">Country: </span> <span> {{ $details->country }}</span>
                                              </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                              <div>
                                                <span class="text-dark fw-bold mr-3">Friendly Address: </span> <span> {{ $details->friendly_address }}</span>
                                              </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                              <div>
                                                <span class="text-dark fw-bold mr-3">Longitude: </span> <span> {{ $details->longitude }}</span>
                                              </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                              <div>
                                                <span class="text-dark fw-bold mr-3">Latitude: </span> <span> {{ $details->latitude }}</span>
                                              </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="overview_part my-4">
                                        <p class="overview_title">Property Overview Video</p>
                                        <div class="video-container" style="max-width: 800px;">
                                            <iframe width="560" height="315"
                                                src="{{ $details->video_link }}" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <!-- <div class="overview_part my-4">
                                        <p class="overview_title">Property Location</p>
                                        <div class="map" style="width: 100%; height: 300px;"></div>
                                    </div> -->
                                </section>
                                <section>
                                    <h2>Description</h2>
                                    <div class="overview_part">
                                        <p>{{ strip_tags($details->details) }}</p>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact overview_part mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="contact_main">
                                <h5>Owner Information</h5>
                                 <div>
                                    <span class="text-secondary"> <i class="fas fa-envelope"></i> </span> <a href="mailto: {{ $details->user->email }}" target="_blank"> {{ $details->user->email }}</a>
                                 </div>
                                 <div>
                                    <span class="text-secondary"> <i class="fab fa-whatsapp"></i> </span> <a href="https://wa.me/+{{ @$details->user->mobile }}" target="_blank"> {{ @$details->user->mobile }}</a>
                                 </div>
                                 <div>
                                    <span class="text-secondary"> Live link: </span> <a class="btn text-primary" target="_blank" href="{{ @$details->live_link }}">Click Here</a>
                                 </div>

                            </div>
                            <hr>
                           @if($details->diligence_id == 1)
                           <div class="contact_main">
                            <h5>Due Diligence Information</h5>
                             <div class="custom-table">
                                <span class="text-dark  py-2"> Verification Type : </span><br>
                                @php
                                    $due = App\Models\DeuDiligenc::where('property_id', $details->id)->first();
                                @endphp
                                @foreach($due->verification_type as $key => $value)
                                <span class="text-center status--btn status--btn-2" style="margin-right: 2px !important">{{ str_replace('_',' ',ucwords($value)) }}</span>
                                @endforeach
                                <span class="text-dark py-2"> Due Diligence Duration : </span> <span>{{ $due->duration }} Days</span>
                                <span class="text-dark  py-2"> From Date & Time : </span> <span> {{ diffForHumans($due->created_at) }}</span>
                             </div>
                        </div>
                        <hr>

                           @endif
                        </div>
                        <div class="col-12">

                            <div class="contact_form mt-3">
                                <h5>Send Message</h5>
                                <form action="{{ route('user.send.message') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$details->id}}">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email Address" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="mobile" id="mobile" class="form-control"
                                            placeholder="Mobile Number" value="{{ old('mobile') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" class="form-control"
                                            required></textarea>
                                    </div>
                                    <button  type="submit" class="btn--base w-100 mb-3">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Property End -->

<!-- Property End -->
    <!-- Search Bar End -->
@endsection
@push('script')
 <script>
    const viewer = new PhotoSphereViewer.Viewer({
        container: document.querySelector('#viewer'),
        panorama: '{{ getImage(imagePath()['add_listing']['path'].'/'.$details->image,imagePath()['add_listing']['size'])}}',
    });
</script>

@endpush




