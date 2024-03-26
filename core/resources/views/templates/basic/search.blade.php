@extends($activeTemplate.'layouts.frontend')
@php
    $banner = @getContent('home_section.content',true)->data_values;

@endphp
@section('content')

 <!-- Property Start -->
 <section class="property services ptb-60">
    <div class="container">
        <div class="row">
            @forelse($listings as $key => $value)
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white card-has-bg click-col"
                    style="background-image:url('{{ getImage(imagePath()['add_listing']['path'].'/'.$value->image,imagePath()['add_listing']['size'])}}');">
                    {{-- <img class="card-img d-none" src="" alt="EOTG"> --}}
                    <div class="card-img-overlay d-flex flex-column">
                        <div class="card-body">
                            <h2 class="card-meta mb-4">{{ @$value->title }}</h2>
                            <h4 class="card-title mt-0 "><a class="text-white" herf="{{ route('user.property.details',[$value->id, slug(@$value->data_values->title)]) }}"><i
                                        class="las la-map-marked"></i> {{ @$value->address }}</a></h4>
                            <a href="{{ route('user.property.details',[$value->id, slug(@$value->title)]) }}" class="btn view_btn mt-2" ><i class="las la-eye"></i> View Property</a>
                        </div>
                        <div class="card-footer">
                            <div class="pro_icons d-flex justify-content-between">
                                <div class="pro_icon">
                                    <i class="fas fa-map-marker-alt"></i> {{ @$value->country }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-sm-12 col-md-12 col-lg-12 mb-4">
                <div class="alert alert-info text-center text-danger">
                    No Listing/Propery Found
                </div>
            </div>

            @endforelse


        </div>
</section>

<!-- Property End -->
    <!-- Search Bar End -->


@endsection




