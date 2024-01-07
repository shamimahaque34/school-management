<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('dashboard') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('/') }}backend/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('/') }}backend/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Menu Options</li>
            <li class="side-nav-item {{ request()->is('dashboard') ? 'menuitem-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Only for admin</li>

            <li class="side-nav-item {{ request()->is('admin/permissions*') ? 'menuitem-active' : '' }} {{ request()->is('admin/roles*') ? 'menuitem-active' : '' }} ">
                <a data-bs-toggle="collapse" href="#userRolePermission" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> User Management </span>
                </a>
                <div class="collapse" id="userRolePermission">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/permissions*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('permissions.index') }}" class="{{ request()->is('admin/permission') || request()->is('admin/permissions/*') ? 'active' : '' }}">Permission</a>
                        </li>
                        <li class="{{ request()->is('admin/roles*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('roles.index') }}" class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">Role</a>
                        </li>
                        
                    </ul>
                </div>
            </li>


            <li class="side-nav-item {{ request()->is('admin/teachers*') ? 'menuitem-active' : '' }} {{ request()->is('admin/students*') ? 'menuitem-active' : '' }} ">
                <a data-bs-toggle="collapse" href="#studentTeacher" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> School Management </span>
                </a>
                <div class="collapse" id="studentTeacher">
                    <ul class="side-nav-second-level">
                        <li class="{{ request()->is('admin/teachers*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('teachers.index') }}" class="{{ request()->is('admin/teacher') || request()->is('admin/teachers/*') ? 'active' : '' }}">Teacher</a>
                        </li>
                        <li class="{{ request()->is('admin/students*') ? 'menuitem-active' : '' }}">
                            <a href="{{ route('students.index') }}" class="{{ request()->is('admin/students') || request()->is('admin/students/*') ? 'active' : '' }}">Student</a>
                        </li>
                        
                    </ul>
                </div>
            </li>

           

            

        </ul>
    </div>
</li>


        </ul>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
