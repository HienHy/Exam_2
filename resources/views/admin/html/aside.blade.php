



    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="fa fa-user img-circle elevation-2"></i>
            </div>
            <div class="info">
                <a href="{{url('/admin/dashboard')}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>
        @endif
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

                <li class="nav-item has-treeview menu-open">
                        <a href="{{url("/dashboard")}}" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                User
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("/admin/user/list")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url("/admin/user/create")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif

                    <li class="nav-item has-treeview">
                        <a href="{{url("/admin/newspaper/list")}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                News

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

                            <li class="nav-item">
                                <a href="{{url("/admin/newspaper/list")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh Sách Bài Viết </p>
                                </a>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{url("/admin/newspaper/bai-viet-cua-toi")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bài Viết Của Tôi </p>
                                </a>
                            </li>
                                @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

                            <li class="nav-item">
                                <a href="{{url("/admin/newspaper/cho-duyet")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Chờ Duyệt </p>
                                </a>
                            </li>
                                @endif
                            <li class="nav-item">
                                <a href="{{url("/admin/newspaper/create")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Viết Bài </p>
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
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


