

@extends('frontend.layout.app')
@section('content') 
<div class="content-inner">
    <div class="container-fluid">
        <div class="applied-jobs-wrap">
            <div class="widget widget-10">
                <div class="widget-head">
                    <div class="cb-title-h3">
                        <h3>Việc làm đã nộp</h3>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="content">
                        <p>Bạn đã ứng tuyển vào các vị trí tuyển dụng trong 6 tháng gần nhất</p>
                        <div class="list-hidden"><a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/jobappliedhidden">Danh Sách Việc Làm Đã Ẩn</a></div>
                    </div>
                    <div class="table">
                        <form name="frmJobapplied" id="frmJobapplied" method="post" action="">
                            <input type="hidden" name="intIsHide" id="intIsHide" value="1">
                            <input type="hidden" name="jobapplied_id" id="jobapplied_id">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="title">Chức danh</th>
                                        <th>Ngày nộp</th>
                                        <th>Hồ sơ ứng tuyển</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="record-tbl">
                                        <td colspan="4"> Hiện tại chưa có dữ liệu</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="main-pagination">  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection