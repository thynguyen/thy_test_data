<!--begin::Container-->
<div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a>
        </li>
    </ul>
    <!--end::Start Navbar Links--><!--begin::End Navbar Links-->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img src="{{ asset('admin/assets/images/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image" />
                <span class="d-none d-md-inline">{{ auth()->user()->full_name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                    <img src="{{ asset('admin/assets/images/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image" />
                </li>
                
                <li class="user-footer">
                    @if(isset($configRate['value']))
                    <p style="float: left; padding: 9px 0px; color: green;">1 USD - {{ number_format($configRate['value']) }} VNĐ</p>
                    @endif
                    <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
            </ul>
        </li>
        <!--end::User Menu Dropdown-->
    </ul>
    <!--end::End Navbar Links-->
</div>
