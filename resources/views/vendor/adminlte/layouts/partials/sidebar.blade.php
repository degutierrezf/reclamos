<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}
                    </a>
                </div>
            </div>
    @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">PRINCIPAL</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-road'></i> <span>Mis Rutas</span> <i
                            class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                    @foreach($access as $ac)
                        <li><a href="{{$ac->url}}"><i class='fa fa-check'></i> {{ $ac -> name }}</a></li>
                    @endforeach
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
