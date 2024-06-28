<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{ asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/computer.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">SIPDJK</div>
    </a>
    <hr class="sidebar-divider my-0">

    @can('dashboard')
    <x-nav-link 
        text="Dashboard" 
        icon="th" 
        url="{{ route('admin.dashboard') }}"
        active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
    />

    <hr class="sidebar-divider mt-3 mb-0">
    @endcan
    
    @can('diagnosa')    
    <x-nav-link 
        text="Pemeriksaan" 
        icon="stethoscope" 
        url="{{ route('admin.diagnosa') }}"
        active="{{ request()->routeIs('admin.diagnosa') ? ' active' : '' }}"
    />
    @endcan
    
    @can('riwayat-list')
    <x-nav-link 
        text="Riwayat Pemeriksaan" 
        icon="sync" 
        url="{{ route('admin.riwayat.daftar') }}"
        active="{{ request()->routeIs('admin.riwayat.daftar') ? ' active' : '' }}"
    />
    @endcan

    @can('member-list')
    <hr class="sidebar-divider mt-3 mb-0">
    
    <x-nav-link 
        text="Daftar User" 
        icon="users" 
        url="{{ route('admin.member') }}"
        active="{{ request()->routeIs('admin.member') ? ' active' : '' }}"
    />
    @endcan
    

    @can('penyakit-list')
    <x-nav-link 
        text="Daftar Penyakit" 
        icon="book-medical" 
        url="{{ route('admin.penyakit') }}"
        active="{{ request()->routeIs('admin.penyakit') ? ' active' : '' }}"
    />
    @endcan

    @can('gejala-list')
    <x-nav-link 
        text="Daftar Gejala" 
        icon="crutch" 
        url="{{ route('admin.gejala') }}"
        active="{{ request()->routeIs('admin.gejala') ? ' active' : '' }}"
    />
    @endcan

    @can('rules-list')
    <x-nav-link 
        text="Basis Rules" 
        icon="keyboard" 
        url="{{ route('admin.rules', 1) }}"
        active="{{ request()->routeIs('admin.rules') ? ' active' : '' }}"
    />
    @endcan
    
    <hr class="sidebar-divider mb-0">

</ul>