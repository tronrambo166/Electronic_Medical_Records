@php
    $socialIcons =  getContent('social_icon.element',false,'',1);
    $contact =  @getContent('contact_us.content',true)->data_values;
@endphp


 <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Top Section Start
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="top_section my-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-5 col-12">
                    <div class="live d-flex justify-content-start align-items-center">
                        <p>Your Eyes On The Ground</p>
                        <a href="#0" class="btn live_btn">Live</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-1 col-sm-1 col-1"></div>
                <div class="col-lg-5 col-md-7 col-sm-6 col-12">
                    <div class="account_part d-flex justify-content-end align-items-center">
                        <div class="account">
                            <img style="width: 40px; height:40px" src="{{ getImage(imagePath()['profile']['user']['path'].'/'.auth()->user()->image,imagePath()['profile']['user']['size'])}}" class="img-fluid rounded-circle" alt="rr">
                           <div class="dropdown">
                                <button class="dropbtn live_btn">My Account <i class="las la-angle-down"></i></button>
                                <div class="dropdown-content">
                                <a href="{{ route('user.home') }}"><i class="lar la-user"></i>Dashboard</a>
                                <a href="{{ route('user.change.password') }}"><i class="las la-lock"></i>  Password</a>
                                <a href="{{ route('user.logout') }}"><i class="las la-sign-out-alt"></i>  Logout</a>
                                </div>
                              </div>

                        </div>
                        <div class="listing ml-4">
                            <a href="{{ route('user.property.add') }}" class="btn listing_btn live_btn hovertext" data-hover="Add Listing"> <span
                                    class="add">Add Project</span> <i class="las la-plus-circle"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Top Section End
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
