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
                                            <div
                                                class="form-group col-lg-4 col-md-4 col-sm-6 col-6 duration">
                                                <label for="inputDuration">Choose
                                                    Duration</label>
                                                    <select id="inputDuration" name="duration" class="form-control">
                                                    <option selected value="1">1 Day</option>
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
                                                    <option value="31">31 Days</option>
                                                    <option value="32">32 Days</option>
                                                    <option value="33">33 Days</option>
                                                    <option value="34">34 Days</option>
                                                    <option value="35">35 Days</option>
                                                    <option value="36">36 Days</option>
                                                    <option value="37">37 Days</option>
                                                    <option value="38">38 Days</option>
                                                    <option value="39">39 Days</option>
                                                    <option value="40">40 Days</option>
                                                    <option value="41">41 Days</option>
                                                    <option value="42">42 Days</option>
                                                    <option value="43">43 Days</option>
                                                    <option value="44">44 Days</option>
                                                    <option value="45">45 Days</option>
                                                    <option value="46">46 Days</option>
                                                    <option value="47">47 Days</option>
                                                    <option value="48">48 Days</option>
                                                    <option value="49">49 Days</option>
                                                    <option value="50">50 Days</option>
                                                    <option value="51">51 Days</option>
                                                    <option value="52">52 Days</option>
                                                    <option value="53">53 Days</option>
                                                    <option value="54">54 Days</option>
                                                    <option value="55">55 Days</option>
                                                    <option value="56">56 Days</option>
                                                    <option value="57">57 Days</option>
                                                    <option value="58">58 Days</option>
                                                    <option value="59">59 Days</option>
                                                    <option value="60">60 Days</option>
                                                </select>
                                            </div>
                                            <div
                                                class="multi_modal verification col-lg-4 col-md-4 col-sm-12 col-12">
                                                <label for="multi_modal" class="v_title">Verification Type</label>
                                                <select id="multi_modal" name="verification_type[]" multiple>
                                                    <option value="legal">Legal</option>
                                                    <option value="video">Video</option>
                                                    <option value="picture">Picture</option>
                                                </select>
                                            </div>

                                        </div>
                                        <button type="submit"
                                            class="btn--base btn--base-e w-100">Submit</button>
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
