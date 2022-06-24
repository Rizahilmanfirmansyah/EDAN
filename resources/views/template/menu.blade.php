<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link">
              <i class="nav-icon bi bi-clipboard-fill"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
     <li class="nav-item">
        <a href="{{route('pegawais.index')}}" class="nav-link">
          <i class="nav-icon bi bi-people-fill"></i>
          <p>
            Data Pegawai
         <i class="right fas fa-angle-left"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('pegawais.index')}}" class="nav-link">
              <i class="nav-icon bi bi-table"></i>
                Table Pegawai
              </p>
            </a>
          </li>
           <li class="nav-item">
                <a href="{{route('pegawais.create')}}" class="nav-link">
                  <i class="nav-icon bi bi-person-plus-fill"></i>
                  <p>
                    Tambah Pegawai
                  </p>
                </a>
              </li>
          </ul>
      </li>
      <li class="nav-item" >
        <a href="{{ route('perizinan.index') }}" class="nav-link">
          <i class="nav-icon bi bi-envelope-paper-fill"></i>
          <p>
            Data Perizinan
           <i class="right fas fa-angle-left"></i> 
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('perizinan.index') }}" class="nav-link">
              <i class="nav-icon bi bi-table"></i>
              <p>
                Tabel Perizinan
              </p>
            </a>
          </li>
        <li class="nav-item">
          <a href="{{ route('perizinan.create') }}" class="nav-link">
            <i class="nav-icon bi bi-envelope-plus-fill"></i>
            <p>
              Tambah Perizinan
            </p>
          </a>
        </li>
    </ul>
      </li>
      

        
     
      <!-- <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('pegawais.index')}}" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
           
              Data Pegawai
            <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
       
         <li class="nav-item">
              <a href="{{route('pegawais.create')}}" class="nav-link">
                <i class="nav-icon bi bi-person-plus-fill"></i>
                <p>
                  Tambah Pegawai
                </p>
              </a>
            </li>
        </ul>-->

     
     
 <!-- <li class="nav-item">
    <a href="{{route('pegawais.index')}}" class="nav-link">
      <i class="nav-icon bi bi-people-fill"></i>
      <p>
        Data Pegawai
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="{{ route('perizinan.index') }}" class="nav-link">
      <i class="nav-icon bi bi-envelope-paper-fill"></i>
      <p>
        Data Perizinan
        <i class="right fas fa-angle-left"></i> 
      </p>
    </a>
  </li>-->
  
    
 <!-- <li class="nav-item">
   <a href="#" class="nav-link">
      <i class="nav-icon bi bi-envelope-paper-fill"></i>
      <p id="ok">
        Data Perizinan
       <i class="right fas fa-angle-left"></i>
      </p>
    </a>
  </li>
 
      <ul id="sip" class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('perizinan.index') }}" class="nav-link">
            <i class="nav-icon bi bi-envelope-fill"></i>
            <p>
              Tabel Perizinan
            </p>
          </a>
        </li>
      <li class="nav-item">
        <a href="{{ route('perizinan.create') }}" class="nav-link">
          <i class="nav-icon bi bi-envelope-plus-fill"></i>
          <p>
            Tambah Perizinan
          </p>
        </a>
      </li>
  </ul>-->


    </ul>
  </nav>

  <script>
    $('#ok').click(function(){
      $('#sip').toggle("slow");

    });
    var toggler = document.getElementsByClassName("caret");
    var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
   
  </script>