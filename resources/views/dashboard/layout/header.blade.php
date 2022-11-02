<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            
            <div class="stat-text"> <h2>{{ $title }}</h2> </div>
        </div>
        

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('public/images/admin.jpg') }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu ">
                    <form action="logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link pl-2 pr-5 float-right" style="border: none;" ><i class="fa fa-power-off m-2"></i> Keluar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</header>