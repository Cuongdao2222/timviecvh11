
@extends('frontend.layout.appfe')
@section('content')
<main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common-job-detail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search-result-list-detail.css') }}">
    <section class="find-jobs-form">
        <div class="container">
            <div class="main-form">
                <div class="close-input-filter"><em class="lnr lnr-cross"></em></div>
                <form>
                    <div class="advanced-search">
                        <div class="form-group form-keyword">
                            <input type="search" class="keyword" name="keyword" id="keyword" placeholder="Chức danh, Kỹ năng, Tên công ty">
                            <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                        </div>
                        <div class="form-group form-select-chosen">
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
                        <div class="form-group form-select-chosen">
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
                        <div class="form-group find-jobs">
                            <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
                                <p>Tìm Ngay</p>
                                <span class="mdi mdi-magnify"></span> 
                            </button>
                        </div>
                        <div class="form-group animation">
                            <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
                                <p>Tìm Ngay</p>
                                <span class="mdi mdi-magnify"></span> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="search-result-list-detail template-2">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 mb-15">
                    <section class="apply-now-banner  ">
                        <div class="image"><img src="https://images.careerbuilder.vn/content/news/1.jpg" alt=""></div>
                        <div class="apply-now-content">
                            <div class="job-desc">
                                <h1 class="title">{{ @$data->title }}</h1>
                                <a class="employer job-company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-may-theu-giay-an-phuoc.35A4F400.html">Công Ty TNHH May Thêu Giày An Phước</a>  
                            </div>
                            <div class="apply-now-btn ">        
                                <a href="javascript:void(0);" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng Tuyển </a>        
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-7 col-custom-xxl-9">
                    <div class="tabs">
                        <nav class="job-result-nav">
                            <ul class="tabs-toggle">
                                <li id="tabs-job-detail"><a href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html" data-href="#tab-1">Chi tiết</a></li>
                                <li id="tabs-job-company"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-may-theu-giay-an-phuoc.35A4F400.html" data-href="#tab-2">Tổng quan công ty</a></li>
                            </ul>
                            <div class="job-detail-tool">
                                <ol class="tabs-saved">
                                    <li>
                                        <a class="toollips save-job chk_save_35B9A7C0 " href="javascript:void(0);" data-id="35B9A7C0"  onclick="popuplogin()">
                                            <i class="mdi mdi-heart-outline"></i>
                                            <div class="toolip">
                                                <p>Lưu việc làm</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <i class="mdi mdi-share-variant"></i>
                                            <div class="dropdown-menu">
                                                <div class="social-list">
                                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0"><i class="fa fa-facebook"></i></a>
                                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0"><i class="fa fa-linkedin"></i></a>
                                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0"><i class="fa fa-envelope"></i></a>
                                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0"><i class="fa fa-google"></i></a>
                                                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="report-job toollips" href="javascript:void(0)">
                                            <i class="fa fa-flag-o"></i>
                                            <div class="toolip">
                                                <p> Báo xấu </p>
                                            </div>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </nav>
                        <div class="tab-content" id="tab-1">
                            <section class="job-detail-content">
                                <div class="bg-blue">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box">
                                                <div class="map">
                                                    <strong><em class="mdi mdi-map-marker"></em>Địa điểm</strong>
                                                    <p><a href="https://careerbuilder.vn/viec-lam/ho-chi-minh-l8-vi.html">Hồ Chí Minh</a></p>
                                                    <a href="javascript:void(0)" onclick="show_map_detail_job();"><img src="img/icon-map.svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li>
                                                        <strong><em class="mdi mdi-update"> </em>Ngày cập nhật</strong>
                                                        <p>{{ $data->updated_at->format('d/m/Y') }}</p>
                                                    </li>
                                                    <li>
                                                        <strong> <em class="mdi mdi-briefcase"></em>Ngành nghề</strong>
                                                        <p>                <a href="https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html" >
                                                            Nhân sự
                                                            </a>
                                                            ,                                 <a href="https://careerbuilder.vn/viec-lam/det-may-da-giay-thoi-trang-c39-vi.html" >
                                                            Dệt may / Da giày / Thời trang
                                                            </a>
                                                            ,                                 <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html" >
                                                            Hành chính / Thư ký
                                                            </a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <strong><em class="mdi mdi-briefcase-edit"> </em>Hình thức</strong>
                                                        <p>Nhân viên chính thức</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li>
                                                        <strong><i class="fa fa-usd"></i>Lương</strong>
                                                        <p>Cạnh tranh</p>
                                                    </li>
                                                    <li>
                                                        <strong><i class="fa fa-briefcase"></i>Kinh nghiệm</strong>
                                                        <p>
                                                            0 - 5 Năm
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <strong><i class="mdi mdi-account"></i>Cấp bậc</strong>
                                                        <p>Nhân viên</p>
                                                    </li>
                                                    <li>
                                                        <strong><i class="mdi mdi-calendar-check"></i>Hết hạn nộp</strong>
                                                        <p>15/07/2022</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">Phúc lợi </h3>
                                    <ul class="welfare-list">
                                        <li><span class="fa fa-medkit"></span> Chế độ bảo hiểm</li>
                                        <li><span class="fa fa-money"></span> Phụ cấp</li>
                                        <li><span class="fa fa-black-tie"></span> Đồng phục</li>
                                        <li><span class="fa fa-usd"></span> Chế độ thưởng</li>
                                        <li><span class="fa fa-line-chart"></span> Tăng lương</li>
                                        <li><span class="fa fa-credit-card"></span> Công tác phí</li>
                                        <li><span class="fa fa-money"></span> Phụ cấp thâm niên</li>
                                        <li><span class="fa fa-briefcase"></span> Nghỉ phép năm</li>
                                    </ul>
                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">Mô tả Công việc</h3>
                                    {!!  str_replace('
                                    <h2>Mô tả công việc</h2>
                                    ', '', $data->detail)!!}
                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">Yêu Cầu Công Việc</h3>
                                    {!!  str_replace('
                                    <h2>Yêu cầu công việc</h2>
                                    ', '', $data->requirements)!!}
                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">Quyền lợi được hưởng</h3>
                                    {!!str_replace('
                                    <h2>Quyền lợi được hưởng</h2>
                                    ', '', $data->rights)!!}
                                </div>
                                <div class="share-this-job">
                                    <span>Chia sẻ việc làm này:</span> 
                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0"> <i class="fa fa-facebook"></i> </a>
                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0">  <i class="fa fa-linkedin"></i></a>
                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0">  <i class="fa fa-envelope"></i></a> 
                                    <a target="_blank" href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html&pubid=ra-559220ee7f9c15d6&title=Nhân Viên Tuyển Dụng&ct=1&pco=tbxnj-1.0">  <i class="fa fa-google"></i></a>
                                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize=false></div>
                                </div>
                                <div class="job-detail-bottom">
                                    <div class="job-detail-bottom-wrapper">
                                        <div class="apply-now-content">
                                            <div class="job-desc">
                                                <a class="toollips save-job chk_save_35B9A7C0 " href="javascript:void(0);" data-id="35B9A7C0"  onclick="popuplogin()">
                                                <i class="mdi mdi-heart-outline"></i>
                                                <span class="text">Lưu việc làm</span>
                                                </a>
                                                <a href="javascript:void(0);" onclick="showboxJobalert()"><i class="mdi mdi-email-outline"></i><span class="text">Gửi tôi việc làm tương tự</span></a>
                                                <a class="report-job toollips" href="javascript:void(0)">
                                                    <i class="fa fa-flag-o"></i><span>Báo xấu</span>
                                                    <div class="toolip">
                                                        <p> Báo xấu </p>
                                                    </div>
                                                </a>
                                                <div class="report-modal" style="display: none">
                                                    <div class="modal-title">
                                                        <p>Vì sao bạn muốn báo xấu nhà tuyển dụng này? </p>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="feedback_job" id="feedback_job" method="POST" autocomplete="off">
                                                            <input type="hidden" name="job_url" id="job_url" value="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9A7C0.html" />
                                                            <div class="form-group">
                                                                <input type="text" id="email" name="email" placeholder="Nhập địa chỉ email " onkeyup="this.setAttribute('value', this.value);" value="">
                                                                <p class="text-validate error_email" > </p>
                                                            </div>
                                                            <div class="list-radio" id="reason" name='reason'>
                                                                <input type="radio" id="reason-1" name="reason" value="1">
                                                                <label for="reason-1"> Việc làm không hợp pháp </label>
                                                                <br>
                                                                <input type="radio" id="reason-2" name="reason" value="2">
                                                                <label for="reason-2"> Không cung cấp đủ thông tin </label>
                                                                <br>
                                                                <input type="radio" id="reason-3" name="reason" value="3">
                                                                <label for="reason-3"> Khác </label>
                                                                <p class="text-validate error_reason" ></p>
                                                            </div>
                                                            <div class="box-reason form-group">
                                                                <input type="text" id="box_reason" name="box_reason">
                                                                <p class="text-validate error_box_reason" > </p>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Mã xác nhận" onkeyup="this.setAttribute('value', this.value);" value="">
                                                                <p class="text-validate error_captcha" ></p>
                                                            </div>
                                                            <div id="captchaim"  style="float:left" class="form-group" ><img width="150" height="50" alt="" src="https://images.careerbuilder.vn/rws/captcha/af07d8ff32512a92e980182265b1a4a6.png" class="img_code" /><input type="hidden" name="key_captcha" id="key_captcha" value="af07d8ff32512a92e980182265b1a4a6"></div>
                                                            <a style="padding-left: 10px" onclick="refeshImgCaptcha('captchaim');" href="javascript:void(0);" class="line_bot" id="trynewcode">Thử mã mới</a> 
                                                            <div class="form-group" style="clear:left">
                                                                <button class="btn-send-report" onclick="saveFeedbackJob();return false;"> Báo xấu </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <script>
                                                    var language_fbjob = {
                                                        send_report_success:"Gửi báo xấu thành công",
                                                        send_report_unsuccess:"Không thành công, vui lòng kiểm tra lại thông tin đã điền"
                                                    };
                                                    if(typeof language === 'undefined') var language = language_fbjob;
                                                    else    $.extend(language, language_fbjob);
                                                    function saveFeedbackJob() {
                                                        if ($("#feedback_job").validate({
                                                                ignore: ":hidden",
                                                                onkeyup: false,
                                                                rules: {
                                                                    email:{required: true, email: true,isemail:true},
                                                                    box_reason: {required: true},
                                                                    reason:{ required:true },
                                                                    captcha:{ required:true }
                                                                },
                                                                errorPlacement: function(error, element) {
                                                                    var name = element.attr('name');
                                                                    var errorSelector = '.error_'+name;
                                                                    var $element = $(errorSelector);
                                                                    $(errorSelector).html(error.html());
                                                                },
                                                                success: function(element) {
                                                                    element.remove();
                                                                },
                                                                messages: {
                                                                    email: {
                                                                        required: language.js_alert_nodata,
                                                                        email: language.js_alert_email_invalid,
                                                                        isemail: language.js_alert_email_invalid
                                                                    },
                                                                    box_reason: {
                                                                        required: language.js_alert_nodata
                                                                    },
                                                                    reason: {
                                                                        required: language.js_alert_nodata
                                                                    },
                                                                    captcha:{
                                                                        required: language.js_alert_nodata
                                                                    }
                                                                },
                                                            }).form() == false) return false;
                                                        $.ajax({
                                                            type: "POST",
                                                            url: PATH_KIEMVIEC + 'jobs/feedbackjob',
                                                            data: $('#feedback_job').serialize(),
                                                            success: function(rs) {
                                                                if (rs == 1) {
                                                                    show_noti(1, language.send_report_success);
                                                                } else {
                                                                    show_noti(2, language.send_report_unsuccess);
                                                                }
                                                                refeshImgCaptcha('captchaim');
                                                            }
                                                        });
                                                    }
                                                    function refeshImgCaptcha(id){
                                                        $.ajax({
                                                            type:'POST',
                                                            url:PATH_KIEMVIEC+'jobseekers/index/imagecaptchanew',
                                                            success:function(data){
                                                                $('#'+id).html(data)
                                                            }
                                                        });
                                                    }
                                                    $(document).ready(function() {
                                                        $('input[type="radio"]').click(function() {
                                                            if ($(this).attr("value") == "3") {
                                                                $('.box-reason').show(500);
                                                            } else {
                                                                $('.box-reason').hide(500);
                                                            }
                                                        });
                                                        $('.report-job').on('click', function (e) {
                                                            e.preventDefault();
                                                            $.fancybox.open($('.report-modal'))
                                                        })
                                                    });
                                                </script>
                                            </div>
                                            <div class="apply-now-right">
                                                <div class="apply-now-btn  ">            <a href="javascript:void(0);" class="btn-gradient btnApplyClick"> Nộp Đơn Ứng Tuyển </a>            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="salary_taskbar" name="salary_taskbar" value="0" />
                                <input type="hidden" id="industry_taskbar" name="industry_taskbar" value="22,39,3" />
                                <input type="hidden" id="location_taskbar" name="location_taskbar" value="8" />
                                <input type="hidden" id="keyword_taskbar" name="keyword_taskbar" value="Nhân Viên Tuyển Dụng" />
                                <input type="hidden" id="title_alert" value="Nhân Viên Tuyển Dụng" />
                                <script>
                                    $(document).on('click', '.btnApplyClick', function(){
                                        
                                                $('#apply_url').attr('href', "https://careerbuilder.vn/vi/jobseekers/jobs/apply?job_id=35B9A7C0&s=cbnon");
                                            $('#span_title').html("Nhân Viên Tuyển Dụng");
                                            $.fancybox.close('all');
                                            $.fancybox.open($("#apply-job-modal"));
                                            
                                    });
                                </script>
                                <div class="job-detail-bottom-banner " id="">
                                    <div class="adsBannerOA" data-id="852"></div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function () { loadBannerOA(); });
                                </script>
                            </section>
                            <div class="maps-modal" style="display: none">
                                <div class="d-flex box-modal">
                                    <div class="map" id="jobMap" style="display: none;"></div>
                                    <div class="info">
                                        <div class="tabs-toggle">
                                            <a href="javascript:void(0);" class="item active" data-tab="1">Thông Tin Tuyển Dụng</a>
                                            <a href="javascript:void(0);" class="item" data-tab="2">Các công việc tương tự</a>
                                        </div>
                                        <div class="main-content">
                                            <div class="tab-content active" id="maps-tab-1">
                                                <div class="box-about">
                                                    <div class="title-h4">
                                                        <h4>Giới thiệu về công ty</h4>
                                                    </div>
                                                    <div class="figure">
                                                        <div class="image">
                                                            <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-may-theu-giay-an-phuoc.35A4F400.html" target="_blank">
                                                            <img
                                                                class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot6/2816/110x55/74705logoap.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH May Thêu Giày An Phước">
                                                            </a>
                                                        </div>
                                                        <div class="figcaption">
                                                            <h5>Công Ty TNHH May Thêu Giày An Phước</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-info">
                                                    <div class="title-h4">
                                                        <h4>Thông Tin Tuyển Dụng</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p class="blue">Nhân Viên Tuyển Dụng</p>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Cấp bậc</td>
                                                                    <td>Nhân viên</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lương</td>
                                                                    <td>$
                                                                        Cạnh tranh
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Hết hạn nộp</td>
                                                                    <td>15/07/2022</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ngành nghề</td>
                                                                    <td>
                                                                        <a href="https://careerbuilder.vn/viec-lam/nhan-su-c22-vi.html" >
                                                                        Nhân sự
                                                                        ,                                                </a>
                                                                        <a href="https://careerbuilder.vn/viec-lam/det-may-da-giay-thoi-trang-c39-vi.html" >
                                                                        Dệt may / Da giày / Thời trang
                                                                        ,                                                </a>
                                                                        <a href="https://careerbuilder.vn/viec-lam/hanh-chinh-thu-ky-c3-vi.html" >
                                                                        Hành chính / Thư ký
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kinh nghiệm</td>
                                                                    <td>
                                                                        0 - 5 Năm
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-local">
                                                    <div class="title-h4">
                                                        <h4>Địa điểm</h4>
                                                    </div>
                                                    <div class="content">
                                                        <p>Hồ Chí Minh</p>
                                                        <ul class="clearall">
                                                            <li>
                                                                <em class="mdi mdi-map-marker"></em>
                                                                <a href="javascript:void(0);" onclick="movetoCenter(0)">100 An Dương Vương, phường 9, Quận 5, Hồ Chí Minh</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="box-apply ">
                                                    <a href="javascript:void(0);" class="btn-gradient btnApplyClick">
                                                    Nộp Đơn Ứng Tuyển
                                                    </a>
                                                </div>
                                                <div class="box-contact">
                                                    <ul>
                                                        <li>
                                                            <a class="toollips save-job chk_save_35B9A7C0 " href="javascript:void(0);" data-id="35B9A7C0"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <div class="toolip">
                                                                    <p>Lưu việc làm</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li> <a class="email" href="javascript:void(0);" onclick="showboxJobalert()"><i class="mdi mdi-email"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="maps-tab-2">
                                                <section class="jobs-side-list"></section>
                                                <div class="jobs-list">
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-nha-hang-nhat-tokyo-deli.35A77DB7.html" target="_blank"  title="Hệ thống nhà hàng Nhật Tokyo Deli">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot3/169143/67x67/141234standardlogo_001.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Hệ thống nhà hàng Nhật Tokyo Deli">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân Viên Tuyển Dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B99B3A.html?s=rec">Nhân Viên Tuyển Dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Hệ thống nhà hàng Nhật Tokyo Deli</p>
                                                                    <p class="salary">$ 7 Tr - 8,5 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-dau-tu-dich-vu-hum-viet-nam.35A87FA0.html" target="_blank"  title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ HUM VIỆT NAM">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot8/235168/67x67/13580310974373.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ HUM VIỆT NAM">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên Tuyển dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B99BD8.html?s=rec">Nhân viên Tuyển dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ HUM VIỆT NAM</p>
                                                                    <p class="salary">$ Cạnh tranh</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/mf-viet-nam-information-technology-co-ltd.35A80ECC.html" target="_blank"  title="MF Viet Nam Information Technology Co.,Ltd">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot4/206284/67x67/90857logomf.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="MF Viet Nam Information Technology Co.,Ltd">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="NHÂN VIÊN TUYỂN DỤNG" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B929B8.html?s=rec">NHÂN VIÊN TUYỂN DỤNG</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">MF Viet Nam Information Technology Co.,Ltd</p>
                                                                    <p class="salary">$ 10 Tr - 20 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hà Nội | Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dtsx-bao-ngoc.35A8F06A.html" target="_blank"  title="Công Ty Cổ Phần ĐTSX Bảo Ngọc">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot2/264042/67x67/161921bnagroup.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần ĐTSX Bảo Ngọc">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên tuyển dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B98BD0.html?s=rec">Nhân viên tuyển dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty Cổ Phần ĐTSX Bảo Ngọc</p>
                                                                    <p class="salary">$ 10 Tr - 15 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-binh-viet-duc-bivid.35A8D45E.html" target="_blank"  title="Công ty TNHH Bình Việt Đức (BIVID)">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot2/256862/67x67/121241logo-bivid_chuan.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH Bình Việt Đức (BIVID)">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân Viên Tuyển Dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B98C34.html?s=rec">Nhân Viên Tuyển Dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công ty TNHH Bình Việt Đức (BIVID)</p>
                                                                    <p class="salary">$ 9 Tr - 11 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-lien-doanh-vinh-hung-tmi-viet-nam.35A8E27D.html" target="_blank"  title="Công ty TNHH, Liên Doanh Vĩnh Hưng (TMI Việt Nam)">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot7/260477/67x67/94530logocty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH, Liên Doanh Vĩnh Hưng (TMI Việt Nam)">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên tuyển dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B95596.html?s=rec">Nhân viên tuyển dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công ty TNHH, Liên Doanh Vĩnh Hưng (TMI Việt Nam)</p>
                                                                    <p class="salary">$ 10 Tr - 13 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-bat-dong-san-grandland.35A8B759.html" target="_blank"  title="CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN GRANDLAND">
                                                                <img class="lazy-hidden" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN GRANDLAND">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân Viên Tuyển Dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B9592D.html?s=rec">Nhân Viên Tuyển Dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN GRANDLAND</p>
                                                                    <p class="salary">$ 8 Tr - 13 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-thoi-trang-an-viet-vm-style.35A8D54D.html" target="_blank"  title="Công ty TNHH Thời trang An Việt (VM STYLE)">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot1/257101/67x67/170850logotrang.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH Thời trang An Việt (VM STYLE)">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân viên tuyển dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B971F0.html?s=rec">Nhân viên tuyển dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công ty TNHH Thời trang An Việt (VM STYLE)</p>
                                                                    <p class="salary">$ 8 Tr - 10 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tap-doan-ktg.35A882DE.html" target="_blank"  title="Tập đoàn KTG">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot8/235998/67x67/80145logoktg.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Tập đoàn KTG">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="NHÂN VIÊN TUYỂN DỤNG" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B95692.html?s=rec">NHÂN VIÊN TUYỂN DỤNG</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Tập đoàn KTG</p>
                                                                    <p class="salary">$ 9 Tr - 12 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="job-item">
                                                        <div class="figure">
                                                            <div class="image">
                                                                <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-dau-tu-quoc-te-newa-group.35A8F2CC.html" target="_blank"  title="Công Ty Cổ Phần Tập Đoàn Đầu Tư Quốc Tế Newa Group">
                                                                <img class="lazy-hidden" data-src="https://images.careerbuilder.vn/employer_folders/lot2/264652/67x67/91204hinhanhnewa.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Tập Đoàn Đầu Tư Quốc Tế Newa Group">
                                                                </a>
                                                            </div>
                                                            <div class="figcaption">
                                                                <div class="timeago"></div>
                                                                <div class="title"><a target="_blank" title="Nhân Viên Tuyển Dụng" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B96BD6.html?s=rec">Nhân Viên Tuyển Dụng</a></div>
                                                                <div class="caption">
                                                                    <p class="company-name">Công Ty Cổ Phần Tập Đoàn Đầu Tư Quốc Tế Newa Group</p>
                                                                    <p class="salary">$ 7 Tr - 10 Tr VND</p>
                                                                    <div class="location">
                                                                        <ul>
                                                                            <li>Hồ Chí Minh</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.js'></script>
                            <link href='https://cdn.jsdelivr.net/npm/@goongmaps/goong-js@1.0.6/dist/goong-js.css' rel='stylesheet' />
                            <script>
                                var map_container = 'jobMap';
                                var option_zoom = 14;
                                var strMapGoongAccess = 'KxinmQjfV9bpwUkrhqJuIrkq00hataFG2LVS13yY#cb';
                                var strMapGoongApi = 'LDLS1XzFyZxDWcxOJgXnU9DhFl2UnrOZp0qAymJG';
                                var arrPostion = [10.7574202,106.6705781];
                                var init_map = false;
                                var pinData = [
                                    
                                                                                                                                            {
                                    address: "100 An Dương Vương, phường 9, Quận 5, Hồ Chí Minh",
                                    location_id : '8',
                                    position:'10.7574202,106.6705781',
                                    title : '<div class="maps-tooltip"><div class="figure"><div class="image"><img src="https://images.careerbuilder.vn/employer_folders/lot6/2816/110x55/74705logoap.jpg" alt="Performance Marketing Specialist" style="max-height: 50px"></div><div class="caption"><p class="title">Nhân Viên Tuyển Dụng</p><p class="company"><a href="javascript:void(0);"">Công Ty TNHH May Thêu Giày An Phước</a></p></div></div><p class="location">100 An Dương Vương, phường 9, Quận 5, Hồ Chí Minh</p><p class="salary">$ \
                                     Cạnh tranh \
                                    </p></div>'
                                },
                                                                                                                    
                                
                                ];
                                
                            </script>
                            <script>
                                $(document).ready(function(){
                                    $("div .map a").click(function(){
                                        $("#jobMap").fadeIn("fast");
                                        init_map = true;
                                        $.getScript(DOMAIN_STATIC+"/themes/careerbuilder/js/maps.js");
                                    });
                                });
                            </script>
                            <script>/*maps.js*/
                                if(typeof strMapGoongAccess!=='undefined'&&typeof strMapGoongApi!=='undefined'){goongjs.accessToken=strMapGoongAccess;if(typeof map_container==='undefined')
                                map_container='map';if(typeof opt_draggable==='undefined')
                                opt_draggable=true;if(typeof option_zoom==='undefined')
                                option_zoom=14;if(isNaN(option_zoom))
                                option_zoom=14;var map_api="https://rsapi.goong.io/Place/[FUNCTION]?api_key="+strMapGoongApi;if(typeof arrPostion==='undefined'){arrPostion=[10.783353464561465,106.69269561767578];}
                                var position=[parseFloat(arrPostion[1]),parseFloat(arrPostion[0])];if(typeof init_map==='undefined')
                                init_map=true;if(init_map==true){var map=new goongjs.Map({container:map_container,style:'https://tiles.goong.io/assets/goong_map_web.json',center:position,zoom:option_zoom});}
                                if(typeof pinData!=='undefined'&&init_map==true){var marker=new goongjs.Marker({draggable:false});var arrData=[];$.each(pinData,function(key,val){var strPosition=val.position;var arrPosition=strPosition.split(",");var objData={'type':'Feature','properties':{'description':val.title},'geometry':{'type':'Point','coordinates':[$.trim(arrPosition[1]),$.trim(arrPosition[0])]}};arrData.push(objData);});map.on('load',function(){map.loadImage('https://images.careerbuilder.vn/content/images/icon/custom_marker.png',function(error,image){if(error)throw error;map.addImage('custom-marker',image);map.addSource('places',{'type':'geojson','data':{'type':'FeatureCollection','features':arrData}});map.addLayer({'id':'places','type':'symbol','source':'places','layout':{'icon-image':'custom-marker','icon-allow-overlap':true}});});var popup=new goongjs.Popup({closeButton:false,closeOnClick:false});map.on('mouseenter','places',function(e){var coordinates=e.features[0].geometry.coordinates.slice();var description=e.features[0].properties.description;while(Math.abs(e.lngLat.lng-coordinates[0])>180){coordinates[0]+=e.lngLat.lng>coordinates[0]?360:-360;}
                                new goongjs.Popup().setLngLat(coordinates).setHTML(description).addTo(map);});map.on('mouseleave','places',function(){});});$.each(pinData,function(key,val){var strPosition=val.position;var arrPosition=strPosition.split(",");var coordinates=[$.trim(arrPosition[1]),$.trim(arrPosition[0])];new goongjs.Popup().setLngLat(coordinates).setHTML(val.title).addTo(map);});}else if(init_map==true){var marker=new goongjs.Marker({draggable:opt_draggable}).setLngLat(position).addTo(map);function onDragEnd(){var lngLat=marker.getLngLat();$("#lng").val(lngLat.lng);$("#lat").val(lngLat.lat);}
                                marker.on('dragend',onDragEnd);var strAddress=$("#address").val();if(typeof strAddress!=='undefined'&&strAddress!='')
                                callListGoongmap($("#address").val());}}
                                function movetoCenter(i){if(typeof pinData[i].position!="undefined"&&typeof map!="undefined"){var strPosition=pinData[i].position;var arrPosition=strPosition.split(",");position=[$.trim(arrPosition[1]),$.trim(arrPosition[0])];marker.setLngLat(position).addTo(map);map.setCenter(position);map.setZoom(14);}}
                                function autoSuggest(){let address=$("#address").val();callListGoongmap(address);}
                                function callListGoongmap(addr){let funcname="AutoComplete";let suggest_addr_api=map_api.replace("[FUNCTION]",funcname)+"&input="+encodeURI(addr);$.get(suggest_addr_api,function(resp){if(resp.status=="OK"){displayList(resp.predictions);}},"json");}
                                function displayList(data){var matched=[];var matchedID=[];for(var i=0;i<data.length;i++){matched.push(data[i].description);matchedID[data[i].description]=data[i].place_id;}
                                if(data.length>0){$("#address").autocomplete({source:function(request,response){response(matched);},focus:function(event,ui){return false;},select:function(event,ui){$("#address").val(ui.item.value);pointListMapTile(matchedID[ui.item.value]);return false;},create:function(){$(this).data('ui-autocomplete')._renderItem=function(ul,item){return $("<li></li>").data("item.autocomplete",item).append("<a>"+item.value+"</a>").appendTo(ul);};}});}}
                                function pointListMapTile(id){let funcname="Detail";let detail_addr_api=map_api.replace("[FUNCTION]",funcname)+"&place_id="+encodeURI(id);$.get(detail_addr_api,function(resp){if(resp.status=="OK"&&typeof resp.result.geometry!="undefined"){initListMap(resp.result.geometry.location);}},'json')}
                                function initListMap(location){$("#lng").val(location.lng);$("#lat").val(location.lat);position=[location.lng,location.lat];marker.setLngLat(position).addTo(map);map.setCenter(position);map.setZoom(14);}
                            </script>
                            <script src="https://sp.zalo.me/plugins/sdk.js"></script>
                        </div>
                        <div class="tab-content" id="tab-2"></div>
                    </div>
                </div>
                <div class="col-lg-5 col-custom-xxl-3">
                    <div class="side-wrapper">
                        <div class="banner-ad">
                            <script type='text/javascript'>OA_show(854);</script>
                        </div>
                        <div class="similar-jobs">
                            <p>Các công việc tương tự</p>
                        </div>
                        <section class="jobs-side-list">
                            <div class="jobs-list">
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image"> <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-nha-hang-nhat-tokyo-deli.35A77DB7.html" target="_blank" title="Hệ thống nhà hàng Nhật Tokyo Deli"> <img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot3/169143/67x67/141234standardlogo_001.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Hệ thống nhà hàng Nhật Tokyo Deli"> </a> </div>
                                        <div class="figcaption">
                                            <div class="timeago"></div>
                                            <div class="title"> <a class="job_link" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-tuyen-dung.35B99B3A.html" target="_blank" title="Nhân Viên Tuyển Dụng"> Nhân Viên Tuyển Dụng </a> </div>
                                            <div class="caption">
                                                <a class="company-name" href="https://careerbuilder.vn/vi/nha-tuyen-dung/he-thong-nha-hang-nhat-tokyo-deli.35A77DB7.html" title="Hệ thống nhà hàng Nhật Tokyo Deli">Hệ thống nhà hàng Nhật Tokyo Deli</a>
                                                <p class="salary"><em class="fa fa-usd"></em>Lương: 7 Tr - 8,5 Tr VND</p>
                                                <div class="location">
                                                    <em class="mdi mdi-map-marker"></em>
                                                    <ul>
                                                        <li>Hồ Chí Minh</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-icon"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="load-more"><a href="https://careerbuilder.vn/viec-lam-tuong-tu/Nhân-Viên-Tuyển-Dụng-tai-ho-chi-minh-kl8-vi.html" title="jobs recommend">Xem tất cả</a></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="login-modal" style="display: none">
        <div class="modal-title">
            <p>Vui lòng đăng nhập để thực hiện chức năng này</p>
        </div>
        <div class="modal-body">
            <form method="POST" id="popup_login_form" action="https://careerbuilder.vn/vi/jobseekers/member/login" autocomplete="off">
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" id="username" name="username" placeholder="Username / Email" autocomplete="off">
                    </div>
                    <div class="form-group col-8">
                        <input type="password" name="password" id="password"  placeholder="Mật khẩu" autocomplete="off">
                    </div>
                    <div class="form-group col-4">
                        <input type="hidden" name="csrf_token" value= "e57f5b8fd1a24dcf6fb904aba69d2bfa002775400a2d77104213ffdb8beb76d9" />  
                        <button type="submit">Đăng nhập</button>
                    </div>
                    <div class="form-group form-check col-12">
                        <input type="checkbox" name="chkSave" value="1" />
                        <label>Tự động đăng nhập</label>
                    </div>
                </div>
                <a class="register" href="https://careerbuilder.vn/vi/jobseekers/register" title="Đăng ký">Đăng ký </a><a class="forget-password" href="https://careerbuilder.vn/vi/jobseekers/forgotpassword" title="Quên mật khẩu?" rel="nofollow">Quên mật khẩu?</a>
            </form>
            <div class="sign-in-by">
                <span>Đăng nhập bằng:</span>
                <ul>
                    <li><a href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><i class="fa fa-facebook-official"></i></a></li>
                    <li><a href="javascript:void(0);" onclick="popupapi('linkedin','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5saW5rZWRpbg==');"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="javascript:void(0);" onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><i class="fa fa-google-plus-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-validate.js') }}"></script>
    <script>
        $(document).ready(function(){
          $("#popup_login_form").validate({
            rules: {
                username: {
                  required: true,
                },
                password: {
                  required: true,
                }
            },
            errorPlacement: function(error, element) {
        return true;
            },
            success: function (error) {
              error.remove();
            }
          });
        });
    </script>
    <div class="apply-job-modal" id="apply-job-modal" style="display: none">
        <h3>Apply for: <span class="job-title" id="span_title">Nhân Viên Tuyển Dụng</span></h3>
        <h4>Công Ty TNHH May Thêu Giày An Phước</h4>
        <div class="login-form">
            <form id="frmLogin" name="frmLogin" method="POST" action="https://careerbuilder.vn/vi/jobseekers/member/login" >
                <p class="note"> Thành viên đăng nhập <span class="note" style="font-weight:100">(Nếu bạn đã có hồ sơ tại CareerBuilder)</span></p>
                <div class="form-group">
                    <input type="text" placeholder="Email" name="username" value=""  title="Email">
                    <span class="error_username"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Mật khẩu">
                    <span class="error_password"></span>
                </div>
                <div class="form-group form-submit">
                    <input type="hidden" name="csrf_token_apply" value= "f42d61ec3a243618e076913f21732e37bdc1bd79da25322bd98a4f0233b81614" />
                    <input type="submit" value="Sign in and Apply">
                </div>
            </form>
        </div>
        <div class="apply-not-login">
            <strong>Nộp đơn ứng tuyển nhanh không cần đăng ký tài khoản</strong>
            <p class="note">Bạn có thể nộp đơn ứng tuyển không cần đăng nhập hoặc chưa là thành viên của CareerBuilder.</p>
            <div class="btn-group">
                <a class="btn-apply-non-member"  id="apply_url" href="https://careerbuilder.vn/vi/jobseekers/jobs/apply?s=cbnon&job_id=35B9A7C0"  rel="nofollow" >Ứng Tuyển Ngay</a>
                <span class="or-text">hoặc</span>
                <a class="btn-apply-facebook" href="javascript:void(0);" onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaz9hcHBseV91cmw9aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvam9icy9hcHBseT9qb2JfaWQ9MzVCOUE3QzA=');" rel="nofollow"> Apply with <strong>Facebook</strong><i class="fa fa-facebook"></i></a>
            </div>
        </div>
    </div>
    <script>
        var language_plogin = {
                            LANG_ERROR_P_PASSWORD_NULL:"Vui lòng nhập mật khẩu!",
                            LANG_ERROR_P_PASSWORD_LENGTH:"Vui lòng nhập mật khẩu của bạn từ 6-15 ký tự.",
                            LANG_ERROR_P_USERNAME_NULL:"Vui lòng nhập email!",
                            job_index_username:"Email"
                        };
        
        if(typeof language === 'undefined') var language = language_plogin;
        else    $.extend(language, language_plogin);
        $(document).ready(function(){
            $("#frmLogin").validate({
                rules: {
                    username: {
                        required: true,
                    },
                    password: {
                        required: true,
                        rangelength: [6, 15]
                    }
                },
                messages: {
                    username: {required: language.LANG_ERROR_P_USERNAME_NULL}   ,
        password: {required: language.LANG_ERROR_P_PASSWORD_NULL,rangelength:language.LANG_ERROR_P_PASSWORD_LENGTH}
                },
                errorPlacement: function(error, element) {
                    var name = element.attr('name');
                    var errorSelector = '.error_'+name;
                    var $element = $(errorSelector);
                    $(errorSelector).html(error.html());
                },
                success: function (error) {
                    error.remove();
                },
            });
        });
    </script>
    <script>
        function showboxJobalert() {
               var win = window.open('https://careerbuilder.vn/thong-bao-viec-lam', '_blank');
               if (win) {
                   win.focus();
               } else {
                   console.log('error open tab');
               }
               return false;
            //$.fancybox.open($("#popup-jobalert"));
        }
    </script>
    <input type="hidden" value="" name="from_action" id="from_action" />
    <script src="{{ asset('js/footer2.js') }}">/*jquery.tabslet.js*/</script>
    <script type="text/javascript">
        var flag_load_company = 0;
        $(document).ready(function () {
            $(".search-result .tabs, .search-result-list-detail .tabs").on("_before", function(event){
                if(event.target.id == 'tabs-job-company'){
                    if(flag_load_company == 0){
                        var link_company = $(".apply-now-content a.job-company-name").attr('href');
                        load_company(link_company);
                    }
                }
            });
        });
        $(document).on('click', 'a.job-company-name', function(e){
            e.preventDefault();
            var link_company = $(this).attr('href');
            load_company(link_company);
        });
        function load_company(link){
            if(flag_load_company == 0){
                if($.trim(link) != '' && $.trim(link) != '#'){
                    $("#tab-2").html('Loading....');
        var from_action = $("#from_action").val();
                    $.ajax({
                    url: link+'?ajax=1&from_action='+from_action,
                    type: 'POST',
                    dataType: 'json',
                    }).done(function(data){
                        if(data.layout_profile == 1){
                            var win = window.open(link, '_blank');
                            $("#tabs-job-detail").click();
                            $("#tab-2").html('');
                        }else{
                            flag_load_company = 1;
                            $("#tab-2").html(data.html_detail);
                            companyPhotoSlide();
                            $("#tabs-job-company").click();
                        }
                    });
                }
            }else{
                $("#tabs-job-company").click();
            }
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        }
    </script>
    <script type="text/javascript">
        var language_pdetail = {
         job_chk_save_jobs_saved:"Việc làm đã lưu",
         job_chk_save_jobs_save:"Lưu việc làm"
        };
        if(typeof language === 'undefined') var language = language_pdetail;
        else    $.extend(language, language_pdetail);
    </script>
    <script>
        if ($.isFunction(window.smartech)) {
            smartech('dispatch', 'p_detail_page', {
                    "job_title_id"      : '1359552',
                    "job_title"         : 'Nhân Viên Tuyển Dụng',
                    "job_location_id"   : '8',
                    "job_location"      : 'Hồ Chí Minh',
                    "employer_name_id"  : '2816',
                    "employer_name"     : "Công Ty TNHH May Thêu Giày An Phước",
                    "job_level_id"      : '3',
                    "job_level"         : 'Nhân viên',
                    "salary"            : 'cạnh tranh',
                    "from_salary"       : 0,
                    "to_salary"         : 0,
                    "unit_salary"       : 'VND',
                    "member"            : 'no'
                }
            );
        }
        var product = {
            identifier: '35B9A7C0'
        };
    </script>
    <script type="application/ld+json">{"@context": "http://schema.org","@type": "JobPosting","baseSalary" : {"@type": "MonetaryAmount","currency": "VND","value": {"@type": "QuantitativeValue","value":"Cạnh tranh","unitText":"MONTH"}},"industry": "Nhân sự, Dệt may / Da giày / Thời trang, Hành chính / Thư ký","jobBenefits": "Chế độ bảo hiểm, Phụ cấp, Đồng phục, Chế độ thưởng, Tăng lương, Công tác phí, Phụ cấp thâm niên, Nghỉ phép năm","datePosted": "2022-06-14","validThrough": "2022-07-15","occupationalCategory": "Nhân viên","description": "<p>Đề xuất các kênh tuyển dụng phù hợp nhằm đáp ứng nhu cầu nhân sự cho nhà máy<br/>Triển khai các kế hoạch tuyển mộ, tuyển chọn ứng viên<br/>Phỏng vấn, đánh giá, tham vấn ra quyết định tuyển chọn ứng viên<br/>Xây dựng và cải tiến quy trình tuyển dụng<br/>Thực hiện các hoạt động hướng dẫn và đào tạo hội nhập cho nhân viên mới</p><p>Một số công việc khác trao đổi trong phỏng vấn</p>","experienceRequirements": {"@type": "OccupationalExperienceRequirements","monthsOfExperience": "60","description":"<p>Nam, nữ kinh nghiệm 05 năm tuyển dụng hệ thống, td lao động số lượng lớn<br/>Ngoại hình khá, nhanh nhẹn, giao tiếp tốt.<br/>Thông thạo các kênh tuyển dụng<br/>Có kinh nghiệm quản lý nhân sự công ty quy mô 1000 lđ trở lên</p>"},"qualifications": "Cao đẳng","identifier": {"@type":"PropertyValue","name":"Công Ty TNHH May Thêu Giày An Phước","value":"35A4F400"},"hiringOrganization" : {"@type" : "Organization","name" : "Công Ty TNHH May Thêu Giày An Phước","sameAs":"https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-may-theu-giay-an-phuoc.35A4F400.html","logo":"https://images.careerbuilder.vn/employer_folders/lot6/2816/110x55/74705logoap.jpg"},"employmentType": ["FULL_TIME"],"jobLocation" : {"@type": "Place","address": {"@type": "PostalAddress","streetAddress": "Hồ Chí Minh","addressLocality": "Hồ Chí Minh","addressRegion": "Hồ Chí Minh","addressCountry": "Việt Nam","postalCode": "70000"}},"title" : "Nhân Viên Tuyển Dụng","skills" : "","workHours" : "8 giờ"}</script>
    <div class="back-drop"></div>
</main>
@endsection