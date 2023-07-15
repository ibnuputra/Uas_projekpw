  <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
          <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
              <div class="sb-sidenav-menu">
                  <div class="nav">
                      <div class="sb-sidenav-menu-heading">Admin</div>
                      <a class="nav-link" href="{{ url('/dashboard') }}">
                          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                          Dashboard
                      </a>

                      <div class="sb-sidenav-menu-heading">Data</div>
                      <a class="nav-link" href="{{ url('/produk') }}">
                          <div class="sb-nav-link-icon"><i class="fas fa-hamburger"></i></div>
                          Produk
                      </a>

                      <a class="nav-link" href="{{ url('/kategori') }}">
                          <div class="sb-nav-link-icon"><i class="fas fa-wine-bottle"></i></div>
                          Kategori Produk
                      </a>



          </nav>
      </div>
