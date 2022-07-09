<nav class="side-navbar">
    <div class="head-nav">
        <div class="my-cb-center">
            <h2>Vieclamngon Center</h2>
        </div>
        <?php  

            $routeName = \Request::route()->getName();
        ?>


        <ul class="list-unstyled">
            <li> <a  class="{{ $routeName==='user-dashboard'?'active':'' }}" href="{{ route('user-dashboard') }}" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
            <li style="display:none"> <a href="{{ route('my-profile') }}"> <em class="material-icons">person</em><span>Hồ sơ</span></a></li>
            <li> <a href="{{ route('my-profile') }}"  class="{{ $routeName==='my-profile'?'active':'' }}"> <em class="material-icons">person</em><span>Hồ sơ </span></a></li>
           
            <li>
                <a class="collapse {{ $routeName=='work-save'||$routeName=='work-apply'?'active':'' }}" href="javascript:;"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                <ul class="list-unstyled collapse {{ $routeName=='work-save'||$routeName=='work-apply'?'display':'' }}"  >
                    <li><a href="{{ route('work-save') }}" class="{{ $routeName =='work-save'?'active':'' }}">Việc làm đã lưu</a></li>
                    <li><a href="{{ route('work-apply') }}"  class="{{ $routeName =='work-apply'?'active':'' }}">Việc làm đã nộp</a></li>
                </ul>
            </li>
            <li> <a href="{{ route('notification-user') }}" class="{{ $routeName=='notification-user'?'active':'' }}"><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>
       
            <li>
                <!-- <a class="collapse " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a> -->
                <ul class="list-unstyled collapse" >
                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/myaccount"  title="Tài Khoản">Tài Khoản</a></li>
                    <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement"  title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>
                </ul>
            </li>
            <li> <a href="https://careerbuilder.vn/vi/jobseekers/logout" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
        </ul>
    </div>
    <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
</nav>