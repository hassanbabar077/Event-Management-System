<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <h1 class="display-6 mt-5">Event Management System</h1>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>


    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
       @if (Auth::guard('web')->check())
       <li class="menu-item">
        <a href="{{ route('admin.services') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dish"></i>
            <div data-i18n="Authentications">Services</div>
        </a>
    </li>
       @endif


        <li class="menu-item">


            <a href="{{route('admin.events')}}" class="menu-link">

                <i class="menu-icon tf-icons bx bx-dish"></i>
                <div data-i18n="Authentications">Events</div>
            </a>
        </li>
        <li class="menu-item">


            <a href="{{route('admin.event-type')}}" class="menu-link">

                <i class="menu-icon tf-icons bx bx-dish"></i>
                <div data-i18n="Authentications">Event Type</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.queries') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dish"></i>
                <div data-i18n="Misc">Query</div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li>
    </ul>

</aside>
