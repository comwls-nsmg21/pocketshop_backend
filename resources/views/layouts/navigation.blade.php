<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">account menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('home') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>
            </li>

            <li class="{{ isActiveRoute('customers') }}">
                <a href="{{ url('/customers') }}"><i class="fa fa-users"></i></i> <span class="nav-label">고객 관리</span> </a>
            </li>

            <li class="{{ isActiveRoute('product') }}">
                <a href="{{ url('/product') }}"><i class="fa fa-cubes"></i> <span class="nav-label">상품 관리</span> </a>
            </li>

            <li class="{{ isActiveRoute('order') }}">
                <a href="{{ url('/order') }}"><i class="fa fa-money"></i> <span class="nav-label">주문 관리</span> </a>
            </li>

            <li class="{{ isActiveRoute('system') }}">
                <a href="{{ url('/system') }}"><i class="fa fa-cog"></i> <span class="nav-label">시스템 관리</span> </a>
            </li>

        </ul>

    </div>
</nav>
