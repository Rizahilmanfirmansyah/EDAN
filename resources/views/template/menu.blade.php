<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="{{route('pegawais.index')}}" class="nav-link">
          <i class="nav-icon bi bi-people-fill"></i>
          <p>
            Data Pegawai
            <!--<i class="right fas fa-angle-left"></i>-->
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('pegawais.create') }}" class="nav-link">
          <i class="nav-icon bi bi-person-plus-fill"></i>
          <p>
            Tambah Pegawai
          </p>
        </a>
      </li>

    </ul>
  </nav>