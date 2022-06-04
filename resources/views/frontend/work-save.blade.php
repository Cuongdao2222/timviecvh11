
@extends('frontend.layout.app')

@section('content') 

<div class="content-inner">
    <div class="container-fluid">
        <div class="saved-jobs-wrap">
            <div class="widget widget-10">
                <div class="widget-head">
                    <div class="cb-title-h3">
                        <h3>Việc làm đã lưu</h3>
                    </div>
                </div>
                <div class="widget-body">
                    <form name="frmJobsaved" id="frmJobsaved" method="post" action="">
                        <input type="hidden" name="jobsaved_id" id="jobsaved_id" value="0">
                        <div class="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="job-name">Tên công việc</th>
                                        <th>Địa điểm</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="job">
                                            <div class="name">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html"><img src="https://images.careerbuilder.vn/employer_folders/lot1/129051/72x45/140745logodianaunicharm-2017-english.jpg" alt="Công Ty Cổ Phần Diana Unicharm" title="Công Ty Cổ Phần Diana Unicharm">  </a></div>
                                                    <div class="figcaption">
                                                        <h3><a href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B90B57.html">[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng</a></h3>
                                                        <p class="company-name"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" title="Công Ty Cổ Phần Diana Unicharm">Công Ty Cổ Phần Diana Unicharm</a></p>
                                                        <p class="location">Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <p>Hà Nội</p>
                                        </td>
                                        <td class="action">
                                            <ul class="list-action">
                                                <li class="apply-now-btn"><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B90B57.html">Ứng Tuyển</a></li>
                                                <li class="delete"><a href="javascript:void(0);" onclick="checkDeleteJobSaved(1319511);"> <em class="material-icons">highlight_off</em><span>Xóa</span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="job">
                                            <div class="name">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-xuat-nhap-khau-ky-nghe-a-dong.35A911AB.html"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/logo-default.png" alt="CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU KỸ NGHỆ Á ĐÔNG" title="CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU KỸ NGHỆ Á ĐÔNG">  </a></div>
                                                    <div class="figcaption">
                                                        <h3><a href="https://careerbuilder.vn/vi/tim-viec-lam/tuyen-dung-can-bo-kinh-doanh-phan-phoi-thi-truong-–-thiet-bi-cntt-vien-thong.35B97F64.html">TUYỂN DỤNG CÁN BỘ KINH DOANH PHÂN PHỐI, THỊ TRƯỜNG – THIẾT BỊ CNTT, VIỄN THÔNG</a></h3>
                                                        <p class="company-name"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-xuat-nhap-khau-ky-nghe-a-dong.35A911AB.html" title="CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU KỸ NGHỆ Á ĐÔNG">CÔNG TY CỔ PHẦN XUẤT NHẬP KHẨU KỸ NGHỆ Á ĐÔNG</a></p>
                                                        <p class="location">Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <p>Hà Nội</p>
                                        </td>
                                        <td class="action">
                                            <ul class="list-action">
                                                <li class="apply-now-btn"><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/tuyen-dung-can-bo-kinh-doanh-phan-phoi-thi-truong-–-thiet-bi-cntt-vien-thong.35B97F64.html">Ứng Tuyển</a></li>
                                                <li class="delete"><a href="javascript:void(0);" onclick="checkDeleteJobSaved(1349220);"> <em class="material-icons">highlight_off</em><span>Xóa</span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="job">
                                            <div class="name">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html"><img src="https://images.careerbuilder.vn/employer_folders/lot1/129051/72x45/140745logodianaunicharm-2017-english.jpg" alt="Công Ty Cổ Phần Diana Unicharm" title="Công Ty Cổ Phần Diana Unicharm">  </a></div>
                                                    <div class="figcaption">
                                                        <h3><a href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B8B9CE.html">[Hà Nội] Sales Planning Officer/ Cán bộ Kế hoạch Bán hàng</a></h3>
                                                        <p class="company-name"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/cong-ty-co-phan-diana-unicharm.35A6E11B.html" title="Công Ty Cổ Phần Diana Unicharm">Công Ty Cổ Phần Diana Unicharm</a></p>
                                                        <p class="location">Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <p>Hà Nội</p>
                                        </td>
                                        <td class="action">
                                            <ul class="list-action">
                                                <li class="apply-now-btn"><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/ha-noi-sales-planning-officer-can-bo-ke-hoach-ban-hang.35B8B9CE.html">Ứng Tuyển</a></li>
                                                <li class="delete"><a href="javascript:void(0);" onclick="checkDeleteJobSaved(1298638);"> <em class="material-icons">highlight_off</em><span>Xóa</span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="job">
                                            <div class="name">
                                                <div class="figure">
                                                    <div class="image"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html"><img src="https://images.careerbuilder.vn/employer_folders/lot6/102756/72x45/174459logomoi.jpg" alt="TCL (Vietnam) Corporation Limited" title="TCL (Vietnam) Corporation Limited">  </a></div>
                                                    <div class="figcaption">
                                                        <h3><a href="https://careerbuilder.vn/vi/tim-viec-lam/thuc-tap-sinh-bo-phan-trade-marketing-gtm-trainee.35B95BD6.html">Thực tập sinh bộ phận Trade marketing- GTM Trainee</a></h3>
                                                        <p class="company-name"><a href="https://careerbuilder.vn/vi/nha-tuyen-dung/tcl-vietnam-corporation-limited.35A67A64.html" title="TCL (Vietnam) Corporation Limited">TCL (Vietnam) Corporation Limited</a></p>
                                                        <p class="location">Hà Nội</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="location">
                                            <p>Hà Nội</p>
                                        </td>
                                        <td class="action">
                                            <ul class="list-action">
                                                <li class="apply-now-btn"><a class="btn-gradient" href="https://careerbuilder.vn/vi/tim-viec-lam/thuc-tap-sinh-bo-phan-trade-marketing-gtm-trainee.35B95BD6.html">Ứng Tuyển</a></li>
                                                <li class="delete"><a href="javascript:void(0);" onclick="checkDeleteJobSaved(1340118);"> <em class="material-icons">highlight_off</em><span>Xóa</span></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="main-pagination">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="remove-modal" style="display: none">
            <div class="modal-body">
                <div class="icon"><img src="./img/icon-error.png" alt=""></div>
                <p>Đã xóa thành công</p>
                <a class="btn-close-modal" href="javascript:;"> <em class="material-icons">highlight_off</em></a>
            </div>
        </div>
    </div>
</div>

@endsection