
@extends('frontend.layout.app')

@push('style')

    <style>
        .widget-24 {
            padding: 30px;
            margin-top: 40px;
        }
        .db-my-profile .menu-shortchut.active {
            z-index: 11;
            position: -webkit-sticky;
            position: sticky;
        }
        .material-icons {
            word-wrap: normal;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-family: 'Material Icons';
            font-size: 24px;
            font-style: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            direction: ltr;
            text-transform: none;
            white-space: nowrap;
        }

        .widget .widget-head .cb-title-h3 .right-action {
            justify-content: flex-end;
        }

        .widget .widget-head .cb-title-h3 {
            width: 100%;
            justify-content: space-between;
        }

        .widget-24 .widget-head {
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .widget .widget-head .link-edit a {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            border: 1px solid #09a0db;
            border-radius: 20px;
            text-decoration: none;
        }
    </style>

@endpush

@section('content') 


<div class="content-inner">
    <div class="container-fluid">
        <div class="db-my-profile">
            <div class="row">
                <div class="col-lg-8 col-xl-9 main-widget">
                    <div class="widget widget-2 widget-11" id="widget-11">
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
                                            <div class="image img-result hide"><img id="img_mem_avatar" class="cropped" src="./img/dash-board/1.png" alt=""></div>
                                        </div>
                                        <div class="mobile-show">
                                            <div class="cb-name">
                                                <h2>Dao Cuong</h2>
                                            </div>
                                            <div class="information">
                                                <div class="assistant" id="titleresume_16167824">Chưa cập nhật</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action-profile">
                                        <ul>
                                            <li class="edit-pro">
                                                <input class="hidden" onchange="return ajaxFileUpload();" type="file" id="fileAvatar" name="fileAvatar">
                                                <a href="javascript:void(0);" onclick="choose_file();" id="upload-image"><em class="material-icons">add_photo_alternate</em><span>Tải hình ảnh</span></a> 
                                            </li>
                                            <li class="view-pro"><a href="javascript:void(0);" onclick="removeAvarta();"> <em class="material-icons">highlight_off</em><span>Xóa hình ảnh</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-9">
                                    <div class="cb-name">
                                        <h2 id="section_name">{{ Auth::user()->name }}</h2>
                                    </div>
                                    <div class="information">
                                        <div class="assistant">Chưa cập nhật</div>
                                    </div>
                                    <div id="complete_section">
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
                                        <div class="searchable-cv-widget status-area attached-status-area">
                                            <div class="switch-status group_searchable" id="cv_searchable_16167824" data-id="16167824" data-complete="0">
                                                <a href="javascript:void(0);" data-type="2" class="lock active"><em class="mdi mdi-lock"></em>Khóa</a>
                                                <a href="javascript:void(0);" data-type="1" class="public "><em class="mdi mdi-web"></em>Công khai</a>
                                                <a href="javascript:void(0);" data-type="3" class="flash "><em class="mdi mdi-flash"></em>Khẩn cấp</a>
                                            </div>
                                            <p class="text-notes text-notes-2 d-block">
                                                CV của bạn đang ở trạng thái "Khóa", NTD sẽ không tìm thấy CV của bạn.
                                            </p>
                                            <p class="text-notes text-notes-1 d-none">
                                                CV của bạn đang ở trạng thái "Công khai", NTD bây giờ đã có thể tìm thấy CV của bạn.
                                            </p>
                                            <p class="text-notes text-notes-3 d-none">
                                                CV của bạn đang ở trạng thái "Khẩn cấp", NTD sẽ tìm thấy CV của bạn với hashtag #Opentonewjob.
                                            </p>
                                        </div>
                                        <div class="check-box">
                                            <div class="form-group form-check-box job-alerts">
                                                <label for="cv_jobalert_16167824">Nhận thông báo việc làm
                                                <input type="checkbox" name="cv_jobalert_16167824" id="cv_jobalert_16167824" value="16167824" disabled="disabled" onclick="updateCvJobalert(this);">
                                                <span class="slider"></span> </label>
                                            </div>
                                        </div>
                                        <script>
                                            var intComCBProfile = 0;
                                            $(document).ready(function(){
                                                if(intComCBProfile >=2)
                                                    $('#btn_download').css('display', 'block');
                                                else
                                                    $('#btn_download').css('display', 'none');
                                                $('.list-tag li a').on('click', function (event) {
                                                    event.preventDefault();
                                                    $("html, body").animate({
                                                        scrollTop: $($(this).data("href")).offset().top - $('header').height() - 40
                                                    }, 1000)
                                                });
                                            
                                            
                                                $(".group_searchable a").on('click', function(event) {
                                                    event.preventDefault();
                                                    var objThis = $(this);
                                                    var objParent = objThis.closest('div.group_searchable');
                                            
                                                    var rs_id = objParent.data('id');
                                                    var rs_complete = objParent.data('complete');
                                                    var rs_status = parseInt(objThis.data('type'));
                                                    console.log(rs_complete);
                                                    if(rs_complete == 0){
                                                        show_noti(2,language.js_resume_can_not_searchable);
                                                        return false;
                                                    }
                                            
                                                    var resume_title        = $("#titleresume_"+rs_id).html();
                                            
                                                    if(rs_status == 3){
                                                        $.alerts.okButton       = language.js_default_resume_urgentjob;
                                                        $.alerts.cancelButton   = language.js_none_default_resume_urgentjob;
                                                        jConfirm(language.js_resume_urgentjob_searchable1+' <strong>"' + resume_title + '"</strong> '+ language.js_resume_urgentjob_searchable2, language.message_common, function(r){
                                                            if(r == true){
                                                                resume_active = 3;
                                                                intResult = updateStatusResume(rs_id, resume_active);
                                                                if(intResult == 1){
                                                                    active_searchable(objParent, 'flash');
                                                                    show_noti(1,language.js_resume_urgentjob_success);
                                                                }else{
                                                                    show_noti(2,language.js_resume_urgentjob_unsuccess);
                                                                }
                                                            }
                                                        });
                                                        $.alerts.okButton       = language.okButton;
                                                        $.alerts.cancelButton   = language.cancelButton;
                                                    }else if(rs_status == 1){
                                                        $.alerts.okButton       = language.js_default_resume;
                                                        $.alerts.cancelButton   = language.js_none_default_resume;
                                                        jConfirm(language.js_resume_active_searchable1+' <strong>"' + resume_title + '"</strong> '+ language.js_resume_active_searchable2, language.message_common, function(r){
                                                            if(r == true){
                                                                resume_active = 1;
                                                                intResult = updateStatusResume(rs_id, resume_active);
                                                                if(intResult == 1){
                                                                    active_searchable(objParent, 'public');
                                                                    show_noti(1,language.js_resume_searchable_success);
                                                                }else{
                                                                    show_noti(2,language.js_resume_active_searchable_unsuccess);
                                                                }
                                                            }
                                                        });
                                                        $.alerts.okButton       = language.okButton;
                                                        $.alerts.cancelButton   = language.cancelButton;
                                                    }else{
                                                        $.alerts.okButton = language.js_default_resume_inactive;
                                                        $.alerts.cancelButton = language.js_none_default_resume_inactive;
                                                        jConfirm(language.js_resume_inactive_searchable1+' <strong>"' + resume_title + '"</strong> '+language.js_resume_inactive_searchable2, language.message_common, function(r){
                                                            if(r == true){
                                                                resume_active = 2;
                                                                updateStatusResume(rs_id, resume_active);
                                                                show_noti(1,language.js_resume_unsearchable_success);
                                                                active_searchable(objParent, 'lock');
                                                            }
                                                        });
                                                        $.alerts.okButton       = language.okButton;
                                                        $.alerts.cancelButton   = language.cancelButton;
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-24" id="t-resume-section">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i14.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Tiêu đề hồ sơ *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-t-resume')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-edit"><a href="javascript:void(0)" onclick="openTipSlide('title');"> <em class="material-icons">create</em><span>Chỉnh sửa</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Tiêu đề hồ sơ</p>
                                <a href="javascript:void(0)" onclick="editResumeTitle();"><em class="mdi mdi-plus-circle"></em><span>Chỉnh sửa</span></a>
                            </div>
                            <input type="hidden" id="title_hidden_value" value="">
                        </div>
                    </div>
                    <div class="widget widget-13" id="personalinfo-section">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i2.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Thông tin cá nhân *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-personalinfo')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-edit"><a href="javascript:void(0);" onclick="openTipSlide('tip-personalinfo-modal');"> <em class="material-icons">create</em><span>Chỉnh sửa</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="table">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Họ và Tên Lót</td>
                                            <td>Dao</td>
                                        </tr>
                                        <tr>
                                            <td>Tên</td>
                                            <td>Cuong</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>chiensi26045@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>Quốc tịch</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tình trạng hôn nhân</td>
                                            <td>Độc thân</td>
                                        </tr>
                                        <tr>
                                            <td>Quốc gia</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-14" id="widget-14">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i3.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Mục tiêu nghề nghiệp</h3>
                                        <div class="status">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-objective')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-edit"><a href="javascript:void(0);" onclick="openTipSlide('tip-objective-modal');"> <em class="material-icons">create</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Vui lòng thêm Mục tiêu nghề nghiệp</p>
                                <a href="javascript:;" onclick="editResumeObjective();"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a> 
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="content">
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('.widget-14 .widget-body .list-action .view-more a').on('click', function () {
                                $('.widget-14 .widget-body .content').addClass('active');
                                $('.widget-14 .widget-body .list-action .view-less').css('display', 'block');
                                $('.widget-14 .widget-body .list-action .view-more').css('display', 'none');
                            });
                            $('.widget-14 .widget-body .list-action .view-less a').on('click', function () {
                                $('.widget-14 .widget-body .content').removeClass('active');
                                $('.widget-14 .widget-body .list-action .view-less').css('display', 'none');
                                $('.widget-14 .widget-body .list-action .view-more').css('display', 'block');
                            });
                        </script>
                    </div>
                    <div class="widget widget-18" id="widget-18">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i5.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Thông tin nghề nghiệp *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-desired-job')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-edit"><a title="Chỉnh sửa" href="javascript:void(0)" onclick="editDesiredJob();"> <em class="material-icons">create</em><span>Chỉnh sửa</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Mức lương</td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hình thức làm việc</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Ngành nghề</td>
                                        <td>
                                            <ul>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nơi làm việc</td>
                                        <td>
                                            <ul>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <style>
                            #desired-form .chosen-container .chosen-results{ max-height: 100px!important;}
                        </style>
                    </div>
                    <div class="widget widget-15" id="widget-15">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i4.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Kinh nghiệm làm việc *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-experience')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0);" onclick="show_frmExperience(0);" title="Thêm mới"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Bạn hãy thêm kinh nghiệp làm việc của mình để nhà tuyển dụng tham khảo</p>
                                <a href="javascript:void(0);" onclick="show_frmExperience(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a> 
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="experience">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Số năm kinh nghiệm</td>
                                            <td id="txt-experience">Chưa có kinh nghiệm</td>
                                            <td>
                                                <div class="link-edit"><a href="javascript:void(0);" onclick="editFrmExperience();"> <em class="material-icons">create</em></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cấp bậc hiện tại</td>
                                            <td id="cbprofile_levelpresent">Chưa cập nhật</td>
                                            <td>
                                                <div class="link-edit"><a href="javascript:void(0);" onclick="editFrmExperience();"> <em class="material-icons">create</em></a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                widget15Toggle();
                              
                            });
                        </script>
                    </div>
                    <div class="widget widget-16" id="widget-16">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i7.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Học vấn *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-education')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0)" onclick="show_frmEducation(0);" title="Thêm mới"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Nhập thông tin học vấn của bạn</p>
                                <a href="javascript:void(0)" onclick="show_frmEducation(0);" title="Thêm mới"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a> 
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="experience">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Bằng cấp cao nhất</td>
                                            <td>
                                                <div class="box-edit-degree" id="cbprofile_degree_name">
                                                    Chưa cập nhật                   
                                                    <div class="link-edit link-highest-degree"><a href="javascript:void(0);"> <em class="material-icons">create</em></a></div>
                                                </div>
                                                <div class="highest-degree">
                                                    <div class="select-group">
                                                        <form id="resume-degree-form">
                                                            <select name="degree" id="degree">
                                                                <option value="">Chọn</option>
                                                                <option value="0">Chưa tốt nghiệp</option>
                                                                <option value="1">Trung học</option>
                                                                <option value="2">Trung cấp</option>
                                                                <option value="3">Cao đẳng</option>
                                                                <option value="4">Đại học</option>
                                                                <option value="5">Sau đại học</option>
                                                                <option value="6">Khác</option>
                                                            </select>
                                                        </form>
                                                    </div>
                                                    <div class="link-save"> <a href="javascript:void(0);" onclick="saveEduLevel();"><em class="material-icons">save</em>Lưu Lại</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="sticker">
                                <ul class="list-sticker">
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                widget16Toggle();
                                $(".widget-16 .widget-body .link-highest-degree a").each(function () {
                                    $(this).on("click", function () {
                                        $(this).closest('div.box-edit-degree').addClass('active');
                                        $('.widget-16 .widget-body .experience table .highest-degree').addClass('active');
                                    });
                                });
                                $(".widget-16 .widget-body .link-add a").each(function () {
                                    $(this).on("click", function () {
                                        $("#rs_language_old").val('');
                                        $("#rs_language option[value='']").prop('selected', 'selected');
                                        $("#rs_language_level option[value='0']").prop('selected', 'selected');
                            
                                        $(this).addClass('active').hide();
                                        $(".widget-16 .widget-body .link-edit a").removeClass('active');
                                        $(".widget-16 .widget-body .delete").removeClass('active');
                                        $('.widget-16 .widget-body .experience table .language-add').addClass('active');
                                    });
                                });
                            })
                            $(document).on('click', ".widget-16 .widget-body .link-language a", function () {
                                $(this).closest('li').addClass('active');
                            });
                            
                            
                            $(document).on('click', ".widget-16 .widget-body #lstResumeLanguage .link-edit a", function () {
                                $(this).closest('li').addClass('active');
                                var lang = $(this).data('eduid');
                                var lvl = $(this).data('edulv');
                                $(this).closest('li').find('.rs_language_old').val(lang);
                                $(this).closest('li').find('.rs_language').val(lang);
                                $(this).closest('li').find('.rs_language_level').val(lvl);
                                widget16Toggle();
                            });
                        </script>
                    </div>
                    <div class="widget widget-16" id="certificate-section">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i10.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Chứng chỉ khác</h3>
                                        <div class="status">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-certificate')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0)" onclick="editResumeCertificate(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Vui lòng nhập chứng chỉ</p>
                                <a href="javascript:void(0)" onclick="editResumeCertificate(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                            </div>
                        </div>
                    </div>
                   <!--  <div class="widget widget-22 widget-17" id="language-section">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image icon-translate"><span class="material-icons">translate</span></div>
                                    <div class="figcaption">
                                        <h3>Ngôn ngữ </h3>
                                        <div class="status">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-language')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add-lang"><a href="javascript:void(0)" onclick="editResumeLanguage(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="list-progress">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Trình độ ngoại ngữ</th>
                                            <th>Trình độ</th>
                                            <th>Chứng chỉ ngoại ngữ</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="title">
                                                    <h4>Việt Nam</h4>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <progress class="progress-main" max="5" value="1"></progress>
                                                    <div class="lavel">Bản ngữ</div>
                                                    <div class="progress-row">
                                                        <div class="line success"></div>
                                                        <div class="line success"></div>
                                                        <div class="line success"></div>
                                                        <div class="line success"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span></span>
                                            </td>
                                            <td>
                                                <ul class="list-action">
                                                    <li class="edit-link"><a href="javascript:void(0)" onclick="editResumeLanguage(191018);"> <em class="material-icons">create</em><span>Chỉnh sửa</span></a></li>
                                                    <li class="delete"><a href="javascript:void(0)" onclick="deleteResumeLanguageProfile(191018);"> <em class="material-icons">highlight_off</em><span>Xoá</span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script>
                            $('#language-section .widget-body > .list-action .view-more a').on('click', function () {
                                $('#language-section .widget-body .list-progress').addClass('active')
                                $('#language-section .widget-body > .list-action .view-less').css('display', 'block')
                                $('#language-section .widget-body > .list-action .view-more').css('display', 'none')
                            })
                            $('#language-section .widget-body > .list-action .view-less a').on('click', function () {
                                $('#language-section .widget-body .list-progress').removeClass('active')
                                $('#language-section .widget-body > .list-action .view-less').css('display', 'none')
                                $('#language-section .widget-body > .list-action .view-more').css('display', 'block')
                            })
                        </script>
                    </div>
                    <div class="widget widget-17" id="widget-17">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i9.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Kỹ năng chuyên môn *</h3>
                                        <div class="status error">
                                            <p>Chưa hoàn thành</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-skill')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0);" onclick="show_frmSkill(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="list-progress" id="list-progress-skill">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Skill </th>
                                            <th>Mức độ</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $(".lst-action-skill .view-more").on('click', function(){
                                    $("#list-progress-skill tr").show();
                                    $(this).hide();
                                    $(this).next('li').show();
                                });
                                $(".lst-action-skill .view-less").on('click', function(){
                                    $("#list-progress-skill tr").hide();
                                    $("#list-progress-skill tr:nth-child(-n+3)").show();
                                    $("html, body").animate({scrollTop: $("#widget-17").offset().top-$('header').innerHeight()-40},1000);
                                    $(this).hide();
                                    $(this).prev('li').show();
                                });
                            });
                        </script>
                    </div>
                    <div class="widget widget-19" id="widget-19">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i6.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Thành tích nổi bật</h3>
                                        <div class="status default">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-award')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-edit"><a href="javascript:void(0);" onclick="editResumeAdditioninfo();"> <em class="material-icons">create</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body" id="no-content">
                            <div class="no-content">
                                <p>Vui lòng thêm Thành tích nổi bật của bạn</p>
                                <a href="javascript:void(0);" onclick="editResumeAdditioninfo();"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a> 
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="content" id="content">     Chưa cập nhật
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('.widget-19 .widget-body .list-action .view-more a').on('click', function () {
                              $('.widget-19 .widget-body .content').addClass('active');
                              $('.widget-19 .widget-body .list-action .view-less').css('display', 'block');
                              $('.widget-19 .widget-body .list-action .view-more').css('display', 'none');
                            });
                            $('.widget-19 .widget-body .list-action .view-less a').on('click', function () {
                              $('.widget-19 .widget-body .content').removeClass('active');
                              $('.widget-19 .widget-body .list-action .view-less').css('display', 'none');
                              $('.widget-19 .widget-body .list-action .view-more').css('display', 'block');
                            });
                        </script>
                    </div>
                    <div class="widget widget-23 widget-15" id="other-activity-section">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i13.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Hoạt động khác</h3>
                                        <div class="status">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-other-activity')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0)" onclick="editResumeActivity(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Mô tả hoạt động</p>
                                <a href="javascript:void(0)" onclick="editResumeActivity(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                widgetActivityToggle();
                            });
                        </script>
                    </div>
                    <div class="widget widget-20" id="widget-20">
                        <div class="widget-head">
                            <div class="cb-title-h3">
                                <div class="figure">
                                    <div class="image"><img src="./img/dash-board/i8.png" alt=""></div>
                                    <div class="figcaption">
                                        <h3>Người tham khảo</h3>
                                        <div class="status default">
                                            <p>Không bắt buộc</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-action">
                                    <div class="tips p1" onclick="openTipSlide('tip-references')">
                                        <div class="icon">
                                            <em class="mdi mdi-lightbulb"></em>
                                        </div>
                                        <p>Tips</p>
                                    </div>
                                    <div class="link-add"><a href="javascript:void(0);" onclick="show_frmRefer(0);"> <em class="material-icons">add</em><span>Thêm mới</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-body">
                            <div class="no-content">
                                <p>Vui lòng thêm thông tin người tham khảo</p>
                                <a href="javascript:void(0);" onclick="show_frmRefer(0);"><em class="mdi mdi-plus-circle"></em><span>Thêm mới</span></a> 
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4 col-xl-3 main-menu">
                    <div class="menu-shortchut active" style="top: 100px;">
                        <div class="list-button">
                            <ul>
                                <li><a class="share-profile" href="javascript:void(0);"><em class="mdi mdi-share"></em><span>Chia sẻ hồ sơ</span> <span class="new-label"> New </span> </a></li>
                                <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/changetemplate"> <em class="material-icons">edit</em><span>Chỉnh Mẫu Hồ Sơ</span></a></li>
                                <li> <a href="javascript:void(0);" id="btn_view_cbprofile"> <em class="material-icons">remove_red_eye</em><span>Xem CV Template</span></a></li>
                                <li id="btn_download" style="display:none"> <a href="javascript:void(0);" onclick="downloadCvProfile(16167824)"> <em class="material-icons">get_app</em><span>Tải hồ sơ</span></a>
                                </li>
                                <li><a class="hidden-info" href="javascript:void(0);" onclick="showHideInfor();"><em class="fa fa-eye-slash"></em><span>Ẩn thông tin</span></a></li>
                            </ul>
                        </div>
                        <div class="head-menu">
                            <div class="name-shortchut"><a class="active" href="javascript:void(0);">Careerbuilder Profile</a></div>
                            <div class="toggle-menu"><em class="material-icons">list</em></div>
                        </div>
                        <ul class="list-shortchut">
                            <li class="active"><a class="active" href="javascript:void(0);" data-href="#widget-11">Careerbuilder Profile</a></li>
                            <li class=""><a href="javascript:void(0);" data-href="#t-resume-section" class="">Tiêu đề hồ sơ</a></li>
                            <li><a href="javascript:void(0);" data-href="#personalinfo-section">Thông tin cá nhân</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-14">Mục tiêu nghề nghiệp</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-18">Thông tin nghề nghiệp</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-15">Kinh nghiệm làm việc</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-16">Học vấn</a></li>
                            <li><a href="javascript:void(0);" data-href="#certificate-section">Chứng chỉ khác</a></li>
                            <li><a href="javascript:void(0);" data-href="#language-section">Ngôn ngữ</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-17">Kỹ năng chuyên môn</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-19">Thành tích nổi bật</a></li>
                            <li><a href="javascript:void(0);" data-href="#other-activity-section">Hoạt động khác</a></li>
                            <li><a href="javascript:void(0);" data-href="#widget-20">Người tham khảo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-edit-modal edit-modal-dashboard" style="display: none">
            <div class="modal-title">
                <h3>Ẩn một số thông tin</h3>
            </div>
            <div class="body-modal main-form">
                <form name="frmConfident" id="frmConfident" method="POST" class="form-horizontal">
                    <input type="hidden" name="r_id" value="0">
                    <input type="hidden" name="type_id" value="profile">
                    <div class="line">
                        <p>Thông tin cá nhân</p>
                    </div>
                    <div class="row data-list">
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_6" name="chkConfidential[6]" value="1">
                                <label for="chkConfidential_6">Tình trạng hôn nhân</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_0" name="chkConfidential[0]" value="1">
                                <label for="chkConfidential_0">Ẩn Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_1" name="chkConfidential[1]" value="1">
                                <label for="chkConfidential_1">Địa chỉ (Số nhà, Đường)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_3" name="chkConfidential[3]" value="1">
                                <label for="chkConfidential_3">Số điện thoại</label>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <p>Thông tin nghề nghiệp</p>
                    </div>
                    <div class="row data-list">
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_7" name="chkConfidential[7]" value="1">
                                <label for="chkConfidential_7">Hình thức làm việc</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_9" name="chkConfidential[9]" value="1">
                                <label for="chkConfidential_9">Mức lương</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chkConfidential_8" name="chkConfidential[8]" value="1">
                                <label for="chkConfidential_8">Phúc lợi mong muốn</label>
                            </div>
                        </div>
                    </div>
                    <div class="button-modal"><a class="btn-gradient" href="javascript:;" onclick="saveConfResume();">Lưu Lại</a></div>
                </form>
            </div>
        </div>
        <div class="edit-db-work-experience-1 edit-modal-dashboard" style="display:none">
            <div class="modal-title">
                <h3>Kinh nghiệm làm việc</h3>
            </div>
            <div class="modal-body">
                <form name="frm_Experience" id="frm_Experience">
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="">Số năm kinh nghiệm</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="number" class="exp-yet" maxlength="2" name="yearOfExperience" id="yearOfExperience" min="1" max="55" value="0" disabled="disabled">
                            </div>
                            <div class="form-error"><span class="err_yearOfExperience" style="display:none"></span></div>
                            <div class="form-group form-checkbox mt-1">
                                <input type="checkbox" id="not_experence" name="not_experence" checked="checked" value="1" style="margin-right: 5px;">
                                <label class="no-exp-yet" for="not_experence">Chưa có kinh nghiệm</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label for="">Cấp bậc hiện tại</label>
                        </div>
                        <div class="col-lg-8">
                            <div class="select-group">
                                <select name="levelcurrent_id" id="levelcurrent_id" style="float: left; width: 200px; margin-bottom:5px">
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
                            <div class="form-error"><span class="err_levelcurrent_id" style="display:none"></span></div>
                        </div>
                    </div>
                    <div class="form-group form-button">
                        <div class="button-save button-center">
                            <button class="btn-gradient" type="button" onclick="return saveFrmExperience();">Lưu Lại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="popup-modal" class="popup-modal intro-modal edit-modal-dashboard" style="display: none;">
            <div class="modal-title">
                <h3>TÍNH NĂNG "CHIA SẺ HỒ SƠ" ĐÃ SẴN SÀNG!</h3>
            </div>
            <div class="modal-body">
                <div class="box-intro">
                    <div class="box-img">
                        <img src="https://static.careerbuilder.vn/themes/careerbuilder/images/cv-profile/banner_popup_share_profile.jpg">
                    </div>
                    <div class="text-intro">
                        <p>
                            Bạn đã sẵn sàng "khoe" thương hiệu cá nhân trên mọi nền tảng? Trải nghiệm ngay tính năng "Chia sẻ profile" đến bất cứ nơi đâu nhé!
                        </p>
                    </div>
                    <div class="action">
                        <label class="container-ckb">Không hiển thị lại
                        <input type="checkbox" name="ckb-1" id="sp_popup_chk">
                        <span class="checkmark"></span>
                        </label>
                        <button class="btn-close-modal btn-close-popup">
                        Đóng
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $.fancybox.open($(".popup-modal"), {});
                var sppopup = getCookie(sppopup);
                if (sppopup != 1) {
                    if ($(window).width() > 1200) {
                        $('#popup-modal').show();
                        $('.popup-modal').css('display', 'inline-block');
                        $('#sp-popup-chk').prop('checked', false);
                    } else {
                        $('#popup-modal').hide();
                        $('.popup-modal').css('display', 'none');
                    }
            
                    $('#sp_popup_chk').change(function() {
                        if ($(this).is(":checked"))
                        {$('.popup-modal .box-intro .action .btn-close-popup').on('click', function () 
                            {
                                $('#popup-modal, .popup-modal').hide();
                                document.cookie = "sppopup=1"; 
                            });
                        }        
                    })
                }
            });
        </script>
        <div class="tips-modal" id="tip_cvsetting" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cb-title-h3">
                                        <h3>Hồ sơ CareerBuilder 4</h3>
                                    </div>
                                    <div class="content">
                                        <p>Phông chữ trong CV phần nào thể hiện phong thái của bạn khi làm
                                            việc và Nhà tuyển dụng thường mong muốn được đọc các thông tin
                                            bạn đưa ra ở một cỡ chữ vừa phải, rõ ràng, không quá to cũng
                                            không quá nhỏ.
                                            Cỡ chữ gợi ý cho một CV chuẩn là tầm 12 đến 14 và bạn có thể
                                            kiểm tra thử bằng cách in CV ra trên khổ giấy A4 trước khi gửi
                                            đi ứng tuyển nhé.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-t-resume" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Tiêu đề hồ sơ:<br>
                                Bạn nên để tiêu đề là vị trí bạn đang ứng tuyển hoặc muốn làm việc. Giúp Nhà tuyển dụng hiểu ngay vị trí mong muốn khi nhận hồ sơ của bạn.<br>
                                Ví dụ: "Nhân viên kinh doanh" hoặc "Marketing Manager"<br>
                                Lưu ý: hãy điều chỉnh tiêu đề theo từng công việc ứng tuyển nhé!
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tips-modal" id="title" style="display: none">
            <div class="add-title-modal edit-modal-dashboard fancybox-content" style="">
                <div class="modal-title">
                        <h3>Tiêu đề hồ sơ</h3>
                </div>
                <div class="modal-body">
                        <form autocomplete="on" name="t-resume-form" id="t-resume-form">
                                <div class="form-group row">
                                        <div class="col-lg-4">
                                                <label for="">Tiêu đề hồ sơ<span>*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                                <div class="input-group">
                                                        <input type="text" value="" name="resume_title" id="resume_title" maxlength="400">
                                                </div>
                                                <div class="form-error"><span class="err_resume_title"></span></div>
                                        </div>
                                </div>
                                <div class="form-group form-button">
                                        <div class="button-save button-center">
                                                <button class="btn-gradient" type="button" onclick="return updateResumeTitle();">Lưu Lại</button>
                                        </div>
                                </div>
                        </form>
                </div>
                <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
            </div>
        </div>



        <div class="tips-modal" id="tip-personalinfo" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Thông tin cá nhân:<br>
                                - Hãy sử dụng địa chỉ email chuyên nghiệp phù hợp dùng cho công việc, hạn chế sử dụng email khó đọc hoặc dùng nhiều ký tự đặc biệt.<br>
                                - Ảnh đại diện trên hồ sơ cũng như lần đầu tiên tạo ấn tượng với Nhà tuyển dụng. Nên chọn ảnh đại diện chụp từ vai trở lên, có ánh sáng tốt, không gian hạn chế nhiều chi tiết, nên mặc trang phục công sở.<br>
                                - Kiểm tra thông tin cá nhân để tránh trường hợp Nhà Tuyển Dụng không liên hệ được
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tips-modal" id="tip-personalinfo-modal" style="display: none">
            <div class="edit-db-infor edit-modal-dashboard fancybox-content" style="">
                <div class="modal-title">
                    <h3>Thông Tin Cá Nhân</h3>
                </div>
                <div class="modal-body">
                    <form name="personalInfoForm" id="personalInfoForm" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-text">
                                    <input type="text" onkeyup="this.setAttribute('value', this.value);" name="lastname" id="lastname" value="Dao" maxlength="30" class="valid">
                                    <label>* Họ và tên lót</label>
                                    <span class="err_lastname" style=""></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-text">
                                    <input type="text" onkeyup="this.setAttribute('value', this.value);" name="firstname" id="firstname" value="Cuong" maxlength="30">
                                    <label>* Tên</label>
                                    <span class="err_firstname" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-radio">
                                    <p>* Giới tính</p>
                                    <div class="gender">
                                        <input type="radio" id="gender_m" value="1" name="gender">
                                        <label for="gender_m">Nam</label>
                                    </div>
                                    <div class="gender">
                                        <input type="radio" id="gender_f" value="2" name="gender">
                                        <label for="gender_f">Nữ</label>
                                    </div>
                                    <span class="err_gender" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-birthday">
                                    <label for="">* Ngày sinh</label>
                                    <input type="text" data-field="date" data-max="31/12/2007" readonly="" data-view="Popup" class="date_month" name="birthday" value="" placeholder="DD-MM-YYYY">
                                    <div id="date_time_picker" class="dtpicker-overlay dtpicker-mobile">
                                        <div class="dtpicker-bg">
                                            <div class="dtpicker-cont">
                                                <div class="dtpicker-content">
                                                    <div class="dtpicker-subcontent"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="err_birthday" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-text">
                                    <input type="text" onkeyup="this.setAttribute('value', this.value);" name="mobile" id="mobile" value="" maxlength="20" style="margin-top:5px">
                                    <label for="">* Số điện thoại</label>
                                    <span class="err_mobile" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-text">
                                    <input type="text" onkeyup="this.setAttribute('value', this.value);" id="email_member_edit" value="chiensi26045@gmail.com" readonly="readonly" disabled="disabled" style="margin-top:5px">
                                    <label for="">* Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-select">
                                    <label for="">* Quốc tịch</label>
                                    <select name="slnationality" id="slnationality">
                                        <option value="1">Người Việt Nam</option>
                                        <option value="22">Người Bangladesh</option>
                                        <option value="14">Người Campuchia</option>
                                        <option value="4">Người Canada</option>
                                        <option value="25">Người Công gô</option>
                                        <option value="13">Người Hoa Kỳ</option>
                                        <option value="8">Người Hàn Quốc</option>
                                        <option value="24">Người Hồng Kong</option>
                                        <option value="169">Người Khác</option>
                                        <option value="19">Người Lào</option>
                                        <option value="9">Người Malaysia</option>
                                        <option value="21">Người Myanmar</option>
                                        <option value="2">Người Nhật</option>
                                        <option value="17">Người Qatar</option>
                                        <option value="23">Người Nước Ngoài</option>
                                        <option value="10">Người Singapore</option>
                                        <option value="5">Người Trung Quốc</option>
                                        <option value="16">Người Ukraine</option>
                                        <option value="3">Người Úc</option>
                                        <option value="20">Người Đài Loan</option>
                                    </select>
                                    <span class="err_slnationality" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-select">
                                    <label for="">* Tình trạng hôn nhân</label>
                                    <select name="slMarritial">
                                        <option value="1">Đã kết hôn</option>
                                        <option value="0" selected="selected">Độc thân</option>
                                    </select>
                                    <span class="err_slMarritial" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-select">
                                    <label for="">* Quốc gia</label>
                                    <select name="slcountry" id="slcountry" class="select-nation">
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
                                    <span class="err_slcountry" style="display:none"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-select">
                                    <label for="">* Tỉnh / Thành phố</label>
                                    <select name="slcity" id="slcity" class="select-province-city" onchange="loadDistrictProfile(this.value);">
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
                                    <span class="err_slcity" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!--id="areaDistrict"-->
                                <div class="form-group form-select">
                                    <label for="">* Quận/huyện</label>
                                    <select name="sldistrict" id="sldistrict" class="select-district" disabled="">
                                        <option value="">Chọn</option>
                                    </select>
                                    <span class="err_sldistrict" style="display:none"></span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label></label>
                                <div class="form-group form-text">
                                    <input type="text" onkeyup="this.setAttribute('value', this.value);" name="address" value="">
                                    <label for="">* Địa chỉ (Số nhà, Đường)</label>
                                    <span class="err_address" style="display:none"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-button">
                            <div class="button-save button-center">
                                <button class="btn-gradient" type="button" onclick="updateProfile(this);">Lưu lại</button>
                            </div>
                        </div>
                    </form>
                </div>
                <button type="button" data-fancybox-close="" class="fancybox-button fancybox-close-small" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
                        <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                    </svg>
                </button>
            </div>
        </div>


        <div class="tips-modal" id="tip-objective" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Mục tiêu nghề nghiệp: <br>
                                - Hãy trình bày mục tiêu của bản thân một cách ngắn gọn, rõ ràng nhưng cũng thể hiện được mong muốn của bản thân đối với vị trí/ngành nghề mà bạn ứng tuyển.<br>
                                - Trong trường hợp bạn muốn nói thêm về sự nghiệp và kinh nghiệm làm việc trong quá khứ để nhà tuyển dụng có thể hình dung rõ hơn, thì cũng đừng quên trình bày thật tóm tắt nhé!
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="tips-modal" id="tip-objective-modal" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Mục tiêu nghề nghiệp: <br>
                                - Hãy trình bày mục tiêu của bản thân một cách ngắn gọn, rõ ràng nhưng cũng thể hiện được mong muốn của bản thân đối với vị trí/ngành nghề mà bạn ứng tuyển.<br>
                                - Trong trường hợp bạn muốn nói thêm về sự nghiệp và kinh nghiệm làm việc trong quá khứ để nhà tuyển dụng có thể hình dung rõ hơn, thì cũng đừng quên trình bày thật tóm tắt nhé!
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-desired-job" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Thông tin nghề nghiệp:<br>
                                Hãy điền thật đầy đủ và chính xác những thông tin này để Nhà tuyển dụng có được cái nhìn tổng quan về mong muốn của bạn.
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-experience" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Kinh nghiệm làm việc:<br>
                                - Kinh nghiệm nên trình bày theo thứ tự gần nhất đến xa nhất.<br>
                                - Nếu bạn có rất nhiều kinh nghiệm, hãy chọn lọc mô tả chi tiết những công việc có liên quan đến vị trí đang ứng tuyển<br>
                                - Hãy đọc thật kĩ bản mô tả và yêu cầu công việc của Nhà tuyển dụng, sử dụng các từ khóa liên quan và trình bày những kinh nghiệm của bạn thân bằng những từ khóa đó, điều này sẽ giúp cho nhà tuyển dụng thấy độ phù hợp của bạn với công việc hoặc vị trí đó. Tất nhiên hãy luôn đảm bảo sự trung thực trong quá trình viết.<br>
                                - Đừng quên, thể hiện năng lực thông qua các thành tích của từng công việc bạn đã trải qua nhé.
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-education" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Học vấn: <br>
                                - Hãy nêu ra những bậc học đạt được như cao đẳng, đại học, thạc sĩ,... <br>
                                - Bạn cũng có thể kể thêm những khóa học ngắn hạn, khóa đào tạo chuyên nghiệp (có phí) mà bạn đã từng được học. <br>
                                - Lưu ý chọn lọc những khóa học liên quan đến công việc mà bạn ứng tuyển thôi nhé
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-certificate" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Chứng chỉ khác: <br>
                                Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br>
                                - Chỉ nên đề cập đến những chứng chỉ liên quan đến công việc bạn đang ứng tuyển hoặc những chứng chỉ có kĩ năng nổi bật.<br>
                                - Hãy điền đầy đủ các thông tin như ngày hoàn thành, tổ chức cấp.<br>
                                - Bạn cũng có thể kể tên các hội thảo, hội nghị có uy tín mà bạn đã từng được tham dự
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-skill" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Kĩ năng khác:<br>
                                - Nêu nổi bật 6 đến 8 kĩ năng liên quan nhất đến công việc bạn ứng tuyển<br>
                                - Nếu bạn chưa có nhiều kĩ năng cứng, hãy xem xét tới việc nêu ra các kĩ năng mềm như: "kỹ năng thuyết trình", "kỹ năng phân tích"<br>
                                - Nên sử dụng những cụm từ ngắn, ưu tiên sử dụng những kĩ năng có nhắc đến trong bản mô tả công việc
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-award" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Thành tích nổi bật:<br>
                                Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br>
                                Phần này bạn có thể kể đến những dự án cá nhân có liên quan đến công việc bạn ứng tuyển, hãy cố gắng trình bày thật chi tiết kèm theo những số liệu và kĩ năng, thành tích bạn đạt được từ dự án. 
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-references" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Người tham khảo:<br>
                                Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br>
                                - "Người tham khảo" có thể là cấp trên hoặc người làm việc trực tiếp với bạn.<br>
                                - Hãy luôn đảm bảo rằng "Người tham khảo" biết rằng họ có thể sẽ nhận được cuộc gọi từ nhà tuyển dụng hiện tại của bạn.<br>
                                - Nếu "Người tham khảo" có các chức danh công việc như Bác sĩ, Luật sư,... thì hãy để nó trước tên của họ. Trong trường hợp không có, hãy để tín ngữ Ông/Bà/Mr/Ms/... trước tên của họ nhé!
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-language" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Ngôn ngữ khác:<br>
                                -Bạn nên liệt kê các ngôn ngữ bạn có thể sử dụng, bao gồm cả giấy chứng nhận về ngoại ngữ đó hoặc đề cập thêm về khoảng thời gian bạn du học, tham gia chường trình trao đổi ngôn ngữ để giúp nhà tuyển dụng hình dung rõ thêm về khả năng ngôn ngữ của bạn.  <br>
                                -Nên liệt kê ngôn ngữ theo thứ tự từ thành thục nhất đến ít thành thục nhất
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tips-modal" id="tip-other-activity" style="display: none">
            <div class="head-modal">
                <div class="icon"><em class="mdi mdi-lightbulb-outline"></em></div>
                <div class="title">
                    <h3>Để CV không chỉ Hay mà còn Đẹp trong mắt Nhà tuyển dụng</h3>
                </div>
            </div>
            <div class="body-modal">
                <div class="widget widget-12">
                    <div class="widget-body">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                Những hoạt động khác:<br>
                                Bạn có thể chọn hiển thị hoặc không hiển thị mục này trên CV<br>
                                - Hãy liệt kê các hoạt động ngoại khóa mà bạn tham gia, đặc biệt là những hoạt động thể hiện khả năng lãnh đạo.<br>
                                - Tóm tắt những thành tích và kết quả thu được từ hoạt động nhé
                            </div>
                            <div class="main-button">
                                <div class="button-prev"><em class="mdi mdi-chevron-left"></em></div>
                                <div class="button-next"><em class="mdi mdi-chevron-right"></em></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function openTipSlide(idTip) {
                $.fancybox.open($("#"+idTip), {});
                if($('#'+idTip+' .widget-12 .swiper-container .swiper-slide').length > 1){
                    setTimeout(() => {
                        widgetTipSlide(idTip)
                    }, 100);
                }else{
                    $('#'+idTip+' .widget-12 .swiper-container .main-button').hide();
                }
                
            }
            function widgetTipSlide(idTip) {
                    let tipSlide =  new Swiper('#'+idTip+' .widget-12 .swiper-container', {
                            navigation: {
                                    nextEl: '#'+idTip+' .widget-12 .button-next',
                                    prevEl: '#'+idTip+' .widget-12 .button-prev',
                            },
                            loop: true
                    });
            }
        </script>
    </div>
</div>
<script src="{{ asset('js/listedit.js') }}"></script>
@endsection