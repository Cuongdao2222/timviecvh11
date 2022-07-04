@extends('frontend.layout.appfe')
@section('content')     

<main>
    <link href="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.css" rel="stylesheet">
    <script src="https://static.careerbuilder.vn/js/datetimepicker/DateTimePicker.js" type="text/javascript"></script>
    <script src="https://static.careerbuilder.vn/js/datetimepicker/i18n/DateTimePicker-i18n.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quick-upload-resume.css') }}">
       
   
    <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" data-app-key="wpcl6nfph1hzjf2" id="dropboxjs"></script>
    <script src="https://static.careerbuilder.vn/2012/dropboxresume.js" type="text/javascript"></script>
    <script language="javascript">
        var resume_id = resume_id_fr = 0;
        var member_id = -1;
        var numListRefer = 0;
    </script>
    <form action="" method="post" name="frmResumeDetail" id="frmResumeDetail" enctype="multipart/form-data">
        <div class="step-1" id="QuickUpload_Step1">
            <section class="cb-section">
                <div class="container">
                    <div class="cb-title cb-title-center">
                        <h2>Tạo nhanh hồ sơ</h2>
                    </div>
                    <div class="main-quick-upload-resume">
                        <input type="hidden" name="resume_id" id="resume_id" value="">
                        <input type="hidden" name="member_id" id="member_id" value="">
                        <input type="hidden" name="private_info" id="private_info" value="1">
                        <input type="hidden" name="popup_resume" id="popup_resume" value="">
                        <input type="hidden" name="resume_kind" value="2">
                        <input type="hidden" name="is_change" id="is_change" value="1">
                        <input type="hidden" id="resume_path" name="resume_path" value="">
                        <input type="hidden" id="resume_path_convert" name="resume_path_convert" value="">
                        <input type="hidden" id="step_active" name="" value="1">
                        <input type="hidden" id="urgentjob" name="urgentjob" value="0">
                        <div class="quick-upload">
                            <div class="cb-title-h3">
                                <h3>Hồ sơ</h3>
                            </div>
                            <div class="form-group form-text">
                                <input type="text" onkeyup="this.setAttribute('value', this.value);" value="" name="resume_title" id="resume_title">
                                <label>* Tiêu đề hồ sơ</label>
                                <span class="error_resume_title"></span>
                                <div class="form-note">
                                    <p>Nhập vị trí hoặc chức danh. Ví dụ: Kế toán trưởng, Web designer</p>
                                </div>
                            </div>
                            <div class="form-choose">
                                <div class="form-group">
                                    <label>* Hồ sơ đính kèm</label>
                                </div>
                                <div class="form-group">
                                    <div class="list-choose">
                                        <div class="choose-mycomputer">
                                            <label for="attach_file"><em class="mdi mdi-folder-outline"></em>Tải hồ sơ từ máy tính</label>
                                            <input class="d-none" type="file" id="attach_file" name="attach_file" onchange=" return ajaxOnlyFile(this);">
                                        </div>
                                        <button type="button" name="dropbox_button" id="dropbox_button" class="choose-dropbox file">
                                        <img src="./img/quick-upload-resume/Dropbox_Logo.png" alt="">Tải hồ sơ từ Dropbox
                                        </button>
                                        <input type="hidden" name="dropbox_file" id="dropbox_file" value="">
                                        <input type="hidden" name="dfile_title" id="dfile_title" value="">
                                        <input type="hidden" name="dfile_size" id="dfile_size" value="">
                                    </div>
                                    <span class="error error_attach_file"></span>
                                </div>
                            </div>
                            <div class="form-show-file" id="uploadFile_file">
                                <em class="material-icons">picture_as_pdf</em>
                                <div class="form-group">
                                    <input type="text" value="" onkeyup="this.setAttribute('value', this.value);">
                                </div>
                                <a href="javascript:void(0)" onclick="removefile(); return false;"><em class="material-icons">highlight_off </em>Xoá</a>
                            </div>
                            <div class="form-group"> </div>
                            <div class="form-group form-note">
                                <div class="box-noti">
                                    <p class="name"><strong>Lưu ý:</strong></p>
                                    <p>Trong trường hợp bạn gặp phải bất kỳ vấn đề gì trong quá trình thực hiện như tải hồ sơ không thành công hoặc không nhấn được nút Gửi hồ sơ, vui lòng kiểm tra lại nguyên nhân và thử các bước gợi ý sau.</p>
                                    <div class="noti-content">
                                        <ul>
                                            <li>Hệ thống hiện chỉ hỗ trợ một tập tin được tải lên có các <strong>định dạng .doc, .docx hoặc .pdf</strong></li>
                                            <li>Nếu bạn có nhiều loại bằng cấp hay giấy tờ khác muốn đính kèm thêm, <strong>vui lòng gộp chung vào một tập tin theo đúng định dạng với tổng dung lượng không vượt quá 3MB</strong></li>
                                            <li><strong>Nâng cấp trình duyệt đang sử dụng lên phiên bản mới nhất</strong> (Firefox: 57 trở lên, Cốc Cốc: 75 trở lên, Microsoft Edge: MEdge 44 trở lên, Internet Explorer: 11 trở lên, Safari: 13.1 trở lên)</li>
                                            <li>Vào phần thiết lập của trình duyệt để<strong> tắt chức năng chặn quảng cáo (Ads Block)</strong></li>
                                            <li>Chụp ảnh màn hình cùng mô tả cụ thể và gửi về bộ phận chăm sóc ứng viên của CareerBuilder: <a href="mailto:support@careerbuilder.vn" class="passChk"><b style="
                                                font-size: 14px;
                                                font-weight: normal;
                                                ">support@careerbuilder.vn<b></b></b></a> để được hỗ trợ thêm
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-upload">
                                <div class="cb-title-h3">
                                    <h3>Thông tin nghề nghiệp</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-text">
                                            <input type="text" onkeyup="this.setAttribute('value', this.value);" name="lastname" id="lastname" value="">
                                            <label>* Họ và tên lót</label>
                                            <span class="error_lastname"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-text">
                                            <input type="text" onkeyup="this.setAttribute('value', this.value);" name="firstname" id="firstname" value="">
                                            <label>* Tên</label>
                                            <span class="error_firstname"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-radio">
                                            <p>* Giới tính</p>
                                            <div class="gender">
                                                <input type="radio" name="gender" value="1" id="gender_m">
                                                <label for="gender_m">Nam</label>
                                            </div>
                                            <div class="gender">
                                                <input type="radio" name="gender" value="2" id="gender_f">
                                                <label for="gender_f">Nữ</label>
                                            </div>
                                            <span class="error_gender"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-birthday">
                                            <label>* Ngày sinh</label>
                                            <input type="text" data-field="date" data-max="31/12/2007" placeholder="DD/MM/YYYY" name="birthday" value="">
                                            <span class="error_birthday"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-text">
                                            <input type="text" onkeyup="this.setAttribute('value', this.value);" id="mobile" name="mobile" value="" maxlength="20">
                                            <label>* Số điện thoại</label>
                                            <span class="error_mobile"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-text">
                                            <input type="text" onkeyup="this.setAttribute('value', this.value);" name="email" id="email" value="">
                                            <label>* Địa chỉ email</label>
                                            <span class="error_email"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-text">
                                            <input type="text" name="address" id="address" onkeyup="this.setAttribute('value', this.value);" value="">
                                            <label>* Địa chỉ</label>
                                            <span class="error_address"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-select">
                                            <label>* Quốc gia</label>
                                            <select name="slcountry" id="slcountry" class="marital required" title="Vui lòng chọn quốc gia">
                                                <option value="1">Việt Nam</option>
                                                <option value="22">Bangladesh</option>
                                                <option value="14">Campuchia</option>
                                                <option value="4">Canada</option>
                                                <option value="25">Công Gô</option>
                                                <option value="13">Hoa Kỳ</option>
                                                <option value="8">Hàn Quốc</option>
                                                <option value="24">Hồng Kông</option>
                                                <option value="169">Khác</option>
                                                <option value="19">Lào</option>
                                                <option value="9">Malaysia</option>
                                                <option value="21">Myanmar</option>
                                                <option value="2">Nhật Bản</option>
                                                <option value="17">Qatar</option>
                                                <option value="23">Quốc tế</option>
                                                <option value="10">Singapore</option>
                                                <option value="5">Trung Quốc</option>
                                                <option value="16">Ukraine</option>
                                                <option value="3">Úc</option>
                                                <option value="20">Đài Loan</option>
                                            </select>
                                            <span class="error_slcountry"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-select">
                                            <label>* Tỉnh/Thành phố</label>
                                            <select name="slcity" id="slcity" class="marital required" title="Xin vui lòng chọn tỉnh thành nơi bạn sinh sống." onchange="loadDistrictProfile(this.value);">
                                                <option value="4">Hà Nội</option>
                                                <option value="8">Hồ Chí Minh</option>
                                                <option value="18">Hòa Bình</option>
                                                <option value="19">Hà Giang</option>
                                                <option value="20">Lào Cai</option>
                                                <option value="22">Sơn La</option>
                                                <option value="23">Lai Châu</option>
                                                <option value="25">Lạng Sơn</option>
                                                <option value="26">Cao Bằng</option>
                                                <option value="27">Tuyên Quang</option>
                                                <option value="29">Yên Bái</option>
                                                <option value="30">Ninh Bình</option>
                                                <option value="31">Hải Phòng</option>
                                                <option value="33">Quảng Ninh</option>
                                                <option value="36">Thái Bình</option>
                                                <option value="37">Thanh Hóa</option>
                                                <option value="38">Nghệ An</option>
                                                <option value="39">Hà Tĩnh</option>
                                                <option value="50">Dak Lak</option>
                                                <option value="52">Quảng Bình</option>
                                                <option value="53">Quảng Trị</option>
                                                <option value="54">Thừa Thiên- Huế</option>
                                                <option value="55">Quảng Ngãi</option>
                                                <option value="56">Bình Định</option>
                                                <option value="57">Phú Yên</option>
                                                <option value="58">Khánh Hòa</option>
                                                <option value="59">Gia Lai</option>
                                                <option value="60">Kon Tum</option>
                                                <option value="61">Đồng Nai</option>
                                                <option value="62">Bình Thuận</option>
                                                <option value="63">Lâm Đồng</option>
                                                <option value="64">Bà Rịa - Vũng Tàu</option>
                                                <option value="66">Tây Ninh</option>
                                                <option value="67">Đồng Tháp</option>
                                                <option value="68">Ninh Thuận</option>
                                                <option value="70">Vĩnh Long</option>
                                                <option value="71">Cần Thơ</option>
                                                <option value="72">Long An</option>
                                                <option value="73">Tiền Giang</option>
                                                <option value="74">Trà Vinh</option>
                                                <option value="75">Bến Tre</option>
                                                <option value="76">An Giang</option>
                                                <option value="77">Kiên Giang</option>
                                                <option value="78">Cà Mau</option>
                                                <option value="79">Sóc Trăng</option>
                                                <option value="210">Phú Thọ</option>
                                                <option value="211">Vĩnh Phúc</option>
                                                <option value="240">Bắc Giang</option>
                                                <option value="241">Bắc Ninh</option>
                                                <option value="280">Thái Nguyên</option>
                                                <option value="281">Bắc Cạn</option>
                                                <option value="320">Hải Dương</option>
                                                <option value="321">Hưng Yên</option>
                                                <option value="350">Nam Định</option>
                                                <option value="351">Hà Nam</option>
                                                <option value="510">Quảng Nam</option>
                                                <option value="511">Đà Nẵng</option>
                                                <option value="650">Bình Dương</option>
                                                <option value="651">Bình Phước</option>
                                                <option value="780">Hậu Giang</option>
                                                <option value="781">Bạc Liêu</option>
                                                <option value="900">Điện Biên</option>
                                                <option value="901">Khác</option>
                                                <option value="1042">Dak Nông</option>
                                                <option value="1064">Đồng Bằng Sông Cửu Long</option>
                                                <option value="1065">Toàn quốc</option>
                                                <option value="1069">KV Đông Nam Bộ</option>
                                                <option value="1070">KV Nam Trung Bộ</option>
                                                <option value="1071">KV Bắc Trung Bộ</option>
                                                <option value="1072">KV Tây Nguyên</option>
                                            </select>
                                            <span class="error_slcity"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-select">
                                            <label>* Quận/huyện</label>
                                            <select name="sldistrict" id="sldistrict" class="marital" title="Vui lòng chọn quận/huyện">
                                                <option value="">Lựa chọn</option>
                                                <option value="347">Huyện Ba Vì</option>
                                                <option value="353">Huyện Chương Mỹ</option>
                                                <option value="349">Huyện Đan Phượng</option>
                                                <option value="339">Huyện Đông Anh</option>
                                                <option value="340">Huyện Gia Lâm</option>
                                                <option value="350">Huyện Hoài Đức</option>
                                                <option value="344">Huyện Mê Linh</option>
                                                <option value="358">Huyện Mỹ Đức</option>
                                                <option value="357">Huyện Ứng Hòa</option>
                                                <option value="356">Huyện Phú Xuyên</option>
                                                <option value="348">Huyện Phúc Thọ</option>
                                                <option value="351">Huyện Quốc Oai</option>
                                                <option value="338">Huyện Sóc Sơn</option>
                                                <option value="352">Huyện Thạch Thất</option>
                                                <option value="354">Huyện Thanh Oai</option>
                                                <option value="342">Huyện Thanh Trì</option>
                                                <option value="355">Huyện Thường Tín</option>
                                                <option value="329">Quận Ba Đình</option>
                                                <option value="343">Quận Bắc Từ Liêm</option>
                                                <option value="333">Quận Cầu Giấy</option>
                                                <option value="334">Quận Đống Đa</option>
                                                <option value="345">Quận Hà Đông</option>
                                                <option value="335">Quận Hai Bà Trưng</option>
                                                <option value="330">Quận Hoàn Kiếm</option>
                                                <option value="336">Quận Hoàng Mai</option>
                                                <option value="332">Quận Long Biên</option>
                                                <option value="341">Quận Nam Từ Liêm</option>
                                                <option value="331">Quận Tây Hồ</option>
                                                <option value="337">Quận Thanh Xuân</option>
                                                <option value="346">Thị xã Sơn Tây</option>
                                            </select>
                                            <span class="error_sldistrict"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-submit">
                                            <button type="button" onclick="checkValidForm(1);return false;" class="btn-gradient">Lưu và Tiếp tục</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-note">
                                            <p>* Thông tin bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="step-2" id="QuickUpload_Step2" style="display:none">
            <section class="cb-section">
                <div class="container">
                    <div class="cb-title cb-title-center">
                        <h2>Tạo nhanh hồ sơ</h2>
                    </div>
                    <div class="main-quick-upload-resume">
                        <div class="quick-upload quick-upload-2 ">
                            <div class="cb-title-h3">
                                <h3>Thông tin nghề nghiệp</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-text">
                                        <input type="text" onkeyup="this.setAttribute('value', this.value);" name="yearOfExperience" id="year_experience" value="">
                                        <label>* Số năm kinh nghiệm</label>
                                        <span class="error_year_experience error_yearOfExperience"></span> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-checkbox">
                                        <input type="checkbox" id="cboExper">
                                        <label for="cboExper">Chưa có kinh nghiệm</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-select">
                                        <label>* Bằng cấp cao nhất</label>
                                        <select name="degree" id="degree" class="required width_186">
                                            <option value="">Chọn</option>
                                            <option value="0">Chưa tốt nghiệp</option>
                                            <option value="1">Trung học</option>
                                            <option value="2">Trung cấp</option>
                                            <option value="3">Cao đẳng</option>
                                            <option value="4">Đại học</option>
                                            <option value="5">Sau đại học</option>
                                            <option value="6">Khác</option>
                                        </select>
                                        <span class="error_degree"></span> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-select">
                                        <label>* Cấp bậc mong muốn</label>
                                        <select name="level_id" id="level_id">
                                            <option value="0">Chọn</option>
                                            <option value="1">Sinh viên/ Thực tập sinh</option>
                                            <option value="2">Mới tốt nghiệp</option>
                                            <option value="3">Nhân viên</option>
                                            <option value="4">Trưởng nhóm / Giám sát</option>
                                            <option value="5">Quản lý</option>
                                            <option value="6">Phó Giám đốc</option>
                                            <option value="7">Giám đốc </option>
                                            <option value="8">Tổng giám đốc</option>
                                            <option value="9">Chủ tịch / Phó Chủ tịch</option>
                                        </select>
                                        <span class="error_level_id"></span> 
                                    </div>
                                </div>
                                <div class="col-md-6 form-additional form-salary-cus">
                                    <label>Mức lương mong muốn</label>
                                    <div class="form-big">
                                        <div class="form-group form-select">
                                            <select name="salary_unit" id="salary_unit">
                                                <option value="ltt">Thỏa thuận</option>
                                                <option value="vnd">VNĐ</option>
                                                <option value="usd">USD</option>
                                            </select>
                                        </div>
                                        <div class="form-group form-text">
                                            <input type="text" disabled="" onkeyup="this.setAttribute('value', this.value);" name="salary_from" id="salary_from" value="">
                                            <label>Từ</label>
                                        </div>
                                        <div class="form-group form-text">
                                            <input type="text" disabled="" onkeyup="this.setAttribute('value', this.value);" name="salary_to" id="salary_to" value="">
                                            <label>Đến </label>
                                        </div>
                                        <span class="error_salary_unit"></span> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-select-chosen">
                                        <label for="">* Ngành nghề mong muốn</label>
                                        <select name="INDUSTRY_ID[]" id="select_industry_db" data-placeholder="Vui lòng chọn ngành nghề" multiple="" class="chosen-select-max-three" title="Vui lòng chọn ngành nghề" style="display: none;">
                                            <optgroup label="Bán hàng / Tiếp thị">
                                                <option value="4">Tiếp thị / Marketing</option>
                                                <option value="30">Bán lẻ / Bán sỉ</option>
                                                <option value="31">Bán hàng / Kinh doanh</option>
                                                <option value="37">Tiếp thị trực tuyến</option>
                                            </optgroup>
                                            <optgroup label="Chăm sóc sức khỏe">
                                                <option value="7">Dược phẩm</option>
                                                <option value="56">Y tế / Chăm sóc sức khỏe</option>
                                            </optgroup>
                                            <optgroup label="Dịch vụ">
                                                <option value="9">Tư vấn</option>
                                                <option value="12">Dịch vụ khách hàng</option>
                                                <option value="20">Phi chính phủ / Phi lợi nhuận</option>
                                                <option value="24">Luật / Pháp lý</option>
                                                <option value="32">Bưu chính viễn thông</option>
                                                <option value="33">Vận chuyển / Giao nhận /  Kho vận</option>
                                                <option value="44">Lao động phổ thông</option>
                                                <option value="51">An Ninh / Bảo Vệ</option>
                                            </optgroup>
                                            <optgroup label="Giáo dục / Đào tạo">
                                                <option value="13">Giáo dục / Đào tạo</option>
                                                <option value="57">Thư viện</option>
                                            </optgroup>
                                            <optgroup label="Hàng tiêu dùng">
                                                <option value="10">Hàng gia dụng / Chăm sóc cá nhân</option>
                                                <option value="21">Thực phẩm &amp; Đồ uống</option>
                                            </optgroup>
                                            <optgroup label="Hành chính / Nhân sự">
                                                <option value="3">Hành chính / Thư ký</option>
                                                <option value="17">Quản lý điều hành</option>
                                                <option value="22">Nhân sự</option>
                                                <option value="38">Biên phiên dịch</option>
                                            </optgroup>
                                            <optgroup label="Kế toán / Tài chính">
                                                <option value="2">Kế toán / Kiểm toán</option>
                                                <option value="19">Ngân hàng</option>
                                                <option value="23">Bảo hiểm</option>
                                                <option value="46">Chứng khoán</option>
                                                <option value="59">Tài chính / Đầu tư</option>
                                            </optgroup>
                                            <optgroup label="Khách sạn / Du lịch">
                                                <option value="29">Nhà hàng / Khách sạn</option>
                                                <option value="34">Du lịch</option>
                                                <option value="60">Hàng không</option>
                                            </optgroup>
                                            <optgroup label="Khoa học">
                                                <option value="5">Nông nghiệp</option>
                                                <option value="36">Thống kê</option>
                                                <option value="49">Thủy sản / Hải sản</option>
                                                <option value="50">Lâm Nghiệp</option>
                                                <option value="52">Chăn nuôi / Thú y</option>
                                                <option value="53">Thủy lợi</option>
                                                <option value="54">Trắc địa / Địa Chất</option>
                                                <option value="61">Hàng hải</option>
                                                <option value="69">Công nghệ sinh học</option>
                                                <option value="70">Công nghệ thực phẩm / Dinh dưỡng</option>
                                            </optgroup>
                                            <optgroup label="Kỹ thuật">
                                                <option value="14">Cơ khí&nbsp;/ Ô tô&nbsp;/ Tự động hóa</option>
                                                <option value="16">Môi trường</option>
                                                <option value="26">Dầu khí</option>
                                                <option value="41">Hóa học</option>
                                                <option value="48">Điện / Điện tử / Điện lạnh</option>
                                                <option value="65">Khoáng sản</option>
                                                <option value="71">Bảo trì / Sửa chữa</option>
                                            </optgroup>
                                            <optgroup label="Máy tính / Công nghệ thông tin">
                                                <option value="1">CNTT - Phần mềm</option>
                                                <option value="63">CNTT - Phần cứng / Mạng</option>
                                            </optgroup>
                                            <optgroup label="Truyền thông / Media">
                                                <option value="11">Mỹ thuật / Nghệ thuật / Thiết kế</option>
                                                <option value="15">Giải trí</option>
                                                <option value="66">Truyền hình / Báo chí / Biên tập</option>
                                                <option value="67">Quảng cáo / Đối ngoại / Truyền Thông</option>
                                                <option value="68">Tổ chức sự kiện</option>
                                            </optgroup>
                                            <optgroup label="Sản xuất">
                                                <option value="18">Xuất nhập khẩu</option>
                                                <option value="25">Sản xuất / Vận hành sản xuất</option>
                                                <option value="35">Đồ gỗ</option>
                                                <option value="39">Dệt may / Da giày / Thời trang</option>
                                                <option value="42">Quản lý chất lượng (QA/QC)</option>
                                                <option value="43">Thu mua / Vật tư</option>
                                                <option value="58">An toàn lao động</option>
                                                <option value="64">In ấn / Xuất bản</option>
                                            </optgroup>
                                            <optgroup label="Xây dựng">
                                                <option value="6">Kiến trúc</option>
                                                <option value="8">Xây dựng</option>
                                                <option value="28">Bất động sản</option>
                                                <option value="47">Nội ngoại thất</option>
                                            </optgroup>
                                            <optgroup label="Nhóm ngành khác">
                                                <option value="27">Ngành khác</option>
                                                <option value="45">Mới tốt nghiệp / Thực tập</option>
                                            </optgroup>
                                        </select>
                                        <div class="chosen-container chosen-container-multi" title="Vui lòng chọn ngành nghề" id="select_industry_db_chosen" style="width: 0px;">
                                            <ul class="chosen-choices">
                                                <li class="search-field">
                                                    <input class="chosen-search-input default" type="search" autocomplete="off" value="Vui lòng chọn ngành nghề" style="width: 185.75px;">
                                                </li>
                                            </ul>
                                            <div class="chosen-drop">
                                                <ul class="chosen-results"></ul>
                                            </div>
                                        </div>
                                        <span class="error_select_industry_db_1"></span> 
                                    </div>
                                </div>
                                <div class="col-md-6 form-additional">
                                    <div class="list-language" id="list-language">
                                        <div class="item active">
                                            <div class="form-group form-select">
                                                <label for="">Trình độ ngoại ngữ</label>
                                                <select name="rs_language[]" class="width_186">
                                                    <option value="">Chọn</option>
                                                    <option value="vn">Việt Nam</option>
                                                    <option value="en">Anh</option>
                                                    <option value="fr">Pháp</option>
                                                    <option value="de">Đức</option>
                                                    <option value="ru">Nga</option>
                                                    <option value="cn">Trung Quốc</option>
                                                    <option value="kr">Hàn Quốc</option>
                                                    <option value="jp">Nhật</option>
                                                    <option value="other">Khác</option>
                                                </select>
                                            </div>
                                            <div class="form-group form-select">
                                                <label for="">Trình độ</label>
                                                <select name="rs_language_level[]" class="width_125">
                                                    <option value="0">Chọn</option>
                                                    <option value="1">Bản ngữ</option>
                                                    <option value="2">Sơ cấp</option>
                                                    <option value="3">Trung cấp</option>
                                                    <option value="4">Cao cấp</option>
                                                </select>
                                            </div>
                                            <a class="btn-delete" style="display:none" href="javascript:void(0);"><em class="material-icons">highlight_off</em><span>
                                            </span></a> 
                                        </div>
                                        <div id="language_hide" style="display:none">
                                            <div class="item active">
                                                <div class="form-group form-select">
                                                    <label for="">Trình độ ngoại ngữ</label>
                                                    <select name="rs_language[]" class="width_186">
                                                        <option value="">Chọn</option>
                                                        <option value="vn">Việt Nam</option>
                                                        <option value="en">Anh</option>
                                                        <option value="fr">Pháp</option>
                                                        <option value="de">Đức</option>
                                                        <option value="ru">Nga</option>
                                                        <option value="cn">Trung Quốc</option>
                                                        <option value="kr">Hàn Quốc</option>
                                                        <option value="jp">Nhật</option>
                                                        <option value="other">Khác</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-select">
                                                    <label for="">Trình độ</label>
                                                    <select name="rs_language_level[]" class="width_125">
                                                        <option value="0">Chọn</option>
                                                        <option value="1">Bản ngữ</option>
                                                        <option value="2">Sơ cấp</option>
                                                        <option value="3">Trung cấp</option>
                                                        <option value="4">Cao cấp</option>
                                                    </select>
                                                </div>
                                                <a class="btn-delete" href="javascript:void(0);"><em class="material-icons">highlight_off</em><span>Xóa</span></a> 
                                            </div>
                                        </div>
                                        <a class="btn-add" href="javascript:void(0);"><em class="material-icons">add_circle_outline</em><span>Thêm </span></a> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-select">
                                        <label for="">Cấp bậc hiện tại</label>
                                        <select class="width_186" name="levelcurrent_id" id="levelcurrent_id">
                                            <option value="">Chọn</option>
                                            <option value="1">Sinh viên/ Thực tập sinh</option>
                                            <option value="2">Mới tốt nghiệp</option>
                                            <option value="3">Nhân viên</option>
                                            <option value="4">Trưởng nhóm / Giám sát</option>
                                            <option value="5">Quản lý</option>
                                            <option value="6">Phó Giám đốc</option>
                                            <option value="7">Giám đốc </option>
                                            <option value="8">Tổng giám đốc</option>
                                            <option value="9">Chủ tịch / Phó Chủ tịch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="list-workplace-desired" id="list-workplace-desired">
                                        <div class="row item active">
                                            <div class="col-md-6">
                                                <div class="form-group form-select">
                                                    <label>* Nơi làm việc mong muốn</label>
                                                    <select name="LOCATION_ID[]" id="select_location_id_1">
                                                        <option value="">Chọn</option>
                                                        <option value="4">Hà Nội</option>
                                                        <option value="8">Hồ Chí Minh</option>
                                                        <option value="76">An Giang</option>
                                                        <option value="64">Bà Rịa - Vũng Tàu</option>
                                                        <option value="781">Bạc Liêu</option>
                                                        <option value="281">Bắc Cạn</option>
                                                        <option value="240">Bắc Giang</option>
                                                        <option value="241">Bắc Ninh</option>
                                                        <option value="75">Bến Tre</option>
                                                        <option value="650">Bình Dương</option>
                                                        <option value="56">Bình Định</option>
                                                        <option value="651">Bình Phước</option>
                                                        <option value="62">Bình Thuận</option>
                                                        <option value="78">Cà Mau</option>
                                                        <option value="26">Cao Bằng</option>
                                                        <option value="71">Cần Thơ</option>
                                                        <option value="50">Dak Lak</option>
                                                        <option value="1042">Dak Nông</option>
                                                        <option value="511">Đà Nẵng</option>
                                                        <option value="900">Điện Biên</option>
                                                        <option value="61">Đồng Nai</option>
                                                        <option value="67">Đồng Tháp</option>
                                                        <option value="59">Gia Lai</option>
                                                        <option value="19">Hà Giang</option>
                                                        <option value="351">Hà Nam</option>
                                                        <option value="39">Hà Tĩnh</option>
                                                        <option value="320">Hải Dương</option>
                                                        <option value="31">Hải Phòng</option>
                                                        <option value="780">Hậu Giang</option>
                                                        <option value="18">Hòa Bình</option>
                                                        <option value="321">Hưng Yên</option>
                                                        <option value="58">Khánh Hòa</option>
                                                        <option value="77">Kiên Giang</option>
                                                        <option value="60">Kon Tum</option>
                                                        <option value="23">Lai Châu</option>
                                                        <option value="25">Lạng Sơn</option>
                                                        <option value="20">Lào Cai</option>
                                                        <option value="63">Lâm Đồng</option>
                                                        <option value="72">Long An</option>
                                                        <option value="350">Nam Định</option>
                                                        <option value="38">Nghệ An</option>
                                                        <option value="30">Ninh Bình</option>
                                                        <option value="68">Ninh Thuận</option>
                                                        <option value="210">Phú Thọ</option>
                                                        <option value="57">Phú Yên</option>
                                                        <option value="52">Quảng Bình</option>
                                                        <option value="510">Quảng Nam</option>
                                                        <option value="55">Quảng Ngãi</option>
                                                        <option value="33">Quảng Ninh</option>
                                                        <option value="53">Quảng Trị</option>
                                                        <option value="79">Sóc Trăng</option>
                                                        <option value="22">Sơn La</option>
                                                        <option value="66">Tây Ninh</option>
                                                        <option value="36">Thái Bình</option>
                                                        <option value="280">Thái Nguyên</option>
                                                        <option value="37">Thanh Hóa</option>
                                                        <option value="54">Thừa Thiên- Huế</option>
                                                        <option value="73">Tiền Giang</option>
                                                        <option value="74">Trà Vinh</option>
                                                        <option value="27">Tuyên Quang</option>
                                                        <option value="70">Vĩnh Long</option>
                                                        <option value="211">Vĩnh Phúc</option>
                                                        <option value="29">Yên Bái</option>
                                                    </select>
                                                    <span class="error_location_id error_select_location_id_1"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-select-chosen">
                                                    <label for="">Quận</label>
                                                    <select name="DISTRICT_ID[]" id="select_district_id_1" class=" chosen-select-max-three" data-placeholder="Quận" multiple="" style="display: none;">
                                                        <option value="-1;">All</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi" title="" id="select_district_id_1_chosen" style="width: 0px;">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field">
                                                                <input class="chosen-search-input default" type="search" autocomplete="off" value="Quận" style="width: 57.6875px;">
                                                            </li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                    <span class="error_DISTRICT_ID"></span>
                                                </div>
                                                <div class="delete"><a href="javascript:void(0)"><em class="material-icons">highlight_off</em>Xóa</a></div>
                                            </div>
                                        </div>
                                        <div class="row item ">
                                            <div class="col-md-6">
                                                <div class="form-group form-select">
                                                    <label for="">Nơi làm việc mong muốn</label>
                                                    <select name="LOCATION_ID[]" id="select_location_id_2">
                                                        <option value="">Chọn</option>
                                                        <option value="4">Hà Nội</option>
                                                        <option value="8">Hồ Chí Minh</option>
                                                        <option value="76">An Giang</option>
                                                        <option value="64">Bà Rịa - Vũng Tàu</option>
                                                        <option value="781">Bạc Liêu</option>
                                                        <option value="281">Bắc Cạn</option>
                                                        <option value="240">Bắc Giang</option>
                                                        <option value="241">Bắc Ninh</option>
                                                        <option value="75">Bến Tre</option>
                                                        <option value="650">Bình Dương</option>
                                                        <option value="56">Bình Định</option>
                                                        <option value="651">Bình Phước</option>
                                                        <option value="62">Bình Thuận</option>
                                                        <option value="78">Cà Mau</option>
                                                        <option value="26">Cao Bằng</option>
                                                        <option value="71">Cần Thơ</option>
                                                        <option value="50">Dak Lak</option>
                                                        <option value="1042">Dak Nông</option>
                                                        <option value="511">Đà Nẵng</option>
                                                        <option value="900">Điện Biên</option>
                                                        <option value="61">Đồng Nai</option>
                                                        <option value="67">Đồng Tháp</option>
                                                        <option value="59">Gia Lai</option>
                                                        <option value="19">Hà Giang</option>
                                                        <option value="351">Hà Nam</option>
                                                        <option value="39">Hà Tĩnh</option>
                                                        <option value="320">Hải Dương</option>
                                                        <option value="31">Hải Phòng</option>
                                                        <option value="780">Hậu Giang</option>
                                                        <option value="18">Hòa Bình</option>
                                                        <option value="321">Hưng Yên</option>
                                                        <option value="58">Khánh Hòa</option>
                                                        <option value="77">Kiên Giang</option>
                                                        <option value="60">Kon Tum</option>
                                                        <option value="23">Lai Châu</option>
                                                        <option value="25">Lạng Sơn</option>
                                                        <option value="20">Lào Cai</option>
                                                        <option value="63">Lâm Đồng</option>
                                                        <option value="72">Long An</option>
                                                        <option value="350">Nam Định</option>
                                                        <option value="38">Nghệ An</option>
                                                        <option value="30">Ninh Bình</option>
                                                        <option value="68">Ninh Thuận</option>
                                                        <option value="210">Phú Thọ</option>
                                                        <option value="57">Phú Yên</option>
                                                        <option value="52">Quảng Bình</option>
                                                        <option value="510">Quảng Nam</option>
                                                        <option value="55">Quảng Ngãi</option>
                                                        <option value="33">Quảng Ninh</option>
                                                        <option value="53">Quảng Trị</option>
                                                        <option value="79">Sóc Trăng</option>
                                                        <option value="22">Sơn La</option>
                                                        <option value="66">Tây Ninh</option>
                                                        <option value="36">Thái Bình</option>
                                                        <option value="280">Thái Nguyên</option>
                                                        <option value="37">Thanh Hóa</option>
                                                        <option value="54">Thừa Thiên- Huế</option>
                                                        <option value="73">Tiền Giang</option>
                                                        <option value="74">Trà Vinh</option>
                                                        <option value="27">Tuyên Quang</option>
                                                        <option value="70">Vĩnh Long</option>
                                                        <option value="211">Vĩnh Phúc</option>
                                                        <option value="29">Yên Bái</option>
                                                    </select>
                                                    <span class="error_location_id error_select_location_id_2"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-select-chosen">
                                                    <label for="">Quận</label>
                                                    <select name="DISTRICT_ID[]" id="select_district_id_2" class="chosen-select-max-three" multiple="" style="display: none;">
                                                        <option value="-1;">All</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi" title="" id="select_district_id_2_chosen" style="width: 0px;">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field">
                                                                <input class="chosen-search-input default" type="search" autocomplete="off" value="Select Some Options" style="width: 154.734px;">
                                                            </li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                    <span class="error_DISTRICT_ID"></span>
                                                </div>
                                                <div class="delete active"><a href="javascript:void(0)"><em class="material-icons">highlight_off</em>Xóa</a></div>
                                            </div>
                                        </div>
                                        <div class="row item ">
                                            <div class="col-md-6">
                                                <div class="form-group form-select">
                                                    <label for="">Nơi làm việc mong muốn</label>
                                                    <select name="LOCATION_ID[]" id="select_location_id_3">
                                                        <option value="">Chọn</option>
                                                        <option value="4">Hà Nội</option>
                                                        <option value="8">Hồ Chí Minh</option>
                                                        <option value="76">An Giang</option>
                                                        <option value="64">Bà Rịa - Vũng Tàu</option>
                                                        <option value="781">Bạc Liêu</option>
                                                        <option value="281">Bắc Cạn</option>
                                                        <option value="240">Bắc Giang</option>
                                                        <option value="241">Bắc Ninh</option>
                                                        <option value="75">Bến Tre</option>
                                                        <option value="650">Bình Dương</option>
                                                        <option value="56">Bình Định</option>
                                                        <option value="651">Bình Phước</option>
                                                        <option value="62">Bình Thuận</option>
                                                        <option value="78">Cà Mau</option>
                                                        <option value="26">Cao Bằng</option>
                                                        <option value="71">Cần Thơ</option>
                                                        <option value="50">Dak Lak</option>
                                                        <option value="1042">Dak Nông</option>
                                                        <option value="511">Đà Nẵng</option>
                                                        <option value="900">Điện Biên</option>
                                                        <option value="61">Đồng Nai</option>
                                                        <option value="67">Đồng Tháp</option>
                                                        <option value="59">Gia Lai</option>
                                                        <option value="19">Hà Giang</option>
                                                        <option value="351">Hà Nam</option>
                                                        <option value="39">Hà Tĩnh</option>
                                                        <option value="320">Hải Dương</option>
                                                        <option value="31">Hải Phòng</option>
                                                        <option value="780">Hậu Giang</option>
                                                        <option value="18">Hòa Bình</option>
                                                        <option value="321">Hưng Yên</option>
                                                        <option value="58">Khánh Hòa</option>
                                                        <option value="77">Kiên Giang</option>
                                                        <option value="60">Kon Tum</option>
                                                        <option value="23">Lai Châu</option>
                                                        <option value="25">Lạng Sơn</option>
                                                        <option value="20">Lào Cai</option>
                                                        <option value="63">Lâm Đồng</option>
                                                        <option value="72">Long An</option>
                                                        <option value="350">Nam Định</option>
                                                        <option value="38">Nghệ An</option>
                                                        <option value="30">Ninh Bình</option>
                                                        <option value="68">Ninh Thuận</option>
                                                        <option value="210">Phú Thọ</option>
                                                        <option value="57">Phú Yên</option>
                                                        <option value="52">Quảng Bình</option>
                                                        <option value="510">Quảng Nam</option>
                                                        <option value="55">Quảng Ngãi</option>
                                                        <option value="33">Quảng Ninh</option>
                                                        <option value="53">Quảng Trị</option>
                                                        <option value="79">Sóc Trăng</option>
                                                        <option value="22">Sơn La</option>
                                                        <option value="66">Tây Ninh</option>
                                                        <option value="36">Thái Bình</option>
                                                        <option value="280">Thái Nguyên</option>
                                                        <option value="37">Thanh Hóa</option>
                                                        <option value="54">Thừa Thiên- Huế</option>
                                                        <option value="73">Tiền Giang</option>
                                                        <option value="74">Trà Vinh</option>
                                                        <option value="27">Tuyên Quang</option>
                                                        <option value="70">Vĩnh Long</option>
                                                        <option value="211">Vĩnh Phúc</option>
                                                        <option value="29">Yên Bái</option>
                                                    </select>
                                                    <span class="error_location_id error_select_location_id_3"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-select-chosen">
                                                    <label for="">Quận</label>
                                                    <select name="DISTRICT_ID[]" id="select_district_id_3" class=" chosen-select-max-three" multiple="" disabled="disabled" style="display: none;">
                                                        <option value="-1;">All</option>
                                                    </select>
                                                    <div class="chosen-container chosen-container-multi chosen-disabled" title="" id="select_district_id_3_chosen" style="width: 0px;">
                                                        <ul class="chosen-choices">
                                                            <li class="search-field">
                                                                <input class="chosen-search-input default" type="search" autocomplete="off" value="Select Some Options" disabled="" style="width: 154.734px;">
                                                            </li>
                                                        </ul>
                                                        <div class="chosen-drop">
                                                            <ul class="chosen-results"></ul>
                                                        </div>
                                                    </div>
                                                    <span class="error_DISTRICT_ID"></span>
                                                </div>
                                                <div class="delete active"><a href="javascript:void(0)"><em class="material-icons">highlight_off</em>Xóa</a></div>
                                            </div>
                                        </div>
                                        <script language="javascript">
                                            var location_id_1 = 0;
                                            $(document).ready(function(){
                                                $("#select_location_id_1").change(function(){
                                                    location_id_1 = $(this).val();
                                                    var str = '';
                                                    var i = 1;
                                                    for(k in districts) {
                                                        if(i == 1)
                                                            str+= '<option value="-1;'+location_id_1+'">All</option>';
                                                        if(location_id_1 == districts[k][1]){
                                                            str += '<option value="'+districts[k][0]+';'+districts[k][1]+'">'+districts[k][2]+'</option>';
                                                        }
                                                        i++;
                                                    }
                                                    $('#select_district_id_1 option').remove();
                                                    $('#select_district_id_1').append(str);
                                                    $('#select_district_id_1').trigger("chosen:updated");
                                                });
                                                $("#select_district_id_1").change(function(){
                                                    var district_id = $(this).val();
                                                    var district_all = '-1;'+location_id_1;
                                                    if($.inArray( district_all, district_id ) >= 0){
                                                        $('#select_district_id_1 option').prop('disabled', true);
                                                        $("#select_district_id_1 option[value='"+district_id+"']").prop('disabled', false);
                                                    }else{
                                                        $("#select_district_id_1 option[value='"+district_all+"']").prop('disabled', true);
                                                    }
                                                    if(jQuery.isEmptyObject(district_id)){
                                                        $('#select_district_id_1 option').prop('disabled', false);
                                                    }
                                                    $('#select_district_id_1').trigger("chosen:updated");
                                                });
                                                $("#select_location_id_2").change(function(){
                                                    location_id_2 = $(this).val();
                                                    var str = '';
                                                    var i = 1;
                                                    for(k in districts) {
                                                        if(i == 1)
                                                            str+= '<option value="-1;'+location_id_2+'">All</option>';
                                                        if(location_id_2 == districts[k][1]){
                                                            str += '<option value="'+districts[k][0]+';'+districts[k][1]+'">'+districts[k][2]+'</option>';
                                                        }
                                                        i++;
                                                    }
                                                    $('#select_district_id_2 option').remove();
                                                    $('#select_district_id_2').append(str);
                                                    $('#select_district_id_2').trigger("chosen:updated");
                                                });
                                                $("#select_district_id_2").change(function(){
                                                    var district_id = $(this).val();
                                                    var district_all = '-1;'+location_id_2;
                                                    if($.inArray( district_all, district_id ) >= 0){
                                                        $('#select_district_id_2 option').prop('disabled', true);
                                                        $("#select_district_id_2 option[value='"+district_id+"']").prop('disabled', false);
                                                    }else{
                                                        $("#select_district_id_2 option[value='"+district_all+"']").prop('disabled', true);
                                                    }
                                                    if(jQuery.isEmptyObject(district_id)){
                                                        $('#select_district_id_2 option').prop('disabled', false);
                                                    }
                                                    $('#select_district_id_2').trigger("chosen:updated");
                                                });
                                                $("#select_location_id_3").change(function(){
                                                    location_id_3 = $(this).val();
                                                    var str = '';
                                                    var i = 1;
                                                    for(k in districts) {
                                                        if(i == 1)
                                                            str+= '<option value="-1;'+location_id_3+'">All</option>';
                                                        if(location_id_3 == districts[k][1]){
                                                            str += '<option value="'+districts[k][0]+';'+districts[k][1]+'">'+districts[k][2]+'</option>';
                                                        }
                                                        i++;
                                                    }
                                                    $('#select_district_id_3 option').remove();
                                                    $('#select_district_id_3').append(str);
                                                    $('#select_district_id_3').trigger("chosen:updated");
                                                });
                                                $("#select_district_id_3").change(function(){
                                                    var district_id = $(this).val();
                                                    var district_all = '-1;'+location_id_3;
                                                    if($.inArray( district_all, district_id ) >= 0){
                                                        $('#select_district_id_3 option').prop('disabled', true);
                                                        $("#select_district_id_3 option[value='"+district_id+"']").prop('disabled', false);
                                                    }else{
                                                        $("#select_district_id_3 option[value='"+district_all+"']").prop('disabled', true);
                                                    }
                                                    if(jQuery.isEmptyObject(district_id)){
                                                        $('#select_district_id_3 option').prop('disabled', false);
                                                    }
                                                    $('#select_district_id_3').trigger("chosen:updated");
                                                });
                                            
                                            
                                                $("#select_location_id_1, #select_location_id_2, #select_location_id_3").change(function(){
                                            		
                                            		$('#list-workplace-desired .item.active').last().find('.chosen-select-max-three').prop('disabled', false);
                                            		$('#select_district_id_1,#select_district_id_2,#select_district_id_3').trigger("chosen:updated");
                                                    var location_id_1 = $("#select_location_id_1").val();
                                                    var location_id_2 = $("#select_location_id_2").val();
                                                    var location_id_3 = $("#select_location_id_3").val();
                                                    $("#select_location_id_1 option").prop('disabled', false);
                                                    $("#select_location_id_3 option").prop('disabled', false);
                                                    $("#select_location_id_3 option").prop('disabled', false);
                                                    if(location_id_2 != ''){
                                                        $("#select_location_id_1 option[value="+location_id_2+"]").prop('disabled', true);
                                                        $("#select_location_id_3 option[value="+location_id_2+"]").prop('disabled', true);
                                                    }
                                                    if(location_id_1 != ''){
                                                        $("#select_location_id_2 option[value="+location_id_1+"]").prop('disabled', true);
                                                        $("#select_location_id_3 option[value="+location_id_1+"]").prop('disabled', true);
                                                    }
                                                    if(location_id_3 != ''){
                                                        $("#select_location_id_2 option[value="+location_id_3+"]").prop('disabled', true);
                                                        $("#select_location_id_1 option[value="+location_id_3+"]").prop('disabled', true);
                                                    }
                                                });
                                            	$("#select_location_id_1, #select_location_id_2, #select_location_id_3").trigger('change');
                                            		$('#select_district_id_1,#select_district_id_2,#select_district_id_3').trigger("change");
                                            	$('#select_district_id_1,#select_district_id_2,#select_district_id_3').trigger("chosen:updated");
                                            });
                                        </script>
                                        <a class="btn-add" href="javascript:void(0);"><em class="material-icons">add_circle_outline</em><span>Thêm</span></a> 
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-select-chosen" id="outcountry" style="display: none">
                                                <select name="OUTCOUNTRY_ID[]" class="chosen-select-max-three" multiple="multiple" data-placeholder="Nước ngoài" style="display: none;">
                                                    <option value="22">Bangladesh</option>
                                                    <option value="14">Campuchia</option>
                                                    <option value="4">Canada</option>
                                                    <option value="25">Công Gô</option>
                                                    <option value="20">Đài Loan</option>
                                                    <option value="8">Hàn Quốc</option>
                                                    <option value="13">Hoa Kỳ</option>
                                                    <option value="24">Hồng Kông</option>
                                                    <option value="169">Khác</option>
                                                    <option value="19">Lào</option>
                                                    <option value="9">Malaysia</option>
                                                    <option value="21">Myanmar</option>
                                                    <option value="2">Nhật Bản</option>
                                                    <option value="17">Qatar</option>
                                                    <option value="23">Quốc tế</option>
                                                    <option value="10">Singapore</option>
                                                    <option value="5">Trung Quốc</option>
                                                    <option value="3">Úc</option>
                                                    <option value="16">Ukraine</option>
                                                </select>
                                                <div class="chosen-container chosen-container-multi" title="" style="width: 0px;">
                                                    <ul class="chosen-choices">
                                                        <li class="search-field">
                                                            <input class="chosen-search-input default" type="search" autocomplete="off" value="Nước ngoài" style="width: 97.0156px;">
                                                        </li>
                                                    </ul>
                                                    <div class="chosen-drop">
                                                        <ul class="chosen-results"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 add-infor-hide"><a class="additional-information" href="javascript:void(0)"> <em class="material-icons">note_add </em><span>Bổ sung thêm thông tin</span></a></div>
                                <div class="col-md-12 form-of-work">
                                    <h6>* Hình thức làm việc</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="chkResumeType_1" id="chkResumeType_1" checked="checked" value="1">
                                                <label for="chkResumeType_1">Nhân viên chính thức</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="chkResumeType_3" id="chkResumeType_3" value="3">
                                                <label for="chkResumeType_3">Bán thời gian</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="chkResumeType_2" id="chkResumeType_2" value="2">
                                                <label for="chkResumeType_2">Nghề tự do</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-checkbox">
                                                <input type="checkbox" name="chkResumeType_4" id="chkResumeType_4" value="4">
                                                <label for="chkResumeType_4">Thực tập</label>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="error_chkResumeType_1"></span> 
                                </div>
                            </div>
                        </div>
                        <div class="quick-upload quick-upload-2 ">
                            <div class="cb-title-h3">
                                <h3>Người tham khảo <span>Không bắt buộc</span></h3>
                            </div>
                            <div class="list-references">
                                <div class="row" id="list_refer">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a class="add-references" onclick="show_frmRefer(0);return false;" href="javascript:void(0);"> <em class="material-icons">note_add</em><span>Thêm người tham khảo</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quick-upload quick-upload-2">
                            <div class="cb-title-h3">
                                <h3>Quyền riêng tư của hồ sơ</h3>
                            </div>
                            <div class="status-area">
                                <div class="switch-status switch-status-element">
                                    <a href="javascript:void(0);" data-type="1" class="lock switch-status-element-1 active"><em class="mdi mdi-lock"></em>Khóa</a>
                                    <a href="javascript:void(0);" data-type="2" class="public switch-status-element-2 "><em class="mdi mdi-web"></em>Công khai</a>
                                    <a href="javascript:void(0);" data-type="3" class="flash switch-status-element-3"><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                </div>
                                <div class="swap-content-1">
                                    <p class="content-1 active">
                                        Bạn đang <span>vô hiệu hóa</span> hồ sơ. Nhà tuyển dụng sẽ không thấy được hồ sơ này của bạn.													
                                    </p>
                                    <p class="content-2">
                                        Hồ sơ của bạn đang ở trạng thái <span>Công Khai</span>. Nhà tuyển dụng có thể tìm thấy Hồ sơ này của bạn.														
                                    </p>
                                    <p class="content-3">
                                        Hồ sơ của bạn đang ở trạng thái <span>Khẩn cấp</span>. Hồ sơ của bạn sẽ được ưu tiên tìm thấy bởi các nhà tuyển dụng.															
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" value="0" id="rs_urgentjob" name="urgentjob">
                                    <input type="hidden" value="0" id="rs_chk_searchable" name="chk_searchable">
                                    <div class="form-group form-submit form-back"><a id="linkback" class="btn-back" href="javascript:void(0);"> <em class="mdi mdi-chevron-left"></em><span>Quay lại</span></a><a class="btn-gradient save-and-finish" href="javascript:void(0);" onclick="checkValidForm(2);">Lưu Và Hoàn Tất</a></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-note">
                                        <p>* Thông tin bắt buộc</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <input type="hidden" value="000000" id="strConfidential" name="strConfidential">
    </form>
    <div class="hide-infor-modal" id="chooseresume" style="display: none">
        <div class="modal-title">
            <p>Chọn hồ sơ để lưu thay thế</p>
        </div>
        <div class="modal-body">
            <div id="lstResume">
            </div>
            <div class="button-modal">
                <a class="btn-gradient" onclick="chooseResumeReplace();" href="javascript:void(0);">Lưu</a>
            </div>
        </div>
    </div>
    <div class="saved-and-finish-modal-2" id="AlertUpdateResume" style="display: none">
        <div class="modal-title">
            <p>Thông báo</p>
        </div>
        <div class="modal-body">
            <p>Bạn có muốn cập nhật lại thông tin liên hệ không?</p>
            <div class="button-modal">
                <a class="btn-close-modal" href="javascript:void(0);">Đóng</a>
                <a class="btn-gradient" href="javascript:void(0);" id="btnOK">Đồng Ý</a>
            </div>
        </div>
    </div>
    <div class="hide-infor-modal" id="hide-info" style="display: none">
        <div class="modal-title">
            <p>Ẩn một số thông tin</p>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group form-checkbox">
                    <input class="input_confident" type="checkbox" id="chkConfidential_0" name="chkConfidential[0]" value="1">
                    <label for="chkConfidential_0">Ẩn Họ và tên</label>
                </div>
                <div class="form-group form-checkbox">
                    <input class="input_confident" type="checkbox" id="chkConfidential_1" name="chkConfidential[1]" value="1">
                    <label for="chkConfidential_1">Ẩn Địa chỉ</label>
                </div>
                <div class="form-group form-checkbox">
                    <input class="input_confident" id="chkConfidential_2" type="checkbox" name="chkConfidential[3]" value="1">
                    <label for="chkConfidential_2">Ẩn Số điện thoại</label>
                </div>
            </form>
            <div class="button-modal"><a class="btn-gradient" onclick="$.fancybox.close();" href="javascript:void(0);">Lưu lại</a></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
        	$('#btnOK').click(function(){
        		if($('#popup_resume').val() == 1){
        			showboxchooseresume();
        		}else{
        			submitForm();
        			$.fancybox.close();
        		}
        	});
        	$('#btnClose, .btn-close-modal').click(function(){
        		$.fancybox.close();
        	});
        
        	$('.input_confident').click(
        		function(){
        			var cR = '';
        			var name = $(this).attr('name');
        			var vS = $('#strConfidential').val();
        			if($(this).is(':checked'))
        				cR = '1';
        			else
        				cR = '0';
        
        			if(name == 'chkConfidential[0]')
        				vS = vS.replaceAt(0, cR);
        			else if(name == 'chkConfidential[1]')
        				vS = vS.replaceAt(1, cR);
        			else if(name == 'chkConfidential[3]')
        				vS = vS.replaceAt(3, cR);
        			$('#strConfidential').val(vS);
        		}
        	);
        
        	String.prototype.replaceAt=function(index, char) {
        		var a = this.split("");
        		a[index] = char;
        		return a.join("");
        	}
        });
        function showConfident() {
        	$.fancybox.close();
        	$.fancybox.open({
        		'src': '#confidential',
        	});
        }
        function showboxchooseresume() {
        	$.fancybox.close();
        	$.fancybox.open({
        		'src': '#chooseresume',
        	});
        }
        function showboxupdateinfor() {
        	$.fancybox.close();
        	$.fancybox.open({
        		'src': '#AlertUpdateResume',
        	});
        }
        function chooseResumeReplace()
        {
        	var resume = $('input[name=resume]:checked').val();
        	if(parseInt(resume) > 0){
        		$.ajax({
        			type: "POST",
        			url: PATH_KIEMVIEC+'jobseekers/myresume/choseresumereplace',
        			data: 'resume='+resume+'&jobseeker_id='+$('#member_id').val(),
        			beforeSend:function(){$("#loading").show();},
        			complete:function(){$("#loading").hide();},
        			success: function(data){
        				if(parseInt(data) > 0){
        					submitForm();
        				}
        				$.fancybox.close();
        			}
        		});
        	}else{
        		alert(language.js_resume_save_choose_resume_required);
        	}
        }
    </script>
    <script>/*chosen.jquery.js*/
        (function(){var $,AbstractChosen,Chosen,SelectParser,bind=function(fn,me){return function(){return fn.apply(me,arguments);};},extend=function(child,parent){for(var key in parent){if(hasProp.call(parent,key))child[key]=parent[key];}function ctor(){this.constructor=child;}ctor.prototype=parent.prototype;child.prototype=new ctor();child.__super__=parent.prototype;return child;},hasProp={}.hasOwnProperty;SelectParser=(function(){function SelectParser(){this.options_index=0;this.parsed=[];}
        SelectParser.prototype.add_node=function(child){if(child.nodeName.toUpperCase()==="OPTGROUP"){return this.add_group(child);}else{return this.add_option(child);}};SelectParser.prototype.add_group=function(group){var group_position,i,len,option,ref,results1;group_position=this.parsed.length;this.parsed.push({array_index:group_position,group:true,label:group.label,title:group.title?group.title:void 0,children:0,disabled:group.disabled,classes:group.className});ref=group.childNodes;results1=[];for(i=0,len=ref.length;i<len;i++){option=ref[i];results1.push(this.add_option(option,group_position,group.disabled));}
        return results1;};SelectParser.prototype.add_option=function(option,group_position,group_disabled){if(option.nodeName.toUpperCase()==="OPTION"){if(option.text!==""){if(group_position!=null){this.parsed[group_position].children+=1;}
        this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,value:option.value,text:option.text,html:option.innerHTML,title:option.title?option.title:void 0,selected:option.selected,disabled:group_disabled===true?group_disabled:option.disabled,group_array_index:group_position,group_label:group_position!=null?this.parsed[group_position].label:null,classes:option.className,style:option.style.cssText});}else{this.parsed.push({array_index:this.parsed.length,options_index:this.options_index,empty:true});}
        return this.options_index+=1;}};return SelectParser;})();SelectParser.select_to_array=function(select){var child,i,len,parser,ref;parser=new SelectParser();ref=select.childNodes;for(i=0,len=ref.length;i<len;i++){child=ref[i];parser.add_node(child);}
        return parser.parsed;};AbstractChosen=(function(){function AbstractChosen(form_field,options1){this.form_field=form_field;this.options=options1!=null?options1:{};this.label_click_handler=bind(this.label_click_handler,this);if(!AbstractChosen.browser_is_supported()){return;}
        this.is_multiple=this.form_field.multiple;this.set_default_text();this.set_default_values();this.setup();this.set_up_html();this.register_observers();this.on_ready();}
        AbstractChosen.prototype.set_default_values=function(){this.click_test_action=(function(_this){return function(evt){return _this.test_active_click(evt);};})(this);this.activate_action=(function(_this){return function(evt){return _this.activate_field(evt);};})(this);this.active_field=false;this.mouse_on_container=false;this.results_showing=false;this.result_highlighted=null;this.is_rtl=this.options.rtl||/\bchosen-rtl\b/.test(this.form_field.className);this.allow_single_deselect=(this.options.allow_single_deselect!=null)&&(this.form_field.options[0]!=null)&&this.form_field.options[0].text===""?this.options.allow_single_deselect:false;this.disable_search_threshold=this.options.disable_search_threshold||0;this.disable_search=this.options.disable_search||false;this.enable_split_word_search=this.options.enable_split_word_search!=null?this.options.enable_split_word_search:true;this.group_search=this.options.group_search!=null?this.options.group_search:true;this.search_contains=this.options.search_contains||false;this.single_backstroke_delete=this.options.single_backstroke_delete!=null?this.options.single_backstroke_delete:true;this.max_selected_options=this.options.max_selected_options||Infinity;this.inherit_select_classes=this.options.inherit_select_classes||false;this.display_selected_options=this.options.display_selected_options!=null?this.options.display_selected_options:true;this.display_disabled_options=this.options.display_disabled_options!=null?this.options.display_disabled_options:true;this.include_group_label_in_selected=this.options.include_group_label_in_selected||false;this.max_shown_results=this.options.max_shown_results||Number.POSITIVE_INFINITY;this.case_sensitive_search=this.options.case_sensitive_search||false;return this.hide_results_on_select=this.options.hide_results_on_select!=null?this.options.hide_results_on_select:true;};AbstractChosen.prototype.set_default_text=function(){if(this.form_field.getAttribute("data-placeholder")){this.default_text=this.form_field.getAttribute("data-placeholder");}else if(this.is_multiple){this.default_text=this.options.placeholder_text_multiple||this.options.placeholder_text||AbstractChosen.default_multiple_text;}else{this.default_text=this.options.placeholder_text_single||this.options.placeholder_text||AbstractChosen.default_single_text;}
        this.default_text=this.escape_html(this.default_text);return this.results_none_found=this.form_field.getAttribute("data-no_results_text")||this.options.no_results_text||AbstractChosen.default_no_result_text;};AbstractChosen.prototype.choice_label=function(item){if(this.include_group_label_in_selected&&(item.group_label!=null)){return"<b class='group-name'>"+(this.escape_html(item.group_label))+"</b>"+item.html;}else{return item.html;}};AbstractChosen.prototype.mouse_enter=function(){return this.mouse_on_container=true;};AbstractChosen.prototype.mouse_leave=function(){return this.mouse_on_container=false;};AbstractChosen.prototype.input_focus=function(evt){if(this.is_multiple){if(!this.active_field){return setTimeout(((function(_this){return function(){return _this.container_mousedown();};})(this)),50);}}else{if(!this.active_field){return this.activate_field();}}};AbstractChosen.prototype.input_blur=function(evt){if(!this.mouse_on_container){this.active_field=false;return setTimeout(((function(_this){return function(){return _this.blur_test();};})(this)),100);}};AbstractChosen.prototype.label_click_handler=function(evt){if(this.is_multiple){return this.container_mousedown(evt);}else{return this.activate_field();}};AbstractChosen.prototype.results_option_build=function(options){var content,data,data_content,i,len,ref,shown_results;content='';shown_results=0;ref=this.results_data;for(i=0,len=ref.length;i<len;i++){data=ref[i];data_content='';if(data.group){data_content=this.result_add_group(data);}else{data_content=this.result_add_option(data);}
        if(data_content!==''){shown_results++;content+=data_content;}
        if(options!=null?options.first:void 0){if(data.selected&&this.is_multiple){this.choice_build(data);}else if(data.selected&&!this.is_multiple){this.single_set_selected_text(this.choice_label(data));}}
        if(shown_results>=this.max_shown_results){break;}}
        return content;};AbstractChosen.prototype.result_add_option=function(option){var classes,option_el;if(!option.search_match){return'';}
        if(!this.include_option_in_results(option)){return'';}
        classes=[];if(!option.disabled&&!(option.selected&&this.is_multiple)){classes.push("active-result");}
        if(option.disabled&&!(option.selected&&this.is_multiple)){classes.push("disabled-result");}
        if(option.selected){classes.push("result-selected");}
        if(option.group_array_index!=null){classes.push("group-option");}
        if(option.classes!==""){classes.push(option.classes);}
        option_el=document.createElement("li");option_el.className=classes.join(" ");if(option.style){option_el.style.cssText=option.style;}
        option_el.setAttribute("data-option-array-index",option.array_index);option_el.innerHTML=option.highlighted_html||option.html;if(option.title){option_el.title=option.title;}
        return this.outerHTML(option_el);};AbstractChosen.prototype.result_add_group=function(group){var classes,group_el;if(!(group.search_match||group.group_match)){return'';}
        if(!(group.active_options>0)){return'';}
        classes=[];classes.push("group-result");if(group.classes){classes.push(group.classes);}
        group_el=document.createElement("li");group_el.className=classes.join(" ");group_el.innerHTML=group.highlighted_html||this.escape_html(group.label);if(group.title){group_el.title=group.title;}
        return this.outerHTML(group_el);};AbstractChosen.prototype.results_update_field=function(){this.set_default_text();if(!this.is_multiple){this.results_reset_cleanup();}
        this.result_clear_highlight();this.results_build();if(this.results_showing){return this.winnow_results();}};AbstractChosen.prototype.reset_single_select_options=function(){var i,len,ref,result,results1;ref=this.results_data;results1=[];for(i=0,len=ref.length;i<len;i++){result=ref[i];if(result.selected){results1.push(result.selected=false);}else{results1.push(void 0);}}
        return results1;};AbstractChosen.prototype.results_toggle=function(){if(this.results_showing){return this.results_hide();}else{return this.results_show();}};AbstractChosen.prototype.results_search=function(evt){if(this.results_showing){return this.winnow_results();}else{return this.results_show();}};AbstractChosen.prototype.winnow_results=function(options){var escapedQuery,fix,i,len,option,prefix,query,ref,regex,results,results_group,search_match,startpos,suffix,text;this.no_results_clear();results=0;query=this.get_search_text();var strTemp=query.toLowerCase();strTemp=strTemp.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/gi,"a");strTemp=strTemp.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");strTemp=strTemp.replace(/ì|í|ị|ỉ|ĩ/gi,"i");strTemp=strTemp.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/gi,"o");strTemp=strTemp.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");strTemp=strTemp.replace(/ỳ|ý|ỵ|ỷ|ỹ/gi,"y");strTemp=strTemp.replace(/đ/gi,"d");strTemp=strTemp.replace(/̀|́|̣|̉|̃|/gi,"");escapedQuery=strTemp.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&");regex=this.get_search_regex(escapedQuery);ref=this.results_data;for(i=0,len=ref.length;i<len;i++){option=ref[i];option.search_match=false;results_group=null;search_match=null;option.highlighted_html='';if(this.include_option_in_results(option)){if(option.group){option.group_match=false;option.active_options=0;}
        if((option.group_array_index!=null)&&this.results_data[option.group_array_index]){results_group=this.results_data[option.group_array_index];if(results_group.active_options===0&&results_group.search_match){results+=1;}
        results_group.active_options+=1;}
        text=option.group?option.label:option.text;if(!(option.group&&!this.group_search)){search_match=this.search_string_match(text,regex);option.search_match=search_match!=null;if(option.search_match&&!option.group){results+=1;}
        if(option.search_match){if(query.length){startpos=search_match.index;prefix=text.slice(0,startpos);fix=text.slice(startpos,startpos+query.length);suffix=text.slice(startpos+query.length);option.highlighted_html=(this.escape_html(prefix))+"<em>"+(this.escape_html(fix))+"</em>"+(this.escape_html(suffix));}
        if(results_group!=null){results_group.group_match=true;}}else if((option.group_array_index!=null)&&this.results_data[option.group_array_index].search_match){option.search_match=true;}}}}
        this.result_clear_highlight();if(results<1&&query.length){this.update_results_content("");return this.no_results(query);}else{this.update_results_content(this.results_option_build());if(!(options!=null?options.skip_highlight:void 0)){return this.winnow_results_set_highlight();}}};AbstractChosen.prototype.get_search_regex=function(escaped_search_string){var regex_flag,regex_string;regex_string=this.search_contains?escaped_search_string:"(^|\\s|\\b)"+escaped_search_string+"[^\\s]*";if(!(this.enable_split_word_search||this.search_contains)){regex_string="^"+regex_string;}
        regex_flag=this.case_sensitive_search?"":"i";return new RegExp(regex_string,regex_flag);};AbstractChosen.prototype.search_string_match=function(search_string,regex){var match;var strTemp=search_string.toLowerCase();strTemp=strTemp.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");strTemp=strTemp.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");strTemp=strTemp.replace(/ì|í|ị|ỉ|ĩ/g,"i");strTemp=strTemp.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");strTemp=strTemp.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");strTemp=strTemp.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");strTemp=strTemp.replace(/đ/g,"d");strTemp=strTemp.replace(/̀|́|̣|̉|̃|/gi,"");match=regex.exec(strTemp);if(!this.search_contains&&(match!=null?match[1]:void 0)){match.index+=1;}
        return match;};AbstractChosen.prototype.choices_count=function(){var i,len,option,ref;if(this.selected_option_count!=null){return this.selected_option_count;}
        this.selected_option_count=0;ref=this.form_field.options;for(i=0,len=ref.length;i<len;i++){option=ref[i];if(option.selected){this.selected_option_count+=1;}}
        return this.selected_option_count;};AbstractChosen.prototype.choices_click=function(evt){evt.preventDefault();this.activate_field();if(!(this.results_showing||this.is_disabled)){return this.results_show();}};AbstractChosen.prototype.keydown_checker=function(evt){var ref,stroke;stroke=(ref=evt.which)!=null?ref:evt.keyCode;this.search_field_scale();if(stroke!==8&&this.pending_backstroke){this.clear_backstroke();}
        switch(stroke){case 8:this.backstroke_length=this.get_search_field_value().length;break;case 9:if(this.results_showing&&!this.is_multiple){this.result_select(evt);}
        this.mouse_on_container=false;break;case 13:if(this.results_showing){evt.preventDefault();}
        break;case 27:if(this.results_showing){evt.preventDefault();}
        break;case 32:if(this.disable_search){evt.preventDefault();}
        break;case 38:evt.preventDefault();this.keyup_arrow();break;case 40:evt.preventDefault();this.keydown_arrow();break;}};AbstractChosen.prototype.keyup_checker=function(evt){var ref,stroke;stroke=(ref=evt.which)!=null?ref:evt.keyCode;this.search_field_scale();switch(stroke){case 8:if(this.is_multiple&&this.backstroke_length<1&&this.choices_count()>0){this.keydown_backstroke();}else if(!this.pending_backstroke){this.result_clear_highlight();this.results_search();}
        break;case 13:evt.preventDefault();if(this.results_showing){this.result_select(evt);}
        break;case 27:if(this.results_showing){this.results_hide();}
        break;case 9:case 16:case 17:case 18:case 38:case 40:case 91:break;default:this.results_search();break;}};AbstractChosen.prototype.clipboard_event_checker=function(evt){if(this.is_disabled){return;}
        return setTimeout(((function(_this){return function(){return _this.results_search();};})(this)),50);};AbstractChosen.prototype.container_width=function(){if(this.options.width!=null){return this.options.width;}else{return this.form_field.offsetWidth+"px";}};AbstractChosen.prototype.include_option_in_results=function(option){if(this.is_multiple&&(!this.display_selected_options&&option.selected)){return false;}
        if(!this.display_disabled_options&&option.disabled){return false;}
        if(option.empty){return false;}
        return true;};AbstractChosen.prototype.search_results_touchstart=function(evt){this.touch_started=true;return this.search_results_mouseover(evt);};AbstractChosen.prototype.search_results_touchmove=function(evt){this.touch_started=false;return this.search_results_mouseout(evt);};AbstractChosen.prototype.search_results_touchend=function(evt){if(this.touch_started){return this.search_results_mouseup(evt);}};AbstractChosen.prototype.outerHTML=function(element){var tmp;if(element.outerHTML){return element.outerHTML;}
        tmp=document.createElement("div");tmp.appendChild(element);return tmp.innerHTML;};AbstractChosen.prototype.get_single_html=function(){return"<a class=\"chosen-single chosen-default\">\n  <span>"+this.default_text+"</span>\n  <div><b></b></div>\n</a>\n<div class=\"chosen-drop\">\n  <div class=\"chosen-search\">\n    <input class=\"chosen-search-input\" type=\"search\" autocomplete=\"off\" />\n  </div>\n  <ul class=\"chosen-results\"></ul>\n</div>";};AbstractChosen.prototype.get_multi_html=function(){return"<ul class=\"chosen-choices\">\n  <li class=\"search-field\">\n    <input class=\"chosen-search-input\" type=\"search\" autocomplete=\"off\" value=\""+this.default_text+"\" />\n  </li>\n</ul>\n<div class=\"chosen-drop\">\n  <ul class=\"chosen-results\"></ul>\n</div>";};AbstractChosen.prototype.get_no_results_html=function(terms){return"<li class=\"no-results\">\n  "+this.results_none_found+" <span>"+(this.escape_html(terms))+"</span>\n</li>";};AbstractChosen.browser_is_supported=function(){if("Microsoft Internet Explorer"===window.navigator.appName){return document.documentMode>=8;}
        return true;};AbstractChosen.default_multiple_text="Select Some Options";AbstractChosen.default_single_text="Select an Option";AbstractChosen.default_no_result_text="No results match";return AbstractChosen;})();$=jQuery;$.fn.extend({chosen:function(options){if(!AbstractChosen.browser_is_supported()){return this;}
        return this.each(function(input_field){var $this,chosen;$this=$(this);chosen=$this.data('chosen');if(options==='destroy'){if(chosen instanceof Chosen){chosen.destroy();}
        return;}
        if(!(chosen instanceof Chosen)){$this.data('chosen',new Chosen(this,options));}});}});Chosen=(function(superClass){extend(Chosen,superClass);function Chosen(){return Chosen.__super__.constructor.apply(this,arguments);}
        Chosen.prototype.setup=function(){this.form_field_jq=$(this.form_field);return this.current_selectedIndex=this.form_field.selectedIndex;};Chosen.prototype.set_up_html=function(){var container_classes,container_props;container_classes=["chosen-container"];container_classes.push("chosen-container-"+(this.is_multiple?"multi":"single"));if(this.inherit_select_classes&&this.form_field.className){container_classes.push(this.form_field.className);}
        if(this.is_rtl){container_classes.push("chosen-rtl");}
        container_props={'class':container_classes.join(' '),'title':this.form_field.title};if(this.form_field.id.length){container_props.id=this.form_field.id.replace(/[^\w]/g,'_')+"_chosen";}
        this.container=$("<div />",container_props);this.container.width(this.container_width());if(this.is_multiple){this.container.html(this.get_multi_html());}else{this.container.html(this.get_single_html());}
        this.form_field_jq.hide().after(this.container);this.dropdown=this.container.find('div.chosen-drop').first();this.search_field=this.container.find('input').first();this.search_results=this.container.find('ul.chosen-results').first();this.search_field_scale();this.search_no_results=this.container.find('li.no-results').first();if(this.is_multiple){this.search_choices=this.container.find('ul.chosen-choices').first();this.search_container=this.container.find('li.search-field').first();}else{this.search_container=this.container.find('div.chosen-search').first();this.selected_item=this.container.find('.chosen-single').first();}
        this.results_build();this.set_tab_index();return this.set_label_behavior();};Chosen.prototype.on_ready=function(){return this.form_field_jq.trigger("chosen:ready",{chosen:this});};Chosen.prototype.register_observers=function(){this.container.on('touchstart.chosen',(function(_this){return function(evt){_this.container_mousedown(evt);};})(this));this.container.on('touchend.chosen',(function(_this){return function(evt){_this.container_mouseup(evt);};})(this));this.container.on('mousedown.chosen',(function(_this){return function(evt){_this.container_mousedown(evt);};})(this));this.container.on('mouseup.chosen',(function(_this){return function(evt){_this.container_mouseup(evt);};})(this));this.container.on('mouseenter.chosen',(function(_this){return function(evt){_this.mouse_enter(evt);};})(this));this.container.on('mouseleave.chosen',(function(_this){return function(evt){_this.mouse_leave(evt);};})(this));this.search_results.on('mouseup.chosen',(function(_this){return function(evt){_this.search_results_mouseup(evt);};})(this));this.search_results.on('mouseover.chosen',(function(_this){return function(evt){_this.search_results_mouseover(evt);};})(this));this.search_results.on('mouseout.chosen',(function(_this){return function(evt){_this.search_results_mouseout(evt);};})(this));this.search_results.on('mousewheel.chosen DOMMouseScroll.chosen',(function(_this){return function(evt){_this.search_results_mousewheel(evt);};})(this));this.search_results.on('touchstart.chosen',(function(_this){return function(evt){_this.search_results_touchstart(evt);};})(this));this.search_results.on('touchmove.chosen',(function(_this){return function(evt){_this.search_results_touchmove(evt);};})(this));this.search_results.on('touchend.chosen',(function(_this){return function(evt){_this.search_results_touchend(evt);};})(this));this.form_field_jq.on("chosen:updated.chosen",(function(_this){return function(evt){_this.results_update_field(evt);};})(this));this.form_field_jq.on("chosen:activate.chosen",(function(_this){return function(evt){_this.activate_field(evt);};})(this));this.form_field_jq.on("chosen:open.chosen",(function(_this){return function(evt){_this.container_mousedown(evt);};})(this));this.form_field_jq.on("chosen:close.chosen",(function(_this){return function(evt){_this.close_field(evt);};})(this));this.search_field.on('blur.chosen',(function(_this){return function(evt){_this.input_blur(evt);};})(this));this.search_field.on('keyup.chosen',(function(_this){return function(evt){_this.keyup_checker(evt);};})(this));this.search_field.on('keydown.chosen',(function(_this){return function(evt){_this.keydown_checker(evt);};})(this));this.search_field.on('focus.chosen',(function(_this){return function(evt){_this.input_focus(evt);};})(this));this.search_field.on('cut.chosen',(function(_this){return function(evt){_this.clipboard_event_checker(evt);};})(this));this.search_field.on('paste.chosen',(function(_this){return function(evt){_this.clipboard_event_checker(evt);};})(this));if(this.is_multiple){return this.search_choices.on('click.chosen',(function(_this){return function(evt){_this.choices_click(evt);};})(this));}else{return this.container.on('click.chosen',function(evt){evt.preventDefault();});}};Chosen.prototype.destroy=function(){$(this.container[0].ownerDocument).off('click.chosen',this.click_test_action);if(this.form_field_label.length>0){this.form_field_label.off('click.chosen');}
        if(this.search_field[0].tabIndex){this.form_field_jq[0].tabIndex=this.search_field[0].tabIndex;}
        this.container.remove();this.form_field_jq.removeData('chosen');return this.form_field_jq.show();};Chosen.prototype.search_field_disabled=function(){this.is_disabled=this.form_field.disabled||this.form_field_jq.parents('fieldset').is(':disabled');this.container.toggleClass('chosen-disabled',this.is_disabled);this.search_field[0].disabled=this.is_disabled;if(!this.is_multiple){this.selected_item.off('focus.chosen',this.activate_field);}
        if(this.is_disabled){return this.close_field();}else if(!this.is_multiple){return this.selected_item.on('focus.chosen',this.activate_field);}};Chosen.prototype.container_mousedown=function(evt){var ref;if(this.is_disabled){return;}
        if(evt&&((ref=evt.type)==='mousedown'||ref==='touchstart')&&!this.results_showing){evt.preventDefault();}
        if(!((evt!=null)&&($(evt.target)).hasClass("search-choice-close"))){if(!this.active_field){if(this.is_multiple){this.search_field.val("");}
        $(this.container[0].ownerDocument).on('click.chosen',this.click_test_action);this.results_show();}else if(!this.is_multiple&&evt&&(($(evt.target)[0]===this.selected_item[0])||$(evt.target).parents("a.chosen-single").length)){evt.preventDefault();this.results_toggle();}
        return this.activate_field();}};Chosen.prototype.container_mouseup=function(evt){if(evt.target.nodeName==="ABBR"&&!this.is_disabled){return this.results_reset(evt);}};Chosen.prototype.search_results_mousewheel=function(evt){var delta;if(evt.originalEvent){delta=evt.originalEvent.deltaY||-evt.originalEvent.wheelDelta||evt.originalEvent.detail;}
        if(delta!=null){evt.preventDefault();if(evt.type==='DOMMouseScroll'){delta=delta*40;}
        return this.search_results.scrollTop(delta+this.search_results.scrollTop());}};Chosen.prototype.blur_test=function(evt){if(!this.active_field&&this.container.hasClass("chosen-container-active")){return this.close_field();}};Chosen.prototype.close_field=function(){$(this.container[0].ownerDocument).off("click.chosen",this.click_test_action);this.active_field=false;this.results_hide();this.container.removeClass("chosen-container-active");this.clear_backstroke();this.show_search_field_default();this.search_field_scale();return this.search_field.blur();};Chosen.prototype.activate_field=function(){if(this.is_disabled){return;}
        this.container.addClass("chosen-container-active");this.active_field=true;this.search_field.val(this.search_field.val());return this.search_field.focus();};Chosen.prototype.test_active_click=function(evt){var active_container;active_container=$(evt.target).closest('.chosen-container');if(active_container.length&&this.container[0]===active_container[0]){return this.active_field=true;}else{return this.close_field();}};Chosen.prototype.results_build=function(){this.parsing=true;this.selected_option_count=null;this.results_data=SelectParser.select_to_array(this.form_field);if(this.is_multiple){this.search_choices.find("li.search-choice").remove();}else{this.single_set_selected_text();if(this.disable_search||this.form_field.options.length<=this.disable_search_threshold){this.search_field[0].readOnly=true;this.container.addClass("chosen-container-single-nosearch");}else{this.search_field[0].readOnly=false;this.container.removeClass("chosen-container-single-nosearch");}}
        this.update_results_content(this.results_option_build({first:true}));this.search_field_disabled();this.show_search_field_default();this.search_field_scale();return this.parsing=false;};Chosen.prototype.result_do_highlight=function(el){var high_bottom,high_top,maxHeight,visible_bottom,visible_top;if(el.length){this.result_clear_highlight();this.result_highlight=el;this.result_highlight.addClass("highlighted");maxHeight=parseInt(this.search_results.css("maxHeight"),10);visible_top=this.search_results.scrollTop();visible_bottom=maxHeight+visible_top;high_top=this.result_highlight.position().top+this.search_results.scrollTop();high_bottom=high_top+this.result_highlight.outerHeight();if(high_bottom>=visible_bottom){return this.search_results.scrollTop((high_bottom-maxHeight)>0?high_bottom-maxHeight:0);}else if(high_top<visible_top){return this.search_results.scrollTop(high_top);}}};Chosen.prototype.result_clear_highlight=function(){if(this.result_highlight){this.result_highlight.removeClass("highlighted");}
        return this.result_highlight=null;};Chosen.prototype.results_show=function(){if(this.is_multiple&&this.max_selected_options<=this.choices_count()){this.form_field_jq.trigger("chosen:maxselected",{chosen:this});return false;}
        this.container.addClass("chosen-with-drop");this.results_showing=true;this.search_field.focus();this.search_field.val(this.get_search_field_value());this.winnow_results();return this.form_field_jq.trigger("chosen:showing_dropdown",{chosen:this});};Chosen.prototype.update_results_content=function(content){return this.search_results.html(content);};Chosen.prototype.results_hide=function(){if(this.results_showing){this.result_clear_highlight();this.container.removeClass("chosen-with-drop");this.form_field_jq.trigger("chosen:hiding_dropdown",{chosen:this});}
        return this.results_showing=false;};Chosen.prototype.set_tab_index=function(el){var ti;if(this.form_field.tabIndex){ti=this.form_field.tabIndex;this.form_field.tabIndex=-1;return this.search_field[0].tabIndex=ti;}};Chosen.prototype.set_label_behavior=function(){this.form_field_label=this.form_field_jq.parents("label");if(!this.form_field_label.length&&this.form_field.id.length){this.form_field_label=$("label[for='"+this.form_field.id+"']");}
        if(this.form_field_label.length>0){return this.form_field_label.on('click.chosen',this.label_click_handler);}};Chosen.prototype.show_search_field_default=function(){if(this.is_multiple&&this.choices_count()<1&&!this.active_field){this.search_field.val(this.default_text);return this.search_field.addClass("default");}else{this.search_field.val("");return this.search_field.removeClass("default");}};Chosen.prototype.search_results_mouseup=function(evt){var target;target=$(evt.target).hasClass("active-result")?$(evt.target):$(evt.target).parents(".active-result").first();if(target.length){this.result_highlight=target;this.result_select(evt);return this.search_field.focus();}};Chosen.prototype.search_results_mouseover=function(evt){var target;target=$(evt.target).hasClass("active-result")?$(evt.target):$(evt.target).parents(".active-result").first();if(target){return this.result_do_highlight(target);}};Chosen.prototype.search_results_mouseout=function(evt){if($(evt.target).hasClass("active-result")||$(evt.target).parents('.active-result').first()){return this.result_clear_highlight();}};Chosen.prototype.choice_build=function(item){var choice,close_link;choice=$('<li />',{"class":"search-choice"}).html("<span>"+(this.choice_label(item))+"</span>");if(item.disabled){choice.addClass('search-choice-disabled');}else{close_link=$('<a />',{"class":'search-choice-close','data-option-array-index':item.array_index});close_link.on('click.chosen',(function(_this){return function(evt){return _this.choice_destroy_link_click(evt);};})(this));choice.append(close_link);}
        return this.search_container.before(choice);};Chosen.prototype.choice_destroy_link_click=function(evt){evt.preventDefault();evt.stopPropagation();if(!this.is_disabled){return this.choice_destroy($(evt.target));}};Chosen.prototype.choice_destroy=function(link){if(this.result_deselect(link[0].getAttribute("data-option-array-index"))){if(this.active_field){this.search_field.focus();}else{this.show_search_field_default();}
        if(this.is_multiple&&this.choices_count()>0&&this.get_search_field_value().length<1){this.results_hide();}
        link.parents('li').first().remove();return this.search_field_scale();}};Chosen.prototype.results_reset=function(){this.reset_single_select_options();this.form_field.options[0].selected=true;this.single_set_selected_text();this.show_search_field_default();this.results_reset_cleanup();this.trigger_form_field_change();if(this.active_field){return this.results_hide();}};Chosen.prototype.results_reset_cleanup=function(){this.current_selectedIndex=this.form_field.selectedIndex;return this.selected_item.find("abbr").remove();};Chosen.prototype.result_select=function(evt){var high,item;if(this.result_highlight){high=this.result_highlight;this.result_clear_highlight();if(this.is_multiple&&this.max_selected_options<=this.choices_count()){this.form_field_jq.trigger("chosen:maxselected",{chosen:this});return false;}
        if(this.is_multiple){high.removeClass("active-result");}else{this.reset_single_select_options();}
        high.addClass("result-selected");item=this.results_data[high[0].getAttribute("data-option-array-index")];item.selected=true;this.form_field.options[item.options_index].selected=true;this.selected_option_count=null;if(this.is_multiple){this.choice_build(item);}else{this.single_set_selected_text(this.choice_label(item));}
        if(this.is_multiple&&(!this.hide_results_on_select||(evt.metaKey||evt.ctrlKey))){if(evt.metaKey||evt.ctrlKey){this.winnow_results({skip_highlight:true});}else{this.search_field.val("");this.winnow_results();}}else{this.results_hide();this.show_search_field_default();}
        if(this.is_multiple||this.form_field.selectedIndex!==this.current_selectedIndex){this.trigger_form_field_change({selected:this.form_field.options[item.options_index].value});}
        this.current_selectedIndex=this.form_field.selectedIndex;evt.preventDefault();return this.search_field_scale();}};Chosen.prototype.single_set_selected_text=function(text){if(text==null){text=this.default_text;}
        if(text===this.default_text){this.selected_item.addClass("chosen-default");}else{this.single_deselect_control_build();this.selected_item.removeClass("chosen-default");}
        return this.selected_item.find("span").html(text);};Chosen.prototype.result_deselect=function(pos){var result_data;result_data=this.results_data[pos];if(!this.form_field.options[result_data.options_index].disabled){result_data.selected=false;this.form_field.options[result_data.options_index].selected=false;this.selected_option_count=null;this.result_clear_highlight();if(this.results_showing){this.winnow_results();}
        this.trigger_form_field_change({deselected:this.form_field.options[result_data.options_index].value});this.search_field_scale();return true;}else{return false;}};Chosen.prototype.single_deselect_control_build=function(){if(!this.allow_single_deselect){return;}
        if(!this.selected_item.find("abbr").length){this.selected_item.find("span").first().after("<abbr class=\"search-choice-close\"></abbr>");}
        return this.selected_item.addClass("chosen-single-with-deselect");};Chosen.prototype.get_search_field_value=function(){return this.search_field.val();};Chosen.prototype.get_search_text=function(){return $.trim(this.get_search_field_value());};Chosen.prototype.escape_html=function(text){return $('<div/>').text(text).html();};Chosen.prototype.winnow_results_set_highlight=function(){var do_high,selected_results;selected_results=!this.is_multiple?this.search_results.find(".result-selected.active-result"):[];do_high=selected_results.length?selected_results.first():this.search_results.find(".active-result").first();if(do_high!=null){return this.result_do_highlight(do_high);}};Chosen.prototype.no_results=function(terms){var no_results_html;no_results_html=this.get_no_results_html(terms);this.search_results.append(no_results_html);return this.form_field_jq.trigger("chosen:no_results",{chosen:this});};Chosen.prototype.no_results_clear=function(){return this.search_results.find(".no-results").remove();};Chosen.prototype.keydown_arrow=function(){var next_sib;if(this.results_showing&&this.result_highlight){next_sib=this.result_highlight.nextAll("li.active-result").first();if(next_sib){return this.result_do_highlight(next_sib);}}else{return this.results_show();}};Chosen.prototype.keyup_arrow=function(){var prev_sibs;if(!this.results_showing&&!this.is_multiple){return this.results_show();}else if(this.result_highlight){prev_sibs=this.result_highlight.prevAll("li.active-result");if(prev_sibs.length){return this.result_do_highlight(prev_sibs.first());}else{if(this.choices_count()>0){this.results_hide();}
        return this.result_clear_highlight();}}};Chosen.prototype.keydown_backstroke=function(){var next_available_destroy;if(this.pending_backstroke){this.choice_destroy(this.pending_backstroke.find("a").first());return this.clear_backstroke();}else{next_available_destroy=this.search_container.siblings("li.search-choice").last();if(next_available_destroy.length&&!next_available_destroy.hasClass("search-choice-disabled")){this.pending_backstroke=next_available_destroy;if(this.single_backstroke_delete){return this.keydown_backstroke();}else{return this.pending_backstroke.addClass("search-choice-focus");}}}};Chosen.prototype.clear_backstroke=function(){if(this.pending_backstroke){this.pending_backstroke.removeClass("search-choice-focus");}
        return this.pending_backstroke=null;};Chosen.prototype.search_field_scale=function(){var div,i,len,style,style_block,styles,width;if(!this.is_multiple){return;}
        style_block={position:'absolute',left:'-1000px',top:'-1000px',display:'none',whiteSpace:'pre'};styles=['fontSize','fontStyle','fontWeight','fontFamily','lineHeight','textTransform','letterSpacing'];for(i=0,len=styles.length;i<len;i++){style=styles[i];style_block[style]=this.search_field.css(style);}
        div=$('<div />').css(style_block);div.text(this.get_search_field_value());$('body').append(div);width=div.width()+25;div.remove();if(this.container.is(':visible')){width=Math.min(this.container.outerWidth()-10,width);}
        return this.search_field.width(width);};Chosen.prototype.trigger_form_field_change=function(extra){this.form_field_jq.trigger("input",extra);return this.form_field_jq.trigger("change",extra);};return Chosen;})(AbstractChosen);}).call(this);
        /*jquery.formatcurrency.js*/
        
        (function($){$.formatCurrency={};$.formatCurrency.regions=[];$.formatCurrency.regions['']={symbol:'',positiveFormat:'%s%n',negativeFormat:'(%s%n)',decimalSymbol:'.',digitGroupSymbol:',',groupDigits:true};$.fn.formatCurrency=function(destination,settings){if(arguments.length==1&&typeof destination!=="string"){settings=destination;destination=false;}
        var defaults={name:"formatCurrency",colorize:false,region:'',global:true,roundToDecimalPlace:-1,eventOnDecimalsEntered:false};defaults=$.extend(defaults,$.formatCurrency.regions['']);settings=$.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));}
        settings.regex=generateRegex(settings);return this.each(function(){$this=$(this);var num='0';num=$this[$this.is('input, select, textarea')?'val':'html']().replace(/[^0-9\s]/gi,'');if(num.search('\\(')>=0){num='-'+num;}
        if(num===''||(num==='-'&&settings.roundToDecimalPlace===-1)){return;}
        if(isNaN(num)){num=num.replace(settings.regex,'');if(num===''||(num==='-'&&settings.roundToDecimalPlace===-1)){return;}
        if(settings.decimalSymbol!='.'){num=num.replace(settings.decimalSymbol,'.');}
        if(isNaN(num)){num='0';}}
        var numParts=String(num).split('.');var isPositive=(num==Math.abs(num));var hasDecimals=(numParts.length>1);var decimals=(hasDecimals?numParts[1].toString():'0');var originalDecimals=decimals;num=Math.abs(numParts[0]);num=isNaN(num)?0:num;if(settings.roundToDecimalPlace>=0){decimals=parseFloat('1.'+decimals);decimals=decimals.toFixed(settings.roundToDecimalPlace);if(decimals.substring(0,1)=='2'){num=Number(num)+1;}
        decimals=decimals.substring(2);}
        num=String(num);if(settings.groupDigits){for(var i=0;i<Math.floor((num.length-(1+i))/3);i++){num=num.substring(0,num.length-(4*i+3))+settings.digitGroupSymbol+num.substring(num.length-(4*i+3));}}
        if((hasDecimals&&settings.roundToDecimalPlace==-1)||settings.roundToDecimalPlace>0){num+=settings.decimalSymbol+decimals;}
        var format=isPositive?settings.positiveFormat:settings.negativeFormat;var money=format.replace(/%s/g,settings.symbol);money=money.replace(/%n/g,num);var $destination=$([]);if(!destination){$destination=$this;}else{$destination=$(destination);}
        $destination[$destination.is('input, select, textarea')?'val':'html'](money);if(hasDecimals&&settings.eventOnDecimalsEntered&&originalDecimals.length>settings.roundToDecimalPlace){$destination.trigger('decimalsEntered',originalDecimals);}
        if(settings.colorize){$destination.css('color',isPositive?'black':'red');}});};$.fn.toNumber=function(settings){var defaults=$.extend({name:"toNumber",region:'',global:true},$.formatCurrency.regions['']);settings=jQuery.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));}
        settings.regex=generateRegex(settings);return this.each(function(){var method=$(this).is('input, select, textarea')?'val':'html';$(this)[method]($(this)[method]().replace('(','(-').replace(settings.regex,''));});};$.fn.asNumber=function(settings){var defaults=$.extend({name:"asNumber",region:'',parse:true,parseType:'Float',global:true},$.formatCurrency.regions['']);settings=jQuery.extend(defaults,settings);if(settings.region.length>0){settings=$.extend(settings,getRegionOrCulture(settings.region));}
        settings.regex=generateRegex(settings);settings.parseType=validateParseType(settings.parseType);var method=$(this).is('input, select, textarea')?'val':'html';var num=$(this)[method]();num=num?num:"";num=num.replace('(','(-');num=num.replace(settings.regex,'');if(!settings.parse){return num;}
        if(num.length==0){num='0';}
        if(settings.decimalSymbol!='.'){num=num.replace(settings.decimalSymbol,'.');}
        return window['parse'+settings.parseType](num);};function getRegionOrCulture(region){var regionInfo=$.formatCurrency.regions[region];if(regionInfo){return regionInfo;}
        else{if(/(\w+)-(\w+)/g.test(region)){var culture=region.replace(/(\w+)-(\w+)/g,"$1");return $.formatCurrency.regions[culture];}}
        return null;}
        function validateParseType(parseType){switch(parseType.toLowerCase()){case'int':return'Int';case'float':return'Float';default:throw'invalid parseType';}}
        function generateRegex(settings){if(settings.symbol===''){return new RegExp("[^\\d"+settings.decimalSymbol+"-]","g");}
        else{var symbol=settings.symbol.replace('$','\\$').replace('.','\\.');return new RegExp(symbol+"|[^\\d"+settings.decimalSymbol+"-]","g");}}
        $.fn.ForceNumericOnly=function(){$(this).keydown(function(e)
        {var key=e.charCode||e.keyCode||0;return(key==8||key==9||key==46||(key>=37&&key<=40)||(key>=48&&key<=57)||(key>=96&&key<=105));})}})(jQuery);
        /*quick-upload-resume.js*/
        
        $(document).ready(function(){$('.additional-information').on('click',function(e){e.preventDefault();$(this).slideUp()
        $('.add-infor-hide').slideUp()
        $('.form-additional .form-child').slideDown()
        $('.form-of-work').slideDown()
        $('#outcountry').slideDown()})
        $(".add-references").each(function(){$(this).on("click",function(){$.fancybox.open($(".references-modal"));});});$(".hide-infor").each(function(){$(this).on("click",function(e){e.preventDefault();$.fancybox.open($("#hide-info"));});});$(".save-and-finish").each(function(){$(this).on("click",function(e){e.preventDefault();$.fancybox.open($(".saved-and-finish-modal"));});});$(".btn-close-modal").on("click",function(){$.fancybox.close();});addEnglishLevel();addWorkplaceDesired()
        $("#no-exp").on("click",hideExpYear)
        $(".chosen-select").chosen();$(".switch-status-element a").on('click',function(){let obj=$(this);let type=obj.data('type');$('.swap-content-1 p').removeClass('active');$(".switch-status-element a").removeClass('active');$('.swap-content-1 p.content-'+type).addClass('active');obj.addClass('active');if(type==1){$("#rs_urgentjob").val(0);$("#rs_chk_searchable").val(0);}else if(type==2){$("#rs_urgentjob").val(0);$("#rs_chk_searchable").val(1);}else if(type==3){$("#rs_urgentjob").val(1);$("#rs_chk_searchable").val(1);}});});var hideExpYear=function(){var check=$("#no-exp:checked").length
        if(check==1){$("#year_experience").attr('readonly','readonly').attr('disabled','disabled').attr('value','')}else{$("#year_experience").removeAttr('readonly').removeAttr('disabled')}}
        function addEnglishLevel(){$('#list-language .btn-add').click(function(e){e.preventDefault();size_li=$("#list-language > .item").length;if(size_li<9){var html=$("#language_hide").html();$('#list-language #language_hide').before(html);}
        if(size_li+1>=2)
        $("#list-language > .item .btn-delete").show();});$(document).on('click','#list-language .btn-delete',function(e){e.preventDefault();size_li=$("#list-language > .item").length;if(size_li>1)
        $(this).parent().remove();if(size_li-1==1)
        $("#list-language > .item .btn-delete").hide();})}
        function addWorkplaceDesired(){size_li2=$("#list-workplace-desired .item").length
        y=1
        $('#list-workplace-desired .btn-add').on('click',function(e){e.preventDefault();$('#list-workplace-desired .item:not(.active)').first().addClass('active').find('.delete').addClass('active');});$('#list-workplace-desired .delete').on('click',function(e){e.preventDefault();$(this).parent().parent().find('select').val('');$(this).parent().parent().find('select.chosen-select-max-three option').remove();$(this).parent().parent().find('select.chosen-select-max-three').trigger('chosen:updated');$(this).parent().parent().removeClass('active').find('.delete').removeClass('active');});}
    </script>
    <div id="date_time_picker" class="dtpicker-overlay dtpicker-mobile">
        <div class="dtpicker-bg">
            <div class="dtpicker-cont">
                <div class="dtpicker-content">
                    <div class="dtpicker-subcontent"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://careerbuilder.vn/vi/jobseekers/getdistricts"></script>
    <script type="text/javascript" src="https://static.careerbuilder.vn/js/jquery.formatcurrency.js"></script>
    <script language="javascript">
        var language_save_resume = {job_message_profile_update:"Cập nhật thông tin cá nhân thành công",
        				job_message_delete:"Bạn có muốn xóa không?	",
        				job_message_delete_succ:"Xóa thành công",
        				job_message_error:"Lỗi trong quá trình thực thi",
        				js_resume_upload_success:"Upload thành công",
        				js_resume_upload_unsuccess:"Tập tin bạn vừa tải lên không thành công do sai định dạng. Hệ thống hiện chỉ hỗ trợ các tập tin có đuôi *.doc, *.docx hoặc *.pdf với dung lượng không vượt quá 3MB",
        				job_upload_not_found:"Not found",
        				js_resume_skill_success:"Cập nhật kỹ năng thành công",
        				js_resume_select_skill:"Vui lòng chọn kỹ năng làm việc",
        				js_resume_action_not_success:"Thực hiện không thành công",
        				js_resume_exp_insert_success:"Thêm kinh nghiệm thành công",
        				js_resume_exp_edit_success:"Thành công. (Thêm kinh nghiệm làm việc nếu số năm >0)",
        				js_resume_education_insert_success:"Thêm bằng cấp thành công",
        				js_resume_education_edit_success:"Cập nhật bằng cấp thành công",
        				job_message_delete_exp:"Bạn có muốn xóa kinh nghiệm này?",
        				job_message_delete_edu:"Bạn có muốn xóa học vấn này?",
        				job_message_delete_refer:"Bạn có muốn xóa người tham khảo này?",
        				js_resume_delete2:"Xóa",
        				js_resume_limit_check	:"Tối đa 3 lựa chọn",
        				LANG_ERROR_RESUME_SALARY_FROM_TO:" Bạn vui lòng nhập mức lương tối thiểu là 500,000(VND) và tối đa 999,000,000(VND) hoặc tối thiểu 25(USD) và tối đa 99.999(USD).",
        				js_resume_Choice:"Chọn",
        				js_resume_All_Choice:"Chọn",
        				js_resume_selected:"# lựa chọn",
        				js_resume_exp_select:"Vui lòng chọn kinh nghiệm",
        				js_resume_jobtype_select:"Vui lòng chọn loại hình làm việc",
        				js_resume_workingtype_select:"Vui lòng chọn hình thức làm việc",
        				js_resume_currentlevel_select:"Vui lòng chọn cấp bậc hiện tại",
        				js_resume_degree_select:"Vui lòng chọn bằng cấp cao nhất",
        				js_resume_resume_title_required:"Vui lòng nhập vị trí mong muốn",
        				js_resume_level_required:"Vui lòng chọn cấp bậc",
        				js_resume_industry_required:"Vui lòng chọn ngành nghề",
        				js_resume_location_required:"Vui lòng chọn nơi muốn làm việc",
        				js_resume_objective_job_required:"Vui lòng nhập mục tiêu nghề nghiệp",
        				job_upload_max:"Dung lượng hồ sơ vượt quá giới hạn cho phép (<3 MB). Bạn vui lòng gửi hồ sơ có dung lượng nhỏ hơn.",
        				job_message_update:"Cập nhật thành công",
        				message_common:"Vui lòng thao tác đầy đủ để hoàn thành",
        				job_message_update_resume:"<strong>Thông tin nghề nghiệp</strong> của bạn đã được cập nhật thành công. Vui lòng bấm <strong>Tiếp tục</strong> để đến bước tạo hồ sơ tiếp theo.",
        				js_resume_do_you_want_resume_searchable:"Chúc mừng bạn đã tạo hồ sơ thành công.<br / >Bạn vui lòng chọn <strong>Mặc định hồ sơ</strong> trong trường hợp muốn sử dụng hồ sơ này cho Nhà Tuyển Dụng tìm thấy bạn.<br / >Hoặc chọn <strong>Không mặc định hồ sơ</strong> trong trường hợp bạn không muốn Nhà Tuyển dụng tìm thấy bạn.<br / >(*) Bạn vẫn có thể sử dụng hồ sơ Không mặc định để nộp đơn trực tuyến cho Nhà Tuyển dụng.",
        				job_message_info_hotresume:'Chúc bạn sẽ trở thành chủ nhân của iPad 2, Nokia E72 và nhiều giải thưởng hấp dẫn khác tại chương trình  <strong> <a href="https://www.hotresume.careerbuilder.vn" > HOT Resume </a> </strong>!',
        				js_resume_experience_resume_required:'Vui lòng nhập Kinh nghiệm làm việc.',
        				js_resume_education_resume_required:'Vui lòng nhập mục quá trình học vấn.',
        				js_resume_skill_resume_required:'Vui lòng nhập Kỹ năng làm việc.',
        				job_createresume_input_full_charater:'Bạn đã nhập quá số lượng ký tự cho phép.',
        				job_createresume_input_addtitioninfo2:'ký tự',
        				job_createresume_input_over_charater:'Vui lòng nhập tối đa không quá',
        				job_createresume_input_email_phone_exist:'Vui lòng không nhập email hoặc số điện thoại',
        				js_plaese_resume_exp_company:'Vui lòng nhập tên công ty',
        				js_plaese_resume_exp_position:'Vui lòng nhập Vị trí / Chức danh',
        				js_plaese_resume_exp_city:'js_plaese_resume_exp_city',
        				js_plaese_resume_exp_month_start:'Vui lòng chọn tháng bắt đầu',
        				js_plaese_resume_exp_year_start:'Vui lòng chọn năm bắt đầu',
        				js_plaese_resume_exp_finish_end:'Vui lòng chọn thời gian kết thúc lớn hơn thời gian bắt đầu',
        				js_resume_notcomplete_status:'Chưa hoàn tất',
        				js_resume_complete_status:'Hoàn tất',
        				js_plaese_resume_edu_school:'Vui lòng nhập Trường / khóa học',
        				js_plaese_resume_edu_country:'js_plaese_resume_edu_country',
        				js_plaese_resume_edu_city:'js_plaese_resume_edu_city',
        				js_plaese_resume_edu_graduation:'js_plaese_resume_edu_graduation',
        				js_create_resume_edu_des:'Mô tả chi tiết',
        				js_alert_successful_achievement:'Cập nhật thành công',
        				js_alert_failed_achievement:'js_alert_failed_achievement',
        				js_create_resume_max_des:'Bạn nhập quá số ký tự cho phép nhập',
        				js_create_resume_refer_name:'Vui lòng nhập họ và tên',
        				js_create_resume_refer_phone:'Vui lòng nhập số điện thoại',
        				js_create_resume_refer_company:'Vui lòng nhập tên công ty',
        				js_create_resume_refer_level:'Vui lòng nhập chức vụ',
        				job_createresume_incountry:'Trong nước',
        				job_createresume_outcountry:'Nước ngoài',
        				js_resume_exp_des_required:'Vui lòng nhập mô tả công việc',
        				js_resume_attachfile_select:'Vui lòng chọn file attach',
        				js_resume_attachfile_correct_select:'Chỉ hỗ trợ định dạng <b>*.doc, .*docx, *.pdf</b>',
        				js_resume_attachfile_capacity_select:'Vui lòng chọn file có dung lượng < 3 MB',
        				job_upload_unsuccess:'Vui lòng kiểm tra lại tập đã chọn ứng tuyển. Tập tin bạn vừa tải lên không thành công do sai định dạng. Hệ thống hiện chỉ hỗ trợ các tập tin có đuôi *.doc, *.docx hoặc *.pdf với dung lượng không vượt quá 3MB',
        				member_register_write_lastname:"Họ và tên lót",
        				js_register_max_num_industry:"Bạn chỉ được chọn tối đa 5 ngành nghề",
        				js_register_not_chose_industry:"Bạn chưa chọn ngành để nhận cơ hội nghề nghiệp.",
        				member_register_view_all:"Xem tất cả",
        				member_register_view_collapse:"Thu gọn",
        				message_common:"Thông báo",
        				js_register_bday_required:"Vui lòng nhập ngày tháng năm sinh",
        				js_register_bday_valid:"Ngày tháng năm sai định dạng hoặc năm >2000",
        				js_register_bday_choose:"Chọn ngày tháng năm sinh từ lịch",
        				js_resume_save_login_fail:"Mật khẩu của bạn chưa chính xác.",
        				js_resume_save_choose_resume_required:"Vui lòng chọn hồ sơ bạn muốn thay thế",
        				LANG_ERROR_EMAIL_NULL:"Xin vui lòng nhập email của bạn.",
        				LANG_ERROR_EMAIL_IS_VALID:"Email của bạn không hợp lệ.",
        				LANG_ERROR_EMAIL_UNICODE:"Email không được nhập unicode",
        				job_message_member_inactive: " ",
        				LANG_ERROR_NAME_NULL:"Vui lòng nhập đầy đủ họ và tên của bạn.",
        				ERROR_FULL_NAME_CHARACTER:"Tên đầy đủ không cho phép nhập số và ký tự đặt biệt.",
        				LANG_ERROR_MOBILE_NULL:"Vui lòng nhập số điện thoại liên lạc của bạn",
        				LANG_ERROR_MOBILE:"Không nhập chữ cái và ký tự đặc biệt",
        				LANG_ERROR_GENDER_NULL:"Bạn cần chọn giới tính",
        				member_register_write_firstname:"Tên",
        				member_select:"Lựa chọn",
        				js_resume_resume_title_maxlength:"js_resume_resume_title_maxlength",
        				LANG_ERROR_LASTNAME:"Không nhập số và ký tự đặc biệt",
        				LANG_ERROR_LASTNAME_NULL:"Nhập Họ và Tên Lót của bạn",
        				LANG_ERROR_FIRSTNAME:"Không nhập đầu khoảng trắng, ký tự đặc biệt",
        				LANG_ERROR_FIRSTNAME_NULL:"Nhập Tên của bạn",
        				js_common_contact_information_not_complete:"Vui lòng cập nhật thông tin cá nhân"
        };
        if(typeof language === 'undefined')	var language = language_save_resume;  else	$.extend(language, language_save_resume);
        
        var arrAllCities = {0:'','14':{'1098':'Banteay Meanchey','1096':'Battambang','1092':'Kampong Chhnang','1090':'Kampong Speu','1085':'Kampot','1088':'Kandal','1084':'Kep','1091':'Koh Kong','1093':'Kratie','1104':'Otdar Meanchey','1103':'Pailin','1041':'Phnompenh','1099':'Preah Vihear','1089':'Prey Veng','1097':'Siem Reap','1100':'Stung Treng','1087':'Svay Rieng','1082':'Tbong Khmum'},'13':{'1034':'Chicago','1077':'Florida','1033':'Miami','1039':'San Diego'},'24':{'1079':'Hồng Kông'},'169':{'1318':'Khác'},'19':{'1106':'Attapeu','1107':'Bokeo','1109':'Champasak','1110':'Houaphanh','1111':'Khammouane','1113':'Luang Prabang','1115':'Phongsaly','1059':'Vientiane','1120':'Xiangkhouang'},'9':{'1019':'Kuala Lumpur','1078':'Malaysia'},'21':{'1320':'Yangon'},'2':{'1043':'Hokkaido','1001':'Tokyo','1002':'Yokohama'},'17':{'1055':'Qatar'},'23':{'1073':'Quốc tế'},'10':{'1040':'Singapore'},'16':{'1053':'Kharkiv'},'1':{'4':'Hà Nội','8':'Hồ Chí Minh','76':'An Giang','64':'Bà Rịa - Vũng Tàu','781':'Bạc Liêu','281':'Bắc Cạn','240':'Bắc Giang','241':'Bắc Ninh','75':'Bến Tre','650':'Bình Dương','56':'Bình Định','651':'Bình Phước','62':'Bình Thuận','78':'Cà Mau','26':'Cao Bằng','71':'Cần Thơ','50':'Dak Lak','1042':'Dak Nông','511':'Đà Nẵng','900':'Điện Biên','1064':'Đồng Bằng Sông Cửu Long','61':'Đồng Nai','67':'Đồng Tháp','59':'Gia Lai','19':'Hà Giang','351':'Hà Nam','39':'Hà Tĩnh','320':'Hải Dương','31':'Hải Phòng','780':'Hậu Giang','18':'Hòa Bình','321':'Hưng Yên','901':'Khác','58':'Khánh Hòa','77':'Kiên Giang','60':'Kon Tum','1071':'KV Bắc Trung Bộ','1069':'KV Đông Nam Bộ','1070':'KV Nam Trung Bộ','1072':'KV Tây Nguyên','23':'Lai Châu','25':'Lạng Sơn','20':'Lào Cai','63':'Lâm Đồng','72':'Long An','350':'Nam Định','38':'Nghệ An','30':'Ninh Bình','68':'Ninh Thuận','210':'Phú Thọ','57':'Phú Yên','52':'Quảng Bình','510':'Quảng Nam','55':'Quảng Ngãi','33':'Quảng Ninh','53':'Quảng Trị','79':'Sóc Trăng','22':'Sơn La','66':'Tây Ninh','36':'Thái Bình','280':'Thái Nguyên','37':'Thanh Hóa','54':'Thừa Thiên- Huế','73':'Tiền Giang','1065':'Toàn quốc','74':'Trà Vinh','27':'Tuyên Quang','70':'Vĩnh Long','211':'Vĩnh Phúc','29':'Yên Bái'}};
        
        $(document).ready(function()
        {
        	$('#date_time_picker').DateTimePicker({
        		dateFormat: "dd/MM/yyyy",
        		language:CURRENT_LANGUAGE,
        		dateSeparator:"/",
        		showHeader:false,
        	});
        	$('#linkback').click(function(e) {
        		e.preventDefault();
        		$('#QuickUpload_Step2').hide();
        		$('#QuickUpload_Step1').show();
        		$('html,body').animate({scrollTop: $("#QuickUpload_Step1").offset().top},'slow');
        	});
        	$('#slcountry').change(function()
        	{
        		var opt_city = arrAllCities[$('#slcountry').val()];
        		$(".error_sldistrict").html('');
        		if (typeof opt_city === "undefined") {
        			$('#slcity option').remove();
        			$('#sldistrict option').remove();
        			$('#slcity').prop('disabled', true);
        			$('#sldistrict').prop('disabled', true);
        		}else{
        			$('#slcity').prop('disabled', false);
        			$('#sldistrict').prop('disabled', false);
        			$('#slcity option').remove();
        			$('#sldistrict option').remove();
        			$.each(opt_city, function(val, text) {
        				$('#slcity').append('<option value="'+val+'">' + text + '</option>');
        			});
        			var sl_country_id  = $('#slcountry').val();
        			if(sl_country_id == 1){
        				var sl_city_id  = $('#slcity').val();
        				var str = '';
        				for(k in districts) {
        					if(sl_city_id == districts[k][1]){
        						str += '<option value="'+districts[k][0]+'">'+districts[k][2]+'</option>';
        					}
        				}
        				$('#sldistrict option').remove();
        				$('#sldistrict').append('<option value="">' + language.member_select + '</option>');
        				if(str !== ''){
        					$('#sldistrict').append(str);
        				}else{
        					$('#sldistrict').prop('disabled', true);
        				}
        			}else{
        				$('#sldistrict option').remove();
        				$('#sldistrict').prop('disabled', true);
        			}
        		}
        	});
        
        	var sl_country_id  = $('#slcountry').val();
        	var sl_city_id  = 0;
        	var sl_district_id  = 0;
        
        	var opt_city = arrAllCities[sl_country_id];
        	if (typeof opt_city === "undefined") {
        		$('#slcity option').remove();
        		$('#slcity').prop('disabled', true);
        		$('#sldistrict option').remove();
        		$('#sldistrict').prop('disabled', true);
        		$(".error_sldistrict").html('');
        	}else{
        		$(".error_sldistrict").html('');
        		$('#slcity').prop('disabled', false);
        		$('#slcity option').remove();
        		$('#sldistrict').prop('disabled', false);
        		$('#sldistrict option').remove();
        		$.each(opt_city, function(val, text) {
        			$('#slcity').append('<option value="'+val+'">' + text + '</option>');
        		});
        
        		if(sl_country_id == 1){
        			if(sl_city_id > 0){
        				$("#slcity option[value='"+sl_city_id+"']").attr('selected', 'selected');
        			}else{
        				var sl_city_id  = $('#slcity').val();
        			}
        			var str = '';
        			for(k in districts) {
        				if(sl_city_id == districts[k][1]){
        					str += '<option value="'+districts[k][0]+'">'+districts[k][2]+'</option>';
        				}
        			}
        
        			$('#sldistrict option').remove();
        			$(".error_sldistrict").html('');
        			$('#sldistrict').append('<option value="">' + language.member_select + '</option>');
        			if(str !== ''){
        				$('#sldistrict').append(str);
        				$("#sldistrict option[value='"+sl_district_id+"']").attr('selected', 'selected');
        			}else{
        				$('#sldistrict').prop('disabled', true);
        			}
        
        		}else{
        			$('#sldistrict option').remove();
        			$('#sldistrict').append('<option value="">' + language.member_select + '</option>');
        			$('#sldistrict').prop('disabled', true);
        		}
        
        	}
        
        	var rowCountChoice = $('#table_language_choice tr').length;
        	var rowCount 	   = $('#table_language tr').length;
        	if(rowCountChoice+rowCount < 10){
        		$('.addlangauge').click(
        			function(){
        				$(this).parent('div').html('<span class="ic_remove"></span><span class="addlangauge"><a href="javascript:void(0);" onclick="return RemoveRow(this);">'+language.js_resume_delete2+'</a></span>');
        			}
        		);
        	}
        
        	$("#salary_from, #salary_to").ForceNumericOnly();
        	$("#year_experience").ForceNumericOnly();
        	$("#salary_from").blur(function(){
        		if($('#salary_unit option:selected').val() == 'usd')
        			$(this).formatCurrency({digitGroupSymbol:'.'});
        		else
        			$(this).formatCurrency();
        		});
        
        	$("#salary_to").blur(function(){
        		if($('#salary_unit option:selected').val() == 'usd')
        			$(this).formatCurrency({digitGroupSymbol:'.'});
        		else
        			$(this).formatCurrency();
        	});
        
        	$('#salary_unit').change(function()
        	{
        		$('#salary_from').val('');
        		$('#salary_to').val('');
        
        		if($(this).val() == 'ltt' || $(this).val() == 'lct'){
        			$('#salary_from').prop('disabled', true);
        			$('#salary_to').prop('disabled', true);
        			return false;
        		}else{
        			$('#salary_from').prop('disabled', false);
        			$('#salary_to').prop('disabled', false);
        		}
        	});
        
        	$("#select_industry_db").chosen({ max_selected_options: 3 }).change( function() {
        		if($("#select_industry_db").val().length > 0)
        			$(".error_select_industry_db_1").html('');
        	});
        
        	$('.ui-multiselect-optgroup-label').click(function() {return false;});
        	$.validator.addMethod("exprequire", function(val, element) {
        		if($.trim(val) == '' && !($('#cboExper').is(':checked')))
        			return false;
        		return true;
        	}, language.js_resume_exp_select);
        
        	$('.fileContainer input[type=file]').css({'cursor':'pointer','display': 'block','filter': 'alpha(opacity=0)', 'opacity': '0', 'position':'absolute', 'right': '0', 'text-align': 'right', 'top': '-5px','height':'auto','border-width': '0 0 10px 200px'});
        
        
        });
        function show_frmRefer(rref_id){
        	var email=$('#email').val();
        	if(typeof email==='undefined')
        		email="";
        	$.fancybox.open({
        		'src'  : PATH_KIEMVIEC+'jobseekers/myresume/referform?resume_id='+resume_id+'&rref_id='+rref_id+'&email='+email,
        		'type' : 'ajax'
        	});
        }
        function deleteRefer(refer_id) {
        	var r = confirm(language.job_message_delete_refer);
        	if (r == true) {
        		var email = $('#email').val();
        		if(typeof email === 'undefined')
        			email = "";
        		$.ajax({
        			type: "POST",
        			url: PATH_KIEMVIEC + 'jobseekers/myresume/deleterefer',
        			data: 'resume_id=' + resume_id + '&refer_id=' + refer_id + '&email=' + email,
        			cache: false,
        			beforeSend: function () {
        				$('#referList_' + refer_id).animate({
        					opacity: 0.35
        				}, "slow");
        			},
        			success: function (data) {
        				if (parseInt(data) == 1) {
        					numListRefer--;
        					if ($("#list_refer div.col-md-6").length == 0) {
        						$("#list_refer").hide();
        					}
        					$('#referList_' + refer_id).slideUp('slow', function () {
        						$('#referList_' + refer_id).remove();
        					});
        				} else {
        					show_noti(2, language.job_message_error);
        				}
        			}
        		});
        	}
        }
        $('#cboExper').click(function(){
        	if($('#cboExper').is(':checked'))
        	{
        		$('#year_experience').attr("disabled", "disabled");
        		$('#year_experience').val("");
        		$('.error_year_experience').html('');
        	}else{
        		$('#year_experience').attr("disabled", false);
        	}
        });
        function loadDistrictProfile(location_id)
        {
        	var str = '';
        	for(k in districts) {
        		if(location_id == districts[k][1]){
        			str += '<option value="'+districts[k][0]+'">'+districts[k][2]+'</option>';
        		}
        	}
        	$('#sldistrict option').remove();
        	if(str != ''){
        		$('#sldistrict').prop('disabled', false);
        		$('#sldistrict').append(str);
        	}
        	else
        		$('#sldistrict').prop('disabled', true);
        }
        function updateAccount(){
        	if($("#form_editaccount").valid()){
        		$.ajax({
        			type:"POST",
        			url:PATH_KIEMVIEC+'jobseekers/member/updateaccount',
        			dataType:'JSON',
        			data:$('#form_editaccount').serialize(),
        			success:function(rs){
        				if(rs==1){
        					LoadInfoAccount();
        					checkCompleteAccount();
        					$.fancybox.close();
        				}else{
        					show_noti(language.js_resume_action_not_success,language.message_common);
        				}
        			}
        		});
        	}
        }
        function changLanguage(e){
        	if(e.value == '')
        		$('#add_language').hide();
        	else
        		$('#add_language').show();
        }
        
        function ajaxOnlyFile(e)
        {
        	if(e.value != ''){
        		$('#dropbox_button').attr('disabled', 'disabled');
        		$('#upload_text1').html(e.value);
        		$(".error_attach_file").html('');
        		$("#uploadFile_file").addClass('active');
        		$("#uploadFile_file input").val(e.value.replace(/.*(\/|\\)/, ''));
        	}
        }
        function removefile(e)
        {
        	$('#dropbox_button').prop('disabled', false);
        	$('#attach_file').prop('disabled', false);
        	$('#upload_text1').html('');
        	$("#uploadFile_file").removeClass('active');
        	$("#uploadFile_file input").val('');
        	$('#attach_file').val('');
        	$("#dropbox_file").val('');
        	$("#dfile_title").val('');
        	$("#dfile_size").val('');
        }
        function removeAscent (str) {
          if (str === null || str === undefined) return str;
          str = str.toLowerCase();
          str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
          str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
          str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
          str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
          str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
          str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
          str = str.replace(/đ/g, "d");
          return str;
        }
        function checkValidForm(isCont)
        {
        	$("#step_active").val(isCont);
        	var sel_location = $('select[name="LOCATION_ID[]"]');
        	sel_location.children('option').each(function(){
        		if($(this).is(':selected') && $(this).val() != ''){
        			$(this).removeAttr('disabled');
        		}
        	});
        
        	$('#salary_from').val($('#salary_from').val().replace(/[^0-9\s]/gi, ''));
        	if($('#salary_from').val() == 0) $('#salary_from').val('');
        	$('#salary_to').val($('#salary_to').val().replace(/[^0-9\s]/gi, ''));
        	if($('#salary_to').val() == 0) $('#salary_to').val('');
        
        	$.validator.addMethod('checkSalary', function(value) {
        		var unit_valid = $('#salary_unit option:selected').val();
        		if(unit_valid == 'vnd' || unit_valid == 'usd'){
        			var salary_from_valid = $('#salary_from').val();
        			var salary_to_valid = $('#salary_to').val();
        
        			if(salary_from_valid == '' && salary_to_valid == '') return false;
        			if(parseInt(salary_to_valid) < parseInt(salary_from_valid) && parseInt(salary_to_valid) > 0)
        				return false;
        
        			if(isNaN(parseInt(salary_to_valid)))
        				salary_to_valid = 0;
        			if(isNaN(parseInt(salary_from_valid)))
        				salary_from_valid = 0;
        
        			var salary_max = parseInt(salary_to_valid)>parseInt(salary_from_valid)?salary_to_valid:salary_from_valid;
        			var salary_min = parseInt(salary_from_valid)>0 ? salary_from_valid: salary_to_valid;
        
        
        			if(unit_valid == 'usd' && parseInt(salary_max) >= 100000 ) return false;
        			if(unit_valid == 'usd' && parseInt(salary_min) < 25 ) return false;
        			if(unit_valid == 'vnd' && parseInt(salary_min) < 500000 ) return false;
        			if(unit_valid == 'vnd' && parseInt(salary_max) >= 999000000 ) return false;
        
        		}
        		return true;
        	 }, language.LANG_ERROR_RESUME_SALARY_FROM_TO);
        
        	$.validator.addMethod('checkemailinactive',function(value){
        		var email = $.trim($('#email').val());
        		var result = true;
        		$.ajax({
        			async:false,
        			url:PATH_KIEMVIEC+"jobseekers/jobs/checkemailinactive",
        			data:{'email':email},
        			success:function(rs){
        				if(rs == 0)
        					result = false;
        			}
        		});
        		return result;
        	},language.message_common);
        
        	$.validator.addMethod('checkUnicode', function(value, element) {
                return (!/\s/g.test(value) && !/[ạáàảãâậấầẩẫăặắằẳẫẠÁÀẢÃÂẬẤẦẨẪĂẶẮẰẲẪêẹéèẻẽếềểễệÊẸÉÈẺẼẾỀỂỄỆọộổỗốồôóòỏõơợớờởỡỌỘỔỖỐỒÔÓÒỎÕƠỢỚỜỞỠụưứừửữựúùủũỤƯỨỪỬỮỰÚÙỦŨịíìỉĩỊÍÌỈĨỵýỳỷỹỴÝỲỶỸđĐ]/.test(value));
          	}, language.message_common);
        
        	$.validator.addMethod('check_resume_type', function (value) {
        		var checkResumeType_1 = $('#chkResumeType_1:checked').val();
        		var checkResumeType_2 = $('#chkResumeType_2:checked').val();
        		var checkResumeType_3 = $('#chkResumeType_3:checked').val();
        		var checkResumeType_4 = $('#chkResumeType_4:checked').val();
        		if(checkResumeType_1 != 1 && checkResumeType_2 != 2 && checkResumeType_3 != 3 && checkResumeType_4 != 4)
        			return false;
        		else
        			return true;
        	},"");
        
        	$.validator.addMethod('requiredlastname',function(value){
        		return ($('#lastname').val() != language.member_register_write_lastname)?true:false;
        	}, language.message_common);
        	$.validator.addMethod('requiredfirstname',function(value){
        		if($('#lastname').val() == language.member_register_write_lastname)
        			return true;
        		return ($('#firstname').val() != language.member_register_write_firstname)?true:false;
        	}, language.message_common);
        
        
        	$.validator.addMethod('check_exist_file', function (value) {
        		var aLength 	= $('#attach_file').val();
        		var dLength 	= $('#dropbox_file').val();
        		if(aLength != '' || dLength != '')
        			return true;
        		else
        			return false;
        
        	}, "");
        
        	$.validator.addMethod('check_radio_gender', function (value) {
        		if ($("#gender_m").prop("checked")) {
        			return true;
        		}else if($("#gender_f").prop("checked")) {
        			return true;
        		}
        		return false;
        
        	}, "");
        
        	$.validator.addMethod('check_industry_select', function (value) {
        		if($("#select_industry_db").val().length > 0)
        			return true;
        		return false;
        	}, language.js_resume_industry_required);
        
        	$.validator.addMethod('check_level_id', function (value) {
        		if($("#level_id").val() > 0)
        			return true;
        		return false;
        	}, language.js_resume_level_required);
        
            $.validator.addMethod("noCharsetSpecial", function (value, element) {
            	var regNoChaSpec = /^[a-zA-Z0-9\s]+$/;
            	if (!regNoChaSpec.test(removeAscent(value))) {
        		    return false;
        		}
        		return true;
            });
            $.validator.addMethod("phoneNumber", function (value, element) {
            	var regNoChaSpec = /^[0-9]{1,12}$/;
            	if (!regNoChaSpec.test(value)) {
        		    return false;
        		}
        		return true;
            });
        
        	if($("#frmResumeDetail").validate({
        		ignore: ":hidden:not(.chosen-select-max-three,#attach_file,#dropbox_file,:radio,:checkbox),:disabled",
        		onkeyup: false,
        		rules: {
        			attach_file:{check_exist_file:true,accept: "doc|DOC|docx|DOCX|pdf|PDF"},
        			resume_title:{required: true,maxlength:500},
        			select_location_db:{required: true},
        			email:{required:true, checkUnicode: true, email:true,isemail:true,checkemailinactive:true},
        			gender:{check_radio_gender: true},
        			address:{required: true, maxlength: 200},
        
        			lastname:{required:true, noCharsetSpecial: true},
        			firstname:{required:true, noCharsetSpecial: true},
        
        			sldistrict:{required: true},
        			chkResumeType_1:{check_resume_type:true},
        
        			mobile:{required: true,phoneNumber: true},
        
        			birthday:{required: true},
        			salary_unit:{checkSalary:true},
        			level_id:{check_level_id: true},
        			year_experience:{exprequire:true, max:55},
        			'INDUSTRY_ID[]':{check_industry_select: true},
        			'LOCATION_ID[]':{required: true}
        		},
        		errorPlacement: function(error, element){
        			var name = element.attr('name');
        
        			if(name == 'LOCATION_ID[]'){
        				$(".error_location_id").html(error.html());
        			}else if(name == 'INDUSTRY_ID[]'){
        				$(".error_select_industry_db_1").html(error.html());
        			}else{
        				var errorSelector = '.error_'+name;
        				var $element = $(errorSelector);
        				$(errorSelector).html(error.html()).show();
        			}
        		},
        		success: function (element) {
        			$('.error_' + element[0].htmlFor).hide();
        			element.remove();
        		},
        		messages: {
        			levelcurrent_id:{
        				required: language.js_resume_currentlevel_select
        			},
        			degree:{
        				required: language.js_resume_degree_select
        			},
        			resume_title:{
        				required:language.js_resume_resume_title_required,
        				maxlength:language.js_resume_resume_title_maxlength
        			},
        			select_location_db:{
        				required:language.js_resume_location_required
        			},
        			chkResumeType_1:{
        				check_resume_type:language.js_resume_workingtype_select
        			},
        			email: {
        				required: language.LANG_ERROR_EMAIL_NULL,
        				checkemailinactive:language.job_message_member_inactive,
        				checkUnicode: language.LANG_ERROR_EMAIL_UNICODE,
        				email: language.LANG_ERROR_EMAIL_IS_VALID,
        				isemail:language.LANG_ERROR_EMAIL_IS_VALID
        			},
        			lastname: {
        				required: language.LANG_ERROR_LASTNAME_NULL,
        				noCharsetSpecial: language.LANG_ERROR_LASTNAME
        			},
        			firstname: {
        				required: language.LANG_ERROR_FIRSTNAME_NULL,
        				noCharsetSpecial: language.LANG_ERROR_FIRSTNAME
        			},
        			mobile: {
        				required: language.LANG_ERROR_MOBILE_NULL,
        				phoneNumber: language.LANG_ERROR_MOBILE
        			},
        			gender: {check_radio_gender: language.LANG_ERROR_GENDER_NULL},
        			birthday: {required: language.js_register_bday_required},
        			attach_file:{check_exist_file:language.js_resume_attachfile_select}
        		},
        	  	invalidHandler: function(form, validator) {
        			var errors = validator.numberOfInvalids();
        			if (errors  && $("#step_active").val() == 1)
        			{
        				switch(validator.errorList[0].element.getAttribute("name"))
        				{
        					case 'INDUSTRY_ID[]':
        						$('html,body').animate({scrollTop: $(".error_select_industry_db_1").offset().top},'slow');
        						validator.resetForm();
        						break;
        					case 'LOCATION_ID[]':
        						$('html,body').animate({scrollTop: $("#error_location").offset().top},'slow');
        						validator.resetForm();
        						break;
        					default:
        						validator.errorList[0].element.focus();
        						$('html,body').animate({scrollTop: $('[name="'+validator.errorList[0].element.name+'"]').offset().top - 100},'slow');
        						break;
        				}
        			}else{
        				validator.errorList[0].element.focus();
        				$('html,body').animate({scrollTop: $('[name="'+validator.errorList[0].element.name+'"]').offset().top - 100},'slow');
        			}
        		}
        	}).form() == false) return false;
        
        	func_strip_tags_input($('#resume_title'));
        	func_strip_tags_input($('#firstname'));
        	func_strip_tags_input($('#lastname'));
        	func_strip_tags_input($('#mobile'));
        
        	if(isCont == 1){
        		if($('#private_info').val() == 1){
        			$('#QuickUpload_Step1').hide();
        			$('#QuickUpload_Step2').show();
        			$('html,body').animate({scrollTop: $("#QuickUpload_Step2").offset().top},'slow');
        			$(".error_select_industry_db_1").html('');
        
        			var chk_email_exist = false;
        			$.ajax({
        				type: "POST",
        				async:false,
        				url: PATH_KIEMVIEC + "jobseekers/member/emailexist",data: 'email='+$.trim($('#email').val()),
        				success: function (data) {
        					if (data > 0) {
        						chk_email_exist = true;
        					}
        				}
        			});
        			smartech('contact', '', {
        				'pk^email': $("#email").val(),
        				'FIRST_NAME': $("#firstname").val(),
        				'LAST_NAME': $("#lastname").val(),
        				'EXISTING': chk_email_exist
        			});
        			smartech('identify', $("#email").val());
        			return false;
        		}else{
        			show_noti(2, language.js_common_contact_information_not_complete, language.message_common);
        			return false;
        		}
        	}
        
        	$.ajax({
        		type: "POST",
        		url: PATH_KIEMVIEC+'jobseekers/member/registerquick',
        		data: 'email=' + $('#email').val() + '&firstname=' + $('#firstname').val() + '&lastname=' +  $('#lastname').val(),
        		beforeSend:function(){$("#loading").show();},
        		complete:function(){$("#loading").hide();},
        		success: function(result)
        		{
        			var obj = $.parseJSON(result);
        			var popup_resume = obj.popup;
        			$('#popup_resume').val(popup_resume);
        			var exist_member = obj.exist_member;
        			if($('#popup_resume').val() == 1 && obj.arrResume && $('#lstResume li').length == 0){
        				$('#lstResume').html('');
        				$.each(obj.arrResume, function(val, key) {
        					if(key.RESUME_KIND == 0)
        						$('#lstResume').append('<div class="form-group form-checkbox"><input type="radio" id="hide-infor-'+key.RESUME_ID+'" name="resume" disabled ><label for="hide-infor-'+key.RESUME_ID+'">'+key.RESUME_HEADLINE_VN+'</label></div>');
        					else
        						$('#lstResume').append('<div class="form-group form-checkbox"><input type="radio" id="hide-infor-'+key.RESUME_ID+'" name="resume" value="'+key.RESUME_ID+'" ><label for="hide-infor-'+key.RESUME_ID+'">'+key.RESUME_HEADLINE_VN+'</label></div>');
        				});
        			}
        			if(obj.member_id > 0){
        				var m_id = obj.member_id
        				$('#member_id').val(m_id);
        			}else{
        				$('#member_id').val(0);
        			}
        
        			if(exist_member == 1 && member_id < 0){
        				showboxupdateinfor();
        			}else if(exist_member == 1 && member_id > 0 && $('#private_info').val() != 1){
        				show_noti(2, language.js_common_contact_information_not_complete, language.message_common);
        				return false;
        			}else{
        				if(popup_resume == 1){
        					showboxchooseresume();
        				}else{
        					if($('#member_id').val()>0){
        						submitForm();
        					}
        				}
        			}
        		},
        		error: function (data, status, e)
        		{
        			alert(e);
        		}
        	});
        	return false;
        }
        
        function submitForm()
        {
        	if($('#dropbox_file').val() != ''){
        		var path = PATH_KIEMVIEC+'jobseekers/myresume/uploadresumedropbox';
        		$.ajax({
        			type: "POST",
        			url: path,
        			data: 'dropbox_file=' + $('#dropbox_file').val() + '&dfile_title=' + $('#dfile_title').val() + '&dfile_size=' + $('#dfile_size').val(),
        			beforeSend:function(){$("#loading").show();},
        			complete:function(){$("#loading").hide();},
        			success: function(data)
        			{
        				var obj = $.parseJSON(data);
        				if(obj.msg == '' || data.msg == 'fail' || data.msg == 'notexists' || data.msg == 'convertfail'){
        					show_noti(2, language.job_upload_unsuccess, language.message_common,	'error');
        					return false;
        				}else if(obj.msg == 'max'){
        					show_noti(2, language.job_upload_max, language.message_common,	'error');
        					return false;
        				}else if(obj.msg == 'success'){
        					$('#resume_path').val(obj.path_root_file);
        					$('#resume_path_convert').val(obj.path_convert_file);
        					$('#is_change').val(1);
        					$('#btn_SaveComplete').attr('disabled', 'disabled');
        					$('#frmResumeDetail').submit();
        				}
        			},
        			error: function (data, status, e)
        			{
        				alert(e);
        			}
        		});
        		return false;
        	}else if($('#attach_file').val() != ''){
        		var data = new FormData();
        		data.append('attach_file', $('#attach_file')[0].files[0]);
        
        		$.ajax({
        			url:PATH_KIEMVIEC+'jobseekers/myresume/uploadresume',
        			secureuri:false,
        			type: 'POST',
        			data: data,
        			enctype: 'multipart/form-data',
        			processData: false,  // tell jQuery not to process the data
        			contentType: false,   // tell jQuery not to set contentType
        			dataType:'json',
        		})
        		.done(function (data){
        			if(data.msg == '' || data.msg == 'fail' || data.msg == 'notexists' || data.msg == 'convertfail'){
        				show_noti(2, language.job_upload_unsuccess, language.message_common);
        				return false;
        			}else if(data.msg == 'max'){
        				show_noti(2, language.job_upload_max, language.message_common);
        				return false;
        			}else if(data.msg == 'success'){
        				$('#resume_path').val(data.path_root_file);
        				$('#resume_path_convert').val(data.path_convert_file);
        				$('#is_change').val(1);
        				$('#btn_SaveComplete').attr('disabled', 'disabled');
        				$('#frmResumeDetail').submit();
        			}
        		});
        
        		return false;
        	}
        }
        
    </script>
    <div class="back-drop"></div>
</main>
@endsection