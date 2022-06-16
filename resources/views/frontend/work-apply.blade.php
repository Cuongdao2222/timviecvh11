

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
                                        <th class="title">Công việc</th>
                                        <th>Ngày nộp</th>
                                        <th>Hồ sơ ứng tuyển</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        $apply =  DB::table('job')->join('apply_jobs', 'job.id', '=', 'apply_jobs.job_id')->where('apply_jobs.user_id', Auth::user()->id)->select('job.title', 'apply_jobs.updated_at')->get();
                                    ?>
                                    <style type="text/css">
                                        .center{
                                            text-align: center;
                                        }
                                    </style>
                                    @if(!empty($apply))
                                    @foreach($apply as $applys)
                                    <tr class="record-tbl">
                                        <td colspan="1" class="center">{{ $applys->title }}</td>
                                        <td colspan="1" class="center">{{ $applys->updated_at }}</td>
                                        
                                        <td colspan="1" class="center"><a href="{{ route('my-profile') }}">Hồ sơ của tôi</a></td>
                                    </tr>
                                    @endforeach
                                    @else  
                                    <tr class="record-tbl">
                                        <td colspan="4"> Hiện tại chưa có dữ liệu</td>
                                    </tr>
                                    @endif  
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