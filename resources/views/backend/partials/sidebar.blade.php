<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        {{ auth()->user()->last_name ?? '' }}
        <svg class="sidebar-brand-full" width="118" height="46" alt="{{ config('app.name') }} Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="{{ config('app.name') }} Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/listings') }}">
                <div class="nav-icon">
                    <i class="fa-solid fa-desktop"></i>
                </div>
                Job Listings
                <span class="badge badge-sm bg-info ms-auto">NEW</span>
            </a>
        </li>
        
        @can('is-admin')
        <li class="nav-title">User Management</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <div class="nav-icon">
                    <i class="fa-solid fa-book"></i>
                </div> Users
            </a>
            <ul class="nav-group-items">
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users.index') }}">
                        <span class="nav-icon">
                            <i class="fas fa-users"></i>
                        </span> Users
                    </a>
                </li>

               <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.roles.index') }}">
                        <span class="nav-icon">
                            <i class="fas fa-user-lock"></i>
                        </span> Roles
                    </a>
                </li>

            </ul>
        </li>
        @endcan

        <li class="nav-divider"></li>
        <li class="nav-title">Others</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Main Category</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"></span> Sub Category
                    </a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"></span> Sub Category
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"></span> Sub Category
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item mt-auto">
            <a class="nav-link" href="https://coreui.io/docs/templates/installation/" target="_blank">
                <div class="nav-icon">
                    <i class="fa-solid fa-book"></i>
                </div> Docs
            </a>
        </li>
        
        </a></li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>