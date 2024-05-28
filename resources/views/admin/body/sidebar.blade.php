<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <img src="{{asset('backend/img/smklogo.png')}}" alt="" style="height: 45px; width: 45px;">
        </div>
        <div class="sidebar-brand-text mx-1">SMK PGRI Sempu</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="{{'home' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
        Data
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-solid fa-file"></i>
            <span>Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('guru.read')}}">Data Guru</a>
                <a class="collapse-item" href="{{route('jurusan.read')}}">Data Jurusan</a>
                <a class="collapse-item" href="{{route('fasilitas.read')}}">Data Fasilitas</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

   <!-- Nav Item - Artikel -->
    <li class="{{'artikel' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('artikel.read')}}"><i class="fas fa-fw fa-newspaper"></i> <span>Artikel</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
    <!-- End of Sidebar -->
