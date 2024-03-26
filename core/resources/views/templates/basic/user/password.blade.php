@extends($activeTemplate.'layouts.dashboard')

@section('content')
    <div class="body-wrapper">

        <div class="table-content">
            <div class="row">
                <div class="header-title">
                    <div class="top-title">
                        <h3> <span>Welcome Back,</span>{{auth()->user()->fullname }}</h3>
                    </div>
                </div>

                <div class="card-1">
                    <div class="row form-area">
                        <div class="col-lg-9 col-md-10 col-12">
                            <div class="form-area-tab">
                                <div class="user-text pb-4">
                                    <h4>Change Password</h4>
                                </div>
                                <form action="" method="POST" role="form">
                                    @csrf
                                        <div class="col-xl-12 form-group mb-20">
                                            <label class="mb-3">Current Password*</label>
                                            <input type="password"  name="current_password" class="form-control">
                                        </div>
                                        <div class="col-xl-12 form-group mb-20">
                                            <label class="mb-3">New Password*</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="col-xl-12 form-group mb-20">
                                            <label class="mb-3">Confirm Password*</label>
                                            <input type="password" name="password_confirmation" class="form-control">
                                        </div>
                                        <div class="col-xl-12 form-group mb-20">
                                            <button type="submit"
                                                class="btn--base mt-4 w-100">change</button>
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

