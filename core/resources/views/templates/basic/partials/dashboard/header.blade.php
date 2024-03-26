
<nav class="navbar-wrapper">
    <div class="navbar-wrapper-area">
        <div class="dashboard-title-part d-flex">
            <div class="navbar__left my-auto">
                <button class="navbar__expand ps-0 pe-3">
                    <i class="las fa-bars"></i>
                </button>
            </div>
            <h4 class="title">Dashboard</h4>
        </div>
        <div class="navbar__right d-flex">

            <ul class="navbar__action-list" style="list-style: none;">
                <li class="dropdown">
                    <button type="button" class="" data-bs-toggle="dropdown" data-display="static"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="navbar-user">
                            <span class="navbar-user__thumb"><img
                                    src="{{ getImage(imagePath()['profile']['user']['path'].'/'.auth()->user()->image,imagePath()['profile']['user']['size'])}}" alt="user"></span>
                            <span class="navbar-user__info">
                                <span class="navbar-user__name">{{ auth()->user()->fullname }}</span>
                            </span>
                            <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                        </span>
                    </button>
                    <div
                    class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="{{ route('home') }}"
                        class="dropdown-menu__item d-flex align-items-center ps-3 pe-3 pt-2 pb-2">
                        <i class="dropdown-menu__icon  las la-globe"></i>
                        <span class="dropdown-menu__caption">Website</span>
                    </a>
                    <a href="{{ route('user.profile.setting') }}"
                        class="dropdown-menu__item d-flex align-items-center ps-3 pe-3 pt-2 pb-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>
                    <a href="{{ route('user.change.password') }}"
                        class="dropdown-menu__item d-flex align-items-center ps-3 pe-3 pt-2 pb-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>
                    <a href="{{ route('user.logout') }}"
                        class="dropdown-menu__item d-flex align-items-center ps-3 pe-3 pt-2 pb-2">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                </li>
            </ul>
            <div class="listing">
                <a href="{{ route('user.property.add') }}" class="btn listing_btn live_btn hovertext" data-hover="Add Listing"> <span
                        class="add">Add Project</span> <i class="las la-plus-circle"></i></a>
            </div>
        </div>
    </div>
</nav>
