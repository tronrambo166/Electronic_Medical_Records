@php
$socialIcons =  getContent('social_icon.element',false,'',1);
$footer = getContent('footer.content', true)->data_values;
@endphp
<div class="sidebar">
    <div class="sidebar__inner">
        <div class="sidebar-top-inner">
            <div class="sidebar__logo text-center">
                <a href="{{ route('home') }}" class="sidebar__main-logo">
                    <img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="logo">
                </a>
                <div class="navbar__left">
                    <button class="sidebar-mobile-menu text-white">
                        <i class="las fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar__menu-wrapper">
                <ul class="sidebar__menu p-0">
                    <li class="sidebar-menu-item {{ menuActive('user.home') }}">
                        <a href="{{ route('user.home') }}">
                            <i class="menu-icon las la-home"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ menuActive('user.property.message') }}">
                        <a href="{{ route('user.property.message') }}">
                            <i class="menu-icon las la-envelope"></i>
                            <span class="menu-title">Message</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item {{ menuActive('user.property.add') }}">
                        <a href="{{ route('user.property.add') }}">
                            <i class="menu-icon las la-plus-circle"></i>
                            <span class="menu-title">Add Project</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ menuActive('user.my.listing.list') }}">
                        <a href="{{ route('user.my.listing.list') }}">
                            <i class="menu-icon lab la-buffer"></i>
                             <span class="menu-title">My Projects</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ menuActive('user.diligence.list') }}">
                        <a href="{{ route('user.diligence.list') }}">
                            <i class="menu-icon las la-eye"></i>
                            <span class="menu-title">Due Diligence</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-menu-item {{ menuActive('user.remotevip.list') }}">
                        <a href="{{ route('user.remotevip.list') }}">
                            <i class="menu-icon las la-award"></i>
                            <span class="menu-title">Request VIP</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>

    </div>
</div>
