<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link">
                    <i class="bi bi-grid"></i>
                    <h5>Dashboard</h5>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link " href="{{ url('admin/users') }}">
                    <i class="bi bi-circle"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('admin/role') }}">
                    <i class="bi bi-circle"></i>
                    <span>Role</span>
                </a>
            </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('admin/category') }}">
                <i class="bi bi-circle"></i>
                <span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('admin/sub_category') }}">
                <i class="bi bi-circle"></i>
                <span>subCategory</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ url('admin/product') }}">
                <i class="bi bi-circle"></i>
                <span>Product</span>
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">
                    <i class="bi bi-box-arrow-right text-danger "></i>
                    <span>Logout</span>
                </a>
            </li>
    </ul>

</aside><!-- End Sidebar-->