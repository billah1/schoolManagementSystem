<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('dashboard')}}">
             <h2 style="font-family: 'Times New Roman'"><strong>ARIF ADMIN</strong></h2>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">

                <!-- User Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic"  style="color:black" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('/')}}admin/assets/images/users/logout.png" alt="user" class=""> <span class="hidden-md-down"><strong>LOGOUT</strong> &nbsp;<i class="fa fa-caret-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <!-- text-->

                        <!-- text-->
                        <a href="" style="color: #e0a800" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i class="fa fa-power-off"></i> <strong>Logout</strong></a>

                        <form action="{{route('logout')}}" id="logoutForm" method="post">
                            @csrf


                        </form>
                        <!-- text-->
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
