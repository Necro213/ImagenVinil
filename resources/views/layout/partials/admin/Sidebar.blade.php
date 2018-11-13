<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">ImagenEnVinil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{$nombre}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.users')}}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Usuarios
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.galeria')}}" class="nav-link">
                        <i class="fas fa-images"></i>
                        <p>
                            Galeria
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.productos')}}" class="nav-link">
                        <i class="fas fa-box"></i>
                        <p>
                            Productos
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.promociones')}}" class="nav-link">
                        <i class="fas fa-percent"></i>
                        <p>
                            Promociones
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.promociones')}}" class="nav-link">
                        <i class="fas fa-user-friends"></i>
                        <p>
                            Colaboradores
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.estaciones')}}" class="nav-link">
                        <i class="fas fa-cloud-sun"></i>
                        <p>
                            Estaciones
                            <span class="right badge badge-warning">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tags"></i>
                        <p>
                            Ventas
                            <span class="right badge badge-danger">Proximamente</span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>