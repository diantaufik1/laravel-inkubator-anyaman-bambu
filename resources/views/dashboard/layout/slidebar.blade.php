<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="https://i.ibb.co/0C00Vng/Whats-App-Image-2022-01-11-at-22-39-45-removebg-preview.png"  alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="https://i.ibb.co/0C00Vng/Whats-App-Image-2022-01-11-at-22-39-45-removebg-preview.png"  alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (auth()->user()->role_id == '1')
                <li class="active">
                    <a href="dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="active">
                    <a href="monitoring"> <i class="menu-icon fa fa-dashboard"></i>Monitoring </a>
                </li>

                <li class="active">
                    <a href="kontrol"> <i class="menu-icon fa fa-dashboard"></i>Kontrol </a>
                </li>

                <li class="active">
                    <a href="laporan"> <i class="menu-icon fa fa-dashboard"></i>Laporan </a>
                </li>
                @else
                <li class="active">
                    <a href="dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>

                <li class="active">
                    <a href="monitoring"> <i class="menu-icon fa fa-dashboard"></i>Monitoring </a>
                </li>

                <li class="active">
                    <a href="laporan"> <i class="menu-icon fa fa-dashboard"></i>Laporan </a>
                </li>
                @endif






                {{-- @if (auth()->user()->role_id  == '1')

                @endif --}}


                <!-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li> -->

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
