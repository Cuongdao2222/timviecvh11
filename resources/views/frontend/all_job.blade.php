@extends('frontend.layout.appfe')
@section('content')
<main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common-job-detail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search-result-list-detail.css') }}">
    <section class="page-heading-tool">
        <div class="container">
            <div class="tool-wrapper">
                <div class="close-input-filter"><em class="lnr lnr-cross"></em></div>
                <div class="search-job">
                    <form>
                        <div class="form-wrap">
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
                                    <option value="kep_1084">Kep</option>
                                    <option value="koh-kong_1091">Koh Kong</option>
                                    <option value="kratie_1093">Kratie</option>
                                    <option value="otdar-meanchey_1104">Otdar Meanchey</option>
                                    <option value="pailin_1103">Pailin</option>
                                    <option value="phnompenh_1041">Phnompenh</option>
                                    <option value="preah-vihear_1099">Preah Vihear</option>
                                    <option value="prey-veng_1089">Prey Veng</option>
                                    <option value="siem-reap_1097">Siem Reap</option>
                                    <option value="stung-treng_1100">Stung Treng</option>
                                    <option value="svay-rieng_1087">Svay Rieng</option>
                                    <option value="tbong-khmum_1082">Tbong Khmum</option>
                                    <option value="chicago_1034">Chicago</option>
                                    <option value="florida_1077">Florida</option>
                                    <option value="miami_1033">Miami</option>
                                    <option value="san-diego_1039">San Diego</option>
                                    <option value="hong-kong_1079">Hồng Kông</option>
                                    <option value="khac_1318">Khác</option>
                                    <option value="attapeu_1106">Attapeu</option>
                                    <option value="bokeo_1107">Bokeo</option>
                                    <option value="champasak_1109">Champasak</option>
                                    <option value="houaphanh_1110">Houaphanh</option>
                                    <option value="khammouane_1111">Khammouane</option>
                                    <option value="luang-prabang_1113">Luang Prabang</option>
                                    <option value="phongsaly_1115">Phongsaly</option>
                                    <option value="vientiane_1059">Vientiane</option>
                                    <option value="xiangkhouang_1120">Xiangkhouang</option>
                                    <option value="kuala-lumpur_1019">Kuala Lumpur</option>
                                    <option value="malaysia_1078">Malaysia</option>
                                    <option value="yangon_1320">Yangon</option>
                                    <option value="hokkaido_1043">Hokkaido</option>
                                    <option value="tokyo_1001">Tokyo</option>
                                    <option value="yokohama_1002">Yokohama</option>
                                    <option value="qatar_1055">Qatar</option>
                                    <option value="quoc-te_1073">Quốc tế</option>
                                    <option value="singapore_1040">Singapore</option>
                                    <option value="kharkiv_1053">Kharkiv</option>
                                </select>
                            </div>
                            <div class="form-group form-submit">
                                <button class="btn-gradient" onClick="return validataSearchHomePage('vi');">
                                    <p>Tìm Ngay</p>
                                    <span class="mdi mdi-magnify"></span> 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mobile-filter-2"><span class="mdi mdi-filter-outline"></span></div>
                <div class="mobile-filter toollips">
                    <span class="mdi mdi-filter-outline"></span>
                    <p>Lọc</p>
                    <div class="toolip">
                        <p>Lọc</p>
                    </div>
                </div>
                <div class="switch-group toollips">
                    <div class="form-group">
                        <label for="work-home-fli">Work from home
                        <input id="work-home-fli" type="checkbox"                 onclick="validFilterdataSearch('vi', 'homework', this);">
                        <span class="slider"></span> </label>
                    </div>
                    <div class="toolip">
                        <p>Bật để hiển thị công việc "Việc Làm Từ Nhà"</p>
                    </div>
                </div>
                <input type="hidden" name="url_page_search" id="url_page_search"
                    value="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-vi.html" />
                <div class="change-display">
                    <ul>
                        <li class="list-view-mode  active">
                            <a
                                href="javascript:;"><span
                                class="mdi mdi-view-list"></span></a>
                            <div class="toolip">
                                <p>Chuyển qua chế độ xem danh sách</p>
                            </div>
                        </li>
                        <li class="quick-view-mode ">
                            <a
                                href="javascript:searchJobView('detail');"><span
                                class="mdi mdi-view-quilt"></span></a>
                            <div class="toolip">
                                <p>Chuyển qua chế độ xem nhanh</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="filters-wrapper">
            <div class="container">
                <div class="title-filter">
                    <div class="close-filter"><em class="lnr lnr-cross"></em></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group form-select">
                            <label> Mức lương</label>
                            <select name="salary" id="salary">
                                <option value="">Tất cả</option>
                                <option value=3 >Từ  3.000.000 đ</option>
                                <option value=5 >Từ  5.000.000 đ</option>
                                <option value=7 >Từ  7.000.000 đ</option>
                                <option value=10 >Từ  10.000.000 đ</option>
                                <option value=15 >Từ  15.000.000 đ</option>
                                <option value=20 >Từ  20.000.000 đ</option>
                                <option value=30 >Từ  30.000.000 đ</option>
                                <option value=40 >Từ 40.000.000 đ</option>
                                <option value=50 >Từ 50.000.000 đ</option>
                                <option value=60 >Từ 60.000.000 đ</option>
                                <option value=70 >Từ 70.000.000 đ</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group form-select">
                            <label>Cấp bậc</label>
                            <select id="level" name="level">
                                <option value="">Tất cả</option>
                                <option
                                    value="sinh-vien-thuc-tap-sinh_1">
                                    Sinh viên/ Thực tập sinh
                                </option>
                                <option
                                    value="moi-tot-nghiep_2">
                                    Mới tốt nghiệp
                                </option>
                                <option
                                    value="nhan-vien_3">
                                    Nhân viên
                                </option>
                                <option
                                    value="truong-nhom-giam-sat_4">
                                    Trưởng nhóm / Giám sát
                                </option>
                                <option
                                    value="quan-ly_5">
                                    Quản lý
                                </option>
                                <option
                                    value="quan-ly-cap-cao_11">
                                    Quản lý cấp cao
                                </option>
                                <option
                                    value="dieu-hanh-cap-cao_12">
                                    Điều hành cấp cao
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group form-select">
                            <label>Đăng trong vòng</label>
                            <select name="days" id="days">
                                <option value="">Tất cả</option>
                                <option value="3" >
                                    3 ngày trước
                                </option>
                                <option value="7" >
                                    1 tuần trước
                                </option>
                                <option value="14" >
                                    2 tuần trước
                                </option>
                                <option value="30" >
                                    1 tháng trước 
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group form-select">
                            <label>Hình thức việc làm</label>
                            <select name="job_type" id="job_type">
                                <option value="">Tất cả</option>
                                <option value="nhan-vien-chinh-thuc_1000"
                                    >Nhân viên chính thức
                                </option>
                                <option value="tam-thoi-du-an_0100"
                                    >Tạm thời/Dự án
                                </option>
                                <option value="thoi-vu-nghe-tu-do_0010"
                                    >Thời vụ - Nghề tự do
                                </option>
                                <option value="thuc-tap_0001"
                                    >Thực tập
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="form-group">
                            <label>Phúc lợi mong muốn</label>
                            <div class="edit-multiselect">
                                <select multiple="multiple" name="benefit" id="benefit" size="1" class="multiselect2" title="Chọn"
                                    style="width: 240px">
                                    <option value="che-do-bao-hiem_2"
                                        >Chế độ bảo hiểm</option>
                                    <option value="du-lich_3"
                                        >Du Lịch</option>
                                    <option value="che-do-thuong_8"
                                        >Chế độ thưởng</option>
                                    <option value="cham-soc-suc-khoe_9"
                                        >Chăm sóc sức khỏe</option>
                                    <option value="dao-tao_10"
                                        >Đào tạo</option>
                                    <option value="tang-luong_11"
                                        >Tăng lương</option>
                                    <option value="laptop_1"
                                        >Laptop</option>
                                    <option value="phu-cap_4"
                                        >Phụ cấp</option>
                                    <option value="xe-dua-don_5"
                                        >Xe đưa đón</option>
                                    <option value="du-lich-nuoc-ngoai_6"
                                        >Du lịch nước ngoài</option>
                                    <option value="dong-phuc_7"
                                        >Đồng phục</option>
                                    <option value="cong-tac-phi_12"
                                        >Công tác phí</option>
                                    <option value="phu-cap-tham-nien_13"
                                        >Phụ cấp thâm niên</option>
                                    <option value="nghi-phep-nam_14"
                                        >Nghỉ phép năm</option>
                                    <option value="clb-the-thao_15"
                                        >CLB thể thao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-sm-6 col-lg-6">
                        <div class="switch-group toollips">
                        	<div class="form-group">
                        		<label for="fast-recruitment">Tuyển gấp
                        			<input id="fast-recruitment" type="checkbox"><span class="slider"></span>
                        		</label>
                        	</div>
                        	<div class="toolip">
                        		<p>Tuyển gấp</p>
                        	</div>
                        </div>
                        </div>-->
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group form-submit">
                            <button class="btn-reset"
                                onClick="return clearFilter();">Xóa bộ lọc</button>
                            <button class="btn-gradient" type="submit"
                                onClick="return validataSearchHomePage('vi');">Tìm Ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="recommend" name="recommend" value="" />
    </section>
    <script>
        var searchlist = {
          multi_select:"Tất cả",
          multi_head_select:"Tối đa 3 lựa chọn",
          multi_max_select:"multi_max_select",
          multi_select_num:"Lựa chọn",
        };
        if (typeof language === 'undefined') var language = searchlist;
        else $.extend(language, searchlist);
    </script>
    <section class="search-result-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-custom-xxl-9">
                    <div class="job-found">
                        <div class="job-found-amout">
                            <h1>35,479 việc làm</h1>
                        </div>
                        <div class="job-found-sort">
                            <span class="sort-title dropdown">
                                Sắp xếp theo<em class="mdi mdi-chevron-down"></em>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li> <a title="Cập nhật" class="active" href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortdv-vi.html">Cập nhật</a></li>
                                        <li><a title="Mức lương"  href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-sortlg-vi.html">Mức lương</a></li>
                                    </ul>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="main-slide">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="jobs-side-list">
                                        <div class="job-item  " id="job-item-35B9B3F5">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dao-tao-vietfuture.35A91581.html" target="_blank"  title="CÔNG TY CỔ PHẦN ĐÀO TẠO VIETFUTURE">
                                                    <img  class="lazy-img" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN ĐÀO TẠO VIETFUTURE">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h2>
                                                            <a class="job_link" data-id="35B9B3F5" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-tu-van-giao-duc.35B9B3F5.html" target="_blank" title="Chuyên Viên Tư Vấn Giáo Dục">
                                                            Chuyên Viên Tư Vấn Giáo Dục
                                                            </a>
                                                        </h2>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dao-tao-vietfuture.35A91581.html" title="CÔNG TY CỔ PHẦN ĐÀO TẠO VIETFUTURE">CÔNG TY CỔ PHẦN ĐÀO TẠO VIETFUTURE</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 30 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9B3F5 " href="javascript:void(0);" data-id="35B9B3F5"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>01/07/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D57B">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-meey-land.35A8A1C3.html" target="_blank"  title="Công ty Cổ phần Tập đoàn Meey Land">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot7/243907/155x155/175119z3135543777245_10b920f5c28f6685c7075dead3b28e9c.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ phần Tập đoàn Meey Land">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h3>
                                                            <a class="job_link" data-id="35B9D57B" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-phan-tich-du-lieu-tai-chinh-noi-bo-bi.35B9D57B.html" target="_blank" title="CHUYÊN VIÊN PHÂN TÍCH DỮ LIỆU TÀI CHÍNH NỘI BỘ - BI">
                                                            CHUYÊN VIÊN PHÂN TÍCH DỮ LIỆU TÀI CHÍNH NỘI BỘ - BI
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h3>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-meey-land.35A8A1C3.html" title="Công ty Cổ phần Tập đoàn Meey Land">Công ty Cổ phần Tập đoàn Meey Land</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Dưới 44 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=2MsDL4PHPA4&t=27s" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D57B " href="javascript:void(0);" data-id="35B9D57B"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D57D">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" target="_blank"  title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/111830/155x155/193729logo_1429860276.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h3>
                                                            <a class="job_link" data-id="35B9D57D" href="https://careerbuilder.vn/vi/tim-viec-lam/fte-chuyen-vien-sale-linh-vuc-du-lich-ho-chi-minh.35B9D57D.html" target="_blank" title="FTE - Chuyên viên Sale lĩnh vực Du lịch (Hồ Chí Minh)">
                                                            FTE - Chuyên viên Sale lĩnh vực Du lịch (Hồ Chí Minh)
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h3>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=FU6AHb_atOQ" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D57D " href="javascript:void(0);" data-id="35B9D57D"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D57C">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-chung-khoan-vndirect.35A72AAC.html" target="_blank"  title="Công Ty CP Chứng Khoán VNDIRECT">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot4/147884/155x155/172018vndlogo.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty CP Chứng Khoán VNDIRECT">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D57C" href="https://careerbuilder.vn/vi/tim-viec-lam/product-manager.35B9D57C.html" target="_blank" title="Product Manager">
                                                            Product Manager
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-chung-khoan-vndirect.35A72AAC.html" title="Công Ty CP Chứng Khoán VNDIRECT">Công Ty CP Chứng Khoán VNDIRECT</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D57C " href="javascript:void(0);" data-id="35B9D57C"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D54B">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" target="_blank"  title="Công Ty Cổ Phần Diana Unicharm">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot1/129051/155x155/140745logodianaunicharm-2017-english.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Diana Unicharm">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D54B" href="https://careerbuilder.vn/vi/tim-viec-lam/giam-sat-ban-hang-kenh-sieu-thi-key-account-supervisor-ha-noi.35B9D54B.html" target="_blank" title="GIÁM SÁT BÁN HÀNG KÊNH SIÊU THỊ/KEY ACCOUNT SUPERVISOR (HÀ NỘI)">
                                                            GIÁM SÁT BÁN HÀNG KÊNH SIÊU THỊ/KEY ACCOUNT SUPERVISOR (HÀ NỘI)
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" title="Công Ty Cổ Phần Diana Unicharm">Công Ty Cổ Phần Diana Unicharm</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=syrYBI-EOLY" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D54B " href="javascript:void(0);" data-id="35B9D54B"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D573">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-meey-land.35A8A1C3.html" target="_blank"  title="Công ty Cổ phần Tập đoàn Meey Land">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot7/243907/155x155/175119z3135543777245_10b920f5c28f6685c7075dead3b28e9c.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ phần Tập đoàn Meey Land">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D573" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-dao-tao.35B9D573.html" target="_blank" title="Chuyên viên Đào tạo">
                                                            Chuyên viên Đào tạo
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-meey-land.35A8A1C3.html" title="Công ty Cổ phần Tập đoàn Meey Land">Công ty Cổ phần Tập đoàn Meey Land</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 14 Tr - 17 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=2MsDL4PHPA4&t=27s" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D573 " href="javascript:void(0);" data-id="35B9D573"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D577">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-giao-duc-sydney-viet-nam.35A8EC90.html" target="_blank"  title="CÔNG TY CỔ PHẦN TẬP ĐOÀN GIÁO DỤC SYDNEY VIỆT NAM">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/263056/155x155/110832sydney-logo-01.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN GIÁO DỤC SYDNEY VIỆT NAM">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D577" href="https://careerbuilder.vn/vi/tim-viec-lam/class-manager.35B9D577.html" target="_blank" title="Class Manager">
                                                            Class Manager
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-giao-duc-sydney-viet-nam.35A8EC90.html" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN GIÁO DỤC SYDNEY VIỆT NAM">CÔNG TY CỔ PHẦN TẬP ĐOÀN GIÁO DỤC SYDNEY VIỆT NAM</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D577 " href="javascript:void(0);" data-id="35B9D577"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D578">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-letswin.35A8D804.html" target="_blank"  title="CÔNG TY LETSWIN">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/257796/155x155/104129viber_image_2021-05-28_11-10-13.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY LETSWIN">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D578" href="https://careerbuilder.vn/vi/tim-viec-lam/senior-graphic-designer.35B9D578.html" target="_blank" title="Senior Graphic Designer">
                                                            Senior Graphic Designer
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-letswin.35A8D804.html" title="CÔNG TY LETSWIN">CÔNG TY LETSWIN</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 18 Tr - 28 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D578 " href="javascript:void(0);" data-id="35B9D578"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D579">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" target="_blank"  title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/111830/155x155/193729logo_1429860276.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D579" href="https://careerbuilder.vn/vi/tim-viec-lam/fte-chuyen-vien-sale-linh-vuc-du-lich-ha-noi.35B9D579.html" target="_blank" title="FTE - Chuyên viên Sale lĩnh vực Du lịch (Hà Nội)">
                                                            FTE - Chuyên viên Sale lĩnh vực Du lịch (Hà Nội)
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=FU6AHb_atOQ" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D579 " href="javascript:void(0);" data-id="35B9D579"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D56C">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/prudential-vietnam-assurance.35A7FD57.html" target="_blank"  title="Prudential Vietnam Assurance ">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot5/201815/155x155/160000logo-01.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Prudential Vietnam Assurance ">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9D56C" href="https://careerbuilder.vn/vi/tim-viec-lam/talent-management-senior-manager.35B9D56C.html" target="_blank" title="Talent Management Senior Manager">
                                                            Talent Management Senior Manager
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/prudential-vietnam-assurance.35A7FD57.html" title="Prudential Vietnam Assurance ">Prudential Vietnam Assurance </a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=qu0zwQWQ8xg" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D56C " href="javascript:void(0);" data-id="35B9D56C"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9C886">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cmc-corporation.35A74195.html" target="_blank"  title="CMC Corporation">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot9/153749/155x155/93400logocmccorp.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CMC Corporation">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <h4>
                                                            <a class="job_link" data-id="35B9C886" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-hanh-chinh-le-tan.35B9C886.html" target="_blank" title="Nhân viên Hành chính Lễ tân">
                                                            Nhân viên Hành chính Lễ tân
                                                            <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                        </h4>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cmc-corporation.35A74195.html" title="CMC Corporation">CMC Corporation</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 7 Tr - 10 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=Y8ckPgxrrfY" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9C886 " href="javascript:void(0);" data-id="35B9C886"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D56B">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-kintetsu-world-express-viet-nam.35A90F5B.html" target="_blank"  title="CÔNG TY TNHH KINTETSU WORLD EXPRESS VIỆT NAM">
                                                    <img  class="lazy-img" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY TNHH KINTETSU WORLD EXPRESS VIỆT NAM">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D56B" href="https://careerbuilder.vn/vi/tim-viec-lam/hcm-key-account-executive-logistics.35B9D56B.html" target="_blank" title="HCM - Key Account Executive (Logistics)">
                                                        HCM - Key Account Executive (Logistics)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-kintetsu-world-express-viet-nam.35A90F5B.html" title="CÔNG TY TNHH KINTETSU WORLD EXPRESS VIỆT NAM">CÔNG TY TNHH KINTETSU WORLD EXPRESS VIỆT NAM</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 12 Tr - 16 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D56B " href="javascript:void(0);" data-id="35B9D56B"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D572">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" target="_blank"  title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/111830/155x155/193729logo_1429860276.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D572" href="https://careerbuilder.vn/vi/tim-viec-lam/fte-truong-dai-dien-van-phong-ho-chi-minh-linh-vuc-du-lich.35B9D572.html" target="_blank" title="FTE - Trưởng Đại diện Văn phòng Hồ Chí Minh (Lĩnh vực Du lịch)">
                                                        FTE - Trưởng Đại diện Văn phòng Hồ Chí Minh (Lĩnh vực Du lịch)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-tap-doan-flc-flc-group.35A69DD6.html" title="CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)">CÔNG TY CP TẬP ĐOÀN FLC (FLC GROUP)</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=FU6AHb_atOQ" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D572 " href="javascript:void(0);" data-id="35B9D572"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D571">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/lotte-e-c-lotte-mall-hn-project.35A88E69.html" target="_blank"  title="LOTTE E&C - Lotte Mall HN Project">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/238953/155x155/1523531550050072751-untitled.png" src="../kiemviecv32/images/graphics/blank.gif" alt="LOTTE E&C - Lotte Mall HN Project">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D571" href="https://careerbuilder.vn/vi/tim-viec-lam/surveyor-engineer.35B9D571.html" target="_blank" title="Surveyor Engineer">
                                                        Surveyor Engineer
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/lotte-e-c-lotte-mall-hn-project.35A88E69.html" title="LOTTE E&C - Lotte Mall HN Project">LOTTE E&C - Lotte Mall HN Project</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D571 " href="javascript:void(0);" data-id="35B9D571"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D40C">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" target="_blank"  title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/274393/155x155/154958logo-004.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D40C" href="https://careerbuilder.vn/vi/tim-viec-lam/truong-phong-kinh-doanh.35B9D40C.html" target="_blank" title="Trưởng Phòng Kinh Doanh">
                                                        Trưởng Phòng Kinh Doanh
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">CÔNG TY CỔ PHẦN GOLDEN HOLDINGS</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Trên 8 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D40C " href="javascript:void(0);" data-id="35B9D40C"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D416">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" target="_blank"  title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/274393/155x155/154958logo-004.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D416" href="https://careerbuilder.vn/vi/tim-viec-lam/marketing-manager.35B9D416.html" target="_blank" title="Marketing Manager">
                                                        Marketing Manager
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">CÔNG TY CỔ PHẦN GOLDEN HOLDINGS</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 15 Tr - 20 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D416 " href="javascript:void(0);" data-id="35B9D416"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D41F">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" target="_blank"  title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/274393/155x155/154958logo-004.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D41F" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-tong-hop.35B9D41F.html" target="_blank" title="Kế Toán Tổng Hợp">
                                                        Kế Toán Tổng Hợp
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-golden-holdings.35A918D9.html" title="CÔNG TY CỔ PHẦN GOLDEN HOLDINGS">CÔNG TY CỔ PHẦN GOLDEN HOLDINGS</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 12 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D41F " href="javascript:void(0);" data-id="35B9D41F"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D56E">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-chung-khoan-beta.35A744F8.html" target="_blank"  title="CÔNG TY CỔ PHẦN CHỨNG KHOÁN BETA">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/154616/155x155/165701logo-beta2.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN CHỨNG KHOÁN BETA">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D56E" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-phan-tich-doanh-nghiep-equity-research-analyst.35B9D56E.html" target="_blank" title="Chuyên viên Phân tích Doanh nghiệp (Equity Research Analyst)">
                                                        Chuyên viên Phân tích Doanh nghiệp (Equity Research Analyst)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-chung-khoan-beta.35A744F8.html" title="CÔNG TY CỔ PHẦN CHỨNG KHOÁN BETA">CÔNG TY CỔ PHẦN CHỨNG KHOÁN BETA</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D56E " href="javascript:void(0);" data-id="35B9D56E"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D56F">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tap-doan-karofi-holding.35A6682E.html" target="_blank"  title="Tập Đoàn Karofi Holding">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot4/98094/155x155/90735logokarofinew.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Tập Đoàn Karofi Holding">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D56F" href="https://careerbuilder.vn/vi/tim-viec-lam/dai-dien-ban-hang-thi-truong-kenh-gt-kien-giang.35B9D56F.html" target="_blank" title="Đại Diện Bán Hàng Thị Trường (Kênh GT) Kiên Giang">
                                                        Đại Diện Bán Hàng Thị Trường (Kênh GT) Kiên Giang
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/tap-doan-karofi-holding.35A6682E.html" title="Tập Đoàn Karofi Holding">Tập Đoàn Karofi Holding</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 11 Tr - 18 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Kiên Giang</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=Q1W3Yz3xD6U" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D56F " href="javascript:void(0);" data-id="35B9D56F"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D567">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thuc-pham-huu-nghi.35A88E1D.html" target="_blank"  title="CÔNG TY CỔ PHẦN THỰC PHẨM HỮU NGHỊ">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot7/238877/155x155/111120taixuong.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN THỰC PHẨM HỮU NGHỊ">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D567" href="https://careerbuilder.vn/vi/tim-viec-lam/giam-sat-ban-hang-kenh-mt-cvs.35B9D567.html" target="_blank" title="Giám Sát Bán Hàng Kênh MT - CVS">
                                                        Giám Sát Bán Hàng Kênh MT - CVS
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thuc-pham-huu-nghi.35A88E1D.html" title="CÔNG TY CỔ PHẦN THỰC PHẨM HỮU NGHỊ">CÔNG TY CỔ PHẦN THỰC PHẨM HỮU NGHỊ</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 9 Tr - 16 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=m66MSm4KSoM" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D567 " href="javascript:void(0);" data-id="35B9D567"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D56A">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/lotte-e-c-lotte-mall-hn-project.35A88E69.html" target="_blank"  title="LOTTE E&C - Lotte Mall HN Project">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/238953/155x155/1523531550050072751-untitled.png" src="../kiemviecv32/images/graphics/blank.gif" alt="LOTTE E&C - Lotte Mall HN Project">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D56A" href="https://careerbuilder.vn/vi/tim-viec-lam/construction-site-engineer.35B9D56A.html" target="_blank" title="Construction Site Engineer">
                                                        Construction Site Engineer
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/lotte-e-c-lotte-mall-hn-project.35A88E69.html" title="LOTTE E&C - Lotte Mall HN Project">LOTTE E&C - Lotte Mall HN Project</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D56A " href="javascript:void(0);" data-id="35B9D56A"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D568">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tap-doan-karofi-holding.35A6682E.html" target="_blank"  title="Tập Đoàn Karofi Holding">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot4/98094/155x155/90735logokarofinew.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Tập Đoàn Karofi Holding">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D568" href="https://careerbuilder.vn/vi/tim-viec-lam/dai-dien-ban-hang-thi-truong-kenh-gt-an-giang.35B9D568.html" target="_blank" title="Đại Diện Bán Hàng Thị Trường (Kênh GT) An Giang">
                                                        Đại Diện Bán Hàng Thị Trường (Kênh GT) An Giang
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/tap-doan-karofi-holding.35A6682E.html" title="Tập Đoàn Karofi Holding">Tập Đoàn Karofi Holding</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 11 Tr - 18 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>An Giang</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=Q1W3Yz3xD6U" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D568 " href="javascript:void(0);" data-id="35B9D568"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D565">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-letswin.35A8D804.html" target="_blank"  title="CÔNG TY LETSWIN">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/257796/155x155/104129viber_image_2021-05-28_11-10-13.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY LETSWIN">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <a class="job_link" data-id="35B9D565" href="https://careerbuilder.vn/vi/tim-viec-lam/copy-writer.35B9D565.html" target="_blank" title="Copy Writer">
                                                        Copy Writer
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-letswin.35A8D804.html" title="CÔNG TY LETSWIN">CÔNG TY LETSWIN</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 15 Tr - 20 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D565 " href="javascript:void(0);" data-id="35B9D565"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9C0BB">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tu-van-va-dao-tao-viet-uc.35A90BE8.html" target="_blank"  title="CÔNG TY CỔ PHẦN TƯ VẤN VÀ ĐÀO TẠO VIỆT ÚC">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/271080/155x155/164927241269192_4761208073909536_7561347422945819831_n.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TƯ VẤN VÀ ĐÀO TẠO VIỆT ÚC">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9C0BB" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-tong-hop.35B9C0BB.html" target="_blank" title="Kế Toán Tổng Hợp">
                                                        Kế Toán Tổng Hợp
                                                        </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tu-van-va-dao-tao-viet-uc.35A90BE8.html" title="CÔNG TY CỔ PHẦN TƯ VẤN VÀ ĐÀO TẠO VIỆT ÚC">CÔNG TY CỔ PHẦN TƯ VẤN VÀ ĐÀO TẠO VIỆT ÚC</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 15 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9C0BB " href="javascript:void(0);" data-id="35B9C0BB"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D55D">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thiet-bi-fecon.35A907A4.html" target="_blank"  title="CÔNG TY CỔ PHẦN THIẾT BỊ FECON">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot8/269988/155x155/155327logo.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN THIẾT BỊ FECON">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <a class="job_link" data-id="35B9D55D" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-kinh-doanh-may-cong-trinh-me-tri-ha.35B9D55D.html" target="_blank" title="Chuyên viên kinh doanh máy công trình (Mễ Trì Hạ)">
                                                        Chuyên viên kinh doanh máy công trình (Mễ Trì Hạ)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-thiet-bi-fecon.35A907A4.html" title="CÔNG TY CỔ PHẦN THIẾT BỊ FECON">CÔNG TY CỔ PHẦN THIẾT BỊ FECON</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 15 Tr - 40 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D55D " href="javascript:void(0);" data-id="35B9D55D"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D55C">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-acg-viet-nam.35A8CC82.html" target="_blank"  title="Công ty Cổ phần Đầu tư ACG Việt Nam">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/254850/155x155/85648acg-01.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ phần Đầu tư ACG Việt Nam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D55C" href="https://careerbuilder.vn/vi/tim-viec-lam/ky-su-kinh-te-xay-dung-chi-tuyen-nam.35B9D55C.html" target="_blank" title="Kỹ sư Kinh tế Xây dựng - Chỉ tuyển nam">
                                                        Kỹ sư Kinh tế Xây dựng - Chỉ tuyển nam
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-acg-viet-nam.35A8CC82.html" title="Công ty Cổ phần Đầu tư ACG Việt Nam">Công ty Cổ phần Đầu tư ACG Việt Nam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 15 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D55C " href="javascript:void(0);" data-id="35B9D55C"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D564">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-dich-vu-hhldecor.35A918F3.html" target="_blank"  title="CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI DỊCH VỤ HHLDECOR">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot9/274419/155x155/154542logohhl-002.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI DỊCH VỤ HHLDECOR">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D564" href="https://careerbuilder.vn/vi/tim-viec-lam/truong-phong-hop-dong.35B9D564.html" target="_blank" title="Trưởng Phòng Hợp Đồng">
                                                        Trưởng Phòng Hợp Đồng
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-dich-vu-hhldecor.35A918F3.html" title="CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI DỊCH VỤ HHLDECOR">CÔNG TY TNHH SẢN XUẤT THƯƠNG MẠI DỊCH VỤ HHLDECOR</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 15 Tr - 20 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D564 " href="javascript:void(0);" data-id="35B9D564"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D54F">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-xay-dung-dien-bich-hanh.35A80BF8.html" target="_blank"  title="Công Ty TNHH Sản Xuất Thương Mại Xây Dựng Điện Bích Hạnh">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/205560/155x155/153654logocty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Sản Xuất Thương Mại Xây Dựng Điện Bích Hạnh">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D54F" href="https://careerbuilder.vn/vi/tim-viec-lam/giam-doc-kinh-doanh.35B9D54F.html" target="_blank" title="GIÁM ĐỐC KINH DOANH">
                                                        GIÁM ĐỐC KINH DOANH
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-xay-dung-dien-bich-hanh.35A80BF8.html" title="Công Ty TNHH Sản Xuất Thương Mại Xây Dựng Điện Bích Hạnh">Công Ty TNHH Sản Xuất Thương Mại Xây Dựng Điện Bích Hạnh</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 20 Tr - 25 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Đà Nẵng</li>
                                                                <li> Hồ Chí Minh</li>
                                                                <li> Kiên Giang</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D54F " href="javascript:void(0);" data-id="35B9D54F"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D563">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-chung-khoan-vndirect.35A72AAC.html" target="_blank"  title="Công Ty CP Chứng Khoán VNDIRECT">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot4/147884/155x155/172018vndlogo.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty CP Chứng Khoán VNDIRECT">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D563" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-tu-van-qua-dien-thoai.35B9D563.html" target="_blank" title="Chuyên Viên Tư Vấn Qua Điện Thoại">
                                                        Chuyên Viên Tư Vấn Qua Điện Thoại
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-cp-chung-khoan-vndirect.35A72AAC.html" title="Công Ty CP Chứng Khoán VNDIRECT">Công Ty CP Chứng Khoán VNDIRECT</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 15 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D563 " href="javascript:void(0);" data-id="35B9D563"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D55E">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghẹ-co-dien-reecons.35A67032.html" target="_blank"  title="Công ty Cổ Phần Công Nghệ Cơ Điện Reecons">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/100146/155x155/83828untitled-1.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ Phần Công Nghệ Cơ Điện Reecons">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D55E" href="https://careerbuilder.vn/vi/tim-viec-lam/vice-procurement-manager.35B9D55E.html" target="_blank" title="VICE PROCUREMENT MANAGER">
                                                        VICE PROCUREMENT MANAGER
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghẹ-co-dien-reecons.35A67032.html" title="Công ty Cổ Phần Công Nghệ Cơ Điện Reecons">Công ty Cổ Phần Công Nghệ Cơ Điện Reecons</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D55E " href="javascript:void(0);" data-id="35B9D55E"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D55F">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-tai-chinh-cong-nghe-umee.35A9028B.html" target="_blank"  title="CÔNG TY CỔ PHẦN TẬP ĐOÀN TÀI CHÍNH CÔNG NGHỆ UMEE">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot3/268683/155x155/1805481648796855837.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN TÀI CHÍNH CÔNG NGHỆ UMEE">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <a class="job_link" data-id="35B9D55F" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-cham-soc-khach-hang-vip-umee-ume62022-44.35B9D55F.html" target="_blank" title="Chuyên viên chăm sóc khách hàng VIP - UMEE - UME62022-44">
                                                        Chuyên viên chăm sóc khách hàng VIP - UMEE - UME62022-44
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-tap-doan-tai-chinh-cong-nghe-umee.35A9028B.html" title="CÔNG TY CỔ PHẦN TẬP ĐOÀN TÀI CHÍNH CÔNG NGHỆ UMEE">CÔNG TY CỔ PHẦN TẬP ĐOÀN TÀI CHÍNH CÔNG NGHỆ UMEE</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                                <li> Hồ Chí Minh</li>
                                                                <li> Đà Nẵng</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D55F " href="javascript:void(0);" data-id="35B9D55F"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B985D1">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-mol-logistics-transportation-vn.35A7048F.html" target="_blank"  title="Công Ty TNHH Mol Logistics Transportation VN">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot7/138127/155x155/172034logocongty.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH Mol Logistics Transportation VN">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B985D1" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-dieu-do-van-tai.35B985D1.html" target="_blank" title="Nhân viên Điều Độ Vận Tải">
                                                        Nhân viên Điều Độ Vận Tải
                                                        </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-mol-logistics-transportation-vn.35A7048F.html" title="Công Ty TNHH Mol Logistics Transportation VN">Công Ty TNHH Mol Logistics Transportation VN</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 7 Tr - 11 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B985D1 " href="javascript:void(0);" data-id="35B985D1"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D561">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-xay-dung-trung-nam-trungnam-group.35A53619.html" target="_blank"  title="Công Ty Cổ Phần Đầu Tư Xây Dựng Trung Nam - TRUNGNAM GROUP">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employers/19737/155x155/164111logotrungnamgroup-01.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Đầu Tư Xây Dựng Trung Nam - TRUNGNAM GROUP">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D561" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-ky-thuat-thuy-loi.35B9D561.html" target="_blank" title="Chuyên Viên Kỹ Thuật Thủy Lợi">
                                                        Chuyên Viên Kỹ Thuật Thủy Lợi
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-xay-dung-trung-nam-trungnam-group.35A53619.html" title="Công Ty Cổ Phần Đầu Tư Xây Dựng Trung Nam - TRUNGNAM GROUP">Công Ty Cổ Phần Đầu Tư Xây Dựng Trung Nam - TRUNGNAM GROUP</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=fwlwOxEnSsk" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D561 " href="javascript:void(0);" data-id="35B9D561"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D560">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-thuong-mai-lmp.35A906C1.html" target="_blank"  title="CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI LMP">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot1/269761/155x155/143053z3499388560183_6fd8887ad1c48cf07ee31e1a50f978da.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI LMP">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D560" href="https://careerbuilder.vn/vi/tim-viec-lam/tai-xe.35B9D560.html" target="_blank" title="Tài xế">
                                                        Tài xế
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dau-tu-thuong-mai-lmp.35A906C1.html" title="CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI LMP">CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI LMP</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D560 " href="javascript:void(0);" data-id="35B9D560"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D554">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/jet-commerce-vietnam.35A83BAC.html" target="_blank"  title="Jet Commerce Vietnam">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot2/217772/155x155/164543jetlogo-cmyk-01.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Jet Commerce Vietnam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D554" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-cham-soc-khach-hang-customer-service.35B9D554.html" target="_blank" title="Nhân Viên Chăm Sóc Khách Hàng/Customer Service">
                                                        Nhân Viên Chăm Sóc Khách Hàng/Customer Service
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/jet-commerce-vietnam.35A83BAC.html" title="Jet Commerce Vietnam">Jet Commerce Vietnam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 7 Tr - 10 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=4mfp47TsfBU" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D554 " href="javascript:void(0);" data-id="35B9D554"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D55A">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-jac-recruitment-vietnam.35A6A80C.html" target="_blank"  title="Công Ty TNHH JAC Recruitment Vietnam">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot4/114444/155x155/133616jac_2013_09_06_95x50.gif" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty TNHH JAC Recruitment Vietnam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D55A" href="https://careerbuilder.vn/vi/tim-viec-lam/quality-assurance-tester-mobile-app.35B9D55A.html" target="_blank" title="Quality Assurance Tester (Mobile App)">
                                                        Quality Assurance Tester (Mobile App)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-jac-recruitment-vietnam.35A6A80C.html" title="Công Ty TNHH JAC Recruitment Vietnam">Công Ty TNHH JAC Recruitment Vietnam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 11 Tr - 33 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D55A " href="javascript:void(0);" data-id="35B9D55A"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D559">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/fpt-telecom-chi-nhanh-cong-ty-co-phan-vien-thong-fpt.35A8CF49.html" target="_blank"  title="FPT Telecom - Chi nhánh Công ty Cổ Phần Viễn Thông FPT">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot1/255561/155x155/114116100334240.png" src="../kiemviecv32/images/graphics/blank.gif" alt="FPT Telecom - Chi nhánh Công ty Cổ Phần Viễn Thông FPT">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D559" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-kinh-doanh.35B9D559.html" target="_blank" title="Nhân Viên kinh doanh">
                                                        Nhân Viên kinh doanh
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/fpt-telecom-chi-nhanh-cong-ty-co-phan-vien-thong-fpt.35A8CF49.html" title="FPT Telecom - Chi nhánh Công ty Cổ Phần Viễn Thông FPT">FPT Telecom - Chi nhánh Công ty Cổ Phần Viễn Thông FPT</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 8 Tr - 20 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D559 " href="javascript:void(0);" data-id="35B9D559"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D558">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-nang-luong-hoang-nguyen.35A9182A.html" target="_blank"  title="CÔNG TY CỔ PHẦN NĂNG LƯỢNG HOÀNG NGUYÊN">
                                                    <img  class="lazy-img" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN NĂNG LƯỢNG HOÀNG NGUYÊN">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D558" href="https://careerbuilder.vn/vi/tim-viec-lam/ke-toan-tong-hop.35B9D558.html" target="_blank" title="Kế Toán Tổng Hợp">
                                                        Kế Toán Tổng Hợp
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-nang-luong-hoang-nguyen.35A9182A.html" title="CÔNG TY CỔ PHẦN NĂNG LƯỢNG HOÀNG NGUYÊN">CÔNG TY CỔ PHẦN NĂNG LƯỢNG HOÀNG NGUYÊN</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 17 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D558 " href="javascript:void(0);" data-id="35B9D558"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D555">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghe-xu-ly-nuoc-va-moi-truong-etm-chi-nhanh-ho-chi-minh.35A91670.html" target="_blank"  title="CÔNG TY CỔ PHẦN CÔNG NGHỆ XỬ LÝ NƯỚC VÀ MÔI TRƯỜNG ETM CHI NHÁNH HỒ CHÍ MINH">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/273776/155x155/94839lg.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ XỬ LÝ NƯỚC VÀ MÔI TRƯỜNG ETM CHI NHÁNH HỒ CHÍ MINH">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D555" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-kinh-doanh.35B9D555.html" target="_blank" title="Nhân viên kinh doanh">
                                                        Nhân viên kinh doanh
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghe-xu-ly-nuoc-va-moi-truong-etm-chi-nhanh-ho-chi-minh.35A91670.html" title="CÔNG TY CỔ PHẦN CÔNG NGHỆ XỬ LÝ NƯỚC VÀ MÔI TRƯỜNG ETM CHI NHÁNH HỒ CHÍ MINH">CÔNG TY CỔ PHẦN CÔNG NGHỆ XỬ LÝ NƯỚC VÀ MÔI TRƯỜNG ETM CHI NHÁNH HỒ CHÍ MINH</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 7 Tr - 15 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D555 " href="javascript:void(0);" data-id="35B9D555"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D556">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/panasonic-vietnam-group.35A69BF6.html" target="_blank"  title="Panasonic Vietnam Group">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/111350/155x155/1041277930317.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Panasonic Vietnam Group">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title  is-red">
                                                        <a class="job_link" data-id="35B9D556" href="https://careerbuilder.vn/vi/tim-viec-lam/employee-relation-staff.35B9D556.html" target="_blank" title="Employee Relation Staff">
                                                        Employee Relation Staff
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/panasonic-vietnam-group.35A69BF6.html" title="Panasonic Vietnam Group">Panasonic Vietnam Group</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-taxi"></span>Xe đưa đón</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=m4nboCj3N7M" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D556 " href="javascript:void(0);" data-id="35B9D556"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D548">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghe-giao-duc-kiddihub.35A8F4B0.html" target="_blank"  title="CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC KIDDIHUB">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/265136/155x155/103259df911822030acf54961b.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC KIDDIHUB">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D548" href="https://careerbuilder.vn/vi/tim-viec-lam/nhan-vien-kinh-doanh.35B9D548.html" target="_blank" title="Nhân viên kinh doanh">
                                                        Nhân viên kinh doanh
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-cong-nghe-giao-duc-kiddihub.35A8F4B0.html" title="CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC KIDDIHUB">CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC KIDDIHUB</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 6 Tr - 30 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=TG1UZ7GG1-s&pbjreload=102" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D548 " href="javascript:void(0);" data-id="35B9D548"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D557">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/home-entertainment-central-retail-in-vietnam.35A87885.html" target="_blank"  title="Home & Entertainment - Central Retail in Vietnam">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot9/233349/155x155/94134centralretail-1b.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Home & Entertainment - Central Retail in Vietnam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D557" href="https://careerbuilder.vn/vi/tim-viec-lam/kubo-big-c-vinh-cua-hang-pho.35B9D557.html" target="_blank" title="[KUBO - Big C Vinh] Cửa hàng phó">
                                                        [KUBO - Big C Vinh] Cửa hàng phó
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/home-entertainment-central-retail-in-vietnam.35A87885.html" title="Home & Entertainment - Central Retail in Vietnam">Home & Entertainment - Central Retail in Vietnam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Thanh Hóa</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D557 " href="javascript:void(0);" data-id="35B9D557"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D553">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/vdsc-cong-ty-cp-chung-khoan-rong-viet.35A56CA0.html" target="_blank"  title="VDSC - Công ty CP Chứng khoán Rồng Việt">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employers/33696/155x155/141342logovdsc-noslogan.png" src="../kiemviecv32/images/graphics/blank.gif" alt="VDSC - Công ty CP Chứng khoán Rồng Việt">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D553" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-cao-cap-tu-van-dau-tu-kh-ca-nhan-cn-dong-nai.35B9D553.html" target="_blank" title="CHUYÊN VIÊN CAO CẤP TƯ VẤN ĐẦU TƯ - KH CÁ NHÂN - CN ĐỒNG NAI">
                                                        CHUYÊN VIÊN CAO CẤP TƯ VẤN ĐẦU TƯ - KH CÁ NHÂN - CN ĐỒNG NAI
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/vdsc-cong-ty-cp-chung-khoan-rong-viet.35A56CA0.html" title="VDSC - Công ty CP Chứng khoán Rồng Việt">VDSC - Công ty CP Chứng khoán Rồng Việt</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 16 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Đồng Nai</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D553 " href="javascript:void(0);" data-id="35B9D553"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D550">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-fecon.35A713FD.html" target="_blank"  title="Công ty Cổ phần FECON">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot7/142077/155x155/163220-29865a87951beee16796b5549440712a1777dfc00ebdcb960e-pimgpsh_fullsize_distr.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty Cổ phần FECON">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D550" href="https://careerbuilder.vn/vi/tim-viec-lam/ky-su-hien-truong-se.35B9D550.html" target="_blank" title="KỸ SƯ HIỆN TRƯỜNG - SE">
                                                        KỸ SƯ HIỆN TRƯỜNG - SE
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-fecon.35A713FD.html" title="Công ty Cổ phần FECON">Công ty Cổ phần FECON</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hà Nội</li>
                                                                <li> Hồ Chí Minh</li>
                                                                <li> Quảng Nam</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                            <li><span class="fa fa-black-tie"></span>Đồng phục</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D550 " href="javascript:void(0);" data-id="35B9D550"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D53B">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cargill-vietnam.35A4FBDB.html" target="_blank"  title="Cargill Vietnam">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employers/4827/155x155/4827.gif" src="../kiemviecv32/images/graphics/blank.gif" alt="Cargill Vietnam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D53B" href="https://careerbuilder.vn/vi/tim-viec-lam/operations-engineer-ky-su-van-hanh-bien-hoa-work-on-shifts.35B9D53B.html" target="_blank" title="Operations Engineer/ Kỹ Sư Vận Hành (Biên Hòa/ Work on Shifts)">
                                                        Operations Engineer/ Kỹ Sư Vận Hành (Biên Hòa/ Work on Shifts)
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cargill-vietnam.35A4FBDB.html" title="Cargill Vietnam">Cargill Vietnam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Đồng Nai</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-graduation-cap"></span>Đào tạo</li>
                                                            <li><span class="fa fa-briefcase"></span>Nghỉ phép năm</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=xDfkbOyVWHs" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D53B " href="javascript:void(0);" data-id="35B9D53B"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D54E">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam-brewery.35A66A42.html" target="_blank"  title="Heineken Vietnam Brewery">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot6/98626/155x155/155027logohnk-vn.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Heineken Vietnam Brewery">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D54E" href="https://careerbuilder.vn/vi/tim-viec-lam/infrastructure-specialist.35B9D54E.html" target="_blank" title="Infrastructure Specialist">
                                                        Infrastructure Specialist
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/heineken-vietnam-brewery.35A66A42.html" title="Heineken Vietnam Brewery">Heineken Vietnam Brewery</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-money"></span>Phụ cấp</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D54E " href="javascript:void(0);" data-id="35B9D54E"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D549">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dich-vu-nhan-su-cao-cap-artemis.35A8E456.html" target="_blank"  title="CÔNG TY CỔ PHẦN DỊCH VỤ NHÂN SỰ CAO CẤP ARTEMIS">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot0/260950/155x155/132516artemislogo.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="CÔNG TY CỔ PHẦN DỊCH VỤ NHÂN SỰ CAO CẤP ARTEMIS">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D549" href="https://careerbuilder.vn/vi/tim-viec-lam/phien-dich-tieng-trung.35B9D549.html" target="_blank" title="Phiên dịch tiếng Trung">
                                                        Phiên dịch tiếng Trung
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-dich-vu-nhan-su-cao-cap-artemis.35A8E456.html" title="CÔNG TY CỔ PHẦN DỊCH VỤ NHÂN SỰ CAO CẤP ARTEMIS">CÔNG TY CỔ PHẦN DỊCH VỤ NHÂN SỰ CAO CẤP ARTEMIS</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: 10 Tr - 15 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Thái Bình</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D549 " href="javascript:void(0);" data-id="35B9D549"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D54A">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/vdsc-cong-ty-cp-chung-khoan-rong-viet.35A56CA0.html" target="_blank"  title="VDSC - Công ty CP Chứng khoán Rồng Việt">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employers/33696/155x155/141342logovdsc-noslogan.png" src="../kiemviecv32/images/graphics/blank.gif" alt="VDSC - Công ty CP Chứng khoán Rồng Việt">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D54A" href="https://careerbuilder.vn/vi/tim-viec-lam/chuyen-vien-cao-cap-tu-van-dau-tu-kh-ca-nhan-cn-vung-tau.35B9D54A.html" target="_blank" title="CHUYÊN VIÊN CAO CẤP TƯ VẤN ĐẦU TƯ - KH CÁ NHÂN - CN VŨNG TÀU">
                                                        CHUYÊN VIÊN CAO CẤP TƯ VẤN ĐẦU TƯ - KH CÁ NHÂN - CN VŨNG TÀU
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/vdsc-cong-ty-cp-chung-khoan-rong-viet.35A56CA0.html" title="VDSC - Công ty CP Chứng khoán Rồng Việt">VDSC - Công ty CP Chứng khoán Rồng Việt</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Bà Rịa - Vũng Tàu</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-laptop"></span>Laptop</li>
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D54A " href="javascript:void(0);" data-id="35B9D54A"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D540">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/concung-com-con-cung-joint-stock-company.35A70491.html" target="_blank"  title="Concung.com - Con Cung Joint Stock Company">
                                                    <img  class="lazy-img" data-src="https://images.careerbuilder.vn/employer_folders/lot9/138129/155x155/171937hcrop_logoconcung-01.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Concung.com - Con Cung Joint Stock Company">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D540" href="https://careerbuilder.vn/vi/tim-viec-lam/quan-7-receptionist-cum-admin.35B9D540.html" target="_blank" title="(Quận 7) Receptionist cum Admin">
                                                        (Quận 7) Receptionist cum Admin
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/concung-com-con-cung-joint-stock-company.35A70491.html" title="Concung.com - Con Cung Joint Stock Company">Concung.com - Con Cung Joint Stock Company</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Cạnh tranh</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hồ Chí Minh</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="play-video" href="https://www.youtube.com/watch?v=dZgrzAtXhKU&t=166s" data-fancybox=""><i class="mdi mdi-play-circle-outline"></i><span class="text"> Xem video</span></a></li>
                                                            <li><a class="toollips save-job chk_save_35B9D540 " href="javascript:void(0);" data-id="35B9D540"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="job-item  " id="job-item-35B9D50B">
                                            <div class="figure">
                                                <div class="image">
                                                    <a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-lam-moc-viet-nam.35A90091.html" target="_blank"  title="Công ty TNHH sản xuất thương mại Lâm Mộc Việt Nam">
                                                    <img  class="lazy-img" data-src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" src="../kiemviecv32/images/graphics/blank.gif" alt="Công ty TNHH sản xuất thương mại Lâm Mộc Việt Nam">
                                                    </a>
                                                </div>
                                                <div class="figcaption">
                                                    <div class="title ">
                                                        <a class="job_link" data-id="35B9D50B" href="https://careerbuilder.vn/vi/tim-viec-lam/korean-sale-manager.35B9D50B.html" target="_blank" title="Korean Sale Manager">
                                                        Korean Sale Manager
                                                        <span class="new"><font color="ff0000"><font color="FF0000">(Mới)</font></font></span>                                     </a>
                                                    </div>
                                                    <div class="caption">
                                                        <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-tnhh-san-xuat-thuong-mai-lam-moc-viet-nam.35A90091.html" title="Công ty TNHH sản xuất thương mại Lâm Mộc Việt Nam">Công ty TNHH sản xuất thương mại Lâm Mộc Việt Nam</a>
                                                        <div class="salary">
                                                            <p><em class="fa fa-usd"></em>Lương: Dưới 110 Tr VND</p>
                                                        </div>
                                                        <div class="location">
                                                            <em class="mdi mdi-map-marker"></em>
                                                            <ul>
                                                                <li>Hưng Yên</li>
                                                            </ul>
                                                        </div>
                                                        <ul class="welfare">
                                                            <li><span class="fa fa-medkit"></span>Chế độ bảo hiểm</li>
                                                            <li><span class="fa fa-plane"></span>Du Lịch</li>
                                                            <li><span class="fa fa-usd"></span>Chế độ thưởng</li>
                                                        </ul>
                                                    </div>
                                                    <div class="bottom-right-icon">
                                                        <ul>
                                                            <li><a class="toollips save-job chk_save_35B9D50B " href="javascript:void(0);" data-id="35B9D50B"  onclick="popuplogin()">
                                                                <i class="mdi mdi-heart-outline"></i>
                                                                <span class="text">Lưu việc làm</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="time">
                                                            <em class="mdi mdi-calendar"></em>
                                                            <time>29/06/2022</time>
                                                            <div class="toolip">
                                                                <p>Ngày cập nhật</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function(){
                                              if(memberLogin == 'yes'){
                                            	checkApply();
                                              }
                                            });
                                        </script>
                                    </div>
                                    <div class="pagination">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0);">1</a></li>
                                            <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html>2</a></li>
                                            <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-3-vi.html>3</a></li>
                                            <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-4-vi.html>4</a></li>
                                            <li><a href=https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-5-vi.html>5</a></li>
                                            <li class="next-page"><a href="https://careerbuilder.vn/viec-lam/tat-ca-viec-lam-trang-2-vi.html"> <span class="mdi mdi-chevron-right"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticker-jobs">
                        <div class="icons"><em class="material-icons">access_alarms</em></div>
                        <div class="content">
                            <p>Gửi tôi việc làm tương tự</p>
                        </div>
                        <div class="button"> <a href="javascript:;" onclick="return adVanceJobalert();">Đăng ký ngay</a></div>
                    </div>
                    <div class="job-bottom-banner" style="text-align:center;">
                        <script type='text/javascript'><!--// <![CDATA[
                            /* [id853] CB_JSK_SearchResult_Banner_1410x140_01 */
                            OA_show(853);
                            // ]]> -->
                        </script>
                    </div>
                </div>
                <div class="col-lg-4 col-custom-xxl-3">
                    <div class="list-banner-search-result">
                        <!-- remve class sticky-->
                        <div class="banner-ad">
                            <script type='text/javascript'><!--// <![CDATA[
                                /* [id854] CB_JSK_SearchResult_Banner_390x270_01 */
                                OA_show(854);
                                // ]]> -->
                            </script>
                        </div>
                        <div class="banner-ad">
                            <script type='text/javascript'><!--// <![CDATA[
                                /* [id855] CB_JSK_SearchResult_Banner_390x270_02 */
                                OA_show(855);
                                // ]]> -->
                            </script>
                        </div>
                        <div class="banner-ad">
                            <script type='text/javascript'><!--// <![CDATA[
                                /* [id856] CB_JSK_SearchResult_Banner_390x270_03 */
                                OA_show(856);
                                // ]]> -->
                            </script>
                        </div>
                        <div class="banner-ad" style="text-align:center">
                            <script type='text/javascript'><!--// <![CDATA[
                                /* [id772] CB_JSK_SearchResult_Banner_390x270_04 */
                                OA_show(772);
                                // ]]> -->
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="advanced-search-modal" style="display: none">
    </div>
     <script src="{{ asset('js/footer2.js') }}">/*swiper.js*/</script>
    <script>/*swiper.js*/
        
        /*search-result-list.js*/
        
        $(document).ready(function(){$('.page-heading-tool .tool-wrapper .mobile-filter').on('click',function(){$('.page-heading-tool .filters-wrapper').slideToggle()})
        $('.page-heading-tool .tool-wrapper .mobile-filter-2').on('click',function(){$('.page-heading-tool .filters-wrapper').slideToggle()})
        $('.page-heading-tool .filters-wrapper .close-filter').on('click',function(){$('.page-heading-tool .filters-wrapper').slideToggle()});setInterval(function(){var text=$.trim($("#keyword").val());if(text!=""){$('.cleartext').addClass('active');}else{$('.cleartext').removeClass('active');}},100);$('.cleartext').click(function(){$('#keyword').val('');});if($(window).width()<1025){$('.page-heading-tool .search-job .form-keyword').on('click',function(){if($('.page-heading-tool').hasClass('mobile-hide')){$('.page-heading-tool .search-job .form-select-chosen').css('margin-bottom','5px')
        $('.page-heading-tool .search-job .form-select-chosen, .page-heading-tool .search-job .form-submit').slideDown()
        $('.page-heading-tool .close-input-filter').addClass('active')
        $('.page-heading-tool .tool-wrapper').addClass('mobile-show')
        setTimeout(function(){$('.page-heading-tool .search-job .form-select-chosen').css('overflow','initial');fixWidthChosen();},1000)}})
        $('.page-heading-tool .close-input-filter').on('click',function(){$(this).removeClass('active')
        $('.page-heading-tool .search-job .form-select-chosen, .page-heading-tool .search-job .form-submit').slideUp()
        $('.page-heading-tool .tool-wrapper').removeClass('mobile-show')})}
        $('.filter-item .view-more ').on('click',function(){$(this).prev().slideToggle()
        $(this).children('span').toggleClass('hidden')})
        $('.Advanced-Search-Popup').on('click',function(e){e.preventDefault()
        $.fancybox.open($('.advanced-search-modal'))})
        $(".jobs-side-list img.lazy-img").lazy();var fixWidth=fixWidth1=0;$(document).on('scroll',function(){$(window).scroll(function(event){var heightFilter=$('.page-heading-tool').height()
        var scroll=$(window).scrollTop();if(scroll<=60){$('.page-heading-tool').addClass('mobile-show-all')
        if(fixWidth==0)
        {fixWidth=1;fixWidthChosen();}}else{fixWidth=0;$('.page-heading-tool').removeClass('mobile-show-all')}
        if(scroll>=(heightFilter+60)){fixWidth1=0;$('.page-heading-tool').addClass('mobile-hide');$('.tool-wrapper').addClass('mobile-height');}else{$('.page-heading-tool').removeClass('mobile-hide');$('.tool-wrapper').removeClass('mobile-height');if(fixWidth1==0)
        {fixWidth1=1;fixWidthChosen();}}});})
        $('.multiselect2').multiselect({header:language.multi_head_select,noneSelectedText:language.multi_select,selectedText:"# "+language.multi_select_num,click:function(event,ui){var id=$(this).attr('id');count=$(this).multiselect("widget").find("input:checked").length;if(count>3){return false;}
        if(count>0)$('.'+id+'_selected').show();else $('.'+id+'_selected').hide();if(ui.checked){var parent_id='.'+id+'_selected ul';var str='<li id="'+id+'_'+ui.value+'">';str+='<span class="asmListItemLabel">'+ui.text+'</span>';str+='<a href="javascript:void(0);" onclick="removeSelected(this, \''+id+'\', \''+ui.value+'\')" class="asmListItemRemove">Delete</a>';str+='</li>';$(parent_id).append(str);}else{$('#'+id+'_'+ui.value).remove();}}});$(".ui-multiselect-menu").appendTo('.edit-multiselect');});$(function(){$(".btn-close-modal").on("click",function(){$.fancybox.close();});});
    </script>
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
                        <input type="hidden" name="csrf_token" value= "e562d79a584b02f36a34bfe53506f732ca97103772b7a7c1ac041d7731b851f1" />  
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
    <script type="text/javascript"></script>
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
    <script>
        var language_psearchlist = {
        	job_chk_save_jobs_saved:"Việc làm đã lưu",
        	job_chk_save_jobs_save:"Lưu việc làm"
        };
        if(typeof language === 'undefined')	var language = language_psearchlist;
        else	$.extend(language, language_psearchlist);
        var list_job_id = [];
        $(document).ready(function(){
          if(memberLogin == 'yes'){
        	$('.save-job').each(function(){
        	  var id = $(this).data('id');
        	  list_job_id.push(id);
        	});
        	var check_job = $.ajax({
        	  url: ROOT_KIEMVIEC+'jobseekers/check-save-job',
        	  dataType: 'json',
        	  data: 'lst_id='+list_job_id.join()
        	});
        	var finish_chk = check_job.then(function(data){
        	  if(data.status = 1){
        		$.each(data.result, function(i, item) {
        		  if(item.status == 1){
        			$(".chk_save_"+item.id).addClass('saved');
        			$(".chk_save_"+item.id).find('.text').html(language.job_chk_save_jobs_saved);
        			$(".chk_save_value_"+item.id).val(1);
        		  }else{
        			$(".chk_save_value_"+item.id).val(0);
        			$(".chk_save_"+item.id).find('.text').html(language.job_chk_save_jobs_save);
        		  }
        		});
        	  }
        	});
          }
        });
    </script>
    <script type="text/javascript">
        var arrData = {"similar":0,"OWNER":"kiemviec","COUNT_SEARCH":true,"SORT":"dv","SORT_BY":"desc","SORT_TITLE":"dv"};
    </script> 
    <div class="back-drop"></div>
</main>
@endsection