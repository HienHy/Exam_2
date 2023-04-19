



    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="../uploads/21601.png" alt="Admin Logo" class="brand-image img-circle elevation-3"
             style="">
        <span class="brand-text font-weight-light">News Admin</span>
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
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url("/admin/dashboard")}}" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>

                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Phóng Viên
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url("/admin/user/list")}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách phóng viên </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url("/admin/user/create")}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm Mới </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endif

                    <li class="nav-item has-treeview">
                        <a href="{{url("/admin/newspaper/list")}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Bài Viết

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

                            <li class="nav-item">
                                <a href="{{url("/admin/newspaper/create")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Viết Bài </p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{url("/admin/title/list")}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Chủ đề

                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{url("/admin/title/list")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách chủ đề</p>
                                </a>
                            </li>
{{--                            @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)--}}

{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{url("/admin/title/create")}}" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Thêm mới </p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endif--}}


                        </ul>
                    </li>
                    @if(auth()->user()->Admin->role == \App\Models\Admin::ADMIN || auth()->user()->Admin->role == \App\Models\Admin::BTV)

                    <li class="nav-item has-treeview">
                        <a href="{{url("/admin/comment/list")}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Bình luận
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{url("/admin/comment/list")}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách bình luận</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif







            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>


