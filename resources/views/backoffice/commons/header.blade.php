<div id="page-header" class="bg-gradient-9">
    <div id="header-logo" class="logo-bg">
        <a href="index.html" class="logo-content-big" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="index.html" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                <img width="28" src="{{ url('assets/backoffice/images/admins/' . Auth::guard('admin')->user()->profile_picture) }}" alt="Profile image" style="background-color: white;width: 28px;height: 28px; object-fit: contain;">
                <span>{{ Auth::guard('admin')->user()->name }}</span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <img src="{{ url('assets/backoffice/images/admins/' . Auth::guard('admin')->user()->profile_picture) }}" alt="" style="object-fit: contain;">
                        </div>
                        <div class="user-info">
                            <span>
                                {{ Auth::guard('admin')->user()->name}}
                                <!-- <i>UX/UI developer</i> -->
                            </span>
                            <!-- <a href="#" title="Edit profile">Editar perfil</a> -->
                            <!--<a href="#" title="View notifications">Ver notificaciones</a>-->
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="{{ route('admin.logout') }}" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->
</div>