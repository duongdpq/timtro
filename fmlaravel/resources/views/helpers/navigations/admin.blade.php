<div class="admin-navigation">
    <div class="admin-navigation-inner">
        <nav>
            <ul class="menu">
                <li class="avatar">
                    <a href="#">
                        <img src="{{{ URL::asset('assets/img/tmp/agents/female.jpg') }}}" alt="">

                        <span class="avatar-content">
                            <span class="avatar-title">Lisa Peterson</span>
                            <span class="avatar-subtitle">Project Manager</span>
                        </span><!-- /.avatar-content -->
                    </a>
                </li>

                <li class="@if ($active_menu == 'admin-dashboard') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-dashboard', null, false)) }}}"><strong><i class="fa fa-dashboard"></i></strong> <span>Dashboard</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-properties') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-properties', null, false)) }}}"><strong><i class="fa fa-building"></i></strong> <span>Properties</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-property-browser') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-property-browser', null, false)) }}}"><strong><i class="fa fa-th-list"></i></strong> <span>Property Browser</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-agencies') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-agencies', null, false)) }}}"><strong><i class="fa fa-briefcase"></i></strong> <span>Agencies</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-gallery') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-gallery', null, false)) }}}"><strong><i class="fa fa-file"></i></strong> <span>Media Files</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-map') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-map', null, false)) }}}"><strong><i class="fa fa-globe"></i></strong> <span>Google Map</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-people') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-people', null, false)) }}}"><strong><i class="fa fa-users"></i></strong> <span>People</span></a>
                </li>

                <li class="@if ($active_menu == 'admin-property-add') active @endif">
                    <a href="{{{ str_replace('/', '', route('admin-property-add', null, false)) }}}"><strong><i class="fa fa-pencil"></i></strong> <span>Add Property</span></a>
                </li>

                <li>
                    <a href="{{{ str_replace('/', '', route('admin-login', null, false)) }}}"><strong><i class="fa fa-sign-out"></i></strong> <span>Logout</span></a>
                </li>
            </ul>
        </nav>
        
        <div class="projects">
            <h2>Projects</h2>

            <ul>
                <li class="orange"><a href="#">Web Analytics</a></li>
                <li class="green"><a href="#">Custom Development</a></li>
                <li class="lime"><a href="#">Property Filtering</a></li>
                <li class="deep-orange"><a href="#">Social Marketing</a></li>
                <li class="yellow"><a href="#">Agents Management</a></li>
            </ul>
        </div><!-- /.projects -->
        <div class="layer"></div>
    </div><!-- /.admin-navigation-inner -->
</div><!-- /.admin-navigation -->
