@extends($activeTemplate.'layouts.frontend')
@php
    $banner = @getContent('home_section.content',true)->data_values;

@endphp
@section('content')


    <!-- Search Bar Start -->
    <section class="search_section my-4 py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('user.property.search') }}" method="GET">
                        @csrf
                        <input type="search" name="search" id="search" class="form-control"
                            placeholder="Enter Your Listing \ Property Location" />
                        <div class="inner_form d-flex align-items-center">
                            <div class="col-lg-2 d-flex align-items-center ">
                                <div class="map_icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-8"></div>
                            <div class="col-lg-2">
                                <div class="searchBtn">
                                    <button type="submit" class="btn search_btn live_btn">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Bar End -->

    <div class="row my-4 pt-60 pb-60">
        <div class="col-md-12" >
            <h2 class="text-center pb-10 pt-10">Projects</h2>
            <div id="blogSlider">
                <div class="MS-content">
                    @foreach($projects as $key => $value )
                    <div class="item">
                        <div class="imgTitle">
                            <img class="img-fluid rounded" src="{{ getImage(imagePath()['add_listing']['path'].'/'.$value->image,imagePath()['add_listing']['size'])}}" alt="no" />
                        </div>
                       <div class="pb-20 pt-20 bg-light opacity-25 rounded">

                            <h4  style="text-align: center !important" class="project-details">
                                <a href="{{ route('property.details',[$value->id, slug(@$value->title)]) }}">
                                    {{ @$value->title }}
                                </a>
                            </h4>

                       </div>
                    </div>
                    @endforeach
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('script')
<script>
    $('.search_btn').on('click',function (){
        var search = $('input[name=search]').val();
        if(search == ''){
            notify("warning", "Please type your project or property location first.");
            return false
        }else{
            return true;
        }
    });
    $('#blogSlider').multislider({
        duration: 750,
        interval: 3000
    });

</script>
@endpush



