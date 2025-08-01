<ul class="nav flex-column">
        <!-- Admin Sidebar Links -->
        @if(Auth::check() && Auth::user()->hasAnyRole(['admin', 'super-admin']))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('admin.dashboard') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-house-door me-2"></i>
                    <span class="nav-text">ADMIN DASHBOARD</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Users">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('admin.users.index') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('admin.users.index') }}">
                    <i class="bi bi-people me-2"></i>
                    <span class="nav-text">USERS</span>
                </a>
            </li>
            <!-- <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Manage Users">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('admin.manage-users') ? 'active bg-cyan text-white' : 'text-dark' }}" href="">
                    <i class="bi bi-tools me-2"></i>
                    <span class="nav-text">Manage Users</span>
                </a>
            </li> -->
        @endif

        @php
            $currentDepartment = session('active_department', Auth::user()->department);
        @endphp

        <!-- Inventory Sidebar Links -->
        @if(Auth::check() && $currentDepartment === 'stores' && (Auth::user()->hasRole('store') || Auth::user()->hasRole('super-admin')))
            <!-- Inventory menu items here -->
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Dashboard">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.dashboard') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.dashboard') }}">
                    <i class="bi bi-box me-2"></i>
                    <span class="nav-text">INVENTORY DASHBOARD</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Management">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.index') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.index') }}">
                    <i class="bi bi-list-check me-2"></i>
                    <span class="nav-text">Inventory</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Check-in">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.checkin.show') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.checkin.show') }}">
                    <i class="bi bi-arrow-down-square me-2"></i>
                    <span class="nav-text">Check-in</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Check-out">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.checkout') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.checkout') }}">
                    <i class="bi bi-arrow-up-square me-2"></i>
                    <span class="nav-text">Check-out</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Defectives">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.defective_items.index') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.defective_items.index') }}">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    <span class="nav-text">Defectives</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Returns">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.returns') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.returns') }}">
                    <i class="bi bi-arrow-repeat me-2"></i>
                    <span class="nav-text">Returns</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="New Stock">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.newstock') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.newstock') }}">
                    <i class="bi bi-plus-square me-2"></i>
                    <span class="nav-text">New Stock</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="For Hire">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.hires.index') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.hires.index') }}">
                    <i class="bi bi-box-seam me-2"></i>
                    <span class="nav-text">For Hire</span>
                </a>
            </li>
        @endif

        <!-- Global Navigation Links (Visible to All Users) -->
        @if(Auth::check())
           
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Manage Enquiries">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('enquiries.index') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('enquiries.index') }}">
                    <i class="bi bi-chat-dots me-2"></i>
                    <span class="nav-text">Enquiries</span>
                </a>
            </li>
            @if(Auth::user()->hasAnyRole(['pm', 'po', 'super-admin', 'admin']))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="View All Projects">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('projects.index') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('projects.index') }}">
                    <i class="bi bi-kanban me-2"></i>
                    <span class="nav-text">Projects</span>
                </a>
            </li>
            @endif
            @if(Auth::user()->hasAnyRole(['pm', 'po', 'super-admin', 'admin']))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Logistics Plan">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="">
                    <i class="bi bi-truck me-2"></i>
                    <span class="nav-text">Logistics Plan</span>
                </a>
            </li>
            @endif
        @endif

        <!-- Logistics Department Sidebar Links -->
        @if(Auth::check() && $currentDepartment === 'logistics' && (Auth::user()->hasRole('logistics') || Auth::user()->hasRole('super-admin')))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Logistics Dashboard">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.dashboard') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.dashboard') }}">
                    <i class="bi bi-speedometer2 me-2"></i>
                    <span class="nav-text">Logistics Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Fleet Management">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.fleet.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.fleet.index') }}">
                    <i class="bi bi-truck me-2"></i>
                    <span class="nav-text">Fleet Management</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Driver Management">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.drivers.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.drivers.index') }}">
                    <i class="bi bi-person-badge me-2"></i>
                    <span class="nav-text">Driver Management</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Vehicle Inspections">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.inspections.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.inspections.index') }}">
                    <i class="bi bi-clipboard-check me-2"></i>
                    <span class="nav-text">Vehicle Inspections</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Delivery Planning">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.deliveries.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.deliveries.index') }}">
                    <i class="bi bi-calendar-check me-2"></i>
                    <span class="nav-text">Delivery Planning</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Load Condition Tracking">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.load-conditions.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.load-conditions.index') }}">
                    <i class="bi bi-box-seam me-2"></i>
                    <span class="nav-text">Load Conditions</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Incident Reports">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.incidents.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.incidents.index') }}">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <span class="nav-text">Incident Reports</span>
                </a>
            </li>
            
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Logistics Reports">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('logistics.reports.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('logistics.reports.index') }}">
                    <i class="bi bi-graph-up me-2"></i>
                    <span class="nav-text">Reports & Analytics</span>
                </a>
            </li>
        @endif

        <!-- Projects Sidebar Links (Department Specific) -->
        @if(Auth::check() && $currentDepartment === 'projects' && (Auth::user()->hasAnyRole([]) || Auth::user()->hasRole('super-admin')))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Clients">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('clients.index') ? 'active bg-cyan text-white' : 'text-dark' }}"
                    href="{{ route('clients.index') }}">
                    <i class="bi bi-people me-2"></i>
                    <span class="nav-text">Clients</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Item Templates">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('templates.*') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('templates.templates.index') }}">
                    <i class="bi bi-file-earmark-plus me-2"></i>
                    <span class="nav-text">Setup Components</span>
                </a>
            </li>
        @endif

        <!-- Procurement Sidebar Links -->
        @if(Auth::check() && $currentDepartment === 'procurement' && (Auth::user()->hasRole('procurement') || Auth::user()->hasRole('super-admin')))
            <!-- Procurement menu items here -->
        @endif

        <!-- HR Sidebar Links -->
        @if(Auth::check() && $currentDepartment === 'HR')
            <!-- HR menu items here -->
        @endif

        <!-- IT Sidebar Links -->
        @if(Auth::check() && $currentDepartment === 'IT')
            <!-- IT menu items here -->
        @endif

        <!-- Inventory Sidebar Links -->
        @if(Auth::check() && Auth::user()->department === 'stores' && Auth::user()->hasRole('store'))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Dashboard">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.dashboard') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.dashboard') }}">
                    <i class="bi bi-box me-2"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Management">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.index') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.index') }}">
                    <i class="bi bi-list-check me-2"></i>
                    <span class="nav-text">Inventory</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Check-in">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.checkin.show') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.checkin.show') }}">
                    <i class="bi bi-arrow-down-square me-2"></i>
                    <span class="nav-text">Check-in</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Check-out">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.checkout') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.checkout') }}">
                    <i class="bi bi-arrow-up-square me-2"></i>
                    <span class="nav-text">Check-out</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Defectives">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.defective_items.index') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.defective_items.index') }}">
                    <i class="bi bi-exclamation-circle me-2"></i>
                    <span class="nav-text">Defectives</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Returns">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.returns') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.returns') }}">
                    <i class="bi bi-arrow-repeat me-2"></i>
                    <span class="nav-text">Returns</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="New Stock">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.newstock') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.newstock') }}">
                    <i class="bi bi-plus-square me-2"></i>
                    <span class="nav-text">New Stock</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="For Hire">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.hires.index') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.hires.index') }}">
                    <i class="bi bi-box-seam me-2"></i>
                    <span class="nav-text">For Hire</span>
                </a>
            </li>
        @endif

        <!-- Additional Project Features (Department Specific) -->
        @if(Auth::check() 
        && in_array(Auth::user()->department, ['projects', 'finance', 'production', 'hr', 'design', 'administration', 'ict']) 
        && Auth::user()->hasAnyRole(['pm', 'po', 'super-admin']))

            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Active Projects">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('projects.active') ? 'active bg-cyan text-white' : 'text-dark' }}" href="{{ route('projects.index', ['filter' => 'active']) }}">
                    <i class="bi bi-activity me-2"></i>
                    <span class="nav-text">Active Projects</span>
                </a>
            </li>
        @endif
        
        <!-- Procurement Sidebar Links -->
        @if(Auth::check() && Auth::user()->department === 'procurement' && Auth::user()->hasRole('procurement'))
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Dashboard">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.dashboard') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.dashboard') }}">
                    <i class="bi bi-box me-2"></i>
                    <span class="nav-text">Inventory Dashboard</span>
                </a>
            </li>
            <li class="nav-item my-2" data-bs-toggle="tooltip" data-bs-placement="right" title="Inventory Management">
                <a class="nav-link d-flex align-items-center {{ request()->routeIs('inventory.index') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('inventory.index') }}">
                    <i class="bi bi-list-check me-2"></i>
                    <span class="nav-text">Inventory Management</span>
                </a>
            </li>
        @endif

        <!-- HR Sidebar Links -->
        @if(Auth::check() && Auth::user()->department === 'HR')
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center {{ request()->is('admin/hr') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="">
                    <i class="bi bi-person-badge me-2"></i>
                    <span class="nav-text">HR Management</span>
                </a>
            </li>
        @endif

        <!-- IT Sidebar Links -->
        @if(Auth::check() && Auth::user()->department === 'IT')
            <li class="nav-item my-2">
                <a class="nav-link d-flex align-items-center {{ request()->is('admin/it') ? 'active bg-bg-cyan text-white' : 'text-dark' }}" href="{{ route('admin.it') }}">
                    <i class="bi bi-display me-2"></i>
                    <span class="nav-text">IT Management</span>
                </a>
            </li>
        @endif
    </ul>
