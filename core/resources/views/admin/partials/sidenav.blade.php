<div class="sidebar__inner">
    <div class="sidebar__logo">
        <a href="{{ route('admin.dashboard') }}" class="sidebar__main-logo">
            <img src="{{ getImage(imagePath()['logoIcon']['path'].'/logo.png', '?'.time()) }}" white-img="{{ getImage(imagePath()['logoIcon']['path'].'/logo.png', '?'.time()) }}"
            dark-img="{{ getImage(imagePath()['logoIcon']['path'].'/whiteLogo.png', '?'.time()) }}" alt="logo">
        </a>
        <a href="{{ route('admin.dashboard') }}" class="sidebar__logo-shape">
            <img src="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png') }}" alt="square-logo">
        </a>
    </div>
    <div class="sidebar__menu-wrapper">
        <ul class="sidebar__menu">
            <li class="sidebar__menu-header">DEFUALT</li>
            <li class="sidebar-menu-item {{menuActive('admin.dashboard')}}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="menu-icon las la-home"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-menu-item sidebar-dropdown">
                <a href="javascript:void(0)">
                    <i class="menu-icon las la-user-edit"></i>
                    <span class="menu-title"> User Care</span>
                    <div class="sidebar-item-badge">
                        @if($users_count)
                        @php
                            $unverified =  $banned_users_count;
                        @endphp
                        <span>{{$unverified}}</span>
                        @else
                        <span>0</span>
                         @endif
                    </div>
                </a>
                <ul class="sidebar-submenu">


                    <li class="sidebar-menu-item {{menuActive('admin.users.active')}}">
                        <a href="{{route('admin.users.active')}}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Active Users</span>
                            <div class="sidebar-item-badge style">
                                @if($active_users_count)
                                <span>{{$active_users_count}}</span>
                                @else
                                <span>0</span>
                                 @endif
                            </div>
                        </a>
                    </li>


                    <li class="sidebar-menu-item {{menuActive('admin.users.all')}}">
                        <a href="{{ route('admin.users.all') }}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">All Users</span>
                            <div class="sidebar-item-badge">
                                @if($users_count)
                                <span>{{$users_count}}</span>
                                @else
                                <span>0</span>
                                 @endif
                            </div>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{menuActive('admin.users.email.all')}}">
                        <a href="{{ route('admin.users.email.all') }}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Email To Users</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{menuActive('admin.users.banned')}}">
                        <a href="{{route('admin.users.banned')}}" class="nav-link ">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Banned Users</span>
                            <div class="sidebar-item-badge style">
                                @if($banned_users_count)
                                <span>{{$banned_users_count}}</span>
                                @else
                                <span>0</span>
                                 @endif
                            </div>

                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar__menu-header">Manage Due Diligence</li>
            <li class="sidebar-menu-item {{menuActive('admin.diligence.list')}}">
                <a href="{{ route('admin.diligence.list') }}">
                    <i class="menu-icon las la-eye"></i>
                    <span class="menu-title">Due Diligence</span>
                </a>
            </li>
            <li class="sidebar__menu-header">Request VIP Remote Monitoring</li>
            <li class="sidebar-menu-item {{menuActive('admin.remotevip.list')}}">
                <a href="{{ route('admin.remotevip.list') }}">
                    <i class="menu-icon las la-award"></i>
                    <span class="menu-title">VIP Remote</span>
                </a>
            </li>
            <li class="sidebar__menu-header">Setup Web Content</li>
            <li class="sidebar-menu-item sidebar-dropdown">
                <a href="javascript:void(0)" class="{{menuActive('admin.frontend.sections*',3)}}">
                    <i class="menu-icon las la-terminal"></i>
                    <span class="menu-title">Setup Section</span>
                </a>

                    <ul class="sidebar-submenu {{menuActive('admin.frontend.sections*',2)}}">
                        @php
                           $lastSegment =  collect(request()->segments())->last();

                        @endphp
                            @foreach(getPageSections(true) as $k => $secs)
                            <li class="sidebar-menu-item @if($lastSegment == $k) active @endif">
                                @if($secs['builder'])
                                <a href="{{ route('admin.frontend.sections',$k) }}" class="nav-link">
                                    <i class="menu-icon las la-dot-circle"></i>
                                    <span class="menu-title">{{__($secs['name'])}}</span>
                                </a>
                                @endif
                            </li>
                            @endforeach

                    </ul>

            </li>
            <li class="sidebar-menu-item {{menuActive('admin.seo')}}">
                <a href="{{ route('admin.seo') }}">
                    <i class="menu-icon las la-globe"></i>
                    <span class="menu-title">Setup SEO</span>
                </a>
            </li>
            <li class="sidebar__menu-header">Settings</li>
            <li class="sidebar-menu-item sidebar-dropdown">
                <a href="javascript:void(0)">
                    <i class="menu-icon las la-cog"></i>
                    <span class="menu-title">Web Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li class="sidebar-menu-item {{menuActive('admin.setting.index')}}">
                        <a href="{{ route('admin.setting.index') }}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Basic Settings</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{menuActive('admin.setting.logo.icon')}}">
                        <a href="{{ route('admin.setting.logo.icon') }}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Image Assets</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="sidebar__menu-header">NOTIFY SETTINGS</li>
            <li class="sidebar-menu-item sidebar-dropdown">
                <a href="javascript:void(0)" class="">
                    <i class="menu-icon las la-envelope-open-text"></i>
                    <span class="menu-title">Setup Email</span>
                </a>
                <ul class="sidebar-submenu ">
                    <li class="sidebar-menu-item {{menuActive('admin.email.template.global')}}">
                        <a href="{{ route('admin.email.template.global') }}" class="nav-link">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Default Template</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item {{menuActive('admin.email.template.setting')}}">
                        <a href="{{ route('admin.email.template.setting') }}" class="nav-link ">
                            <i class="menu-icon las la-dot-circle"></i>
                            <span class="menu-title">Email Method</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-menu-item {{menuActive('admin.setting.optimize')}}">
                <a href="{{ route('admin.setting.optimize') }}">
                    <i class="menu-icon las la-broom"></i>
                    <span class="menu-title">Clear Cache</span>
                </a>
            </li>
        </ul>
    </div>
</div>
