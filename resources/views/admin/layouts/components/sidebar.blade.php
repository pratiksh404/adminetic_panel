<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('home') }}">
                <img class="img-fluid for-light"
                    src="{{ asset(isset($setting->logo) ? 'storage/' . $setting->logo : 'static/logo.png') }}"
                    alt="Light Logo">
                <img class="img-fluid for-dark"
                    src="{{ asset(isset($setting->logo_dark) ? 'storage/' . $setting->logo_dark : 'static/logo_dark.png') }}"
                    alt="Dark Logo">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('home') }}"><img class="img-fluid"
                    src="{{ asset(isset($setting->favicon) ? 'storage/' . $setting->favicon : 'static/favicon.png') }}"
                    alt="favicon"></a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('home') }}"><img class="img-fluid"
                                src="{{ asset(isset($setting->favicon) ? 'storage/' . $setting->favicon : 'static/favicon.png') }}"
                                alt="favicon"></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                            <p class="lan-2">Admininstration Control</p>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                            href="{{ route('home') }}"><i data-feather="home"> </i><span>Dashboard</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
