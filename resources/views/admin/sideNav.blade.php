<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a href="{{ url('admin/dashboard') }}"
               class="nav-link {{ request()->is('admin/dashboard') ? '' : 'collapsed' }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @php
            $rbacActive = request()->is('admin/users*') || request()->is('admin/role*');
        @endphp

        <li class="nav-item">
            <a class="nav-link {{ $rbacActive ? '' : 'collapsed' }}" data-bs-target="#rbac-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shield-lock"></i>
                <span>RBAC</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="rbac-nav" class="nav-content collapse {{ $rbacActive ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('admin/users') }}" class="{{ request()->is('admin/users*') ? 'active' : '' }}">
                        <i class="bi bi-person"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/role') }}" class="{{ request()->is('admin/role*') ? 'active' : '' }}">
                        <i class="bi bi-key"></i>
                        <span>Role</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/category*') ? '' : 'collapsed' }}" href="{{ url('admin/category') }}">
                <i class="bi bi-tags"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/sub_category*') ? '' : 'collapsed' }}" href="{{ url('admin/sub_category') }}">
                <i class="bi bi-diagram-3"></i>
                <span>Sub Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin/product*') ? '' : 'collapsed' }}" href="{{ url('admin/product') }}">
                <i class="bi bi-box-seam"></i>
                <span>Product</span>
            </a>
        </li>
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed text-danger" href="{{ url('logout') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>
</aside>