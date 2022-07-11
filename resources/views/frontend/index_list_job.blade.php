@extends('frontend.layout.appfe')
@section('content')

        <?php 
             $listDefineJob = LIST_JOB;

            $address = ADDRESS;

            $salary = SALARY;

            $level  = LEVEL;
            
        ?>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <style type="text/css">

        .job-item{
            background: #fff;
            border: 1px  solid #ddd;
        }

        .top-employers-banner .item .image {
            padding: 50px !important;
        }
         .owl-carousel .item {
            height: 10rem ;
            background: #4DC7A0;
            padding: 1rem;
        } 

        .section-over{
            position: relative;
        }

        .cb-content{

            padding: 0;

            width: 80vw;
        }

        #box-job-suggest {

            padding-top: 80px;

        }    

        .cb-section.cb-section-border-bottom {

            border: none !important;
        }    

        .owl-carousel .item h4 {
            color: red;
            font-weight: 400;
            margin-top: 0rem;
        }

        .cb-content{

            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -30%);
            z-index: 999;
        }

        .cb-box-find .main-box .box-body {
            background: #E8F6FD;
        }    

       
        
         @media only screen and (min-width: 768px) {    

            .job-item .figure .figcaption {

                max-width: auto !important;
            }
        }    

        @media only screen and (max-width: 767px) {

            .job-item .figure .title p, .job-item .figure .title a {

                font-size: 12px !important;
            }   
            .job-item .figure .caption .company-name {
                font-size: 12px !important;
            } 

            .content-mb{
                padding: 0 !important;
                margin: 0 !important;
            }

            .job-item .figure{
                padding: 5px 0 0 0  !important;
            }

            .job-item .figure .caption .company-name{
                -webkit-line-clamp: 1 !important;
            }

            .form-sm form{
                overflow: hidden;
            }
            .top-employers-list .item a{
                top: 0;
               /* transform: translateY(50%);*/
                left: 0;
            }
            .job-item .figure{
                padding-right: 0 !important;
            }
            .job-item .figure .figcaption{
                max-width: calc(100% - 100px) !important;
            }
            .d-flex{
                display: block !important;
            }

            .job-item .figure .figcaption{
                max-width: calc(100% - 100px) !important;
            }
            .btn-selected, .btn-input-search{
                width: 100% !important;
            }
            .sl-action {
                 width: auto !important; 
            }
            .btn-list-search{
                width: 100% !important;
            }
             .search-button{

                width: auto !important;
             } 

             .top-employers-banner .item .image {
                padding: 35px 0 35px 0 !important;
            }



           /*  .top-employers-banner .item .image {
                padding: 0 !important;
             }  */


        }
        

        @media (min-width: 1200px){

            .cb-box-find .main-box {
                position: relative !important;

                top: 0 !important;
                transform: translateY(-0%) !important;

            } 
        
        } 

        #owl-example .owl-nav button {
            background: #fff !important;
            height: 44px;
            position: absolute;
            width: 44px;
            opacity: .7;
            border-radius: 100% !important;
            border: #e1e1e1;
          
            filter: drop-shadow(0 4px 7px rgba(0,0,0,.15));
           
            
        }

        #owl-example{
            position: relative;
        }

        

        #owl-example .owl-prev  {
            left: -22px;
            top: 50%;
            transform: translateY(-50%);
           
        }

         #owl-example .owl-next  {
            right: -22px;
            top: 50%;
            transform: translateY(-50%);
           
        }

        .cb-box-find .main-box .main-form .form-group label{
            position: relative !important;
            top: 34px !important;
        }

        .section{
            width: 100%;

        }

        .cb-box-find .main-forms .form-group input, .cb-box-find .main-box .main-form .form-group .chosen-container {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100% !important;
            height: 40px;
            padding: 5px 10px;
            padding-left: 40px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background: #fff;
            color: #172642;
            font-size: 16px;
            font-weight: 400;
        }

        .main-forms .form-group label span {
            font-size: 14px;
        }

        .main-forms .form-group label span {
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            display: initial;
            color: #999999;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            transition: 0.5s;
        }
        .top-employers-list .image {
            min-height: 137px !important;
        }    
       
    </style>
    <main>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">    
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.auto-complete.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
        <!-- link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
        <style type="text/css">
            .hot-jobs-list .main-pagination {

                width: 417px;
            }    
        </style>

        <?php 

            $banners = App\Models\banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

            $banners1 = App\Models\banners::where('option','=',2)->take(2)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

            $banners2 = App\Models\banners::where('option','=',3)->take(4)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();
        ?>

        <div class="section-over">

            <div class="cb-main-search">
                <section class="cb-banner-home">
                    <div class="banner-pc">
                        <div class="swiper-container">
                            <!-- Swiper -->
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">

                                    @if(isset($banners))

                                    @foreach($banners as $value)
                                   <div class="swiper-slide">
                                        <a href="{{ $value->link }}">
                                            <div class="image"> <img src="{{ asset($value->image) }}" alt="{{ $value->title }}"> </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif

                                  
                                   
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- Swiper JS -->
                        </div>
                        <!-- <div class="main-page">
                            <div class="swiper-pagination"></div>
                        </div> -->
                    </div>


                    <div class="banner-mobile">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="mobile-swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" rel="nofollow;noreferrer" target="_blank">
                                        <div class="image"> <img src="{{ asset('images/banner1.png')}} " alt="Banner"> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-page">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
              <!--   <script>$(window).bind("load",function(){var timeoutBn = setTimeout(function(){loadBannerHome();},3e3);});</script>  -->
            </div>

             <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <script>
                var swiper = new Swiper(".mySwiper", {
                  pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                  },
                });
            </script>

          

            <div class="section">
                <div class="cb-section cb-section-border-bottom container cb-content">
                    <div id="owl-example" class="owl-carousel">
                         @foreach($job as $jobs)
                        <div class="job-item">
                            <div class="figure">
                                <div class="image"><a target="_blank" href="{{ route('job_details', [$jobs->link, $jobs->id]) }}" title="{{ $jobs->title }}"><img src="{{ asset('picture/'.basename(str_replace('..','',$jobs->logo))) }}" class="swiper-lazy" data-src="{{ asset('picture/'.basename(str_replace('..','',$jobs->logo))) }}" alt="{{ $jobs->title }} " /></a></div>
                                <div class="figcaption">
                                    <div class="title">
                                        <a target="_blank" href="{{ route('job_details', [$jobs->link, $jobs->id]) }}" title="{{ $jobs->title  }}">{{ $jobs->title  }}</a>
                                    </div>


                                    <div class="caption">
                                        <a class="company-name" href="{{ route('employ-details',  $jobs->links) }}" title="{{ $jobs->links }}" target="_blank">{{ $jobs->name }} </a>
                                        <p class="salary">{!! str_replace(['.000.000', 'VNĐ', 'Đến', 'Mức lương: '],[' triệu', '','-', '$ :'], $jobs->salary) !!}</p>
                                        <div class="location">
                                            <em class="mdi mdi-map-marker"></em>
                                            <p> Hà Nội</p>
                                        </div>
                                    </div>
                                </div>

                                @if (Auth::check()) 
                                <div class="top-icon"> <span class="top apply-job" onclick="apply('{{ $jobs->id }}')">Apply</span> </div>

                                <div class="saves-icon"> <span class="top save-job" onclick="saveJob('{{ $jobs->id }}')">Save</span> </div>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    </div>

                 </div>   
            </div>
                
        </div>
        <style type="text/css">
            .form-sm{
                width: 100%;
                
               /* background: red;*/

               /*border: 1px solid #ddd;*/

                display: flex;

                margin-top: 110px;
            }
            .btn-selected select {
                background-image: none !important;
            }    
            .d-flex{
                display: flex;
                margin: 0 !important;
               
            }

            .select2-selection__rendered {
                display: block;
                /*padding-left: 8px;
                padding-right: 20px;*/
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                line-height: 40px;
                color: #000;
                border-left: 1px solid #ddd
            }

            .sl-action {
                width: 145px;
            }

            .btn-advanced-search {
                background-color: #f5f5f5;
                height: 40px;
                line-height: 40px;
                border: none;
                border-left: 1px solid #e0e0e0;
                font-size: 12px;
                color: #939393;
                padding: 0;
                border-radius: 0;
                width: 100px;
            }

            .select2-selection__placeholder {
                color: #999!important;
            }

            .select2-selection--single {
                width: 100%;
                height: 40px;
                border-radius: 0;
                border: none;
               /* border-left: 1px solid #e0e0e0;*/
                background-color: #f5f5f5;
                font-size: 12px;
            }

            .select2-container {
                box-sizing: border-box;
                display: inline-block;
                margin: 0;
                position: relative;
                vertical-align: middle;
            }

            .w-100 {
                width: 100%!important;
            }

            .input-search {
                height: 40px;
                /*width: 425px;*/
                border-radius: 0;
                border-top-left-radius: 3px;
                border-bottom-left-radius: 3px;
                padding: 0 12px;
                border: none;
                box-shadow: none;
                font-size: 12px;
                color: #000;
            }

            .top-header ul {
                list-style: none;
                padding: 0;
                margin-bottom: 0;
            }

            .select2-selection__arrow {
                height: 40px;
                position: absolute;
                top: 1px;
                right: 1px;
                width: 20px;
            }
            .search-button{
                line-height: 40px;
                width: 40px;
                background: red;
                text-align: center;
                color: #fff;
            }

            .btn-advanced-search {
                background-color: #f5f5f5;
                height: 40px;
                line-height: 40px;
                border: none;
                border-left: 1px solid #e0e0e0;
                font-size: 12px;
                color: #939393;
                padding: 0;
                border-radius: 0;
                width: 100px;
            }



            .btn.fa-search:before{
                color: #fff;
            }
            .btn-submit-search{
                background: red;
            }
            .btn-list-search{
                width: 17%;
                padding: 0 7px;
                border-left: 1px solid #ddd;
            }
            .form-sm form{
                width: 100%;    
            }

            .back-menu-normal{
                 width: 68%;  
                 background: red;
            }

            .select2____menu-list {
                width: 100%;
                border-radius: 0 0 4px 4px;
                border: 1px solid #aaa;
                background-color: #fff;
                box-shadow: 0 2px 9px 1px rgb(0 0 0 / 25%);
                position: absolute;
                z-index: 2;
            }

            .select2____menu-list {
                width: 100%;
                right: 0;
                top: 102%;
            }

            .css-2b097c-container {
                position: relative;
                box-sizing: border-box;
            }

            .css-1jyyht9-control {
                -webkit-box-align: center;
                align-items: center;
                background-color: rgb(245, 245, 245);
                cursor: default;
                display: flex;
                flex-wrap: wrap;
                -webkit-box-pack: justify;
                justify-content: space-between;
                min-height: 30px;
                position: relative;
                transition: all 100ms ease 0s;
                box-sizing: border-box;
                margin: 4px;
                border: 1px solid rgb(170, 170, 170);
                height: 25px;
                border-radius: 0px !important;
                outline: 0px !important;
            }

            .inputs-customn{
                width: 100% !important;
            }

            .css-1hwfws3 {
                -webkit-box-align: center;
                align-items: center;
                display: flex;
                flex: 1 1 0%;
                flex-wrap: wrap;
                padding: 2px 8px;
                position: relative;
                overflow: hidden;
                box-sizing: border-box;
            }

            .css-1wy0on6 {
                -webkit-box-align: center;
                align-items: center;
                align-self: stretch;
                display: flex;
                flex-shrink: 0;
                box-sizing: border-box;
            }

            .css-1wa3eu0-placeholder {
                color: rgb(128, 128, 128);
                margin-left: 2px;
                margin-right: 2px;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                box-sizing: border-box;
            }

            .css-uiymxs {
                margin: 2px;
                padding-bottom: 2px;
                padding-top: 2px;
                visibility: visible;
                color: rgb(51, 51, 51);
                box-sizing: border-box;
                height: 15px;
            }

            .css-1n7v3ny-option {
                background-color: rgb(222, 235, 255);
                color: inherit;
                cursor: default;
                display: block;
                font-size: inherit;
                padding: 0px 12px;
                width: 100%;
                user-select: none;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                box-sizing: border-box;
            }

            .select__menu-list {
                height: auto!important;
                max-height: 200px;
                width: 100%;
            }

            .css-yt9ioa-option {
                background-color: transparent;
                color: inherit;
                cursor: default;
                display: block;
                font-size: inherit;
                padding: 8px 12px;
                width: 100%;
                user-select: none;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                box-sizing: border-box;
            }

            .sl-hover-color{
                color: #827975;
            }

            .sl-hover-color>div:hover {
                color: #fff;
                background-color: #5897fb;
            }

            button, input {
                overflow: visible;
            }

            .css-1jyyht9-control{
                display: none;
            }

            .select__menu-list{
                border: 0 !important;
            }
            .form-sm form{
                width: 80%;
                margin: 0 auto;
                border: 1px solid #ddd;
            }
            .filter{
                width: 100%;
            }
            .btn-input-search{
                width: 50%;
            }
            .btn-selected{
                width: 17%;
            }

        </style>

        <div class="container content-mb">
            
            <div class="form-sm">

                <div class="filter">
                    <form method="get", action="{{ route('filter') }}">
                       
                        <ul class="d-flex">
                            <li class="btn-input-search"><input type="text" name="keyword" id="keywords" class="form-controls input-search" placeholder="Nhập vị trí, tên công ty, địa điểm..."></li>
                           <li class="btn-selected">
                                <div class="sl-action">
                                    <span class="select2-container w-100 select2-container--default false ">
                                        <span class="select2-selection select2-selection--single">
                                            <span class="select2-selection__rendered">

                                                <select class="select__menu-list sl-hover-color" id="industry" name="industry">
                                                    <option class="css-1n7v3ny-option" value="">Tất cả ngành nghề</option>

                                                    @foreach($listDefineJob as $key => $value)

                                                        <option class="css-1n7v3ny-option" value="{{ $key }}">{{ $value }}</option>

                                                    @endforeach

                                                </select>
                                             
                                            </span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                </div>
                            </li>

                            <li class="btn-selected">
                                <div class="sl-action">
                                    <span class="select2-container w-100 select2-container--default false ">
                                        <span class="select2-selection select2-selection--single">
                                            <span class="select2-selection__rendered">
                                                <select class="select__menu-list sl-hover-color" id="location" name="location">
                                                    <option class="css-1n7v3ny-option">Tất cả tỉnh thành</option>

                                                    @foreach($address as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                            
                                        </span>
                                    </span>
                                </div>
                            </li>
                            <li class="btn-list-search"><a class="btn-advanced-search" href="javascript:void(0)">Tìm nâng cao</a></li>
                            <li class="search-button"><button type="submit" class="btn btn-submit-search"><i class="icon-search-w icon-search fas fa-search"></i> </button></li>
                        </ul>

                        <input type="hidden" name="address" id="address_form">
                        <input type="hidden" name="industry" id="industry_form">
                    </form>
                </div>
                
            </div>    
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal-filter" tabindex="-1" role="dialog" aria-labelledby="modal-filter" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tìm  nâng cao</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-5">
                            <div class="col-lg-8 mx-auto">
                                <div class="bg-white p-5 rounded shadow">
                                    <form method="get" action="{{route('filters') }}" class="form-group">
                                        <div class="input-group mb-4 border rounded-pill p-1 inputs-customn">
                                            <input type="search" placeholder="Nhập vị trí, tên công ty, địa điểm..." class="form-control bg-none border-0" name="keyword">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="sel1">Tất cả địa điểm</label>
                                            <select class="form-control" id="locals" name="local">
                                                @foreach($address as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="sel1">Tất cả ngành nghề</label>
                                            <select class="form-control" id="industrys" name="industry">
                                               @foreach($listDefineJob as $key => $value)

                                                    <option class="css-1n7v3ny-option" value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label for="sel1">Mức lương</label>
                                            <select class="form-control" id="salarys">
                                                @foreach($salary as $key => $value)

                                                    <option  value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="sel1">Trình độ</label>
                                            <select class="form-control" id="levels">
                                                @foreach($level as $key => $value)

                                                    <option  value="{{ $key }}">{{ $value }}</option>

                                                @endforeach
                                               
                                            </select>
                                        </div>

                                         <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        

        
            


        <!-- <section class="cb-section cb-section-border-bottom" id="box-job-suggest">
            <div class="cb-box-find">
                <div class="container">
                    <div class="main-box">
                        <div class="box-body">
                            <div class="title">
                                <h1>Đón lấy thành công với <span> Vô số cơ hội nghề nghiệp </span>  </h1>
                            </div>
                            <form method="get", action="{{ route('filter') }}">
                                <div class="main-forms">
                                    <div class="row">
                                        <div class="form-group col-12 form-keyword">
                                          
                                            <input type="search" class="prompt keyword"  name="keyword" id="keywords" placeholder="Chức danh, Kỹ năng, Tên công ty" required>
                                         
                                        </div>

                                         <button class="select-job">Chọn ngành nghề</button>
                                           
                                        <div class="form-group col-12 form-keyword">

                                             <select id="industry" name="industry" class="chosen-select chosen-select-max-three" data-placeholder="Tất cả ngành nghề" multiple>
                                                    <option value="">Chọn ngành nghề</option>
                                                    
                                                   
                                                </select>

                                        </div>

                                        <button class="all-address">Tất cả địa điểm</button>

                                        <div class="form-group col-12 form-keyword">

                                             <select id="location" name="location"  data-placeholder="Tất cả địa điểm" multiple>
                                                    <option value="">Chọn địa điểm</option>
                                                    
                                                    @foreach($address as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                    @endforeach
                                                    
                                            </select>
                                        </div>
                                        
                                    </div>
                                  
                                </div>
                               
                              
                                <div class="toggle-search">
                                   
                                    <div class="expend-less-btn"> <a href="javascript:;"><span class="mdi mdi-chevron-up"></span>Thu gọn</a></div>
                                </div>
                                <div class="find-jobs">
                                    <button class="btn-gradient" onClick="return validataSearchHomePage('vi');">TÌM VIỆC NGAY</button>
                                </div>

                                <input type="hidden" name="address" id="address_form">
                                <input type="hidden" name="industry" id="industry_form">

                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
 -->
        <script src='{{ asset("js/caree/cb_homepage.js") }}'></script>
        <script src='{{ asset("js/caree/library_v2.0.4.js") }}'></script>


        

        <section class="cb-section cb-section-border-bottom">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2>NHÀ TUYỂN DỤNG HÀNG ĐẦU</h2>
                </div>
               <div class="top-employers-list">

                    <?php 

                        $topct = App\Models\employ_info::take(6)->orderBy('id', 'asc')->get();
                    ?>
                    @foreach($topct as $top)

                   
                    <div class="item">
                        <div class="image"><a href="{{ route('employ-details', $top->links??'') }}"  title="" rel="nofollow"><img src="{{ asset('picture/'.basename(str_replace('..','',$top->logo))) }}" alt="" title=""></a></div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="top-employers-banner">
                    <div class="row">

                        @if(isset($banners1))

                        @foreach($banners1 as $value)
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="image adsTopBanner">
                                    <div class="image adsTopBanner">
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="{{ asset($value->image) }}" width="690" height="250" alt="" title="{{ asset($value->title) }}" border="0"></a>
                                        <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;">
                                            <img src="{{ asset($value->image) }}" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>
        </section>

        
        <style type="text/css">
            
            .apply-job{
                cursor: pointer;
                width: 65px !important;
            }
            .save-job{
                background: #00640E !important;
                color: #fff;
            }
            .saves-icon{
                top: 35px;
                right: 10px;
                cursor: pointer;

                z-index: 11;
                position: absolute;
            }
            .input-search {
                height: 40px;
                width: 425px;
                border-radius: 0;
                border-top-left-radius: 3px;
                border-bottom-left-radius: 3px;
                padding: 0 12px;
                border: none;
                box-shadow: none;
                font-size: 12px;
                color: #000;
            }

            .action-header .action-lst {
                background-color: #f5f5f5;
                border-radius: 2px;
            }
        </style>
        <section class="cb-section">
            <div class="container">
                <div class="hot-jobs-list">
                    <div class="tabs">
                        <ul class="tabs-toggle">
                            <li><a href="#tab-1">Việc Làm Nổi Bật</a></li>
                           <!--  <li><a href="#tab-2">Việc Làm VIP ($1000+)</a></li>
                            <li><a href="#tab-3">Việc Làm Từ Top Headhunter</a></li> -->
                        </ul>
                        <div class="tab-content" id="tab-1">
                            <div class="hot-jobs-slide" id="hot-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" >
                                        <div class="swiper-slide">
                                            <div class="row">

                                         
                                                @foreach($job as $jobs)

                                                <div class="col-lg-6 ">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image"><a target="_blank" href="{{ route('job_details', [$jobs->link, $jobs->id]) }}" title="{{ $jobs->title }}"><img src="{{ asset('picture/'.basename(str_replace('..','',$jobs->logo))) }}" class="swiper-lazy" data-src="{{ asset('picture/'.basename(str_replace('..','',$jobs->logo))) }}" alt="{{ $jobs->title }} " /></a></div>
                                                            <div class="figcaption">
                                                                <div class="title">
                                                                    <a target="_blank" href="{{ route('job_details', [$jobs->link, $jobs->id]) }}" title="{{ $jobs->title  }}">{{ $jobs->title  }}</a>
                                                                </div>


                                                                <div class="caption">
                                                                    <a class="company-name" href="{{ route('employ-details',  $jobs->links) }}" title="{{ $jobs->links }}" target="_blank">{{ $jobs->name }} </a>
                                                                    <p class="salary">{!! $jobs->salary  !!}</p>
                                                                    <div class="location">
                                                                        <em class="mdi mdi-map-marker"></em>
                                                                        <p> Hà Nội</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @if (Auth::check()) 
                                                            <div class="top-icon"> <span class="top apply-job" onclick="apply('{{ $jobs->id }}')">Apply</span> </div>

                                                           

                                                            <div class="saves-icon"> <span class="top save-job" onclick="saveJob('{{ $jobs->id }}')">Save</span> </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination">
                                                    <?php  

                                                        $page = (int)($job->total()/8);

                                                    ?> 

                                                   
                                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" style="transform: translateX(2px);">
                                                        @for($i = 1; $i<=$page; $i++)
                                                        <span class="swiper-pagination-bullet {{  $i == 1?'swiper-pagination-bullet-active':'' }} page_paginate{{ $i }}" tabindex="0" role="button" aria-label="Go to slide 1" style="transform: translateX(0px);" onclick="paginate_job({{ $i }})">{{ $i }}</span>
                                                        @endfor

                                                        
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="{{ route('all_job') }}">Xem việc làm mới cập nhật<span class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tab-2">
                            <div class="hot-jobs-slide" id="vip-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper"></div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/viec-lam/muc-luong-20trvnd-s20-vi.html">Xem việc làm mới cập nhật<span class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tab-3">
                            <div class="hot-jobs-slide" id="topheadhunt-jobs-slide">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper"></div>
                                    <div class="swiper-bottom">
                                        <div class="swiper-navigation">
                                            <div class="swiper-prev"><span class="mdi mdi-chevron-left"></span></div>
                                            <div class="main-pagination">
                                                <div class="swiper-pagination"></div>
                                            </div>
                                            <div class="swiper-next"><span class="mdi mdi-chevron-right"></span></div>
                                        </div>
                                        <div class="view-more"><a href="https://careerbuilder.vn/top-headhunt?utm_source=Home_TopHeadhunt&utm_medium=TopHeadhunt&utm_campaign=Promote_TopHeadhunt" target="_blank">Việc Làm Từ Top Headhunter<span class="mdi mdi-arrow-right"></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="form-email-get-job lazy-bg" data-src="https://images.careerbuilder.vn/content/Product/bg-4_3.jpg">
            <div class="container form-email">
                <div class="cb-title cb-title-center cb-title-white">
                    <h2>Đăng ký theo dõi để nhận cập nhật về cơ hội việc làm mới và phù hợp nhất</h2>
                </div>


                    
                    <form method="get" id="home_page_created_jobalert" action="https://careerbuilder.vn/thong-bao-viec-lam">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Nhập địa chỉ email của bạn">
                                    <button type="submit" class="btn-gradient"><span class="mdi mdi-pencil"></span>ĐĂNG KÝ NGAY</button>
                                    <div id="email_validate"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                
                
            </div>
        </section>
        <section class="banner-promo cb-section cb-section-border-bottom">
            <div class="container">
                <div class="row">
                
                    @if(isset($banners2))

                    @foreach($banners2 as $value)
                       
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <div class="image loadAds" id="850"><a href="javascript:void(0)"><img src="{{ asset($value->image) }}" width="330" height="290" alt="{{ asset($value->title) }}" title="{{ asset($value->title) }}" border="0"></a>
                                <div id="beacon_a26fba6e0c" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="{{ asset($value->image) }}" width="0" height="0" alt="{{ asset($value->title) }}" style="width: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif
                  
                </div>
            </div>
        </section>
        <section class="talent-network cb-section cb-section-border-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="title-wrap lazy-bg" data-src="./img/home/bg-2.png">
                            <div class="title">
                                <div class="quote-left"><img src="./img/home/quote1.png" alt="careerbuilder"></div>
                                <h2>Gia tăng cơ hội nghề nghiệp <span>khi kết nối cùng các công ty hàng đầu tại TalentNetwork</span></h2>
                                <div class="quote-right"><img src="./img/home/quote2.png" alt="careerbuilder"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                          

                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image adsTopBanner">
                                        <div class="image adsTopBanner">
                                            <a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/8038e22595ece70fbfe0a75e7020f355.jpg" width="690" height="250" alt="" title="" border="0"></a>
                                            <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=3b99765e4e" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image adsTopBanner">
                                        <div class="image adsTopBanner">
                                            <a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/8038e22595ece70fbfe0a75e7020f355.jpg" width="690" height="250" alt="" title="" border="0"></a>
                                            <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=3b99765e4e" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image adsTopBanner">
                                        <div class="image adsTopBanner">
                                            <a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/8038e22595ece70fbfe0a75e7020f355.jpg" width="690" height="250" alt="" title="" border="0"></a>
                                            <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=3b99765e4e" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image adsTopBanner">
                                        <div class="image adsTopBanner">
                                            <a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/8038e22595ece70fbfe0a75e7020f355.jpg" width="690" height="250" alt="" title="" border="0"></a>
                                            <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=3b99765e4e" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                         
                        <div class="view-more"><a target="_blank" href="javascript:void(0)">Xem thêm<span class="mdi mdi-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cb-section career-development">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2><span>Cẩm nang nghề nghiệp</span></h2>
                </div>

                <?php 

                    $post =  App\Models\post::take(5)->get();
                ?>
                <div class="career-development-slide">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            

                            @foreach($post as $posts)

                           
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="{{ route('blog_detail', $posts->link??'') }}" title="{{ $posts->title }}"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220524/crop/319x319/1653372151_data-analyst-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="{{ $posts->title }}">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="{{ route('blog_detail', $posts->link) }}" title={{ $posts->title }}">{{ $posts->title }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                            
                        </div>
                    </div>
                    <div class="swiper-prev"><span class="lnr lnr-chevron-left"></span></div>
                    <div class="swiper-next"><span class="lnr lnr-chevron-right"></span></div>
                </div>
                <div class="view-more"><a href="javascript:void(0)">Xem thêm<span class="mdi mdi-arrow-right"></span></a></div>
            </div>
        </section>
        <section class="post-a-job lazy-bg" data-src="https://images.careerbuilder.vn/content/Product/bg-3_3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text">
                            <span>Dành cho nhà tuyển dụng</span>
                            <h3>Bạn có vị trí cần đăng tuyển?</h3>
                            <p>Chúng tôi có những giải pháp tối ưu phù hợp với<br> nhiều loại hình công ty và tiêu chuẩn riêng</p>
                        </div>
                        <div class="post-a-job-btn">
                            <a class="btn-gradient" href="{{ route('form_recruit') }}" target="_blank">Đăng tin Tuyển dụng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>

        <script type="text/javascript">

            function paginate_job(id) {
                
                 $.ajax({
                    type: 'GET',
                    url: "{{ route('get-job-home') }}",
                    data: {
                        id: id,
                           
                    },
                    success: function(result){

                        $('.cb-section .swiper-container .row ').html('');

                        $('.cb-section .swiper-container .row ').append(result).show('normal');

                        $('.swiper-pagination-bullet').removeClass('swiper-pagination-bullet-active');

                        $('.page_paginate'+id).addClass('swiper-pagination-bullet-active');

                        // $('.cb-section .swiper-container .swiper-slide').animate({"right": "1408px"}, 200);
        
                    }
                });

            }



            $('#industry').change(function () {
               
                
                // $('.select-job').text($('#industry  option:selected').text());
                $('#industry_form').val($('#industry  option:selected').val());

            })

            $('#location').change(function () {
               
                // $('.all-address').text($('#location  option:selected').text());
                $('#address_form').val($('#location  option:selected').val());

                // alert($('#location  option:selected').val());

            })

            $('.btn-advanced-search').click(function () {


                $('#modal-filter').modal('show');
            })


            
            
        </script>



        <script type="text/javascript">
            $('#owl-example').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    }
                }
            })
        </script>
        <script>
            var submit_error_jobalert_empty = 'Vui lòng nhập email của bạn!';
            var submit_error_jobalert_email = 'Email của bạn không hợp lệ';
        </script>
        <script src="{{ asset('js/footer2.js') }}">/*swiper.js*/</script>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
        <div class="back-drop"></div>
    </main>        
@endsection


