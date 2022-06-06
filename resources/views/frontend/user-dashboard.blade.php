
@extends('frontend.layout.app')

@section('content') 


<div class="content-inner">
    <div class="find-jobs-form">
        <div class="container-fluid">
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
                                <p>TÌM VIỆC NGAY</p>
                                <span class="mdi mdi-magnify"></span> 
                            </button>
                        </div>
                        <div class="form-group animation">
                            <button class="btn-gradient" onClick="return validDatasearchJobsByKeyword('vi');">
                                <p>TÌM VIỆC NGAY</p>
                                <span class="mdi mdi-magnify"></span> 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="dash-board-wrap">
            <div class="row mergebox">
                <div class="col-lg-8">
                    <div class="widget widget-2">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <h3>Careerbuilder Profile</h3>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="row">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="img-info">
                                        <div class="figure">
                                            <div class="image img-result hide">
                                                <input style="display: none;" onchange="return ajaxFileUpload();" type="file" class="file" id="fileAvatar" name="fileAvatar">
                                                <img id="img_mem_avatar" src="./img/dash-board/1.png" alt="Dao Cuong">
                                            </div>
                                            <div class="edit-image dropdown">
                                                <em class="mdi mdi-image-edit"></em>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li class="upload-pro"><a href="javascript:void(0);" onclick="choose_file();"> <em class="material-icons">add_photo_alternate</em><span>Tải hình ảnh</span></a></li>
                                                        <li class="view-pro"><a href="javascript:void(0);" onclick="removeAvarta();"> <em class="material-icons">highlight_off</em><span>Xóa hình ảnh</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mobile-show">
                                            <div class="cb-name">
                                                <h2>{{ Auth::user()->name }}</h2>
                                            </div>
                                            <div class="information">
                                                <div class="assistant" id="titleresume_16167824">Chưa cập nhật</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-9">
                                    <div class="cb-name">
                                        <h2>{{ Auth::user()->name }}</h2>
                                    </div>
                                    <div class="information">
                                        <div class="assistant">Chưa cập nhật</div>
                                        <ul class="desired">
                                            <li>
                                                <em class="material-icons">star</em>
                                                <p>Chưa có kinh nghiệm</p>
                                            </li>
                                            <li>
                                                <em class="material-icons">person</em>
                                                <p>Cấp bậc mong muốn: <span>Chưa cập nhật</span></p>
                                            </li>
                                            <li>
                                                <em class="material-icons">attach_money</em>
                                                <p>Mức lương mong muốn: <span>Chưa cập nhật</span></p>
                                            </li>
                                            <li style="position: relative;">
                                                <em class="mdi mdi-calendar"></em>
                                                <p id="date_16167824">
                                                    Ngày cập nhật: 31/05/2022
                                                    <a title="Cập nhật hồ sơ" href="javascript:void(0);" class="ac_refesh" rel="16167824">
                                                    <span class="material-icons refeshdate ">loop</span>
                                                    </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="progress-bar-status incomplete">
                                        <div class="profile-strength">
                                            <p>Mức độ hoàn thành: <span>Chưa Hoàn Tất</span></p>
                                        </div>
                                        <div class="noti">
                                            <em class="mdi mdi-alert-circle-outline"></em>
                                            <p>Chưa hoàn thành. Bạn vui lòng cập nhật và hoàn thành hồ sơ</p>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress">
                                                <progress class="progress-main" max="7" value="0"></progress>
                                            </div>
                                            <div class="progress-row">
                                                <div class="line active"></div>
                                                <div class="line "></div>
                                                <div class="line "></div>
                                                <div class="line "></div>
                                                <div class="line "></div>
                                                <div class="line "></div>
                                                <div class="line "><span class="success"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 cvcht-slide">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#t-resume-section">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i14.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Vị trí/Chức danh (Tiêu đề hồ sơ)
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#personalinfo-section">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i2.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Thông tin cá nhân
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-14">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i3.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Mục tiêu nghề nghiệp
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-18">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i5.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Công việc mong muốn
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-15">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i4.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Kinh nghiệm làm việc
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-16">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i7.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Học vấn
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#certificate-section">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i10.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Chứng chỉ
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-17">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i9.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Kỹ năng
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-19">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i6.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Thành tích
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#other-activity-section">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i13.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Hoạt động khác
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="swiper-slide">
                                                <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/my-profile#widget-20">
                                                    <div class="item-cvcht">
                                                        <div class="col-sm-3 icon">
                                                            <img src="img/dash-board/i8.png" alt="">
                                                        </div>
                                                        <div class="col-sm-9 txt">
                                                            Người tham khảo
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-next">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </div>
                                    <div class="swiper-prev">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 function-bottom">
                                    <div class="button-list">
                                        <div class="item">
                                            <a title="Cập nhật hồ sơ" href="javascript:void(0);" class="ac_refesh" rel="16167824" >
                                            <span class="mdi mdi-rotate-3d-variant"></span>
                                            Cập nhật hồ sơ
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a id="btn_view_cbprofile" href="javascript:void(0);">
                                            <span class="mdi mdi-eye"></span>
                                            Xem hồ sơ
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="javascript:void(0);" onclick="downloadCvProfile(16167824)">
                                            <span class="mdi mdi-download"></span>
                                            Tải hồ sơ
                                            </a>
                                        </div>
                                    </div>
                                    <div class="edit-profile">
                                        <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate">Chỉnh mẫu hồ sơ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-b searchable-cv-widget">
                        <h4>
                            Cho phép tìm kiếm hồ sơ CareerBuilder
                            <div class="tips p1" data-type="1">
                                <div class="icon">
                                    <em class="mdi mdi-lightbulb"></em>
                                </div>
                                <p>Tips</p>
                            </div>
                        </h4>
                        <div class="switch-status group_searchable" id="cv_searchable_16167824" data-id="16167824" data-complete="0">
                            <a href="javascript:void(0);" data-type="2" class="lock  active ">
                            <em class="mdi mdi-lock"></em>Khóa
                            </a>
                            <a href="javascript:void(0);" data-type="1" class="public ">
                            <em class="mdi mdi-web"></em>Công khai
                            </a>
                            <a href="javascript:void(0);" data-type="3" class="flash ">
                            <em class="mdi mdi-flash"></em>Khẩn cấp
                            </a>
                        </div>
                        <p>Bạn có thể cho phép nhà tuyển dụng tìm kiếm hồ sơ CareerBuilder hoặc hồ sơ đính kèm </p>
                    </div>
                    <div class="widget-b jobalert-cv-widget">
                        <h4>
                            Nhận thông báo việc làm
                            <div class="tips p2" data-type="2">
                                <div class="icon">
                                    <em class="mdi mdi-lightbulb"></em>
                                </div>
                                <p>Tips</p>
                            </div>
                        </h4>
                        <div class="switch-status group_jobalert_top" id="cv_jobalert_16167824" data-id="16167824"  data-complete="0">
                            <a href="javascript:void(0);" data-type="0" class="inactive  active ">Không nhận</a>
                            <a href="javascript:void(0);" data-type="1" class="actives ">Nhận</a>
                        </div>
                        <p>Nhận thông báo việc làm phù hợp với hồ sơ này mỗi 2 tuần</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget-1 b1">
                        <div class="widget-head">
                            <p>0</p>
                            <p>Nhà tuyển dụng xem hồ sơ của tôi</p>
                        </div>
                        <div class="widget-body">
                            <div class="item">
                                <div class="number">
                                    <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x1">
                                    0
                                    </a>
                                </div>
                                <p>
                                    <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                                    NTD xem qua hồ sơ CB
                                    </a>
                                </p>
                            </div>
                            <div class="item">
                                <div class="number">
                                    <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp" class="x2">
                                    0
                                    </a>
                                </div>
                                <div>
                                    <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">
                                    NTD xem qua hồ sơ việc làm khẩn cấp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="widget-1 b2">
                        <div class="widget-head">
                            <p>0</p>
                            <p>Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ</p>
                        </div>
                        <div class="widget-body">
                            <div class="item">
                                <div class="nonum"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="widget-1 b3">
                        <div class="widget-head">
                            <p>0</p>
                            <p>Việc làm đã lưu</p>
                        </div>
                        <div class="widget-body">
                            <div class="item">
                                <div class="nonum"><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobsaved">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="widget-1 b4">
                        <div class="widget-head">
                            <p>0</p>
                            <p>Việc làm đã nộp</p>
                        </div>
                        <div class="widget-body">
                            <div class="item">
                                <div class="number">
                                    <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x3">
                                    0
                                    </a>
                                </div>
                                <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Nộp ở trạng thái bình thường</a></div>
                            </div>
                            <div class="item">
                                <div class="number">
                                    <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied" class="x4">
                                    0
                                    </a>
                                </div>
                                <div><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobapplied">Nộp ở trạng thái Tìm việc khẩn cấp</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="widget widget-4 attached-resume">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <h3>Hồ sơ đính kèm</h3>
                            </div>
                            <p>Ngoài hồ sơ CareerBuilder, bạn có thể tạo hồ sơ đính kèm để ứng tuyển và  tìm kiếm bởi nhà tuyển dụng</p>
                        </div>
                        <div class="widget-body">
                            <div class="box-text">
                                <h4>Bạn cần tải hoặc tạo hồ sơ</h4>
                                <p>Vui lòng thêm mục tiêu nghề nghiệp</p>
                            </div>
                            <div class="button-upload" id="created-resume"><a href="javascript:void(0);" >Tạo  Hồ Sơ Ngay!</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget widget-5">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <h3>Cài đặt hạn chế nhà tuyển dụng</h3>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="main-form">
                                <div class="form-group form-text">
                                    <div class="form-group form-keyword">
                                        <input type="text" name="company_name_blacklist" placeholder="Nhập tên công ty" class="company_name" id="company_name_blacklist">
                                        <div class="cleartext"><em class="mdi mdi-close-circle"></em></div>
                                    </div>
                                    <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDashboard();">Thêm</a></div>
                                </div>
                            </div>
                            <div class="top-employers-list">
                            </div>
                            <div class="main-form">
                                <div class="form-group form-text">
                                    <div class="form-group form-keyword">
                                        <input type="text" name="company_domain_blacklist" placeholder="Nhập domain công ty" class="company_domain" id="company_domain_blacklist">
                                        <div class="cleartext active-clear"><em class="mdi mdi-close-circle"></em></div>
                                    </div>
                                    <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0);" onclick="addBlackListDomain();">Thêm</a></div>
                                </div>
                            </div>
                            <div class="domain-saved">
                            </div>
                            <div class="view-more"><a href="https://careerbuilder.vn/vi/jobseekers/blacklist-domain">Xem thêm <span class="mdi mdi-arrow-right"></span></a></div>
                            <form action="" method="post" id="frmAddBlacklist"><input type="hidden" value="0" name="jblacklist_id[]" id="company_id_blacklist"></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-6">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <h3>Việc Làm Phù Hợp Với Bạn</h3>
                            </div>
                        </div>
                        <div class="apply-job-area">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="list-job jobs-list-ajax" id="jobs-list">
                                        <div class="item">
                                            <div class="ckb-item">
                                                <label class="container-ckb">
                                                <input type="checkbox" checked="checked" name="jobchk[]" value="35B95BD6">
                                                <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="job-item" id="job-item-35B95BD6">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html" target="_blank" title="TCL (Vietnam) Corporation Limited"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot6/102756/79x79/174459logomoi.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="TCL (Vietnam) Corporation Limited"></a></div>
                                                    <div class="figcaption">
                                                        <div class="title"><a class="job_link" data-id="35B95BD6" href="https://careerbuilder.vn/vi/tim-viec-lam/thuc-tap-sinh-bo-phan-trade-marketing-gtm-trainee.35B95BD6.html" title="Thực tập sinh bộ phận Trade marketing- GTM Trainee" target="_blank">Thực tập sinh bộ phận Trade marketing- GTM Trainee</a></div>
                                                        <div class="caption">
                                                            <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html" title="TCL (Vietnam) Corporation Limited">TCL (Vietnam) Corporation Limited</a>
                                                            <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                            <div class="location">
                                                                <ul>
                                                                    <li>Hà Nội</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ckb-item">
                                                <label class="container-ckb">
                                                <input type="checkbox" checked="checked" name="jobchk[]" value="35B8B9CE">
                                                <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="job-item" id="job-item-35B8B9CE">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" target="_blank" title="Công Ty Cổ Phần Diana Unicharm"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot1/129051/79x79/140745logodianaunicharm-2017-english.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Diana Unicharm"></a></div>
                                                    <div class="figcaption">
                                                        <div class="title"><a class="job_link" data-id="35B8B9CE" href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B8B9CE.html" title="[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng" target="_blank">[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng</a></div>
                                                        <div class="caption">
                                                            <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" title="Công Ty Cổ Phần Diana Unicharm">Công Ty Cổ Phần Diana Unicharm</a>
                                                            <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                            <div class="location">
                                                                <ul>
                                                                    <li>Hà Nội</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ckb-item">
                                                <label class="container-ckb">
                                                <input type="checkbox" checked="checked" name="jobchk[]" value="35B90B57">
                                                <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="job-item" id="job-item-35B90B57">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" target="_blank" title="Công Ty Cổ Phần Diana Unicharm"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot1/129051/79x79/140745logodianaunicharm-2017-english.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="Công Ty Cổ Phần Diana Unicharm"></a></div>
                                                    <div class="figcaption">
                                                        <div class="title"><a class="job_link" data-id="35B90B57" href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B90B57.html" title="[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng" target="_blank">[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng</a></div>
                                                        <div class="caption">
                                                            <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" title="Công Ty Cổ Phần Diana Unicharm">Công Ty Cổ Phần Diana Unicharm</a>
                                                            <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                            <div class="location">
                                                                <ul>
                                                                    <li>Hà Nội</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ckb-item">
                                                <label class="container-ckb">
                                                <input type="checkbox" checked="checked" name="jobchk[]" value="35B87FFC">
                                                <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="job-item" id="job-item-35B87FFC">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html" target="_blank" title="TCL (Vietnam) Corporation Limited"><img  class="lazy-bg" data-src="https://images.careerbuilder.vn/employer_folders/lot6/102756/79x79/174459logomoi.jpg" src="../kiemviecv32/images/graphics/blank.gif" alt="TCL (Vietnam) Corporation Limited"></a></div>
                                                    <div class="figcaption">
                                                        <div class="title"><a class="job_link" data-id="35B87FFC" href="https://careerbuilder.vn/vi/tim-viec-lam/thuc-tap-sinh-bo-phan-gtm-go-to-market-gtm-trainee.35B87FFC.html" title="Thực Tập Sinh Bộ Phận GTM (Go To Market) - GTM Trainee" target="_blank">Thực Tập Sinh Bộ Phận GTM (Go To Market) - GTM Trainee</a></div>
                                                        <div class="caption">
                                                            <a class="company-name" target="_blank" href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html" title="TCL (Vietnam) Corporation Limited">TCL (Vietnam) Corporation Limited</a>
                                                            <p class="salary"><em class="fa fa-usd"></em> Cạnh Tranh</p>
                                                            <div class="location">
                                                                <ul>
                                                                    <li>Hà Nội</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            var check_all = "Chọn tất cả"
                                            var uncheck_all = "Bỏ chọn tất cả"
                                            $(document).ready(function(){
                                                var n = $( "input[name='jobchk[]']:checked" ).length;
                                                $( "#countjob" ).text("(" + n + ")");  
                                                $('#check-uncheck').text(uncheck_all);
                                                $( "input[name='jobchk[]']" ).click(function(){
                                                var n = $( "input[name='jobchk[]']:checked" ).length;
                                                $( "#countjob" ).text("(" + n + ")");
                                                if (n < 1){
                                                    $('.btn-apply-all').hide();
                                                    $('#check-uncheck').text(check_all);
                                                } else {
                                                    $('.btn-apply-all').show();
                                                    $('#check-uncheck').text(uncheck_all);
                                                }
                                                });
                                            
                                                $("#check-uncheck").click(function() {
                                                let n = $( "input[name='jobchk[]']:checked" ).length;
                                                if (n < 1){
                                                    $("input[type=checkbox]").prop("checked", true);
                                                    let n = $( "input[name='jobchk[]']:checked" ).length;
                                                    $( "#countjob" ).text("(" + n + ")");
                                                    $('.btn-apply-all').show();
                                                    $('#check-uncheck').text(uncheck_all);
                                                } else {
                                                    $("input[type=checkbox]").prop("checked", false);
                                                    let n = $( "input[name='jobchk[]']:checked" ).length;
                                                    $( "#countjob" ).text("(" + n + ")");
                                                    $('.btn-apply-all').hide();
                                                    $('#check-uncheck').text(check_all);
                                                }
                                              });
                                            });
                                        </script>
                                    </div>
                                    <div class="action">
                                        <div class="check-area">
                                            <a href="javascript:void(0)" id="check-uncheck"></a>
                                        </div>
                                    </div>
                                    <script>
                                        $(document).on("click", ".load-more", function(e){
                                          e.preventDefault();
                                          var link = $(this).find("a").attr("href");
                                          var load_job_search = $.ajax({
                                              url: link+'&ajax=2',
                                              dataType: 'json',
                                            }).done(function(data){
                                              $("#jobs-list").append(data.html);
                                              lazy_loadimg_list();
                                              if (data.paging_next !== null){
                                                $('.load-more > a').attr("href", data.paging_next);
                                              } else {
                                                $('.load-more').remove();
                                              }
                                            });
                                          $(".btn-apply-all").show();
                                        
                                          $("#check-uncheck").click(function() {
                                              let n = $( "input[name='jobchk[]']:checked" ).length;
                                              if (n < 1){
                                                  $("input[type=checkbox]").prop("checked", true);
                                                  let n = $( "input[name='jobchk[]']:checked" ).length;
                                                  $( "#countjob" ).text("(" + n + ")");
                                                  $('.btn-apply-all').show();
                                                  $('#check-uncheck').text(uncheck_all);
                                              } else {
                                                  $("input[type=checkbox]").prop("checked", false);
                                                  let n = $( "input[name='jobchk[]']:checked" ).length;
                                                  $( "#countjob" ).text("(" + n + ")");
                                                  $('.btn-apply-all').hide();
                                                  $('#check-uncheck').text(check_all);
                                              }
                                          });
                                        });
                                        
                                    </script>
                                </div>
                                <div class="col-lg-8" id="job-detail-template">
                                    <div class="detail-loading">
                                        <div class="job-desc">
                                            <div class="job-item">
                                                <div class="figure">
                                                    <div class="image"><a href="#"><img src="" alt=""></a></div>
                                                    <div class="figcaption">
                                                        <div class="title">
                                                            <a href="#">
                                                                <p class="text-line text-line-sm"></p>
                                                            </a>
                                                        </div>
                                                        <div class="caption">
                                                            <p class="company-name text-line text-line-sm"></p>
                                                            <p class="salary text-line text-line-sm"></p>
                                                            <div class="location">
                                                                <ul>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                    <li>
                                                                        <p class="text-line text-line-sm"></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="job-detail">
                                                <div class="row-detail">
                                                    <h3>
                                                        js_job_information_job
                                                    </h3>
                                                    <div class="row row-custom">
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    Đăng trong vòng
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    Phương thức làm việc
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    job_jobs_detail_job_level
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    job_jobs_detail_job_title
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    job_jobs_experience
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="box-info">
                                                                <h4>
                                                                    job_jobs_detail_job_lastdate
                                                                </h4>
                                                                <p class="text-line text-line-sm"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row-detail">
                                                    <h3>
                                                        job_jobs_detail_Welfare
                                                    </h3>
                                                    <ul class="welfare-list">
                                                        <li>
                                                            <p class="text-line text-line-sm"></p>
                                                        </li>
                                                        <li>
                                                            <p class="text-line text-line-sm"></p>
                                                        </li>
                                                        <li>
                                                            <p class="text-line text-line-sm"></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="row-detail">
                                                    <h3>job_jobs_detail_work_desc</h3>
                                                    <div class="text-desc">
                                                        <p class="text-line text-line-sm"></p>
                                                        <p class="text-line text-line-sm"></p>
                                                        <p class="text-line text-line-sm"></p>
                                                    </div>
                                                </div>
                                                <div class="row-detail">
                                                    <h3>job_jobs_detail_job_skill</h3>
                                                    <div class="text-desc">
                                                        <p class="text-line text-line-sm"></p>
                                                        <p class="text-line text-line-sm"></p>
                                                        <p class="text-line text-line-sm"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            @-webkit-keyframes placeHolderShimmer {
                                            0% {
                                            background-position: -468px 0;
                                            }
                                            100% {
                                            background-position: 468px 0;
                                            }
                                            }
                                            @keyframes placeHolderShimmer {
                                            0% {
                                            background-position: -468px 0;
                                            }
                                            100% {
                                            background-position: 468px 0;
                                            }
                                            }
                                            .animated-background, .text-line {
                                            -webkit-animation-duration: 1.25s;
                                            animation-duration: 1.25s;
                                            -webkit-animation-fill-mode: forwards;
                                            animation-fill-mode: forwards;
                                            -webkit-animation-iteration-count: infinite;
                                            animation-iteration-count: infinite;
                                            -webkit-animation-name: placeHolderShimmer;
                                            animation-name: placeHolderShimmer;
                                            -webkit-animation-timing-function: linear;
                                            animation-timing-function: linear;
                                            background: #dddddd;
                                            background: -webkit-gradient(linear, right top, left top, from(#f1f1f1), color-stop(#dddddd), to(#f1f1f1));;
                                            background:  linear-gradient(to left, #f1f1f1, #dddddd, #f1f1f1);;
                                            background-size: 1000px 400px;
                                            height: 96px;
                                            position: relative;
                                            }
                                            .animated-background{
                                            width: 100%;
                                            height: 360px;
                                            }
                                            .text-line {
                                            height: 14px;
                                            width: 150px;
                                            margin: 1px 0;
                                            display: block;
                                            }
                                            .text-line-lg{
                                            height: 30px;
                                            }
                                            .text-line-sm{
                                            height: 20px
                                            }
                                            .text-line-xs{
                                            height: 15px;
                                            }
                                        </style>
                                    </div>
                                    <div class="detail-content"></div>
                                    <div class="follow-area">
                                        <a href="https://careerbuilder.vn/vi/jobs/recommended" class="left-follow">Xem thêm</a>
                                        <div class="right-follow">
                                            <a href="javascript:void(0)" class="btn-apply-all btn-gradient-1">
                                            Ứng tuyển các vị trí đã chọn&nbsp;<span id="countjob"></span>
                                            </a>
                                            <a href="javascript:void(0)" class="btn-apply-now btn-gradient">
                                            Ứng tuyển ngay
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .detail-loading{display: none;}
        </style>
        <script>
            var language_psearchlist = {
                job_chk_save_jobs_saved:"Việc làm đã lưu",
                job_chk_save_jobs_save:"Lưu việc làm"
            };
            if(typeof language === 'undefined')	var language = language_psearchlist;
            else	$.extend(language, language_psearchlist);
            var list_job_id = [];
            var quick_view = 0;
            var url_job = "";
            $(window).on('load', function() {
                $(".list-job").find(".job-item").eq(0).find('a.job_link').click();
              });
              $(document).on('click', '.jobs-list-ajax .job-item a.job_link', function(e) {
                e.preventDefault();
                var link = $(this).attr('href');
                var id_job = $(this).data('id');
                url_job = PATH_KIEMVIEC + "jobseekers/jobs/apply?job_id="+$(this).data('id');
                $('.btn-apply-now').click(function(){
                  window.open(url_job, '_blank');
                });
                if ($.isFunction(window.ga))
                  ga('send', 'pageview', link.replace(DOMAIN_KV, ""));
            
                $(".detail-loading").show();
                $(".detail-content").hide();
                //$('html,body').animate({
                //  scrollTop: 0
                //}, 200);
                $(".jobs-list-ajax .job-item").removeClass('active');
                $(this).parent().parent().parent().parent().addClass('active');
                var loadJob = $.ajax({
                  url: link + '?ajax=2',
                  dataType: 'json',
                });
                var loadCompany = loadJob.then(function(data) {
                  if (data.status == 1) {
                    $("#job-detail-template .detail-content").html(data.html_detail);
                    $(".detail-loading").hide();
                    $(".detail-content").show();
                    if (quick_view != 0)
                      window.history.pushState({href: link}, '', link);
                      //quick_view++;
                  } else {
                    if (quick_view != 0) {
                      if ($('#job-item-' + id_job).next('div.job-item').length == 1)
                        $('#job-item-' + id_job).next('div.job-item').find('a.job_link').click();
                      else if ($('#job-item-' + id_job).prev('div.job-item').length == 1)
                        $('#job-item-' + id_job).prev('div.job-item').find('a.job_link').click();
                      show_noti(2, language.job_detail_dont_public);
                    } else {
                      if ($('#job-item-' + id_job).next('div.job-item').length == 1)
                        $('#job-item-' + id_job).next('div.job-item').find('a.job_link').click();
                    }
                    $('#job-item-' + id_job).remove();
                  }
                });
              });
        </script>
    </div>
</div>

@endsection
