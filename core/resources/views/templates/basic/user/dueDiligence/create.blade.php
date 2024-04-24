@extends($activeTemplate.'layouts.dashboard')

@section('content')
<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">

                <!-- table -->
                <div class="table-area">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="table-area">
                                <table class="custom-table">
                                    <tbody>
                                        <tr>
                                            <th class="main_title"><i class="las la-eye"></i> Due
                                                Diligence</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="information">
                                        <div class="row">
                                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-6">
                                                <label for="inputListing">Choose Project</label>
                                                <select id="inputListing" name="project" class="form-control">
                                                    <option value="">Select Project</option>
                                                   @foreach($properties as $key => $property)
                                                   <option value="{{ $property->id }}">{{ $property->title }}</option>
                                                   @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group col-lg-3 col-md-3 col-sm-6 col-6">
                                                <label for="inputListing">Project Manager</label>
                                                <select id="inputListing" name="project" class="form-control">
                                                    <option value="">Select Project</option>
                                                   @foreach($managers as $key => $man)
                                                   <option value="{{ $property->id }}">{{ $man->username }}</option>
                                                   @endforeach

                                                </select>
                                            </div>

                                            <div
                                                class="form-group col-lg-5 col-md-5 col-sm-6 col-6 duration">
                                                <label for="inputDuration">Choose
                                                    Duration</label>
                                                    <select style="width:30%;" id="inputDuration" name="day" class="form-control d-inline">
                                                        <option selected value="1">0 Day</option>
                                                    <option  value="1">1 Day</option>
                                                    <option value="2">2 Days</option>
                                                    <option value="3">3 Days</option>
                                                    <option value="4">4 Days</option>
                                                    <option value="5">5 Days</option>
                                                    <option value="6">6 Days</option>
                                                    <option value="7">7 Days</option>
                                                    <option value="8">8 Days</option>
                                                    <option value="9">9 Days</option>
                                                    <option value="10">10 Days</option>
                                                    <option value="11">11 Days</option>
                                                    <option value="12">12 Days</option>
                                                    <option value="13">13 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="15">15 Days</option>
                                                    <option value="16">16 Days</option>
                                                    <option value="17">17 Days</option>
                                                    <option value="18">18 Days</option>
                                                    <option value="19">20 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="22">22 Days</option>
                                                    <option value="23">23 Days</option>
                                                    <option value="24">24 Days</option>
                                                    <option value="25">25 Days</option>
                                                    <option value="26">26 Days</option>
                                                    <option value="27">27 Days</option>
                                                    <option value="28">28 Days</option>
                                                    <option value="29">29 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>

                                                <select style="width:30%;" id="inputDuration" name="week" class="form-control d-inline">
                                                    <option selected value="0">0 Week</option>
                                                    <option  value="1">1 Week</option>
                                                    <option value="2">2 Weeks</option>
                                                    <option value="3">3 Weeks</option>
                                                    <option value="4">4 Weeks</option>
                                                    <option value="5">5 Weeks</option>
                                                    <option value="6">6 Weeks</option>
                                                </select>

                                                <select style="width:30%;" id="inputDuration" name="month" class="form-control d-inline">
                                                    <option selected value="0">0 Month</option>
                                                    <option  value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                    <option value="3">3 Months</option>
                                                    <option value="4">4 Months</option>
                                                    <option value="5">5 Months</option>
                                                    <option value="6">6 Months</option>
                                                </select>
                                            </div>

                                            
                                <div
                                    class="multi_modal verification col-lg-3 col-md-3 col-sm-12 col-12">
                                    <label for="multi_modal" class="v_title">Verification Type</label>
                                    <select id="multi_modal" name="verification_type[]" multiple>
                                        <option value="legal">Legal</option>
                                        <option value="video">Video</option>
                                        <option value="Photo">Photo</option>
                                        <option value="Request VIP" class="w-50">Request VIP (360 live <br> monitoring with accessible URL)</option>
                                        
                                    </select>
                                </div>


                                            <div
                                                class="multi_modal verification col-lg-2 col-md-2 col-sm-12 col-12">
                                                <label for="multi_modal" class="v_title">Frequency of Updates</label>
                                                <select id="FOU" name="FOU" class="form-control">
                                                    <option selected value="1">1 Day</option>
                                                    <option value="Hourly updates">Hourly updates</option>
                                                    <option value="Daily updates">Daily updates</option>
                                                    <option value="Weekly updates">Weekly updates</option>
                                                    <option value="Bi-Weekly updates">Bi-Weekly updates</option>
                                                    <option value="Monthly updates">Monthly updates</option>
                                                    <option value="Quarterly updates">Quarterly updates</option>
                                                    
                                                </select>
                                            </div>

                                        </div>
                                        <button type="submit"
                                            class="mt-4 btn--base btn--base-e w-100">Submit</button>
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
<script src="{{asset($activeTemplateTrue.'/')}}/js/jquery.multi-select.min.js"></script>
 <script type="text/javascript">
    $(function(){
        $('#multi_modal').multiSelect({
            'modalHTML': '<div class="multi-select-modal">'
        });
    });
    </script>

@endpush
