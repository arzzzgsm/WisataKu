<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">

    <div class="sidebar-brand-text mx-3">WisataKu</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item @yield('dashboard')">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item @yield('post')">
    <a class="nav-link" href="/post">
        <i class="fas fa-fw fa-file"></i>
        <span>Postingan</span></a>
</li>

<li class="nav-item @yield('kategori')">
    <a class="nav-link" href="/kategori">
        <i class="fas fa-fw fa-tag"></i>
        <span>Kategori</span></a>
</li>

{{-- <!-- Divider -->
<hr class="sidebar-divider"> --}}

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
        aria-expanded="true" aria-controls="main">
        <i class="fas fa-fw fa-folder"></i>
        <span>Main</span>
    </a> --}}
    <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <a class="collapse-item @yield('post')" href="/post">Postingan</a>
            <a class="collapse-item @yield('kategori')" href="/kategori">Kategori</a> --}}
            {{-- <a class="collapse-item" href="/tag">Tag</a>
            <a class="collapse-item" href="cards.html">Banner</a> --}}
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
{{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan"
        aria-expanded="true" aria-controls="pengaturan">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Pengaturan</span>
    </a>
    <div id="pengaturan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Logo</a>
            <a class="collapse-item" href="utilities-border.html">Footer</a>
            <a class="collapse-item" href="utilities-animation.html">Tentang Kami</a>
        </div>
    </div>
</li> --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/">
        <i class="fas fa-arrow-left"></i>
        <span>Halaman Depan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
