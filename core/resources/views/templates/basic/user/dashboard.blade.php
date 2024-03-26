@extends($activeTemplate.'layouts.dashboard')

@section('content')

<div class="body-wrapper">

    <div class="table-content">
        <div class="row">
            <div class="header-title">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="dashbord-user dCard-1">
                            <div class="dashboard-content">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <div class="top-content">
                                            <h3>Total Projects</h3>
                                        </div>
                                        <div class="user-count">
                                            <span class="text-uppercase">{{ @$properties }}</span>
                                        </div>
                                    </div>
                                    <div class="icon">
                                        <i class="lab la-buffer"></i>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="{{ route('user.my.listing.list') }}" class="icon-bottom">
                                        <p class="text-center">View</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
@endsection

