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
   
    <li class="sidebar-item">
        <a href="{{ route('admin.teacher.index') }}" class='sidebar-link'>
            <i data-feather="user" width="20"></i>
            <span>Teachers</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('admin.technology.index') }}" class='sidebar-link'>
            <i data-feather="user" width="20"></i>
            <span>Technology</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('admin.management.index') }}" class='sidebar-link'>
            <i data-feather="user" width="20"></i>
            <span>Management</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('admin.gallery.index') }}" class='sidebar-link'>
            <i data-feather="image" width="20"></i>
            <span>Gallery</span>
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