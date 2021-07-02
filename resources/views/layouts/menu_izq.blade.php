  <!-- MENU DE LA IZQUIERDA -->
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Sidebar MENUU-->
    <div class="sidebar">
        <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
                  
                  <li class="nav-item ">   
                    <p>@yield('titulo')</p>
                     
  
                  </li>  
                  <li class="nav-item ">
                      <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-chevron-circle-down"></i>
                      <p>Menu
                         <!--  Menu
                          {{-- solo puedo tener 4 tipos de menus 
                          @switch($type)
                              @case(1)
                                  
                                  @break
                              @case(2)
                                  
                                  @break
                              @default
                                  
                          @endswitch
                          
                            
                            --}} -->
                          <i class="right fas fa-angle-left"></i>
                      </p>
                      </a>
                      <ul class="nav nav-treeview">
                          @yield('submenu')
                  
                  
                      </ul>
                  </li>              
                  
                  <!--REDES SOCIALES-->
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-users nav-icon "></i>
                          <p> 
                              Contactos
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="https://www.tuxtla.tecnm.mx/" class="nav-link">
                              <i class="fas fa-map-marker-alt nav-icon"></i>
                              <p>ITTG</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="https://sii.tuxtla.tecnm.mx/" class="nav-link">
                              <i class="fas fa-map-marker-alt nav-icon"></i>
                              <p>SII</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.facebook.com/tecnmtuxtlagtz/?rf=220191508087468" class="nav-link">
                              <i class="fab fa-facebook-square nav-icon"></i>
                              <p>Facebook</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.instagram.com/p/BkJ8RUBBDRA/?hl=es" class="nav-link">
                                  <i class="fab fa-instagram nav-icon"></i>
                                  <p>Instagram</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="https://www.tuxtla.tecnm.mx/directorio-2020/" class="nav-link">
                                  <i class="far fa-envelope nav-icon"></i>
                                  <p>Mail</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>