<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url("/admin/dashboard")}}" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item" style="width: 30px"  >
            @auth
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button  type="submit">
                        <i class="fas fa-user"></i>
                    </button>

                </form>


            @endauth
        </li>

    </ul>
</nav>
<!-- /.navbar -->
