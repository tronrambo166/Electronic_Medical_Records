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
                        <div>
                            <h4>{{ $pageTitle }}</h4>
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
                                                <p class="small">Please Choose Project Type To Display Filters</p>
                                            </div>
                                            <div class="form-group ">
                                                <label for="project-type">Project Type</label>
                                                <select id="project-type" name="project_type" class="form-control">
                                                    <option value="" disabled>Select Project Type</option>
                                                    <option value="1" >Remote Monitoring Of Ongoing Projects</option>
                                                    <option value="2" >Remote Identification/Observation Of An Item To Purchase</option>
                                                    <option value="3" >Remote Expert Advice On Item/Service To Be Purchased</option>
                                                </select>
                                            </div>
                                            {{-- Remote Monitoring Of Ongoing Projects --}}
                                            <div id="div1" style="display: none">
                                                <div class="custom--card mt-80 mb-40" >
                                                    <div class="card-header">Remote Monitoring Of Ongoing Projects</div>
                                                    <div class="card-body" style="display:block">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="monitoring__sub_project_type">Sub-Project Type</label>
                                                                <select name="monitoring_sub_project_type" id="monitoring_sub_project_type" class="form-control">
                                                                    <option value="">Select Sub-Project Type</option>
                                                                    <option value="House Contruction/Renovation">House Contruction/Renovation</option>
                                                                    <option value="Road Contruction/Renovation">Road Contruction/Renovation</option>
                                                                    <option value="Farming">Farming</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="monitoring_duration_in_week">Enter Expected Project Duration In Weeks (Max 52)</label>
                                                                <input type="text" class="form-control"
                                                                    id="monitoring_duration_in_week" placeholder="Example: 52" name="monitoring_duration_in_week">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="monitoring_monitoring_hours_in_daily">Enter Daily Project Hours (Max 24)</label>
                                                                <input type="text" class="form-control"
                                                                    id="hours_in_daily" placeholder="Example: 24" name="monitoring_hours_in_daily">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            {{-- Remote Monitoring Of Ongoing Projects --}}

                                            {{-- Remote Identification/Observation Of An Item To Purchase --}}
                                            <div id="div2" style="display: none">
                                                <div class="custom--card mt-80 mb-40">
                                                    <div class="card-header">Remote Identification/Observation Of An Item To Purchases</div>
                                                    <div class="card-body" style="display:block">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="identification_sub_project_type">Sub-Project Type</label>
                                                                <select name="identification_sub_project_type" id="identification_sub_project_type" class="form-control">
                                                                    <option value="">Select Sub-Project Type</option>
                                                                    <option value="Vehicle">Vehicle</option>
                                                                    <option value="Real Estate">Real Estate</option>
                                                                    <option value="Business">Business</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="identification_duration_in_week">Enter Expected Project Duration In Weeks (Max 52)</label>
                                                                <input type="text" class="form-control"
                                                                    id="identification_duration_in_week" placeholder="Example: 52" name="identification_duration_in_week">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="identification_hours_in_daily">Enter Daily Project Hours (Max 24)</label>
                                                                <input type="text" class="form-control"
                                                                    id="identification_hours_in_daily" placeholder="Example: 24" name="identification_hours_in_daily">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            {{-- Remote Identification/Observation Of An Item To Purchases --}}

                                            {{-- Remote Expert Advice On Item/Service To Be Purchased --}}
                                            <div id="div3" style="display: none">
                                                <div class="custom--card mt-80 mb-40">
                                                    <div class="card-header">Remote Expert Advice On Item/Service To Be Purchased</div>
                                                    <div class="card-body" style="display:block">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="expert_sub_project_type">Sub-Project Type</label>
                                                                <select name="expert_sub_project_type" id="expert_sub_project_type" class="form-control">
                                                                    <option value="">Select Sub-Project Type</option>
                                                                    <option value="House Contruction/Renovation">House Contruction/Renovation</option>
                                                                    <option value="Road Contruction/Renovation">Road Contruction/Renovation</option>
                                                                    <option value="Farming">Farming</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="expert_duration_in_week">Enter Expected Project Duration In Weeks (Max 52)</label>
                                                                <input type="text" class="form-control"
                                                                    id="expert_duration_in_week" placeholder="Example: 52" name="expert_duration_in_week">
                                                            </div>
                                                            <div class="form-group col-12">
                                                                <label for="expert_hours_in_daily">Enter Daily Project Hours (Max 24)</label>
                                                                <input type="text" class="form-control"
                                                                    id="expert_hours_in_daily" placeholder="Example: 24" name="expert_hours_in_daily">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            {{-- Remote Expert Advice On Item/Service To Be Purchased --}}
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control"
                                                    id="inputAddress" placeholder="1234 Main St" name="address">
                                            </div>
                                            <div class="form-group col-12">
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
                                            <div class="video">
                                                <label for="inputVideo">Video</label>
                                                <input type="text" name="video_link" id="inputVideo" class="form-control" placeholder="URL to embeded supported service">
                                            </div>
                                            <div class="live_link">
                                                <label for="inputLivelink">Live Link</label>
                                                <input type="text" name="live_link" id="inputLivelink" class="form-control" placeholder="The Live link feed URL">
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
                                                <button type="submit" class="btn--base w-100">Save</button>
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
    $(document).ready(function(){
        makeShowHide();
    });
     $("select[name=project_type]").change(function(){
        makeShowHide();
    });
    function makeShowHide(){
        var project_type = $("select[name=project_type] :selected").val();
            const div1 = document.getElementById('div1');
            const div2 = document.getElementById('div2');
            const div3 = document.getElementById('div3');
            if (project_type === '1') {
                div1.style.display = '';
                div2.style.display = 'none';
                div3.style.display = 'none';
            } else if (project_type === '2') {
                div1.style.display = 'none';
                div2.style.display = '';
                div3.style.display = 'none';
            } else if (project_type === '3') {
                div1.style.display = 'none';
                div2.style.display = 'none';
                div3.style.display = '';
            }
    }

</script>
@endpush
