<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        {{-- Starter Pages --}}
        @php $dashboard = (Route::is('home') ? true : false) @endphp
        <li class="nav-item {{ ($dashboard ? 'menu-open' : '') }}">
            <a href="#" class="nav-link {{ ($dashboard ? 'active' : '') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Starter Pages
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ (Route::is('home') ? 'active' : '') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Users --}}
        @php $users = (Route::is('users.*') ? true : false) @endphp
        <li class="nav-item {{ ($users ? 'menu-open' : '') }}">
            <a href="#" class="nav-link {{ ($users ? 'active' : '') }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Users
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- Users List --}}
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link {{ (Route::is('users.index') ? 'active' : '') }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Users List</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- Simple Link --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Simple Link
                    <span class="right badge badge-danger">New</span>
                </p>
            </a>
        </li>
    </ul>
</nav>
