<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}"><span data-feather="file-text" class="align-text-bottom"></span> 
                    DASHBOARD<a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              DATA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ url('/datawarga') }}">Warga</a>
                              <a class="dropdown-item" href="{{ url('/datakepalakeluarga') }}">Kepala Keluarga</a>
                              <a class="dropdown-item" href="{{ url('/dataibuhamil') }}">Ibu Hamil</a>
                              <a class="dropdown-item" href="{{ url('/balita') }}">Balita</a>
                              <a class="dropdown-item" href="{{ url('/dataaset') }}">Aset</a>
                              <a class="dropdown-item" href="{{ url('/datapinjaman') }}">Pinjaman</a>
                              <a class="dropdown-item" href="{{ url('/bantuansosial') }}">Bantuan Sosial</a>
</ul>
</div>
</nav>