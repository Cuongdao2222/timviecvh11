@extends('frontend.layout.appfe')
@section('content')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}">

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
            transform: translate(-50%, -45%);
            z-index: 999;
        }

        .cb-box-find .main-box .box-body {
            background: #E8F6FD;
        }    
        @media only screen and (max-width: 767px) {
            .top-employers-list .item a{
                top: 0;
                transform: translateY(50%);
                left: 0;
            }
            .job-item .figure{
                padding-right: 0 !important;
            }
            .job-item .figure .figcaption{
                max-width: calc(100% - 100px) !important;
            }
        }
            .job-item .figure .figcaption{
                max-width: calc(100% - 100px) !important;
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


       
    </style>
    <main>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">    
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.auto-complete.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}">
        <style type="text/css">
            
            .hot-jobs-list .main-pagination {

                width: 417px;
            }    
        </style>

        <div class="section-over">

            <div class="cb-main-search">
                <section class="cb-banner-home">
                    <div class="banner-pc">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="pc-swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="https://careerbuilder.vn/vi/jobseekers/ajax/counterbannerclick?url=aHR0cDovL2xkcC50by82a2o2bw==&id=273" rel="nofollow;noreferrer" target="_blank">
                                        <div class="image"> <img src="{{ asset('images/novaland_1900x570_2022_05_18_1652849793.jpg')}} " alt="Banner"> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-page">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="banner-mobile">
                        <div class="swiper-container">
                            <div class="swiper-wrapper" id="mobile-swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" rel="nofollow;noreferrer" target="_blank">
                                        <div class="image"> <img src="{{  asset('images/novaland_640x430_2022_05_18_1653037681.jpg')}} " alt="Banner"> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-page">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <script>$(window).bind("load",function(){var timeoutBn = setTimeout(function(){loadBannerHome();},3e3);});</script> 
            </div>

            <div class="section">
                <section class="cb-section cb-section-border-bottom container cb-content">
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
                                        <a class="company-name" href="/nha-tuyen-dung/{{ $jobs->links }}" title="{{ $jobs->links }}" target="_blank">{{ $jobs->name }} </a>
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
                        @endforeach

                       

                    </div>

                 </section>   
            </div>
                
        </div>
       
        <section class="cb-section cb-section-border-bottom" id="box-job-suggest">
            
            <div class="cb-box-find">
            <div class="container">
                <div class="main-box">
                    <div class="box-body">
                        <div class="title">
                            <h1>Đón lấy thành công với <span> 37,062  cơ hội nghề nghiệp </span></h1>
                        </div>
                        <form method="get", action="{{ route('filter') }}">
                            <div class="main-form">
                                <div class="row">
                                    <div class="form-group col-12 form-keyword">
                                        <label><span class="mdi mdi-magnify"></span></label>
                                        <input type="search" class="prompt keyword"  name="keyword" id="keywords" placeholder="Chức danh, Kỹ năng, Tên công ty" required>
                                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                                    </div>
                                </div>
                               <!--  <div class="advanced-search">
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label><span class="mdi mdi-map-marker"></span></label>
                                            <select id="location" name="location" class="chosen-select chosen-select-max-three" data-placeholder="Tất cả địa điểm" multiple>
                                                <option value="">Chọn địa điểm</option>
                                                <option value="ha-noi_4">Hà Nội</option>
                                                <option value="ho-chi-minh_8">Hồ Chí Minh</option>
                                                <option value="an-giang_76">An Giang</option>
                                                <option value="ba-ria-vung-tau_64">Bà Rịa - Vũng Tàu</option>
                                                <option value="bac-lieu_781">Bạc Liêu</option>
                                                <option value="bac-can_281">Bắc Cạn</option>
                                                <option value="bac-giang_240">Bắc Giang</option>
                                                <option value="bac-ninh_241">Bắc Ninh</option>
                                                <option value="ben-tre_75">Bến Tre</option>
                                                <option value="binh-duong_650">Bình Dương</option>
                                                <option value="binh-dinh_56">Bình Định</option>
                                                <option value="binh-phuoc_651">Bình Phước</option>
                                                <option value="binh-thuan_62">Bình Thuận</option>
                                                <option value="ca-mau_78">Cà Mau</option>
                                                <option value="cao-bang_26">Cao Bằng</option>
                                                <option value="can-tho_71">Cần Thơ</option>
                                                <option value="dak-lak_50">Dak Lak</option>
                                                <option value="dak-nong_1042">Dak Nông</option>
                                                <option value="da-nang_511">Đà Nẵng</option>
                                                <option value="dien-bien_900">Điện Biên</option>
                                                <option value="dong-bang-song-cuu-long_1064">Đồng Bằng Sông Cửu Long</option>
                                                <option value="dong-nai_61">Đồng Nai</option>
                                                <option value="dong-thap_67">Đồng Tháp</option>
                                                <option value="gia-lai_59">Gia Lai</option>
                                                <option value="ha-giang_19">Hà Giang</option>
                                                <option value="ha-nam_351">Hà Nam</option>
                                                <option value="ha-tinh_39">Hà Tĩnh</option>
                                                <option value="hai-duong_320">Hải Dương</option>
                                                <option value="hai-phong_31">Hải Phòng</option>
                                                <option value="hau-giang_780">Hậu Giang</option>
                                                <option value="hoa-binh_18">Hòa Bình</option>
                                                <option value="hung-yen_321">Hưng Yên</option>
                                                <option value="khac_901">Khác</option>
                                                <option value="khanh-hoa_58">Khánh Hòa</option>
                                                <option value="kien-giang_77">Kiên Giang</option>
                                                <option value="kon-tum_60">Kon Tum</option>
                                                <option value="kv-bac-trung-bo_1071">KV Bắc Trung Bộ</option>
                                                <option value="kv-dong-nam-bo_1069">KV Đông Nam Bộ</option>
                                                <option value="kv-nam-trung-bo_1070">KV Nam Trung Bộ</option>
                                                <option value="kv-tay-nguyen_1072">KV Tây Nguyên</option>
                                                <option value="lai-chau_23">Lai Châu</option>
                                                <option value="lang-son_25">Lạng Sơn</option>
                                                <option value="lao-cai_20">Lào Cai</option>
                                                <option value="lam-dong_63">Lâm Đồng</option>
                                                <option value="long-an_72">Long An</option>
                                                <option value="nam-dinh_350">Nam Định</option>
                                                <option value="nghe-an_38">Nghệ An</option>
                                                <option value="ninh-binh_30">Ninh Bình</option>
                                                <option value="ninh-thuan_68">Ninh Thuận</option>
                                                <option value="phu-tho_210">Phú Thọ</option>
                                                <option value="phu-yen_57">Phú Yên</option>
                                                <option value="quang-binh_52">Quảng Bình</option>
                                                <option value="quang-nam_510">Quảng Nam</option>
                                                <option value="quang-ngai_55">Quảng Ngãi</option>
                                                <option value="quang-ninh_33">Quảng Ninh</option>
                                                <option value="quang-tri_53">Quảng Trị</option>
                                                <option value="soc-trang_79">Sóc Trăng</option>
                                                <option value="son-la_22">Sơn La</option>
                                                <option value="tay-ninh_66">Tây Ninh</option>
                                                <option value="thai-binh_36">Thái Bình</option>
                                                <option value="thai-nguyen_280">Thái Nguyên</option>
                                                <option value="thanh-hoa_37">Thanh Hóa</option>
                                                <option value="thua-thien-hue_54">Thừa Thiên- Huế</option>
                                                <option value="tien-giang_73">Tiền Giang</option>
                                                <option value="toan-quoc_1065">Toàn quốc</option>
                                                <option value="tra-vinh_74">Trà Vinh</option>
                                                <option value="tuyen-quang_27">Tuyên Quang</option>
                                                <option value="vinh-long_70">Vĩnh Long</option>
                                                <option value="vinh-phuc_211">Vĩnh Phúc</option>
                                                <option value="yen-bai_29">Yên Bái</option>
                                                <option value="banteay-meanchey_1098">Banteay Meanchey</option>
                                                <option value="battambang_1096">Battambang</option>
                                                <option value="kampong-chhnang_1092">Kampong Chhnang</option>
                                                <option value="kampong-speu_1090">Kampong Speu</option>
                                                <option value="kampot_1085">Kampot</option>
                                                <option value="kandal_1088">Kandal</option>
                                                <option value="kampong-thum-cambodia_1094">Kâmpóng Thum, Cambodia</option>
                                                <option value="kep_1084">Kep</option>
                                                <option value="koh-kong_1091">Koh Kong</option>
                                                <option value="kratie_1093">Kratie</option>
                                                <option value="mondulkiri_1102">Mondulkiri</option>
                                                <option value="otdar-meanchey_1104">Otdar Meanchey</option>
                                                <option value="pailin_1103">Pailin</option>
                                                <option value="phnompenh_1041">Phnompenh</option>
                                                <option value="preah-sihanouk_1105">Preah Sihanouk</option>
                                                <option value="preah-vihear_1099">Preah Vihear</option>
                                                <option value="prey-veng_1089">Prey Veng</option>
                                                <option value="pursat_1095">Pursat</option>
                                                <option value="rotanak-kiri_1101">Rotanak Kiri</option>
                                                <option value="siem-reap_1097">Siem Reap</option>
                                                <option value="sihanoukville_1083">Sihanoukville</option>
                                                <option value="stung-treng_1100">Stung Treng</option>
                                                <option value="svay-rieng_1087">Svay Rieng</option>
                                                <option value="tbong-khmum_1082">Tbong Khmum</option>
                                                <option value="seoul_1018">Seoul</option>
                                                <option value="chicago_1034">Chicago</option>
                                                <option value="florida_1077">Florida</option>
                                                <option value="miami_1033">Miami</option>
                                                <option value="san-diego_1039">San Diego</option>
                                                <option value="hong-kong_1079">Hồng Kông</option>
                                                <option value="khac_1318">Khác</option>
                                                <option value="attapeu_1106">Attapeu</option>
                                                <option value="bokeo_1107">Bokeo</option>
                                                <option value="bolikhamsai_1108">Bolikhamsai</option>
                                                <option value="champasak_1109">Champasak</option>
                                                <option value="houaphanh_1110">Houaphanh</option>
                                                <option value="khammouane_1111">Khammouane</option>
                                                <option value="louang-namtha_1112">Louang Namtha</option>
                                                <option value="luang-prabang_1113">Luang Prabang</option>
                                                <option value="phongsaly_1115">Phongsaly</option>
                                                <option value="sekong_1119">Sekong</option>
                                                <option value="vientiane_1059">Vientiane</option>
                                                <option value="xiangkhouang_1120">Xiangkhouang</option>
                                                <option value="kuala-lumpur_1019">Kuala Lumpur</option>
                                                <option value="malaysia_1078">Malaysia</option>
                                                <option value="yangon_1320">Yangon</option>
                                                <option value="aichi_1319">Aichi</option>
                                                <option value="hokkaido_1043">Hokkaido</option>
                                                <option value="osaka_1000">Osaka</option>
                                                <option value="tokyo_1001">Tokyo</option>
                                                <option value="yokohama_1002">Yokohama</option>
                                                <option value="qatar_1055">Qatar</option>
                                                <option value="quoc-te_1073">Quốc tế</option>
                                                <option value="singapore_1040">Singapore</option>
                                                <option value="melbourne_1004">Melbourne</option>
                                                <option value="sydney_1005">Sydney</option>
                                                <option value="kharkiv_1053">Kharkiv</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label><span class="mdi mdi-menu"></span></label>
                                            <select id="industry" name="industry" class="chosen-select chosen-select-max-three" data-placeholder="Tất cả ngành nghề" multiple>
                                                <option value="">Chọn ngành nghề</option>
                                                <option value="an-ninh-bao-ve_51">An Ninh / Bảo Vệ</option>
                                                <option value="an-toan-lao-dong_58">An toàn lao động</option>
                                                <option value="ban-hang-kinh-doanh_31">Bán hàng / Kinh doanh</option>
                                                <option value="ban-le-ban-si_30">Bán lẻ / Bán sỉ</option>
                                                <option value="bao-hiem_23">Bảo hiểm</option>
                                                <option value="bat-dong-san_28">Bất động sản</option>
                                                <option value="bien-phien-dich_38">Biên phiên dịch</option>
                                                <option value="buu-chinh-vien-thong_32">Bưu chính viễn thông</option>
                                                <option value="chan-nuoi-thu-y_52">Chăn nuôi / Thú y</option>
                                                <option value="chung-khoan_46">Chứng khoán</option>
                                                <option value="cntt-phan-cung-mang_63">CNTT - Phần cứng / Mạng</option>
                                                <option value="cntt-phan-mem_1">CNTT - Phần mềm</option>
                                                <option value="cong-nghe-sinh-hoc_69">Công nghệ sinh học</option>
                                                <option value="cong-nghe-thuc-pham-dinh-duong_70">Công nghệ thực phẩm / Dinh dưỡng</option>
                                                <option value="co-khi-o-to-tu-dong-hoa_14">Cơ khí / Ô tô / Tự động hóa</option>
                                                <option value="dau-khi_26">Dầu khí</option>
                                                <option value="det-may-da-giay-thoi-trang_39">Dệt may / Da giày / Thời trang</option>
                                                <option value="dich-vu-khach-hang_12">Dịch vụ khách hàng</option>
                                                <option value="du-lich_34">Du lịch</option>
                                                <option value="duoc-pham_7">Dược phẩm</option>
                                                <option value="dien-dien-tu-dien-lanh_48">Điện / Điện tử / Điện lạnh</option>
                                                <option value="do-go_35">Đồ gỗ</option>
                                                <option value="giai-tri_15">Giải trí</option>
                                                <option value="giao-duc-dao-tao_13">Giáo dục / Đào tạo</option>
                                                <option value="hang-gia-dung-cham-soc-ca-nhan_10">Hàng gia dụng / Chăm sóc cá nhân</option>
                                                <option value="hang-hai_61">Hàng hải</option>
                                                <option value="hang-khong_60">Hàng không</option>
                                                <option value="hanh-chinh-thu-ky_3">Hành chính / Thư ký</option>
                                                <option value="hoa-hoc_41">Hóa học</option>
                                                <option value="in-an-xuat-ban_64">In ấn / Xuất bản</option>
                                                <option value="ke-toan-kiem-toan_2">Kế toán / Kiểm toán</option>
                                                <option value="khoang-san_65">Khoáng sản</option>
                                                <option value="kien-truc_6">Kiến trúc</option>
                                                <option value="lao-dong-pho-thong_44">Lao động phổ thông</option>
                                                <option value="lam-nghiep_50">Lâm Nghiệp</option>
                                                <option value="luat-phap-ly_24">Luật / Pháp lý</option>
                                                <option value="moi-truong_16">Môi trường</option>
                                                <option value="moi-tot-nghiep-thuc-tap_45">Mới tốt nghiệp / Thực tập</option>
                                                <option value="my-thuat-nghe-thuat-thiet-ke_11">Mỹ thuật / Nghệ thuật / Thiết kế</option>
                                                <option value="ngan-hang_19">Ngân hàng</option>
                                                <option value="nha-hang-khach-san_29">Nhà hàng / Khách sạn</option>
                                                <option value="nhan-su_22">Nhân sự</option>
                                                <option value="noi-ngoai-that_47">Nội ngoại thất</option>
                                                <option value="nong-nghiep_5">Nông nghiệp</option>
                                                <option value="phi-chinh-phu-phi-loi-nhuan_20">Phi chính phủ / Phi lợi nhuận</option>
                                                <option value="quan-ly-chat-luong-qa-qc_42">Quản lý chất lượng (QA/QC)</option>
                                                <option value="quan-ly-dieu-hanh_17">Quản lý điều hành</option>
                                                <option value="quang-cao-doi-ngoai-truyen-thong_67">Quảng cáo / Đối ngoại / Truyền Thông</option>
                                                <option value="san-xuat-van-hanh-san-xuat_25">Sản xuất / Vận hành sản xuất</option>
                                                <option value="tai-chinh-dau-tu_59">Tài chính / Đầu tư</option>
                                                <option value="thong-ke_36">Thống kê</option>
                                                <option value="thu-mua-vat-tu_43">Thu mua / Vật tư</option>
                                                <option value="thuy-loi_53">Thủy lợi</option>
                                                <option value="thuy-san-hai-san_49">Thủy sản / Hải sản</option>
                                                <option value="thu-vien_57">Thư viện</option>
                                                <option value="thuc-pham-do-uong_21">Thực phẩm &amp; Đồ uống</option>
                                                <option value="tiep-thi-marketing_4">Tiếp thị / Marketing</option>
                                                <option value="tiep-thi-truc-tuyen_37">Tiếp thị trực tuyến</option>
                                                <option value="to-chuc-su-kien_68">Tổ chức sự kiện</option>
                                                <option value="trac-dia-dia-chat_54">Trắc địa / Địa Chất</option>
                                                <option value="truyen-hinh-bao-chi-bien-tap_66">Truyền hình / Báo chí / Biên tập</option>
                                                <option value="tu-van_9">Tư vấn</option>
                                                <option value="van-chuyen-giao-nhan-kho-van_33">Vận chuyển / Giao nhận /  Kho vận</option>
                                                <option value="xay-dung_8">Xây dựng</option>
                                                <option value="xuat-nhap-khau_18">Xuất nhập khẩu</option>
                                                <option value="y-te-cham-soc-suc-khoe_56">Y tế / Chăm sóc sức khỏe</option>
                                                <option value="bao-tri-sua-chua_71">Bảo trì / Sửa chữa</option>
                                                <option value="nganh-khac_27">Ngành khác</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label><span class="mdi mdi-currency-usd"></span></label>
                                            <select name="salary" id="salary" class="chosen-select chosen-select-max-one" data-placeholder="Chọn Mức Lương" multiple>
                                                <option value="">Chọn mức lương</option>
                                                <option value=3>Từ  3.000.000 đ</option>
                                                <option value=5>Từ  5.000.000 đ</option>
                                                <option value=7>Từ  7.000.000 đ</option>
                                                <option value=10>Từ  10.000.000 đ</option>
                                                <option value=15>Từ  15.000.000 đ</option>
                                                <option value=20>Từ  20.000.000 đ</option>
                                                <option value=30>Từ  30.000.000 đ</option>
                                                <option value=40>Từ 40.000.000 đ</option>
                                                <option value=50>Từ 50.000.000 đ</option>
                                                <option value=60>Từ 60.000.000 đ</option>
                                                <option value=70>Từ 70.000.000 đ</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label><span class="mdi mdi-briefcase"></span></label>
                                            <select id="level" name="level" class="chosen-select chosen-select-max-one" data-placeholder="Cấp bậc" multiple>
                                                <option value="">Chọn cấp bậc</option>
                                                <option value="sinh-vien-thuc-tap-sinh_1">Sinh viên/ Thực tập sinh</option>
                                                <option value="moi-tot-nghiep_2">Mới tốt nghiệp</option>
                                                <option value="nhan-vien_3">Nhân viên</option>
                                                <option value="truong-nhom-giam-sat_4">Trưởng nhóm / Giám sát</option>
                                                <option value="quan-ly_5">Quản lý</option>
                                                <option value="quan-ly-cap-cao_11">Quản lý cấp cao</option>
                                                <option value="dieu-hanh-cap-cao_12">Điều hành cấp cao</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                           
                            <div class="reset-form"><a href="javascript:void(0);" onclick="resetForm();"><i class="fa fa-rotate-right"></i> Reset</a></div>
                            <div class="toggle-search">
                                <!-- <div class="advanced-search-btn"><a href="javascript:;"><span class="mdi mdi-magnify-plus-outline"></span>Tìm kiếm nâng cao</a></div> -->
                                <div class="expend-less-btn"> <a href="javascript:;"><span class="mdi mdi-chevron-up"></span>Thu gọn</a></div>
                            </div>
                            <div class="find-jobs">
                                <button class="btn-gradient" onClick="return validataSearchHomePage('vi');">TÌM VIỆC NGAY</button>
                            </div>
                        </form>
                    </div>
                    <div class="box-footer">
                        <div class="content">
                            <p>Đăng hồ sơ nghề nghiệp để dễ dàng ứng tuyển nhanh</p>
                        </div>
                        <div class="upload-resume">             <button class="btn-gradient" onclick="window.location='{{ route("regiter-fast-form") }}'">ĐĂNG NGAY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>

        <script src='{{ asset("js/caree/cb_homepage.js") }}'></script>
        <script src='{{ asset("js/caree/library_v2.0.4.js") }}'></script>


        

        <section class="cb-section cb-section-border-bottom">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2>NHÀ TUYỂN DỤNG HÀNG ĐẦU</h2>
                </div>
               <div class="top-employers-list">

                    <?php 

                        $topct = App\Models\employ_info::take(6)->get();
                    ?>
                    @foreach($topct as $top)
                    <div class="item">
                        <div class="image"><a href="javascript:void(0)"  title="" rel="nofollow"><img src="{{ asset('picture/'.basename(str_replace('..','',$jobs->logo))) }}" alt="" title=""></a></div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="top-employers-banner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="image adsTopBanner">
                                    <div class="image adsTopBanner">
                                        <a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/8038e22595ece70fbfe0a75e7020f355.jpg" width="690" height="250" alt="" title="" border="0"></a>
                                        <div id="beacon_3b99765e4e" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5711&amp;campaignid=1671&amp;zoneid=846&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=3b99765e4e" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="image adsTopBanner">
                                    <div class="image adsTopBanner"><a href="javascript:void(0)" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/22992aee146e2c1e3bb3c8dabe3d7fa9.jpg" width="690" height="250" alt="" title="" border="0"></a><div id="beacon_b01d6aa9af" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5924&amp;campaignid=1701&amp;zoneid=847&amp;loc=http%3A%2F%2Flocalhost%3A8000%2F&amp;referer=http%3A%2F%2Flocalhost%3A8000%2Ffilter%3Fkeyword%3Ddfgdfgfdgd&amp;cb=b01d6aa9af" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                                    <a class="company-name" href="/nha-tuyen-dung/{{ $jobs->links }}" title="{{ $jobs->links }}" target="_blank">{{ $jobs->name }} </a>
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
                                                        
                                                        $page = $job->hasMorePages();
                                                        $page = $page+1;

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
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <div class="image loadAds" id="848">
                                <!--<script>OA_show(848);</script>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <div class="image loadAds" id="849">
                                <!--<script>OA_show(849);</script>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <div class="image loadAds" id="850">
                                <!--<script>OA_show(850);</script>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="item">
                            <div class="image loadAds" id="851">
                                <!--<script>OA_show(851);</script>-->
                            </div>
                        </div>
                    </div>
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
                                    <div class="image">
                                        <a href="https://nekoglobal.talentnetwork.vn" target="_blank" title="Neko global" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/logo_1652779932.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Neko global" title="Neko global">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://finhay.talentnetwork.vn" target="_blank" title="Finhay" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/logo_finhay_1651804999.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Finhay" title="Finhay">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://career.vanphu.vn" target="_blank" title="Văn Phú - Invest" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/vanphu_1648778182.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Văn Phú - Invest" title="Văn Phú - Invest">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://risuntek.talentnetwork.vn" target="_blank" title="RISUNTEK VIỆT NAM" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/resuntek_1648778094.png" src="../kiemviecv32/images/graphics/blank.gif" alt="RISUNTEK VIỆT NAM" title="RISUNTEK VIỆT NAM">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://tapdoanhoangminh.talentnetwork.vn" target="_blank" title="Hoàng Minh Group" rel="nofollow">
                                        <img class="lazy-bg" data-src="" src="../kiemviecv32/images/graphics/blank.gif" alt="Hoàng Minh Group" title="Hoàng Minh Group">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://careers.himlamis.edu.vn" target="_blank" title="Trường Quốc tế Him Lam" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/geet_1641798683.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Trường Quốc tế Him Lam" title="Trường Quốc tế Him Lam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://eastwest.talentnetwork.vn" target="_blank" title="East West Industries" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/east-west_logo_1641371141.png" src="../kiemviecv32/images/graphics/blank.gif" alt="East West Industries" title="East West Industries">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4 col-lg-3 col-app-intro">
                                <div class="item">
                                    <div class="image">
                                        <a href="https://corsairmarine.talentnetwork.vn" target="_blank" title="Corsair Marine" rel="nofollow">
                                        <img class="lazy-bg" data-src="https://images.careerbuilder.vn/logotalent/173x90/logo_-corsair-marine_1641370484.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Corsair Marine" title="Corsair Marine">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-more"><a target="_blank" href="https://careerbuilder.vn/vi/talentnetwork">Xem thêm<span class="mdi mdi-arrow-right"></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cb-section career-development">
            <div class="container">
                <div class="cb-title cb-title-center">
                    <h2><span>Cẩm nang nghề nghiệp</span></h2>
                </div>
                <div class="career-development-slide">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item bg-tips">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/khong-tru-ty-le-huong-luong-huu-voi-lao-dong-doi-du-nghi-huu-truoc-tuoi.35A51EEE.html" title="Không trừ tỷ lệ hưởng lương hưu với lao động dôi dư nghỉ hưu trước tuổi"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220527/crop/319x319/1653634974_7.jpeg" src="../kiemviecv32/images/graphics/blank.gif" alt="Không trừ tỷ lệ hưởng lương hưu với lao động dôi dư nghỉ hưu trước tuổi">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Thị trường lao động</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/khong-tru-ty-le-huong-luong-huu-voi-lao-dong-doi-du-nghi-huu-truoc-tuoi.35A51EEE.html" title="Không trừ tỷ lệ hưởng lương hưu với lao động dôi dư nghỉ hưu trước tuổi">Không trừ tỷ lệ hưởng lương hưu với lao động dôi dư nghỉ hưu trước tuổi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/kham-pha-cong-viec-data-analyst-nghe-cua-thoi-dai-so.35A51EE0.html" title="Khám phá công việc Data Analyst - Nghề của &quot;thời đại số&quot;"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220524/crop/319x319/1653372151_data-analyst-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Khám phá công việc Data Analyst - Nghề của &quot;thời đại số&quot;">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/kham-pha-cong-viec-data-analyst-nghe-cua-thoi-dai-so.35A51EE0.html" title="Khám phá công việc Data Analyst - Nghề của &quot;thời đại số&quot;">Khám phá công việc Data Analyst - Nghề của &quot;thời đại số&quot;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-tips">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/tu-2022-nguoi-lao-dong-can-bao-nhieu-nam-dong-bhxh-de-co-luong-huu-toi-da.35A51EEF.html" title="Từ 2022, người lao động cần bao nhiêu năm đóng BHXH để có lương hưu tối đa?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220527/crop/319x319/1653635094_8.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Từ 2022, người lao động cần bao nhiêu năm đóng BHXH để có lương hưu tối đa?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Thị trường lao động</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/tu-2022-nguoi-lao-dong-can-bao-nhieu-nam-dong-bhxh-de-co-luong-huu-toi-da.35A51EEF.html" title="Từ 2022, người lao động cần bao nhiêu năm đóng BHXH để có lương hưu tối đa?">Từ 2022, người lao động cần bao nhiêu năm đóng BHXH để có lương hưu tối đa?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/lam-the-nao-de-tro-thanh-mot-digital-marketing-manager-chuyen-nghiep.35A51EDE.html" title="Làm thế nào để trở thành một Digital Marketing Manager chuyên nghiệp?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220524/crop/319x319/1653368180_lam-the-nao-de-tro-thanh-digital-marketing-manager-chuyen-nghiep-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Làm thế nào để trở thành một Digital Marketing Manager chuyên nghiệp?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/lam-the-nao-de-tro-thanh-mot-digital-marketing-manager-chuyen-nghiep.35A51EDE.html" title="Làm thế nào để trở thành một Digital Marketing Manager chuyên nghiệp?">Làm thế nào để trở thành một Digital Marketing Manager chuyên nghiệp?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/giam-doc-dieu-hanh-ceo-lam-gi-vai-tro-cua-ceo-trong-doanh-nghiep.35A51EDF.html" title="Giám đốc điều hành (CEO) làm gì? Vai trò của CEO trong doanh nghiệp"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220524/crop/319x319/1653369017_giam-doc-dieu-hanh-la-ai-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Giám đốc điều hành (CEO) làm gì? Vai trò của CEO trong doanh nghiệp">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/giam-doc-dieu-hanh-ceo-lam-gi-vai-tro-cua-ceo-trong-doanh-nghiep.35A51EDF.html" title="Giám đốc điều hành (CEO) làm gì? Vai trò của CEO trong doanh nghiệp">Giám đốc điều hành (CEO) làm gì? Vai trò của CEO trong doanh nghiệp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/hse-staff-la-gi-tim-hieu-cong-viec-cua-hse-staff-trong-doanh-nghiep.35A51EE1.html" title="HSE Staff là gì? Tìm hiểu công việc của HSE Staff trong doanh nghiệp"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220526/crop/319x319/1653546234_hse-staff-la-gi-careerbuilder.png" src="../kiemviecv32/images/graphics/blank.gif" alt="HSE Staff là gì? Tìm hiểu công việc của HSE Staff trong doanh nghiệp">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/hse-staff-la-gi-tim-hieu-cong-viec-cua-hse-staff-trong-doanh-nghiep.35A51EE1.html" title="HSE Staff là gì? Tìm hiểu công việc của HSE Staff trong doanh nghiệp">HSE Staff là gì? Tìm hiểu công việc của HSE Staff trong doanh nghiệp</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/android-developer-va-tat-tan-tat-thong-tin-can-biet-ve-nghe.35A51EE3.html" title="Android Developer và tất tần tật thông tin cần biết về nghề"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220526/crop/319x319/1653547057_android-developer-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Android Developer và tất tần tật thông tin cần biết về nghề">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/android-developer-va-tat-tan-tat-thong-tin-can-biet-ve-nghe.35A51EE3.html" title="Android Developer và tất tần tật thông tin cần biết về nghề">Android Developer và tất tần tật thông tin cần biết về nghề</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-tips">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/co-phai-thu-viec-khi-quay-lai-cong-ty-cu-lam-viec.35A51EE6.html" title="Có phải thử việc khi quay lại công ty cũ làm việc?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220527/crop/319x319/1653617401_1.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Có phải thử việc khi quay lại công ty cũ làm việc?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Thị trường lao động</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/co-phai-thu-viec-khi-quay-lai-cong-ty-cu-lam-viec.35A51EE6.html" title="Có phải thử việc khi quay lại công ty cũ làm việc?">Có phải thử việc khi quay lại công ty cũ làm việc?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/chuyen-vien-tu-van-bao-hiem-lam-cong-viec-gi-luong-cao-khong.35A51EE2.html" title="Chuyên viên tư vấn bảo hiểm làm công việc gì? Lương cao không?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220526/crop/319x319/1653546658_chuyen-vien-tu-van-bao-hiem-lam-cong-viec-gi-luong-cao-khong-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Chuyên viên tư vấn bảo hiểm làm công việc gì? Lương cao không?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/chuyen-vien-tu-van-bao-hiem-lam-cong-viec-gi-luong-cao-khong.35A51EE2.html" title="Chuyên viên tư vấn bảo hiểm làm công việc gì? Lương cao không?">Chuyên viên tư vấn bảo hiểm làm công việc gì? Lương cao không?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-tips">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/het-thu-viec-co-duong-nhien-chuyen-sang-hop-dong-chinh-thuc.35A51EE7.html" title="Hết thử việc có đương nhiên chuyển sang hợp đồng chính thức?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220527/crop/319x319/1653617752_2.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Hết thử việc có đương nhiên chuyển sang hợp đồng chính thức?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Thị trường lao động</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/het-thu-viec-co-duong-nhien-chuyen-sang-hop-dong-chinh-thuc.35A51EE7.html" title="Hết thử việc có đương nhiên chuyển sang hợp đồng chính thức?">Hết thử việc có đương nhiên chuyển sang hợp đồng chính thức?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-tips">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/khong-tang-luong-cho-nguoi-lao-dong-nhu-thoa-thuan-cong-ty-co-bi-xu-phat.35A51EEC.html" title="Không tăng lương cho người lao động như thoả thuận, công ty có bị xử phạt?"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220527/crop/319x319/1653635105_5.jpeg" src="../kiemviecv32/images/graphics/blank.gif" alt="Không tăng lương cho người lao động như thoả thuận, công ty có bị xử phạt?">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Thị trường lao động</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/khong-tang-luong-cho-nguoi-lao-dong-nhu-thoa-thuan-cong-ty-co-bi-xu-phat.35A51EEC.html" title="Không tăng lương cho người lao động như thoả thuận, công ty có bị xử phạt?">Không tăng lương cho người lao động như thoả thuận, công ty có bị xử phạt?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item bg-default">
                                    <div class="img"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity/cam-nang-nghe-nghiep-chi-tiet-nhat-ve-nhan-vien-phat-trien-kinh-doanh.35A51EE4.html" title="Cẩm nang nghề nghiệp chi tiết nhất về nhân viên phát triển kinh doanh"><img class="swiper-lazy" data-src="https://images.careerbuilder.vn/tintuc/career/20220526/crop/319x319/1653547140_cam-nang-chi-tiet-nhat-ve-nhan-vien-phat-trien-kinh-doannh-careerbuilder.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Cẩm nang nghề nghiệp chi tiết nhất về nhân viên phát triển kinh doanh">
                                        </a>
                                    </div>
                                    <div class="caption">
                                        <p class="category-title">Wiki Career</p>
                                        <a target="_blank" class="title" href="https://careerbuilder.vn/vi/talentcommunity/cam-nang-nghe-nghiep-chi-tiet-nhat-ve-nhan-vien-phat-trien-kinh-doanh.35A51EE4.html" title="Cẩm nang nghề nghiệp chi tiết nhất về nhân viên phát triển kinh doanh">Cẩm nang nghề nghiệp chi tiết nhất về nhân viên phát triển kinh doanh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev"><span class="lnr lnr-chevron-left"></span></div>
                    <div class="swiper-next"><span class="lnr lnr-chevron-right"></span></div>
                </div>
                <div class="view-more"><a target="_blank" href="https://careerbuilder.vn/vi/talentcommunity">Xem thêm<span class="mdi mdi-arrow-right"></span></a></div>
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
            
        </script>



        <script type="text/javascript">
            $('#owl-example').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
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
       
        <div class="back-drop"></div>
    </main>        
@endsection


