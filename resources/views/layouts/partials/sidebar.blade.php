<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('images/LogoGris.png') }}" alt=" Logo" class="brand-image img-circle-32 elevation-1"
            style="max-height:40px;opacity: .8">
        <span class="brand-text font-weight-light">Magic Aligner</span>
    </a>
    <!-- Log on to marco farfan 3888-15568587 for more projects -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ auth()->user()->getAvatar() }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->getFullname() }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('home') }}" class="nav-link {{ activeSegment('') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Panel</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('customers.index') }}" class="nav-link {{ activeSegment('customers') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pacientes</p>
                    </a>
                </li>
                <li class="nav-item has-treeview d-none ">
                    <a href="{{ route('products.index') }}" class="nav-link {{ activeSegment('products') }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Conceptos/items</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('cart.index') }}" class="nav-link {{ activeSegment('cart') }}">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Nuevo Pedido</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('orders.index') }}" class="nav-link {{ activeSegment('orders') }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Ordenes de Pedido</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('seguimiento') }}" class="nav-link {{ activeSegment('seguimiento') }}">
                        <i class="nav-icon fa fa-qrcode"></i>
                        <p>Seguimiento</p>
                    </a>
                </li>
                @php
                    $fecha = date('Y-m-d');
                    $start_date = date('Y-m-d', strtotime('-5 days', strtotime($fecha)));
                    $end_date = date('Y-m-d', strtotime('+4 days', strtotime($fecha)));
                    //start_date=2024-05-16&end_date=2024-05-20
                    $url = '?start_date=' . $start_date . '&end_date=' . $end_date;
                @endphp

                <li class="nav-item has-treeview">
                    <a href="{{ route('payments.index') }}" class="nav-link {{ activeSegment('payments') }}">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Descargas</p>
                    </a>
                </li>

                @if (auth()->user()->rol == 'ADMINISTRADOR')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('usuarios.index') }}" class="nav-link {{ activeSegment('usuarios') }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                @endif



                <li class="nav-item has-treeview">
                    <a href="{{ route('users.edit', auth()->user()->id) }}"
                        class="nav-link {{ activeSegment('users') }}">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Modificar mis datos</p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Salir del Sistema</p>
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div><!-- Log on to marco farfan 3888-15568587 for more projects -->
    <!-- /.sidebar -->
</aside>
