<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laugh-wink"></i>
            {{-- <img href='{{ asset('assets/src/LOGO.png') }}' width="100%" height="auto"> --}}
        </div>
        <div class="sidebar-brand-text mx-3">Arkatama</div>
    </a>
    
    {{-- fitur kelompok 1 --}}
    <div>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
        <a class="nav-link" href="{{ route('viewData') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Input User</span></a>
        </li>
    </div>
    
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>