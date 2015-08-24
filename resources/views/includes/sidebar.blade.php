<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/img/avatar.png") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Administrador</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENÚ</li>

            <li class="active">
                <a href="{{url('registro')}}">
                    <i class="fa fa-users"></i> <span>Registros</span>
                </a>
            </li>

            <li>
                <a href="{{url('sector')}}">
                    <i class="fa fa-industry"></i> <span>Sectores Comerciales</span>
                </a>
            </li>

            <li>
                <a href="{{url('producto')}}">
                    <i class="fa fa-cube"></i> <span>Productos</span>
                </a>
            </li>            

            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>