@extends('frontend.layout.appfe')
@section('content')

    <main>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">

        <style type="text/css">
            
            .jobsby-company .company-introduction {
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
                padding: 20px;
                background: #f1f9fd;
            }
        </style>
        
        <section class="jobsby-company cb-section">
            <div class="container">
                <div class="main-banner">
                    <div class="image"><img src="https://images.careerbuilder.vn/employer_folders/lot6/83506/85614jotun-banner1380x290px.jpg" alt="Jotun Paints Vietnam Company Limited"></div>
                </div>
                <div class="company-introduction">
                    <div class="company-info">
                        <div class="info">
                            <div class="img">
                                <img src="https://images.careerbuilder.vn/employer_folders/lot6/83506/148x148/174210jotun_12483_29072011.gif" alt="Jotun Paints Vietnam Company Limited" />
                            </div>
                            <div class="content">
                                <h1 class="name">Jotun Paints Vietnam Company Limited</h1>
                                <strong>Địa điểm</strong>
                                <p>Number 1, Street 10, Song Than 1 IZ, Di An Ward, Di An City, Binh Duong Province </p>
                                <hr>
                                <strong>Thông tin công ty</strong>
                                <ul>
                                    <li> <span class="mdi mdi-account-supervisor"></span> Qui mô công ty: 100 - 499 </li>
                                    <li> <span class="mdi mdi-gavel"></span> Loại hình hoạt động:
                                        Trách nhiệm hữu hạn 
                                    </li>
                                    <li> <span class="mdi mdi-link"></span> Website: www.jotun.com </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="isTS" id="isTS" value="0" />
                    <input type="hidden" name="emp_websitets" id="emp_websitets" value="" />
                    <div class="company-follow">
                        <span id="totalFollowers"  class="follower-number"><strong id="countFollowers">1.133</strong> followers</span>       
                        <div class="btn-follow  icon-follow"><a class="btn-gradient" href="javascript:void(0);" id="follow_act"  rel="1" title="Follow"><em class="fa fa-check-circle-o"></em></a></div>
                    </div>
                </div>
                <div class="company-jobs-opening">
                    <h2 class="company-heading-title">Việc làm đang tuyển</h2>
                    <div class="row cus-row">
                        <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> <span><font color="FF0000">(Mới)</font></span>  </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/production-planner-nhan-vien-ke-hoach-san-xuat.35B9CF21.html" title="Production Planner (Nhân Viên Kế Hoạch Sản Xuất)">Production Planner (Nhân Viên Kế Hoạch Sản Xuất)</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
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
                        <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/ky-su-ban-hang-du-an-cong-trinh-xay-dung-sales-engineer.35B97825.html" title="Kỹ Sư Bán Hàng Dự Án (Công Trình Xây Dựng) / Sales Engineer">Kỹ Sư Bán Hàng Dự Án (Công Trình Xây Dựng) / Sales Engineer</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
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
                       <!--  <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/sales-executive-–-decorative-paints-project-south-dieu-hanh-ban-hang-du-an-son-trang-tri.35B975D9.html" title="Sales Executive – Decorative Paints/ Project/ South ( Điều Hành Bán Hàng Dự Án - Sơn Trang Trí)">Sales Executive – Decorative Paints/ Project/ South ( Điều Hành Bán Hàng Dự Án - Sơn Trang Trí)</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
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
                        <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/sales-executive-protective-coatings-dieu-hanh-ban-hang-son-cong-nghiep.35B975D1.html" title="Sales Executive - Protective Coatings (Điều Hành Bán Hàng - Sơn Công Nghiệp)">Sales Executive - Protective Coatings (Điều Hành Bán Hàng - Sơn Công Nghiệp)</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
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
                        <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/senior-sales-executive-–-marine-coatings-south-chuyen-vien-ban-hang-son-hang-hai.35B9936F.html" title="Senior Sales Executive – Marine Coatings (South) (Chuyên Viên Bán Hàng Sơn Hàng Hải)">Senior Sales Executive – Marine Coatings (South) (Chuyên Viên Bán Hàng Sơn Hàng Hải)</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
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
                        <div class="col-sm-6 cus-col">
                            <div class="job-item">
                                <div class="figure">
                                    <div class="figcaption">
                                        <div class="timeago"> </div>
                                        <h3 class="title"><a href="https://careerbuilder.vn/vi/tim-viec-lam/key-account-manager-marine-coatings-south-truong-phong-ban-hang-son-hang-hai.35B995D6.html" title="Key Account Manager - Marine Coatings (South) (Trưởng Phòng Bán Hàng Sơn Hàng Hải)">Key Account Manager - Marine Coatings (South) (Trưởng Phòng Bán Hàng Sơn Hàng Hải)</a></h3>
                                        <div class="caption">
                                            <p class="company-name">Jotun Paints Vietnam Company Limited</p>
                                            <p class="salary">$                   Cạnh tranh
                                            </p>
                                            <div class="location">
                                                <ul>
                                                    <li>Hồ Chí Minh</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="main-about-us">
                    <h3 class="company-heading-title">Giới thiệu về công ty</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <p>&nbsp;</p>
                                <p>Jotun, headquartered in Sandefjord, Norway, is one of the world's leading manufacturers of decorative paints, marine, protective and powder coatings. The Jotun Group, with 65 companies and 39 production facilities, employs more than 10,000 people globally. Across four segments and seven geographical regions, the Jotun Group is represented in more than 100 countries through its subsidiaries, joint ventures, agents, branch offices and expansive network of distributors. The Jotun Group’s sales in 2019 was NOK 19.652 billion.</p>
                                <p>Seeing a prominent market in south east Asia, Jotun opened its first factory in Thailand in 1968. Rapid economic development in the region led to new companies and factories in countries such as Singapore, Malaysia, Indonesia, Vietnam, Philippines, Myanmar, Cambodia and Australia. Jotun SEAP has been awarded a Korn Ferry Engaged Performance Award for year 2019, in recognition of achieving a best-in-class level of “Enablement”. We are proud to have an incredibly diversified region with more than 2,000 employees that come from different nationality and background, working together in delivering profitable growth. Throughout our history, we have focused in providing our employees with meaningful and challenging work, rewarding them through continued learning and development, underpinned by our values of Care, Loyalty, Respect and Boldness.</p>
                                <p>Jotun Vietnam has been established since 1994, with its first production facility from 1998. As one of the most visible Norwegian brands with long establishment, Jotun Vietnam operates in 4 segments with high and consistent quality products including Decorative Paints with unique Multicolor technology, and Performance Coatings comprising of Marine, Protective and Powder Coatings. Our major strength is providing customers with a Single Source Solution for all their coating needs. The largest single abroad investment by Jotun Group which is the new and modern factory, will come into operation in year 2021; demonstrating Jotun's long-term development strategy in the market. At Jotun Vietnam, we believe that people are our most important asset and therefore, we have been focusing on developing our employees’ competence and offering them opportunities to make differences and make their marks.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-company-photo">
                    <h3 class="company-heading-title">Hình ảnh công ty</h3>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="album video"><a href="https://www.youtube.com/embed/0BWCymmUxTs?autoplay=1" data-fancybox="album"> <img class="swiper-lazy" data-src="https://img.youtube.com/vi/0BWCymmUxTs/0.jpg"> </a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="album"><a href="https://images.careerbuilder.vn/employer_photo/83506/dsc_8448_1529535019.jpg" data-fancybox="album"> <img class="swiper-lazy" data-src="https://images.careerbuilder.vn/employer_photo/83506/dsc_8448_1529535019.jpg"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="album"><a href="https://images.careerbuilder.vn/employer_photo/83506/dsc00185_1529535033.jpg" data-fancybox="album"> <img class="swiper-lazy" data-src="https://images.careerbuilder.vn/employer_photo/83506/dsc00185_1529535033.jpg"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="album"><a href="https://images.careerbuilder.vn/employer_photo/83506/image_20today_207_38_57_20pm_1529535041.jpg" data-fancybox="album"> <img class="swiper-lazy" data-src="https://images.careerbuilder.vn/employer_photo/83506/image_20today_207_38_57_20pm_1529535041.jpg"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="album"><a href="https://images.careerbuilder.vn/employer_photo/83506/img_1181_1529535051.jpg" data-fancybox="album"> <img class="swiper-lazy" data-src="https://images.careerbuilder.vn/employer_photo/83506/img_1181_1529535051.jpg"></a></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="album"><a href="https://images.careerbuilder.vn/employer_photo/83506/dsc_9036_1529535134.jpg" data-fancybox="album"> <img class="swiper-lazy" data-src="https://images.careerbuilder.vn/employer_photo/83506/dsc_9036_1529535134.jpg"></a></div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-prev swiper-nav"><span class="mdi mdi-chevron-left"></span></div>
                            <div class="swiper-next swiper-nav"><span class="mdi mdi-chevron-right"></span></div>
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
                            <input type="hidden" name="csrf_token" value= "4fef15cd0265bbef110cdfa9a0bf04967c01e1cef6af512cd361371eba6e938a" />  
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
       <script src="{{ asset('js/jquery.validate_vi.js') }}">/*jquery.validate_vi.js*/</script>
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
        <script type="text/javascript">
            var emp_id 		= '35A62F32';
            var empIdDec 		= '83506';
            var jsk_id 		= '35A4E900';
            var member_id 	= '-1';
            var language_premium = {followed_link:PATH_KIEMVIEC+'jobseekes/mykiemviec/following',followed_link_txt:"Danh sách Nhà tuyển dụng bạn quan tâm",follow_delete_success:"Xóa thành công"
            		};
            		if(typeof language === 'undefined')	var language = language_premium;	else $.extend(language, language_premium);
        </script>

        <script type="text/javascript" src="{{ asset('js/employ/swiper.js') }}"></script>
        <script>/*swiper.js*/
           
            /*profile.js*/
            
            var companyPhotoSlide=new Swiper('.main-company-photo .swiper-container',{slidesPerView:4,spaceBetween:6,lazy:{loadPrevNext:true},breakpoints:{1200:{slidesPerView:2}},navigation:{prevEl:'.main-company-photo .swiper-prev',nextEl:'.main-company-photo .swiper-next'}})
        </script>
        <div class="back-drop"></div>
    </main>
@endsection    
    