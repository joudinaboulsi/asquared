<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home_path')}}" class="app-brand-link">
        
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="../img/logo.png" width="100"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ (\Request::route()->getName() == 'seo') ? 'active' : '' }}">
            <a href="{{route('seo')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Seo</div>
            </a>
        </li>

        <!-- Layouts -->
      
        <li class="menu-item {{ (\Request::route()->getName() == 'sections') ? 'active' : '' }}">
            <a href="{{route('sections')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Sections Content</div>
            </a>

        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'homeCms') ? 'active' : '' }}">
            <a href="{{route('homeCms')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Home</div>
            </a>
        
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'about') ? 'active' : '' }}">
            <a href="{{route('about')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">About</div>
            </a>
        
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'categories') ? 'active' : '' }}">
            <a href="{{route('categories')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Categories</div>
            </a>
         
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'portfolio') ? 'active' : '' }}">
            <a href="{{route('portfolio')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Portfolio</div>
            </a>
        
        </li>
        <li class="menu-item {{ (\Request::route()->getName() == 'clients') ? 'active' : '' }}">
            <a href="{{route('clients')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Clients</div>
            </a>
        
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
    
        <!-- User interface -->
        <li class="menu-item {{ (\Request::route()->getName() == 'settings') ? 'active' : '' }}">
            <a href="{{route('settings')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">Settings</div>
            </a>
         
        </li>

        <!-- Extended components -->
     <li class="menu-item {{ (\Request::route()->getName() == '') ? 'active' : '' }}">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="menu-link">
            <i class="menu-icon tf-icons bx bx-collection"></i>
            <div data-i18n="Basic">Logout</div>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

    </ul>
</aside>