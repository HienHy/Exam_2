



<!-- Top Header Start -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="/assets/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="social" style="display: flex" >
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>

                  @guest
                         <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
                     @endguest

                     @auth
                         <form action="{{route('logout')}}" method="post">
                             @csrf
                             <button type="submit">
                                 <i class="fa fa-user"> logout</i>
                             </button>

                         </form>

                     @endauth






                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Header End -->


<!-- Header Start -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="{{url('/')}}" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('/thoi-su')}}" class="nav-item nav-link">Thời Sự</a>
                    <a href="{{url('/the-gioi')}}" class="nav-item nav-link">Thế Giới</a>
                    <a href="{{url('/phap-luat')}}" class="nav-item nav-link">Pháp Luật</a>
                    <a href="{{url('/kinh-doanh')}}" class="nav-item nav-link">Kinh Doanh</a>
                    <a href="{{url('/cong-nghe')}}" class="nav-item nav-link">Công Nghệ </a>
                    <a href="{{url('/xe')}}" class="nav-item nav-link">Xe</a>
                    <a href="{{url('/du-lich')}}" class="nav-item nav-link">Du Lịch</a>
                    <a href="{{url('/van-hoa')}}" class="nav-item nav-link">Văn Hoá</a>
                    <a href="{{url('/giai-tri')}}" class="nav-item nav-link">Giải Trí</a>
                    <a href="{{url('/giao-duc')}}" class="nav-item nav-link">Giáo Dục</a>
                    <a href="{{url('/the-thao')}}" class="nav-item nav-link">Thể Thao</a>





                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Header End -->
