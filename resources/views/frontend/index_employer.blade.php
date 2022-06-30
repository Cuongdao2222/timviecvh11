@extends('frontend.layout.appfe')
@section('content')			
<main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/employer_dashboard.css') }}">
    <style>/*Chart.css*/
        @keyframes chartjs-render-animation{from{opacity:0.99;}to{opacity:1;}}.chartjs-render-monitor{animation:chartjs-render-animation 0.001s;}.chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;}.chartjs-size-monitor-expand > div{position:absolute;width:1000000px;height:1000000px;left:0;top:0;}.chartjs-size-monitor-shrink > div{position:absolute;width:200%;height:200%;left:0;top:0;}
        /*employer-dashboard.css*/
    </style>
    <!-- <section class="employer-navbar-2-1">
        <div class="container">
            <div class="category-nav">
                <p>Danh Mục</p>
                <em class="mdi mdi-chevron-down"></em> 
            </div>
            <div class="main-wrap">
                <div class="left-wrap">
                    <ul class="list-menu">
                        <li class="active"> <a href="https://careerbuilder.vn/vi/employers/dashboard" title="Dashboard">Dashboard</a> </li>
                        <li > <a href="https://careerbuilder.vn/vi/employers/hrcentral/posting" title="Quản Lý Đăng Tuyển">Quản Lý Đăng Tuyển</a> </li>
                        <li > <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume" class="active" title="Quản Lý  Ứng Viên">Quản Lý  Ứng Viên</a> </li>
                        <li class=""> <a href="https://careerbuilder.vn/vi/employers/hrcentral/search-history" title="Lịch Sử Tìm Kiếm">Lịch Sử Tìm Kiếm</a> </li>
                        <li > <a href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available" title="Đơn Hàng ">Đơn Hàng </a> </li>
                        <li > <a href="https://careerbuilder.vn/vi/employers/hrcentral/emailcontentmanagement" title="Cấu Hình Email" > Cấu Hình Email </a> </li>
                        <li >
                            <a href="{{ route('employers_info') }}" title=" Tài Khoản"> Tài Khoản</a>
                        </li>
                        <li> <a href="https://careerbuilder.vn/vi/employers/careerbuilder-rewards" target="_blank" title="CBRewards">CBRewards</a> </li>
                    </ul>
                </div>
                 <div class="right-wrap">
                    <ul class="list-menu">
                      <li> <a href="https://careerbuilder.vn/vi/tim-ung-vien.html"> <em class="material-icons">find_in_page</em> Tìm Hồ Sơ </a> </li>
                      <li> <a class="but-createjob" href="{{ route('form_recruit') }}"> <em class="material-icons">assignment_ind</em> Đăng Tuyển Dụng </a> </li>
                    </ul>
                    </div>
            </div>
        </div>
    </section> -->
   <!--  <div class="last-login-user">
        <div class="container">
            <p> Đăng nhập gần đây:
                <time>18-05-2022 09:48:58</time>
            </p>
        </div>
    </div> -->
    <section class="employer-dasboard cb-section bg-manage">
        <div class="container">
            <div class="main-dasboard-top">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Thông tin tài khoản</h2>
                            </div>
                            <div class="body">
                                <div class="image">
                                    <a href="https://careerbuilder.vn/careerbuilder-rewards" title="CareerBuilder Rewards 2022" target="_blank">
                                    <img src="https://images.careerbuilder.vn/content/images/01BinhMKT/member_cbr_vi_cb.png" alt="">
                                    </a>
                                </div>
                                <ul class="list-account-information">
                                    <li>
                                        <p class="number intNumPostNoUse">0</p>
                                        <a class="title" href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available">Vị trí chưa sử dụng</a>
                                    </li>
                                    <li>
                                        <p class="number orderNew">0</p>
                                        <a class="title" href="https://careerbuilder.vn/vi/employers/hrcentral/reports/orders_available">Đơn hàng đang sử dụng</a>
                                    </li>
                                    <li>
                                        <p class="number JskNew">0</p>
                                        <a class="title" href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume">Ứng viên ứng tuyển</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Tìm Kiếm Hồ Sơ</h2>
                            </div>
                            <div class="body">
                                <ul class="list-search-management">
                                    <li>
                                        <p class="textNodata">Chưa có điểm xem hồ sơ</p>
                                    </li>
                                    <li>
                                        <p class="textNodata">Chưa có dịch vụ xem hồ sơ</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Quản Lý Đăng Tuyển</h2>
                            </div>
                            <div class="body">
                                <ul class="list-post-management">
                                    <li>
                                        <a href="{{ route('employers-info-list') }}">
                                        <span class="number green">{{ $job }}</span>
                                        <span class="title">Việc làm đang đăng</span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">
                                            <span class="number blue">0</span>
                                            <span class="title">Việc làm chờ đăng</span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">
                                            <span class="number ">0</span>
                                            <span class="title">Việc làm tạm dừng đăng</span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="#">
                                            <span class="number ">0</span>
                                            <span class="title">Việc làm hết hạn</span>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="https://careerbuilder.vn/vi/employers/hrcentral/manageresume/followers">
                                            <span class="number ">0</span>
                                            <span class="title">Followers</span>
                                        </a>
                                        </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Lịch Sử Hoạt Động</h2>
                            </div>
                            <div class="body">
                                <ul class="list-operation-management">
                                </ul>
                                <div class="view-more"><a class="btn-view-more" href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-dasboard-bottom">
                            <h3 class="title-info">Thông Tin Nhân Viên Tư Vấn</h3>
                            <div class="wrap-info">
                                <div class="image">
                                    <img src="https://images.careerbuilder.vn//admin_avatar/1624174428_no_callcentrer.png" alt="cs-avtar">
                                </div>
                                <ul class="list-info">
                                    <li>
                                        <p class="name">
                                            Lan Nguyen
                                            (Athena)
                                        </p>
                                    </li>
                                    <li>
                                        <p>Tel: <a href="tel:(84.28) 3822 6060">(84.28) 3822 6060 (Ext) 222 </a></p>
                                    </li>
                                    <li>
                                        <div class="email-and-history">
                                            <p class="email">Email: <a href="mailto:lan.nguyentt@mail.careerbuilder.vn">lan.nguyentt@mail.careerbuilder.vn</a></p>
                                        </div>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-dasboard-bottom topresume-list">
                            <div class="topresume-list-head">
                                Top <span class="swiper-pagination" style="position: inherit;"></span> hồ sơ mới <a href=""></a>
                                <div class="main-button">
                                    <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                    <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-middle">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-dasboard-middle">
                            <div class="head">
                                <h3 class="title">Biểu Đồ Tuyển Dụng</h3>
                                <div class="toollips">
                                    <em class="material-icons">infomation</em>
                                    <div class="toolip">
                                        <p>Thông kê chỉ số tuyển dụng trong vòng 1 tháng gần nhất.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="form-wrap">
                                    <div class="form-group form-date">
                                        <input class="dates_range" id="date_mychart1" readonly value="18/04/2022 - 18/05/2022">
                                    </div>
                                    <div class="form-group form-submit">
                                        <button class="btn-gradient btn-submit" id="btn_chart1" type="button" onclick="actChart1(this);">Áp dụng</button>
                                    </div>
                                </div>
                                <div class="chart">
                                    <div id="mychart1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-dasboard-middle">
                            <div class="head">
                                <h3 class="title">Biểu Đồ Ứng Viên</h3>
                                <div class="toollips">
                                    <em class="material-icons">infomation</em>
                                    <div class="toolip">
                                        <p>Thống kê số hồ sơ ứng tuyển nhận được theo ngày.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="form-wrap">
                                    <div class="form-group form-date">
                                        <input class="dates_range" id="date_mychart2" readonly value="18/04/2022 - 18/05/2022">
                                    </div>
                                    <div class="form-group form-submit">
                                        <button class="btn-gradient btn-submit" id="btn_chart2" type="button" onclick="actChart2(this);">Áp dụng</button>
                                    </div>
                                </div>
                                <div class="chart">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-dasboard-middle">
                            <div class="head">
                                <h3 class="title">BIỂU ĐỒ TUYỂN DỤNG & ỨNG TUYỂN</h3>
                                <div class="toollips">
                                    <em class="material-icons">infomation</em>
                                    <div class="toolip">
                                        <p>Thống kê chỉ số tương quan giữa nhu cầu tuyển dụng và lượt hồ sơ ứng tuyển.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="form-wrap">
                                    <div class="form-group form-date">
                                        <input class="dates_range" id="date_mychart3" readonly value="18/04/2022 - 18/05/2022">
                                    </div>
                                    <div class="form-group form-submit">
                                        <button class="btn-gradient btn-submit" id="btn_chart3" type="button" onclick="actChart3(this);">Áp dụng</button>
                                    </div>
                                </div>
                                <div class="chart">
                                    <canvas id="myChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box-dasboard-middle">
                            <div class="head">
                                <h3 class="title">BIỂU ĐỒ TUYỂN DỤNG THEO CẤP BẬC</h3>
                                <div class="toollips">
                                    <em class="material-icons">infomation</em>
                                    <div class="toolip">
                                        <p>Thống kê chỉ số hồ sơ ứng tuyển theo cấp bậc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="form-wrap">
                                    <div class="form-group form-date">
                                        <input class="dates_range" id="date_mychart4" readonly value="18/04/2022 - 18/05/2022">
                                    </div>
                                    <div class="form-group form-submit">
                                        <button class="btn-gradient btn-submit" id="btn_chart4" type="button" onclick="actChart4(this);">Áp dụng</button>
                                    </div>
                                </div>
                                <div class="chart">
                                    <canvas id="myChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/amchart-passlicence.js') }}"></script>
    <script>
        $(document).ready(function() {
            moment.locale(CURRENT_LANGUAGE);
            $('.dates_range').daterangepicker({
                "showDropdowns": true,
                "autoApply": true,
                "maxSpan": {
                    "months": 1,
                    "days": -1
                },
                "locale": {
                    "format": "DD/MM/YYYY",
                },
                "minDate": moment().add(-13, 'months'),
                "maxDate": moment().add(0, 'days'),
                "opens": "center"
            });
        });
        $(function() {
            setTimeout(function() {
                $("#btn_chart1").trigger('click');
            }, 100);
            setTimeout(function() {
                $("#btn_chart2").trigger('click');
            }, 1800);
            setTimeout(function() {
                $("#btn_chart3").trigger('click');
            }, 1900);
            setTimeout(function() {
                $("#btn_chart4").trigger('click');
            }, 2300);
        });
        
        function actChart1(elm){
            $("#"+elm.id).prop('disabled', true);
            var date_mychart1 = $("#date_mychart1").val();
            $.ajax({
                url: domain+ 'employers/dashboard/chart',
                type: 'POST',
                dataType: 'json',
                data: {date: date_mychart1, type: 1},
            })
            .done(function(response) {
                dbChart1(response.data);
                $("#"+elm.id).prop('disabled', false);
            });
        }
        function actChart2(elm){
            $("#"+elm.id).prop('disabled', true);
            var date_mychart2 = $("#date_mychart2").val();
            $.ajax({
                url: domain+ 'employers/dashboard/chart',
                type: 'POST',
                dataType: 'json',
                data: {date: date_mychart2, type: 2},
            })
            .done(function(response) {
                dbChart2(response.label,response.title_1,response.data_1,response.title_2,response.data_2);
                $("#"+elm.id).prop('disabled', false);
            });
        }
        function actChart3(elm){
            $("#"+elm.id).prop('disabled', true);
            var date_mychart3 = $("#date_mychart3").val();
            $.ajax({
                url: domain+ 'employers/dashboard/chart',
                type: 'POST',
                dataType: 'json',
                data: {date: date_mychart3, type: 3},
            })
            .done(function(response) {
                dbChart3(response.label,response.title_1,response.data_1,response.title_2,response.data_2);
                $("#"+elm.id).prop('disabled', false);
            });
        }
        function actChart4(elm){
            $("#"+elm.id).prop('disabled', true);
            var date_mychart4 = $("#date_mychart4").val();
            $.ajax({
                url: domain+ 'employers/dashboard/chart',
                type: 'POST',
                dataType: 'json',
                data: {date: date_mychart4, type: 4},
            })
            .done(function(response) {
                dbChart4(response.label,response.title,response.data);
                $("#"+elm.id).prop('disabled', false);
            });
        }
    </script>
</main>
@endsection