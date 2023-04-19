@extends('admin.layout')
@section('main-content')
    <!-- Small boxes (Stat box) -->
    <p class="center">{{$today}}</p>

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$soLuongBaiVietChuaDuyet}}</h3>
                    <p>Số bài viết đang chờ duyệt</p>
                </div>
                <div class="icon">

                    <i class="ion ion-book"></i>



                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><sup style="font-size: 20px"> </sup>{{$soLuongBaiViet}}</h3>

                    <p>Số Lượng Bài Viết</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$soLuongPhongVien}}</h3>

                    <p>Số Lượng Phóng Viên</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$soLuongBinhLuan}}</h3>

                    <p>Số lượng bình luận</p>
                </div>
                <div class="icon">
                    <i class="ion fa-chart"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>
                        Số bài viết của mỗi chủ đề
                    </h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content p-0">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart"
                             style="position: relative; height: auto;">
                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>

                        <div class="chart tab-pane active" id="revenue-chart"
                             style="position: relative; height: 0px;">
                            <canvas id="revenue-chart-canvas_date" height="300" width="" style="height: 300px;"></canvas>
                        </div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->




        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
@endsection
@section("after_js")

    <script>
        var ctx = document.getElementById('revenue-chart-canvas').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! $categories_names !!},
                datasets: [{
                    label: 'Số bài :',
                    data: {!! $category_products_counts !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>



    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('af5d4bf500247d2bd602', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            if(data.confirm){
                var cf = confirm(data.message);
                if(cf){
                    window.location.reload();
                }

            }
        });
    </script>



@endsection
