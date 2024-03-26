@extends($activeTemplate.'layouts.dashboard')
@section('content')
<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">
                <div class="top-title">
                    <h3> <span>Welcome Back,</span>{{ $user->fullname??'John Danals' }}</h3>
                </div>
            </div>
            <div>
                <div class="p-4 card-user mt-30 mb-40">
                    <div class="row g-5 d-flex justify-content-center">
                        <div class="col-lg-4 col-md-12 col-12">
                            <img class=" d-block mx-auto avater" src="{{ getImage(imagePath()['profile']['user']['path'].'/'.$user->image,imagePath()['profile']['user']['size'])}}"
                                alt="" height="200" width="200">
                            <div>
                                <div
                                    class="d-flex justify-content-between mt-4 rounded-2 p-2 user-card">
                                    <p class=" m-0 fw-bold">Name:</p>
                                    <p class=" m-0 ">{{ $user->fullname??'John Danals' }}</p>
                                </div>
                                <div
                                    class="d-flex justify-content-between mt-4 rounded-2 p-2 user-card">
                                    <p class=" m-0 fw-bold">Username:</p>
                                    <p class=" m-0 ">{{ $user->username??'' }}</p>
                                </div>
                                <div
                                    class="d-flex justify-content-between mt-4 rounded-2 p-2 user-card">
                                    <p class=" m-0 fw-bold">Email:</p>
                                    <p class=" m-0 "> {{ $user->email??'' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-12 pt-4">
                            <form action="" method="POST" class="form-dashboard user-form" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-4k">
                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label for="firstname" class="form-label ">First Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                            value="{{ $user->firstname??'' }}">
                                    </div>
                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label for="lastname" class="form-label ">Last Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                            value="{{ $user->lastname??'' }}">
                                    </div>
                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label for="email" class="form-label ">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            value="{{ $user->email??'' }}" disabled>
                                    </div>
                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label for="username" class="form-label ">Username<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            value="{{ $user->username??'' }}" disabled>
                                    </div>

                                    {{-- <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label class="">Country<span
                                                class="text-danger">*</span></label>
                                        <div>
                                            <div class="form-item">
                                                <input id="country_selector" type="text"
                                                    class="form-control w-100" name="country" value="{{ $user->address->country??"" }}">
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
                                    </div> --}}

                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4">
                                        <label for="mobile" class="form-label ">Mobile Number <span class="text-primary">(Please enter with country dial code)</span><span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="mobile" class="form-control" value="{{ $user->mobile }}">
                                    </div>
                                    <div class="mb-4 col-lg-6 col-md-6 col-12 pe-4 ml-auto">
                                        <label for="image" class="form-label ">Image<span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="image" class=""
                                            accept="image/*" data-height="150">
                                    </div>
                                    <div class="my-3 col-12">
                                        <button type="submit" class="btn--base w-100">Save</button>
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


@endsection


@push('script')


@endpush
