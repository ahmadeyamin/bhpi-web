<ul class="menu">
    <li class='sidebar-title'>Main Menu</li>
    <li class="sidebar-item  ">
        <a href="{{ route('home') }}" class='sidebar-link'>
            <i data-feather="home" width="20"></i>
            <span>Dashboard</span>
        </a>
    </li>
   
   
    <li class="sidebar-item">
        <a href="{{ route('admin.notice.index') }}" class='sidebar-link'>
            <i data-feather="package" width="20"></i>
            <span>Notices</span>
        </a>
    </li>
   
    {{-- <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i data-feather="triangle" width="20"></i>
            <span>Components</span>
        </a>
        <ul class="submenu">
            <li>
                <a href="component-alert.html">Alert</a>
            </li>

        </ul>
    </li> --}}
</ul>