@extends('frontend.layout.appfe')
@section('content')

<main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/advice.css')}}">
    <style>/*swiper.css*/
    </style>
    <!-- <section class="cb-career-advice-nav">
        <div class="container">
            <div class="category-name">
                <h4>Danh mục</h4>
                <h4 class="active">Danh mục</h4>
                <em class="mdi mdi-chevron-down"></em>
            </div>
            <div class="button-search">
                <em class="mdi icon-change"></em>
                <div class="show-hide">
                    <div class="searchbox">
                        <input type="text" id="keynews_mb" placeholder="Nhập từ khóa" name="keynews" maxlength="200" value="">
                        <button type="button" id="search_news_mb" class="btn-gradient">
                        <em class="mdi mdi-magnify"></em></button>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <ul class="list-nav-left">
                    <li>
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity">Mới nhất</a></div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/bi-quyet-tim-viec">Bí quyết tìm việc<em class="mdi mdi-chevron-down"></em></a></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/bi-quyet-tim-viec/phong-van-thanh-cong">Phỏng vấn thành công</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/bi-quyet-tim-viec/ho-so-an-tuong">Hồ sơ ấn tượng</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/bi-quyet-tim-viec/ho-so-mau">Hồ sơ mẫu</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown active">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/tu-van-nghe-nghiep">Tư vấn nghề nghiệp<em class="mdi mdi-chevron-down"></em></a></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/tu-van-nghe-nghiep/vuot-qua-thu-thach">Vượt qua thử thách</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/tu-van-nghe-nghiep/phat-trien-su-nghiep">Phát triển sự nghiệp</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/thang-tien-su-nghiep">Thăng tiến sự nghiệp<em class="mdi mdi-chevron-down"></em></a></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thang-tien-su-nghiep/con-duong-su-nghiep">Con đường sự nghiệp</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thang-tien-su-nghiep/phat-trien-ban-than">Phát triển bản thân</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thang-tien-su-nghiep/work-from-home">Work From Home</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thang-tien-su-nghiep/dam-phan-luong">Đàm phán lương</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/thi-truong-va-xu-huong">Thị trường &amp; Xu hướng<em class="mdi mdi-chevron-down"></em></a></div>
                        <div class="dropdown-menu">
                            <ul>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thi-truong-va-xu-huong/thi-truong-lao-dong">Thị trường lao động</a></li>
                                <li> <a href="https://careerbuilder.vn/vi/talentcommunity/thi-truong-va-xu-huong/bao-cao-khao-sat">Báo cáo - Khảo sát</a></li>
                                <li><a href="https://careerbuilder.vn/employerofchoice-winner-2021" target="_blank" class="link_menu">Employer of Choice</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/wiki-career">Wiki Career</a></div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/thu-gian">Thư giãn</a></div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/phu-nu">Dành cho Phụ nữ</a></div>
                    </li>
                    <li class="dropdown ">
                        <div class="title"><a href="https://careerbuilder.vn/vi/talentcommunity/tien-ich-su-nghiep">Tiện ích</a></div>
                    </li>
                    <li class="button-search">
                        <em class="mdi icon-change"></em>
                        <div class="show-hide">
                            <div class="searchbox">
                                <input type="text" id="keynews" placeholder="Nhập từ khóa" name="keynews" maxlength="200" value="">
                                <button type="button" id="search_news" class="btn-gradient"><em class="mdi mdi-magnify"></em></button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="list-nav-right"><a href="https://careerbuilder.vn/vi/hiringsite" target="_blank" title="Cẩm nang tuyển dụng">Cẩm nang tuyển dụng</a></div>
            </div>
        </div>
    </section> -->
    <script type="text/javascript">
        $(document).ready(function(){
        	$("#keynews").on('keyup', function (e) {
        		if (e.key === 'Enter' || e.keyCode === 13) {
        			$("#search_news").trigger("click");
        		}
        	});
        	$("#keynews_mb").on('keyup', function (e) {
        		if (e.key === 'Enter' || e.keyCode === 13) {
        			$("#search_news_mb").trigger("click");
        		}
        	});
        	$("#search_news").on('click',function(){
        		var keyword = $('#keynews').val().replace(/([\/\,\:\;\=\$\&\-\_\+\.\"\'])/g, "").trim();
        		//var keyword = $('#keynews').val().replace(/[^\u0000-\u007f]/g, "").trim();
        		$('#keynews').val(keyword);
        		keyword = keyword.replace(/\s+/g, "-");
        		if(keyword == ""){
        			$('#keynews').focus();
        			return false;
        		}
        		location.href = PATH_KIEMVIEC + "talentcommunity/search/title/"+keyword;
        	});
        	$("#search_news_mb").on('click',function(){
        		var keyword = $('#keynews_mb').val().replace(/([\/\,\:\;\=\$\&\-\_\+\.\"\'])/g, "").trim();
        		$('#keynews').val(keyword);
        		keyword = keyword.replace(/\s+/g, "-");
        		if(keyword == ""){
        			$('#keynews_mb').focus();
        			return false;
        		}
        		location.href = PATH_KIEMVIEC + "talentcommunity/search/title/"+keyword;
        	});
        });
    </script>
    <section class="cb-career-advice-detail-breakcrumb">
        <div class="container">
            <ul class="breakcrumb">
                <li> <a href="https://careerbuilder.vn/vi/talentcommunity">Home</a></li>
                <li><a href="https://careerbuilder.vn/vi/talentcommunity/tu-van-nghe-nghiep">Tư vấn nghề nghiệp</a></li>
                <li><a href="https://careerbuilder.vn/vi/talentcommunity/phat-trien-su-nghiep">Phát triển sự nghiệp</a></li>
                <li class="active"><a href="https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html">Bí kíp tạo ấn tượng đầu tiên tuyệt vời</a></li>
            </ul>
        </div>
    </section>
    <section class="cb-career-advice-detail" id="uni_container">
        <div class="container" id="infinite" style="margin-bottom:20px;">
            <div class="row">
                <div class="col-lg-9-custom">
                    <div class="box-news">
                        <div class="cb-title">
                            <h1>Bí kíp tạo ấn tượng đầu tiên tuyệt vời</h1>
                        </div>
                        <div class="view-number">
                            <p>Lượt xem: <span>11,655</span></p>
                        </div>
                        <div class="career-advice-detail-share-social">
                            <ul>
                                <li class="facebook"><a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Facebook"><em class="mdi mdi-facebook"></em></a></li>
                                <li class="linkedin"><a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Linkedin"><em class="mdi mdi-linkedin"></em></a></li>
                                <li class="email"><a href="https://api.addthis.com/oexchange/0.8/forward/email/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Email"><em class="mdi mdi-email"></em></a></li>
                                <li class="gmail"><a href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Gmail"><em class="mdi mdi-gmail"></em></a></li>
                                <li class="zalo">
                                    <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize="false" style="position: relative; display: inline-block; width: 20px; height: 20px;"><iframe id="78108f0b-65e3-4d1c-8a4e-2ca223ae2275" name="78108f0b-65e3-4d1c-8a4e-2ca223ae2275" frameborder="0" allowfullscreen="" scrolling="no" width="20px" height="20px" src="https://button-share.zalo.me/share_inline?id=78108f0b-65e3-4d1c-8a4e-2ca223ae2275&amp;layout=2&amp;color=white&amp;customize=false&amp;width=20&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fbi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;d=eyJ1cmwiOiJodHRwczovL2NhcmVlcmJ1aWxkZXIudm4vdmkvdGFsZW50Y29tbXVuaXR5L2JpLWtpcC10YW8tYW4tdHVvbmctZGF1LXRpZW4tdHV5ZXQtdm9pLjM1QTUxRUNBLmh0bWwifQ%253D%253D&amp;shareType=0" style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe></div>
                                </li>
                            </ul>
                        </div>
                        <div class="full-content">
                            <p style="text-align: justify;"><strong>Bạn chỉ có một cơ hội để tạo ấn tượng đầu tiên - điều này đúng trong nhiều tình huống, từ phỏng vấn xin việc cho đến tiếp thị sản phẩm với khách hàng. Làm thế nào để bạn tạo được ấn tượng tốt đẹp khó quên với mọi người?</strong></p>
                            <p style="text-align: justify;">Nhận thức cảm tính là nhận thức thấp nhất, nhưng xuất hiện đầu tiên khi chúng ta đánh giá điều gì đó. Vì thế, chúng ta có thói quen phán đoán về người khác chỉ trong 1 nano giây - dù không cố ý, hay dù đã nhắc nhở bản thân phải lý trí và khách quan. Và một khi ấn tượng đó được hình thành, thì rất khó để thay đổi nó.</p>
                            <p style="text-align: center;"><img alt="" src="https://images.careerbuilder.vn/content/images/bi-kip-tao-an-tuong-dau-tien-tuyet-voi-careerbuilder.jpg" style="width: 600px; height: 402px;"><br>
                                <em style="text-align: justify;">Tình bạn nơi công sở có thể đến từ ấn tượng đầu tiên tuyệt vời</em>
                            </p>
                            <p style="text-align: justify;">Vì vậy, các mối quan hệ công việc sẽ dễ dàng hơn rất nhiều nếu biết cách tạo ấn tượng ban đầu một cách tích cực và ấn tượng.</p>
                            <h2 style="text-align: justify;">Chuẩn bị về bối cảnh</h2>
                            <p style="text-align: justify;">Trước lần đầu gặp ai đó - cho dù đó là <a href="https://careerbuilder.vn/vi/talentcommunity/co-nen-lam-viec-cho-ban-be.35A51CF8.html" target="_blank">nhà tuyển dụng tiềm năng</a> hay khách hàng mới - hãy chuẩn bị kiến thức trước: họ là ai, họ quan tâm đến điều gì và họ có thể cần gì ở bạn. Mục tiêu là trong cuộc gặp gỡ đầu tiên, bạn thể hiện rằng bạn hiểu vấn đề mà người khác đang cố gắng giải quyết và bạn có cách để giúp họ. Để đảm bảo hiệu quả, bạn nên chuẩn bị 2 hoặc 3 vấn đề mấu chốt mà bạn muốn trình bày. Thứ tự của chúng có thể tùy thuộc vào tình huống, nhưng nhìn chung, chúng phải thể hiện kiến ​​thức, khả năng hoạch định chiến lược và sự hiểu biết của bạn về lĩnh vực đang nói tới. Lý tưởng nhất là bạn đề cập đến chúng “một cách tự nhiên” nhưng chủ động. Ít nhất, hãy khiến đối phương thấy được các lý do cho thấy họ cần bạn.</p>
                            <h2 style="text-align: justify;">Lưu ý đến ngôn ngữ cơ thể của bạn</h2>
                            <p style="text-align: justify;">Lo lắng khi gặp một ai đó mới là bình thường, nhưng sự tự tin và thoải mái lại luôn cuốn hút người khác. Vì thế, luyện tập không bao giờ là thừa: ngồi thẳng lưng, bước đi với tư thế ngẩng cao đầu. Đối với các cuộc gặp gỡ đặc biệt quan trọng, bạn cũng có thể tự quay video chính mình để biết người khác sẽ nhìn thấy mình như thế nào. <a href="https://careerbuilder.vn/vi/talentcommunity/quan-ly-su-nghiep-va-dieu-ban-chua-biet.35A51B04.html" target="_blank">Quan sát bản thân</a> theo cách này sẽ giúp bạn xác định cách để cải thiện hình ảnh. Nhờ ai đó nhiều năm trong nghề đóng vai phỏng vấn cũng có hiệu quả rất tốt vì họ có thể mang lại đánh giá khách quan.</p>
                            <h2 style="text-align: justify;">Thể hiện thế mạnh của bạn</h2>
                            <p style="text-align: justify;">Thật tuyệt nếu có những người có thể giúp bạn biết ấn tượng của người khác về bạn. Hãy hỏi họ xem điểm mạnh, điểm nổi bật của bạn và những điều đáng yêu nhất ở bạn là gì - rồi thể hiện những điều đó khi bạn gặp một người mới. Thử nghĩ về những lời khen ngợi mà bạn đã nhận được từ đồng nghiệp và sếp. Nhiệm vụ tiếp theo là “lượng hóa” những lời khen ngợi đó thành những thông tin dễ hình dung khi bạn giới thiệu về bản thân. Ví dụ: nếu sếp nói rằng bạn là một nhà quản lý tốt, hãy tìm kiếm các chỉ số để chứng minh. Ví dụ: các báo cáo cho thấy nhóm của bạn có thành tích tốt hơn so với trước khi bạn làm quản lý. Số đông mọi người thường thích <a href="https://careerbuilder.vn/vi/talentcommunity/the-su-thay-doi-tang-cuong-ky-nang.35A51CA2.html" target="_blank">những người thành công</a>. Vì thế, trong trường hợp này, khiêm tốn quá không hẳn là tốt.</p>
                            <p style="text-align: center;"><img alt="" src="https://images.careerbuilder.vn/content/images/the-hien-the-manh-cua-ban-careerbuilder.jpg" style="width: 600px; height: 338px;"><br>
                                <em style="text-align: justify;">Sự quan tâm chân thành ý nghĩa hơn mọi lời khen có cánh</em>
                            </p>
                            <h2 style="text-align: justify;">Tìm điểm chung</h2>
                            <p style="text-align: justify;">Một cách khác để xây dựng mối quan hệ là “tìm mối liên kết hoặc điểm chung. Mối quan hệ không cần phải “sâu sắc” - có thể đơn giản là học cùng trường đại học, có con bằng tuổi hoặc gần đây đã đọc cùng một cuốn sách... Mục đích là tạo ra một kết nối đời thường giữa người với người. Điều này đòi hỏi bạn phải tìm hiểu trước một chút về họ: họ yêu thích đội bóng - danh nhân - điểm du lịch nào… chẳng han. Vấn đề là, bạn hãy đề cập đến nếu bạn thực sự có chung sở thích, bởi nếu họ phát hiện ra bạn “fake”, thì điều đó không khác gì sự lừa dối.</p>
                            <h2 style="text-align: justify;">Tương tác và hấp dẫn</h2>
                            <p style="text-align: justify;">Sai lầm phổ biến nhất mà mọi người mắc phải khi cố gắng tạo ấn tượng tốt là họ nghĩ rằng họ phải gây ấn tượng với người đối diện bằng kiến ​​thức hoành tráng. Nhưng một <a href="https://careerbuilder.vn/vi/talentcommunity/lam-quen-ky-nang-moi-lang-nghe-thau-cam.35A51D32.html" target="_blank">cuộc trò chuyện hấp dẫn</a> không phải là khiến người khác “chói mắt”, mà khiến người ta ghi nhớ và hài lòng khi nghĩ về nó. Vì vậy, hãy lắng nghe những gì họ nói. Bạn càng khiến người khác cảm thấy được quan tâm, thì họ càng có xu hướng có ấn tượng tích cực về bạn. Những câu hỏi gợi mở, chu đáo mang lại nhiều sức mạnh cũng như giúp mối quan hệ phát triển một cách tự nhiên.</p>
                            <h2 style="text-align: justify;">Nuôi dưỡng lâu dài</h2>
                            <p style="text-align: justify;">Khi cuộc gặp mặt đầu tiên kết thúc, bạn cần có các tương tác tiếp theo nếu muốn xây dựng một mối quan hệ lâu bền. Ví dụ: hãy add facebook, instagram hoặc một <a href="https://careerbuilder.vn/vi/talentcommunity/3-dieu-chua-biet-ve-tao-hinh-tuong-ao.35A51DC6.html" target="_blank">tài khoản mạng xã hội</a> quen thuộc nào đó với họ để hai bên có thể tương tác qua lại. Thể hiện rằng bạn muốn kết nối qua việc bình luận những điều họ chia sẻ sẽ cho thấy bạn thực lòng quan tâm tới họ như một người bạn, chứ không phải một <a href="https://careerbuilder.vn/vi/talentcommunity/ban-da-biet-cach-hoi-tham-ve-co-hoi-viec-lam.35A51E84.html" target="_blank">đầu mối có lợi cho công việc</a>.</p>
                            <p style="text-align: justify;">Tất nhiên, mối quan hệ lâu bền nhất là mối quan hệ dựa trên sự quan tâm thực lòng, tôn trọng, lịch sự và hướng tới mục tiêu tích cực. Và không có mối quan hệ tốt nào mà không cần thời gian nuôi dưỡng. Cũng lưu ý rằng: nếu bạn <em>quá</em> cố gắng để thể hiện sự nhiệt tình với ai đó, khả năng cao là họ sẽ nhìn ra sự thiếu tự nhiên của bạn, và nghĩ rằng bạn không chân thành. Vì thế, một lần nữa, mọi thứ nên diễn ra một cách thoải mái như con người bạn vốn là. CareerBuilder chúc bạn có những người bạn tốt trên đường đời, đồng nghiệp chân thành trong sự nghiệp.</p>
                            <p style="text-align: justify;"><em>Nguồn ảnh: Pexels</em></p>
                            <div class="source-information">
                                <p>&nbsp; CareerBuilder</p>
                            </div>
                        </div>
                    </div>
                    <div class="tags">
                        <div class="title">
                            <h6>Tags</h6>
                        </div>
                        <ul class="list-tags">
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/%E1%BA%A5n-t%C6%B0%E1%BB%A3ng-ban-%C4%91%E1%BA%A7u">ấn tượng ban đầu</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/t%C3%ACnh-b%E1%BA%A1n-c%C3%B4ng-s%E1%BB%9F">tình bạn công sở</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/%C4%91%E1%BB%93ng-nghi%E1%BB%87p">đồng nghiệp</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/li%C3%AAn-h%E1%BB%87-ngh%E1%BB%81-nghi%E1%BB%87p">liên hệ nghề nghiệp</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/quan-h%E1%BB%87-c%C3%B4ng-vi%E1%BB%87c">quan hệ công việc</a></li>
                            <li><a href="https://careerbuilder.vn/vi/talentcommunity/search/tag/ph%E1%BB%8Fng-v%E1%BA%A5n">phỏng vấn</a></li>
                        </ul>
                    </div>
                    <div class="banner-similar">
                        <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- TINTUC_Home_n_Cates_Top_728x100 -->
                        <ins class="adsbygoogle" style="display:inline-block;width:728px;height:100px" data-ad-client="ca-pub-3855030188092185" data-ad-slot="8621598275" data-adsbygoogle-status="done" data-ad-status="filled"><ins id="aswift_0_expand" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 100px; width: 728px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"><ins id="aswift_0_anchor" style="border: none; height: 100px; width: 728px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block;"><iframe id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;border:0;width:728px;height:100px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="728" height="100" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-3855030188092185&amp;output=html&amp;h=100&amp;slotname=8621598275&amp;adk=3740848569&amp;adf=1187671893&amp;pi=t.ma~as.8621598275&amp;w=728&amp;lmt=1657493195&amp;psa=1&amp;format=728x100&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fbi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;wgl=1&amp;uach=WyJMaW51eCIsIjUuNC4wIiwieDg2IiwiIiwiOTkuMC40ODQ0LjUxIixbXSxudWxsLG51bGwsIjY0IixbWyIgTm90IEE7QnJhbmQiLCI5OS4wLjAuMCJdLFsiQ2hyb21pdW0iLCI5OS4wLjQ4NDQuNTEiXSxbIkdvb2dsZSBDaHJvbWUiLCI5OS4wLjQ4NDQuNTEiXV0sZmFsc2Vd&amp;dt=1657493195005&amp;bpp=7&amp;bdt=724&amp;idt=185&amp;shv=r20220706&amp;mjsv=m202207060101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;correlator=5737594844529&amp;frm=20&amp;pv=2&amp;ga_vid=1088387647.1657493183&amp;ga_sid=1657493195&amp;ga_hid=115156873&amp;ga_fc=1&amp;u_tz=420&amp;u_his=1&amp;u_h=900&amp;u_w=1600&amp;u_ah=873&amp;u_aw=1533&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=54&amp;ady=2812&amp;biw=1518&amp;bih=739&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31068347%2C42531605&amp;oid=2&amp;pvsid=3185343493320231&amp;tmod=1263731652&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fcareerbuilder.vn%2Fvi&amp;eae=0&amp;fc=640&amp;brdim=67%2C27%2C67%2C27%2C1533%2C27%2C1533%2C873%2C1533%2C739&amp;vis=1&amp;rsz=%7C%7CpeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;btvi=1&amp;fsb=1&amp;xpc=iPsIoWkHRW&amp;p=https%3A//careerbuilder.vn&amp;dtd=226" data-google-container-id="a!1" data-google-query-id="CLLI_aiz7_gCFY4DXAod-eQFbQ" data-load-complete="true"></iframe></ins></ins></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                    <div class="share-this-news">
                        <span>Chia sẻ bài viết:</span>
                        <a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Facebook"><span class="fa fa-facebook"></span></a>
                        <a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Linkedin"><span class="fa fa-linkedin"></span></a>
                        <a href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;pubid=ra-559220ee7f9c15d6&amp;title=Bí kíp tạo ấn tượng đầu tiên tuyệt vời&amp;ct=1&amp;pco=tbxnj-1.0" target="_blank" title="Gmail"><span class="fa fa-envelope"></span></a>
                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize="false" style="position: relative; display: inline-block; width: 20px; height: 20px;"><iframe id="1e18a978-b0c6-4732-94da-62f7eded2e9f" name="1e18a978-b0c6-4732-94da-62f7eded2e9f" frameborder="0" allowfullscreen="" scrolling="no" width="20px" height="20px" src="https://button-share.zalo.me/share_inline?id=1e18a978-b0c6-4732-94da-62f7eded2e9f&amp;layout=2&amp;color=white&amp;customize=false&amp;width=20&amp;height=20&amp;isDesktop=true&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fbi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;d=eyJ1cmwiOiJodHRwczovL2NhcmVlcmJ1aWxkZXIudm4vdmkvdGFsZW50Y29tbXVuaXR5L2JpLWtpcC10YW8tYW4tdHVvbmctZGF1LXRpZW4tdHV5ZXQtdm9pLjM1QTUxRUNBLmh0bWwifQ%253D%253D&amp;shareType=0" style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe></div>
                    </div>
                    <!-- <div class="similar-post">
                        <div class="cb-title">
                            <h2>Bài viết cùng chuyên mục</h2>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/30-60-90-lo-trinh-cho-nhan-vien-moi.35A51CB4.html"><img src="https://images.careerbuilder.vn/tintuc/career/20210831/330x180/1630393168_p4.jpg" class="lazy-bg" style=""></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/30-60-90-lo-trinh-cho-nhan-vien-moi.35A51CB4.html">
                                                <h5>30-60-90: Lộ trình cho nhân viên mới</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Rất nhiều người trong chúng ta bước vào một công việc mới, công ty mới một cách bản năng. Có người may mắn khi bản năng đưa ra các lựa chọn hành động đúng. Có người phải loay hoay rất lâu để làm quen với môi trường. Kế hoạch 30-60-90 ngày đầu tiên sẽ giúp bạn tiết kiệm thời gian.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/30-60-90-lo-trinh-cho-nhan-vien-moi.35A51CB4.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/cac-khau-quyet-tim-viec-thoi-dai-dich.35A51C1E.html"><img src="https://images.careerbuilder.vn/tintuc/career/20210615/330x180/1623725021_tim-viec-thoi-dai-dich-careerbuilder.jpg" class="lazy-bg" style=""></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cac-khau-quyet-tim-viec-thoi-dai-dich.35A51C1E.html">
                                                <h5>Các khẩu quyết tìm việc thời đại dịch</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Hiện đang là giai đoạn nhiều doanh nghiệp hoạt động cầm chừng và ngưng việc tuyển dụng. Viễn cảnh có vẻ xám xịt với người đang tìm việc. Tuy nhiên, trong nguy không phải không có cơ. Hãy thử xem những bí quyết sau đây của CareerBuilder có giúp bạn trở thành ứng viên sáng giá giữa thời kỳ khó khăn này không.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cac-khau-quyet-tim-viec-thoi-dai-dich.35A51C1E.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/tra-sua-cho-su-nghiep-dong-luc-de-tran-day-cam-hung.35A51B49.html"><img src="https://images.careerbuilder.vn/tintuc/career/20210303/330x180/1614765903_03032021_7.jpg" class="lazy-bg" style=""></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/tra-sua-cho-su-nghiep-dong-luc-de-tran-day-cam-hung.35A51B49.html">
                                                <h5>Trà sữa cho sự nghiệp - động lực để tràn đầy cảm hứng</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Tết nhất chưa qua, dịch dã đã tới…
                                            Cho dù bạn đang tìm kiếm một công việc hoàn hảo, hay phấn đấu cho công việc hiện tại hay tự khởi nghiệp, sẽ có lúc bạn mất tập trung và nản lòng cho sự nghiệp của mình. Cảm giác hoang mang vì đại dịch cùng những hậu quả của nó cũng có thể lấn át tinh thần làm việc và khiến bạn rệu rã.
                                            Bộ sưu tập những câu nói truyền cảm hứng cho công việc của những người đàn ông và phụ nữ thành đạt trong lịch sử có thể sẽ là ly trà sữa gia tăng cảm hứng, giúp bạn tiếp tục đương đầu với cả thế giới.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/tra-sua-cho-su-nghiep-dong-luc-de-tran-day-cam-hung.35A51B49.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/cau-hoi-kho-ban-muon-thay-minh-o-dau-sau-5-nam.35A51B06.html"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/blank.gif" data-src="https://images.careerbuilder.vn/tintuc/career/20210122/330x180/1611307189_5.png" class="lazy-bg"></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cau-hoi-kho-ban-muon-thay-minh-o-dau-sau-5-nam.35A51B06.html">
                                                <h5>Câu hỏi khó: "Bạn muốn thấy mình ở đâu sau 5 năm?"</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Đôi khi đang phỏng vấn cho một công việc mới, bạn có thể nhận được câu hỏi: "Bạn muốn thấy mình ở đâu sau 5 năm nữa?". Bạn khó có thể biết sự nghiệp của mình ra sao trong năm tới, chứ đừng nói đến 5 năm. Nhưng suy nghĩ thật nghiêm túc và cẩn thận, có khi bạn cũng tìm ra câu trả lời ý nghĩa cho chính mình.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cau-hoi-kho-ban-muon-thay-minh-o-dau-sau-5-nam.35A51B06.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/10-cach-de-tu-duy-ben-ngoai-chiec-hop.35A51ADE.html"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/blank.gif" data-src="https://images.careerbuilder.vn/tintuc/career/20210104/330x180/1609744088_17.png" class="lazy-bg"></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/10-cach-de-tu-duy-ben-ngoai-chiec-hop.35A51ADE.html">
                                                <h5>10 cách để tư duy 'bên ngoài chiếc hộp'</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Suy nghĩ thoát ra ngoài khuôn mẫu sẽ giúp bạn phát triển sự nghiệp, nhất là trong thời điểm kinh tế nhiều biến động như hiện nay. Đã đến lúc bước ra khỏi vùng an toàn để nâng tầm bản thân lẫn công việc rồi.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/10-cach-de-tu-duy-ben-ngoai-chiec-hop.35A51ADE.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4 item">
                                <div class="figure">
                                    <div class="image">
                                        <a href="https://careerbuilder.vn/vi/talentcommunity/6-meo-khi-duoc-hoi-ve-khoang-trong-su-nghiep.35A51AC2.html"><img src="https://static.careerbuilder.vn/themes/kiemviecv32/images/graphics/blank.gif" data-src="https://images.careerbuilder.vn/tintuc/career/20201218/330x180/1608280974_24.png" class="lazy-bg"></a>
                                    </div>
                                    <div class="figcaption">
                                        <div class="title">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/6-meo-khi-duoc-hoi-ve-khoang-trong-su-nghiep.35A51AC2.html">
                                                <h5>6 mẹo khi được hỏi về khoảng trống sự nghiệp</h5>
                                            </a>
                                        </div>
                                        <div class="content">
                                            Nói về đề tài này quá nhiều hoặc quá ít với Nhà tuyển dụng đều không ổn. Vậy nói chi tiết đến mức nào là ổn? Đây có lẽ là câu hỏi mà nhiều nhân sự quan tâm sau một năm 2020 bị ảnh hưởng sự nghiệp vì COVID-19.
                                        </div>
                                        <div class="view-more">
                                            <a href="https://careerbuilder.vn/vi/talentcommunity/6-meo-khi-duoc-hoi-ve-khoang-trong-su-nghiep.35A51AC2.html">
                                            Xem thêm
                                            <em class="mdi mdi-arrow-right"></em>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
               <!--  <div class="col-lg-3-custom">
                    <div class="list-career-right">
                        <div class="item-career-right">
                            <div class="banner">
                                <script type="text/javascript">
                                    OA_show(854);
                                </script><a href="https://ads.careerbuilder.vn/www/delivery/ck.php?oaparams=2__bannerid=5709__zoneid=854__cb=6823666138__oadest=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fnam-moi-lam-moi-thuong-hieu-ca-nhan.35A51DB1.html%3Futm_source%3DCBbanner%26utm_medium%3DShareProfile%26utm_campaign%3DShareProfile" target="_blank"><img src="https://ads.careerbuilder.vn/www/images/695e68bae66aa5f692d62f330e1c132f.jpg" width="390" height="270" alt="" title="" border="0"></a>
                                <div id="beacon_6823666138" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://ads.careerbuilder.vn/www/delivery/lg.php?bannerid=5709&amp;campaignid=1671&amp;zoneid=854&amp;loc=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fbi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;referer=https%3A%2F%2Fcareerbuilder.vn%2Fvi&amp;cb=6823666138" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>
                            </div>
                        </div>
                        <div class="item-career-right">
                            <div class="banner">
                                <script language="JavaScript1.1">var yctred='{clickurl_enc}';document.write("<scr" + "ipt type='text/javascript' src='https://careerbuilder.vn/vi/jobseekers/index/widget?verb=init&size=300x600&industry=&location=4,&level=&utm=utm_source:Job_Ad_Widget,utm_medium:Jobs_North,utm_campaign:Job_Ad_Widget_North&limit=10'></scr"+"ipt>");</script><script type="text/javascript" src="https://careerbuilder.vn/vi/jobseekers/index/widget?verb=init&amp;size=300x600&amp;industry=&amp;location=4,&amp;level=&amp;utm=utm_source:Job_Ad_Widget,utm_medium:Jobs_North,utm_campaign:Job_Ad_Widget_North&amp;limit=10"></script><iframe id="cb_widget" width="300" height="600" src="https://careerbuilder.vn/vi/jobseekers/index/widget?industry=&amp;location=4&amp;level=&amp;limit=40&amp;size=300x600&amp;utm=utm_source:Job_Ad_Widget,utm_medium:Jobs_North,utm_campaign:Job_Ad_Widget_North&amp;c_enc={clickurl_enc}" frameborder="0" scrolling="no"></iframe><script type="text/javascript">window.onload = function (){var CB_widthScreen = window.innerWidth; var CB_widthBox = '300'; if(CB_widthScreen < CB_widthBox){document.getElementById('cb_widget').width = CB_widthScreen;} window.addEventListener('resize', function(event){var CB_widthScreen = window.innerWidth;  if(CB_widthScreen <= CB_widthBox){document.getElementById('cb_widget').width = CB_widthScreen;}});}</script>
                            </div>
                        </div>
                        <div class="item-career-right">
                            <div class="widget widget-7">
                                <div class="widget-head">
                                    <div class="cb-title-h3">
                                        <h3>Quan tâm</h3>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="content">
                                        <p>Thông báo việc làm - Hoàn toàn miễn phí và dễ dàng </p>
                                    </div>
                                    <a href="https://careerbuilder.vn/thong-bao-viec-lam" title="TẠO NGAY" target="_blank">TẠO NGAY</a> 
                                </div>
                            </div>
                        </div>
                        <div class="item-career-right">
                            <div class="widget widget-8">
                                <div class="widget-head">
                                    <div class="cb-title-h3">
                                        <h3>Bài viết nổi bật</h3>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-250px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 250px;">
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/xay-dung-thoi-quen-cho-nguoi-hay-burn-out.35A51F2D.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220623/crop/100x55/1655952510_xay-dung-thoi-quen-cho-nguoi-hay-burn-out-careerbuilder.jpg" alt="Xây dựng thói quen cho người hay &quot;burn-out&quot;"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/xay-dung-thoi-quen-cho-nguoi-hay-burn-out.35A51F2D.html" target="_blank">
                                                                <h6>Xây dựng thói quen cho người hay "burn-out"</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/mo-loi-voi-sep-chuyen-thuyen-chuyen.35A51F22.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220621/crop/100x55/1655804222_mo-loi-voi-sep-chuyen-thuyen-chuyen-careerbuilder.jpg" alt="Mở lời với sếp chuyện thuyên chuyển"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/mo-loi-voi-sep-chuyen-thuyen-chuyen.35A51F22.html" target="_blank">
                                                                <h6>Mở lời với sếp chuyện thuyên chuyển</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/ban-bi-qua-tai-dung-phan-nan.35A51EFE.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220607/crop/100x55/1654569900_ban-bi-qua-tai-dung-phan-nan-careerbuilder.jpg" alt="Bạn bị quá tải? Đừng phàn nàn"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/ban-bi-qua-tai-dung-phan-nan.35A51EFE.html" target="_blank">
                                                                <h6>Bạn bị quá tải? Đừng phàn nàn</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/khong-kho-de-thanh-cong-trong-vi-tri-moi.35A51EFF.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220607/crop/100x55/1654570220_khong-kho-de-thanh-cong-trong-vi-tri-moi-careerbuilder.jpg" alt="Không khó để thành công trong vị trí mới"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/khong-kho-de-thanh-cong-trong-vi-tri-moi.35A51EFF.html" target="_blank">
                                                                <h6>Không khó để thành công trong vị trí mới</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220519/crop/100x55/1653882240_bi-kip-tao-an-tuong-dau-tien-tuyet-voi-careerbuilder.jpg" alt="Bí kíp tạo ấn tượng đầu tiên tuyệt vời"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html" target="_blank">
                                                                <h6>Bí kíp tạo ấn tượng đầu tiên tuyệt vời</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 250px;">
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/ban-co-the-quyet-dinh-cho-so-dong.35A51F40.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220706/crop/100x55/1657072934_ban-co-the-quyet-dinh-cho-so-dong-careerbuilder.jpg" alt="Bạn có thể quyết định cho số đông"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/ban-co-the-quyet-dinh-cho-so-dong.35A51F40.html" target="_blank">
                                                                <h6>Bạn có thể quyết định cho số đông</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/luu-giu-thong-tin-gi-truoc-khi-nghi-viec.35A51F3F.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220704/crop/100x55/1656917159_luu-giu-thong-tin-gi-truoc-khi-nghi-viec-careerbuilder.jpg" alt="Lưu giữ thông tin gì trước khi nghỉ việc?"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/luu-giu-thong-tin-gi-truoc-khi-nghi-viec.35A51F3F.html" target="_blank">
                                                                <h6>Lưu giữ thông tin gì trước khi nghỉ việc?</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/mac-gi-cho-buoi-phong-van-mua-he.35A51F34.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220629/crop/100x55/1656473420_mac-gi-cho-buoi-phong-van-mua-he-careerbuilder.jpg" alt="Mặc gì cho buổi phỏng vấn mùa hè?"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/mac-gi-cho-buoi-phong-van-mua-he.35A51F34.html" target="_blank">
                                                                <h6>Mặc gì cho buổi phỏng vấn mùa hè?</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/cac-cach-lich-su-de-tu-choi-loi-moi-hop.35A51F33.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220628/crop/100x55/1656406694_cac-cach-lich-su-de-tu-choi-loi-moi-hop-careerbuilder.jpg" alt="Các cách lịch sự để từ chối lời mời họp"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cac-cach-lich-su-de-tu-choi-loi-moi-hop.35A51F33.html" target="_blank">
                                                                <h6>Các cách lịch sự để từ chối lời mời họp</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/careerbuilder-vietnam-va-dai-hoc-thu-dau-mot-ky-ket-hop-tac-trong-cong-tac-tu-van-va-phat-trien-viec-lam-cho-sinh-vien.35A51F32.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220628/crop/100x55/1656401996_le-ky-ket-bien-ban-ghi-nho-hop-tac-careerbuilder.jpg" alt="CareerBuilder Vietnam và Đại học Thủ Dầu Một ký kết hợp tác trong công tác tư vấn và phát triển việc làm cho sinh viên"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/careerbuilder-vietnam-va-dai-hoc-thu-dau-mot-ky-ket-hop-tac-trong-cong-tac-tu-van-va-phat-trien-viec-lam-cho-sinh-vien.35A51F32.html" target="_blank">
                                                                <h6>CareerBuilder Vietnam và Đại học Thủ Dầu Một ký kết hợp tác trong công tác tư vấn và phát triển việc làm cho sinh viên</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 250px;">
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/xay-dung-thoi-quen-cho-nguoi-hay-burn-out.35A51F2D.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220623/crop/100x55/1655952510_xay-dung-thoi-quen-cho-nguoi-hay-burn-out-careerbuilder.jpg" alt="Xây dựng thói quen cho người hay &quot;burn-out&quot;"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/xay-dung-thoi-quen-cho-nguoi-hay-burn-out.35A51F2D.html" target="_blank">
                                                                <h6>Xây dựng thói quen cho người hay "burn-out"</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/mo-loi-voi-sep-chuyen-thuyen-chuyen.35A51F22.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220621/crop/100x55/1655804222_mo-loi-voi-sep-chuyen-thuyen-chuyen-careerbuilder.jpg" alt="Mở lời với sếp chuyện thuyên chuyển"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/mo-loi-voi-sep-chuyen-thuyen-chuyen.35A51F22.html" target="_blank">
                                                                <h6>Mở lời với sếp chuyện thuyên chuyển</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/ban-bi-qua-tai-dung-phan-nan.35A51EFE.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220607/crop/100x55/1654569900_ban-bi-qua-tai-dung-phan-nan-careerbuilder.jpg" alt="Bạn bị quá tải? Đừng phàn nàn"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/ban-bi-qua-tai-dung-phan-nan.35A51EFE.html" target="_blank">
                                                                <h6>Bạn bị quá tải? Đừng phàn nàn</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/khong-kho-de-thanh-cong-trong-vi-tri-moi.35A51EFF.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220607/crop/100x55/1654570220_khong-kho-de-thanh-cong-trong-vi-tri-moi-careerbuilder.jpg" alt="Không khó để thành công trong vị trí mới"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/khong-kho-de-thanh-cong-trong-vi-tri-moi.35A51EFF.html" target="_blank">
                                                                <h6>Không khó để thành công trong vị trí mới</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220519/crop/100x55/1653882240_bi-kip-tao-an-tuong-dau-tien-tuyet-voi-careerbuilder.jpg" alt="Bí kíp tạo ấn tượng đầu tiên tuyệt vời"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html" target="_blank">
                                                                <h6>Bí kíp tạo ấn tượng đầu tiên tuyệt vời</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 250px;">
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/ban-co-the-quyet-dinh-cho-so-dong.35A51F40.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220706/crop/100x55/1657072934_ban-co-the-quyet-dinh-cho-so-dong-careerbuilder.jpg" alt="Bạn có thể quyết định cho số đông"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/ban-co-the-quyet-dinh-cho-so-dong.35A51F40.html" target="_blank">
                                                                <h6>Bạn có thể quyết định cho số đông</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/luu-giu-thong-tin-gi-truoc-khi-nghi-viec.35A51F3F.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220704/crop/100x55/1656917159_luu-giu-thong-tin-gi-truoc-khi-nghi-viec-careerbuilder.jpg" alt="Lưu giữ thông tin gì trước khi nghỉ việc?"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/luu-giu-thong-tin-gi-truoc-khi-nghi-viec.35A51F3F.html" target="_blank">
                                                                <h6>Lưu giữ thông tin gì trước khi nghỉ việc?</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/mac-gi-cho-buoi-phong-van-mua-he.35A51F34.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220629/crop/100x55/1656473420_mac-gi-cho-buoi-phong-van-mua-he-careerbuilder.jpg" alt="Mặc gì cho buổi phỏng vấn mùa hè?"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/mac-gi-cho-buoi-phong-van-mua-he.35A51F34.html" target="_blank">
                                                                <h6>Mặc gì cho buổi phỏng vấn mùa hè?</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/cac-cach-lich-su-de-tu-choi-loi-moi-hop.35A51F33.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220628/crop/100x55/1656406694_cac-cach-lich-su-de-tu-choi-loi-moi-hop-careerbuilder.jpg" alt="Các cách lịch sự để từ chối lời mời họp"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/cac-cach-lich-su-de-tu-choi-loi-moi-hop.35A51F33.html" target="_blank">
                                                                <h6>Các cách lịch sự để từ chối lời mời họp</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="figure">
                                                        <div class="image"><a href="https://careerbuilder.vn/vi/talentcommunity/careerbuilder-vietnam-va-dai-hoc-thu-dau-mot-ky-ket-hop-tac-trong-cong-tac-tu-van-va-phat-trien-viec-lam-cho-sinh-vien.35A51F32.html" target="_blank"><img src="https://images.careerbuilder.vn/tintuc/career/20220628/crop/100x55/1656401996_le-ky-ket-bien-ban-ghi-nho-hop-tac-careerbuilder.jpg" alt="CareerBuilder Vietnam và Đại học Thủ Dầu Một ký kết hợp tác trong công tác tư vấn và phát triển việc làm cho sinh viên"></a></div>
                                                        <div class="figcaption">
                                                            <a href="https://careerbuilder.vn/vi/talentcommunity/careerbuilder-vietnam-va-dai-hoc-thu-dau-mot-ky-ket-hop-tac-trong-cong-tac-tu-van-va-phat-trien-viec-lam-cho-sinh-vien.35A51F32.html" target="_blank">
                                                                <h6>CareerBuilder Vietnam và Đại học Thủ Dầu Một ký kết hợp tác trong công tác tư vấn và phát triển việc làm cho sinh viên</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-button">
                                            <div class="button-prev" tabindex="0" role="button" aria-label="Previous slide"><em class="mdi mdi-chevron-left"></em></div>
                                            <div class="button-next" tabindex="0" role="button" aria-label="Next slide"><em class="mdi mdi-chevron-right"></em></div>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-career-right">
                            <script type="text/javascript">var CURRENT_LANGUAGE = 'vi';</script>
                            <script type="text/javascript">var STATIC_TN = "https://static.talentnetwork.vn/talentnetwork/source/";</script>
                            <script type="text/javascript" src="https://static.talentnetwork.vn/talentnetwork/source/js/widget_salary_cb.js"></script>
                            <div id="frm_calc_dynamic_talentnetwork" style="height:100%">
                                <script type="text/javascript" src="https://static.talentnetwork.vn/talentnetwork/source/js/jquery.formatCurrency-1.4.0.js"></script>
                                <script type="text/javascript" src="https://static.talentnetwork.vn/talentnetwork/source/js/autoNumeric.js"></script>
                                <script type="text/javascript" src="https://static.talentnetwork.vn/talentnetwork/source/js/widget_function_cb.js?t=4"></script>
                                <script type="text/javascript">
                                    var TN 		= 'https://careerbuilder.talentnetwork.vn';
                                    var LANG	= 'vi';
                                </script>
                                <div class="widget widget-5">
                                    <div class="widget-head">
                                        <div class="cb-title-h3">
                                            <h3>Bảng Tính Lương Mẫu</h3>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="cb-sub-title">
                                            <p>Bảng tính lương mẫu, tính lương Gross, tính lương NET, thuế thu nhập cá nhân</p>
                                        </div>
                                        <div class="title">
                                            <h4 onclick="window.open('https://careerbuilder.vn/tinh-luong-gross-net', '_blank')">Tính nâng cao</h4>
                                        </div>
                                        <div class="main-form">
                                            <form method="post">
                                                <div class="form-group form-text">
                                                    <input type="text" name="gross_salary" value="" onkeyup="this.setAttribute('value', this.value);" class="auto" id="gross_salary" data-a-sep="," data-a-dec=".">
                                                    <label>* Nhập mức lương tổng – VNĐ</label>
                                                </div>
                                                <div class="form-group form-text">
                                                    <input type="text" name="num_of_depend" value="" onkeyup="this.setAttribute('value', this.value);" id="num_of_depend">
                                                    <label>* Số người phụ thuộc</label>
                                                </div>
                                                <div class="form-group form-submit"><a class="btn-gradient" href="javascript:void(0)" onclick="calSalary(1);">Tính lương NET</a></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="salary-calculator-modal" id="salary_advange" style="display: none">
                                    <div class="modal-title">
                                        <h3>Bảng Tính Lương Mẫu (Gross <em class="mdi mdi-arrow-right"> </em>NET)</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-calculate">
                                            <div class="form-group currency row">
                                                <div class="col-lg-4">
                                                    <div class="radio-group">
                                                        <div class="frm-radio">
                                                            <input type="radio" id="vnd" name="currency" value="vnd">
                                                            <label for="vnd">VNĐ</label>
                                                        </div>
                                                        <div class="frm-radio">
                                                            <input type="radio" id="usd" name="currency" value="usd">
                                                            <label for="usd">USD</label>
                                                        </div>
                                                        <div class="currency" style="display:none;" id="divCurrency">
                                                            <span class="fl_left">1 USD = </span><input type="text" name="default_usd" id="default_usd" value="23000" readonly="">
                                                            <a class="refesh" href="javascript:void(0);" onclick="refeshValue();"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8"></div>
                                            </div>
                                            <div class="form-group salary-total row">
                                                <div class="col-lg-4">
                                                    <label for="">Tổng Lương</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="gross_salary_adv" class="auto" id="gross_salary_adv" value="Nhập mức lương tổng – VNĐ" data-a-sep="," data-a-dec=".">
                                                        <span class="input-group-addon"><span id="span_unit">VNĐ</span> (Thu nhập chịu thuế)</span> 
                                                    </div>
                                                </div>
                                                <div class="row" style="display:none;" id="divChangeSalary">
                                                    <label><span id="span_salary" style="padding-left:139px;"></span><input type="hidden" name="change_salary" id="change_salary" value="0"><span>&nbsp;VNĐ</span></label>
                                                </div>
                                            </div>
                                            <div class="form-group salary-total row">
                                                <div class="col-lg-4">
                                                    <label for="">Trợ cấp</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="allowances_salary" class="auto" id="allowances_salary" value="Nhập trợ cấp - VNĐ" onfocus="javascript:if(this.value=='Nhập trợ cấp - VNĐ') this.value='';" onblur="if(this.value=='') this.value='Nhập trợ cấp - VNĐ';" data-a-sep="," data-a-dec=".">
                                                        <span class="input-group-addon">VNĐ (Không tính thuế)</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-title">
                                                <h4>Bảo Hiểm</h4>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <div class="radio-group">
                                                        <div class="frm-radio">
                                                            <input type="radio" id="full-wage" name="chkFullWage" value="1" checked="checked">
                                                            <label for="full-wage">Trên lương chính thức</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <div class="radio-group">
                                                        <div class="frm-radio">
                                                            <input type="radio" id="other" name="chkFullWage" value="2">
                                                            <label for="other">Khác</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" disabled="disabled" class="auto" name="fullwageOther" id="fullwageOther" data-a-sep="," data-a-dec=".">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="display:none;">
                                                <div class="col-lg-4">
                                                    <label for="">Mức trần BHXH</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" value="26,000,000" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row" style="display:none;">
                                                <div class="col-lg-4">
                                                    <label for="">Lương tối thiểu</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" value="1490000" name="minium_wage" id="minium_wage" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Loại lao động</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="select-group">
                                                        <select name="training_worker" id="training_worker">
                                                            <option value="1"> Đã qua đào tạo</option>
                                                            <option value="2"> Chưa qua đào tạo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">BHXH</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="social" id="social" value="8" readonly="" disabled="disabled" style="color: black;">
                                                        <span class="input-group-addon">%</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">BHYT</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="health" id="health" value="1.5" readonly="" disabled="disabled" style="color: black;">
                                                        <span class="input-group-addon">%</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Thất nghiệp</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="unemployed" id="unemployed" value="1" readonly="" disabled="disabled" style="color: black;">
                                                        <span class="input-group-addon">%</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <div>
                                                        <input style="width:auto;height:auto" type="checkbox" name="chkTradeUnion" id="chkTradeUnion" value="1" checked="checked">
                                                        <label for="trade-union">Công đoàn</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="trade_union" id="trade_union" value="1" style="color: black;">
                                                        <span class="input-group-addon">%</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Vùng</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="select-group">
                                                        <select name="region" id="region">
                                                            <option value="1"> Vùng 1</option>
                                                            <option value="2"> Vùng 2</option>
                                                            <option value="3"> Vùng 3</option>
                                                            <option value="4"> Vùng 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Giá trị tối thiểu của Vùng</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="region_min_value" id="region_min_value" class="auto" value="0" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Mức trần BHTN</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="region_value" id="region_value" class="auto" value="0" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Giảm trừ cá nhân</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="reduct_personal" id="reduct_personal" value="11000000" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VNĐ</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-title">
                                                <h4>Giảm trừ gia cảnh</h4>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Số người phụ thuộc</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="select-group">
                                                        <select name="num_of_depend_adv" id="num_of_depend_adv">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-4">
                                                    <label for="">Giảm trừ gia cảnh</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="input-group">
                                                        <input type="text" name="reduct_family" id="reduct_family" value="0" readonly="" disabled="disabled">
                                                        <span class="input-group-addon">VND</span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-button row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-8">
                                                    <div class="button-group">
                                                        <div class="calculate"><a class="btn-gradient" href="javascript:void(0)" onclick="calSalary(2);">Tính lương NET</a></div>
                                                        <div class="cancel"><a class="btn-cancel" href="javascript:void(0)" data-fancybox-close="">Hủy</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-foot">
                                        <p><strong style="color:red">Ghi chú:</strong></p>
                                        <p>- Những số này chỉ là ước tính thu nhập tạm thời hàng tháng.</p>
                                        <p>- Đơn vị tiền tệ tính bằng <strong style="color:red">VNĐ</strong> (Việt Nam Đồng).</p>
                                        <p>- Không áp dụng cho người nước ngoài đang công tác tại Việt Nam.</p>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var arrRange = [5000000,10000000,18000000,32000000,52000000,80000000];				
                                    var arrRangeMinus = [0,250000,750000,1650000,3250000,5850000,9850000];	
                                    var arrRegionMinSalary = [0,4420000,3920000,3430000,3070000];
                                    var arrRegionMaxSalary = [0,88400000,78400000,68600000,61400000];
                                    var config_basic_salary = 1490000;
                                    var config_salary = 20*parseInt(config_basic_salary);
                                    var config_max_unemployed = 20*parseInt(arrRegionMinSalary[1]);
                                    var config_salary_unemployed = arrRegionMaxSalary[1];
                                    var config_min_salary_unemployed = arrRegionMinSalary[1];
                                    var _language = {
                                    	msg_gross_salary_in_VND:'Nhập mức lương tổng – VNĐ',
                                    	msg_gross_salary_in_USD:'Nhập mức lương tổng – USD',
                                    	msg_please_enter_gross_salary:'Vui lòng nhập lương tổng',
                                    	msg_number_of_dependants:'Số người phụ thuộc',
                                    	msg_please_enter_num_of_dependants:'Nhập số người phụ thuộc',
                                    	msg_unemployed_default:'1',
                                    	msg_trade_union_default:'1',	
                                    	msg_please_enter_fullwage_other:'Vui lòng nhập giá trị lương khác',
                                    	msg_reduct_family_default:'4400000',
                                    	msg_num_of_depend_limit:'Số người phụ thuộc vượt giới hạn cho phép',	
                                    	msg_vnd:'VNĐ',
                                    	msg_usd:'USD',
                                            msg_trained_worker:'Đã qua đào tạo',
                                            msg_not_trained_worker:'Chưa qua đào tạo'		
                                    }
                                    $(document).ready(function () {
                                        /*$('.widget-5 .widget-body .title h4').on('click', function () {
                                            $.fancybox.open($(".salary-calculator-modal"));
                                        })*/
                                        $("input[data-type='currency']").on({
                                            keyup: function () {
                                                formatCurrency($(this));
                                            },
                                            blur: function () {
                                                formatCurrency($(this), "blur");
                                            }
                                        });
                                        
                                        
                                        
                                        
                                    });
                                    function formatNumber(n) {
                                        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
                                    }
                                    
                                    function formatCurrency(input, blur) {
                                        // appends $ to value, validates decimal side
                                        // and puts cursor back in right position.
                                    
                                        // get input value
                                        var input_val = input.val();
                                    
                                        // don't validate empty input
                                        if (input_val === "") {
                                            return;
                                        }
                                    
                                        // original length
                                        var original_len = input_val.length;
                                    
                                        // initial caret position 
                                        var caret_pos = input.prop("selectionStart");
                                    
                                        // check for decimal
                                        if (input_val.indexOf(",") >= 0) {
                                    
                                            // get position of first decimal
                                            // this prevents multiple decimals from
                                            // being entered
                                            var decimal_pos = input_val.indexOf(",");
                                    
                                            // split number by decimal point
                                            var left_side = input_val.substring(0, decimal_pos);
                                            var right_side = input_val.substring(decimal_pos);
                                    
                                            // add commas to left side of number
                                            left_side = formatNumber(left_side);
                                    
                                            // validate right side
                                            right_side = formatNumber(right_side);
                                    
                                            // On blur make sure 2 numbers after decimal
                                            if (blur === "blur") {
                                                right_side += "";
                                            }
                                    
                                            // Limit decimal to only 2 digits
                                            right_side = right_side.substring(0, 2);
                                    
                                            // join number by .
                                            input_val = left_side + "," + right_side;
                                    
                                        } else {
                                            // no decimal entered
                                            // add commas to number
                                            // remove all non-digits
                                            input_val = formatNumber(input_val);
                                            input_val = input_val;
                                    
                                            // final formatting
                                            if (blur === "blur") {
                                                input_val += "";
                                            }
                                        }
                                    
                                        // send updated string to input
                                        input.val(input_val);
                                    
                                        // put caret back in the right position
                                        var updated_len = input_val.length;
                                        caret_pos = updated_len - original_len + caret_pos;
                                        input[0].setSelectionRange(caret_pos, caret_pos);
                                    }
                                    
                                </script>
                                <div style="display: none">
                                    <div id="SalaryResult" class="wrapDialog msgbox">
                                        <h2>Chi tiết lương VNĐ</h2>
                                        <div class="container">
                                            <div class="st_gird">
                                                <table cellspacing="0" cellpadding="0" class="tblJob CoreGeneral">
                                                    <tbody>
                                                        <tr class="header">
                                                            <td width="60%" class="pad_left20">Tên</td>
                                                            <td align="right" class="pad_right10">Giá trị</td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20"><strong>Lương GROSS</strong></td>
                                                            <td align="right" class="pad_right10"><strong class="red" id="gross_salary_result">0</strong></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20">Loại lao động</td>
                                                            <td align="right" class="pad_right10"><span id="training_worker_result">&nbsp;</span></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20">BHXH</td>
                                                            <td align="right" class="pad_right10">-<span id="socical_result">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20">BHYT</td>
                                                            <td align="right" class="pad_right10">-<span id="health_result">0</span></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20">Bảo hiểm thất nghiệp</td>
                                                            <td align="right" class="pad_right10">-<span id="unemployed_result">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20">Phí công đoàn</td>
                                                            <td align="right" class="pad_right10">-<span id="trade_union_result">0</span></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20"><strong>Thu nhập trước thuế</strong></td>
                                                            <td align="right" class="pad_right10"><span class="red" id="salary_tax">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20">Giảm trừ cá nhân</td>
                                                            <td align="right" class="pad_right10">-<span id="reduct_personal_result">0</span></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20">Giảm trừ gia cảnh</td>
                                                            <td align="right" class="pad_right10">-<span id="reduct_family_result">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20"><strong>Thu nhập chịu thuế</strong></td>
                                                            <td align="right" class="pad_right10"><strong class="red" id="tax_income">0</strong></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20">Thuế thu nhập cá nhân</td>
                                                            <td align="right" class="pad_right10">-<span id="personal_income_tax">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20"><strong>Lương NET</strong> (Thu nhập sau thuế)</td>
                                                            <td align="right" class="pad_right10"><strong class="red" id="total_result">0</strong></td>
                                                        </tr>
                                                        <tr class="record bg">
                                                            <td class="pad_left20">Trợ cấp</td>
                                                            <td align="right" class="pad_right10"><span id="total_allowances">0</span></td>
                                                        </tr>
                                                        <tr class="record">
                                                            <td class="pad_left20"><strong>Tổng thu nhập</strong></td>
                                                            <td align="right" class="pad_right10"><strong class="red" id="total_result_finished">0</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <ul class="ActionCtrl">
                                                <li class="download"><a href="javascript:void(0);" id="btn_export">Tải về</a></li>
                                                <li class="print"><a href="javascript:void(0);" onclick="$('.ActionCtrl').hide();printDiv('SalaryResult');$('.ActionCtrl').show();">In</a></li>
                                                <li style="float:right;"><a href="http://careerbuilder.vn/vi/talentcommunity/huong-dan-tinh-thue-thu-nhap-ca-nhan.35A51374.html?utm_source=salarysoft&amp;utm_medium=click&amp;utm_campaign=PayrollGuide" target="_blank">Hướng Dẫn Tính Lương</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                    	$('.auto').autoNumeric('init');
                                    	$('#btn_export').click(function(){				
                                                    window.open(TN+'/'+LANG+'/widget/export?gross_salary_result='+$('#gross_salary_result').html()+'&training_worker_result='+$('#training_worker_result').html()+'&socical_result='+$('#socical_result').html()+'&health_result='+$('#health_result').html()+'&unemployed_result='+$('#unemployed_result').html()+'&trade_union_result='+$('#trade_union_result').html()+'&salary_tax='+$('#salary_tax').html()+'&reduct_personal_result='+$('#reduct_personal_result').html()+'&reduct_family_result='+$('#reduct_family_result').html()+'&tax_income='+$('#tax_income').html()+'&personal_income_tax='+$('#personal_income_tax').html()+'&total_result='+$('#total_result').html()+'&total_allowances='+$('#total_allowances').html()+'&total_result_finished='+$('#total_result_finished').html());
                                            });
                                        $('#region').change(function() {
                                           var v = $(this).val();
                                           config_salary_unemployed = arrRegionMaxSalary[v];
                                           $('#region_value').val(config_salary_unemployed).formatCurrency();
                                           config_min_salary_unemployed = arrRegionMinSalary[v];
                                           $('#region_min_value').val(config_min_salary_unemployed).formatCurrency();
                                           config_max_unemployed = 20*parseInt(arrRegionMinSalary[v]);
                                        });
                                        $('#region').trigger('change');
                                    });
                                    function printDiv(divName) {
                                       /* var printContents = document.getElementById(divName).innerHTML;	 
                                    	if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ){
                                        	var originalContents = document.body.innerHTML;	 
                                    		 document.body.innerHTML = printContents;
                                    		 window.print();	  
                                    		 document.body.innerHTML = originalContents;
                                    		 window.close();	
                                    	}else{
                                    		w=window.open();
                                    		 w.document.write(printContents);
                                    		 w.print();
                                    		 w.close();	
                                    	}*/
                                    	window.open(TN+'/'+LANG+'/widget/print?gross_salary_result='+$('#gross_salary_result').html()+'&training_worker_result='+$('#training_worker_result').html()+'&socical_result='+$('#socical_result').html()+'&health_result='+$('#health_result').html()+'&unemployed_result='+$('#unemployed_result').html()+'&trade_union_result='+$('#trade_union_result').html()+'&salary_tax='+$('#salary_tax').html()+'&reduct_personal_result='+$('#reduct_personal_result').html()+'&reduct_family_result='+$('#reduct_family_result').html()+'&tax_income='+$('#tax_income').html()+'&personal_income_tax='+$('#personal_income_tax').html()+'&total_result='+$('#total_result').html()+'&total_allowances='+$('#total_allowances').html()+'&total_result_finished='+$('#total_result_finished').html());
                                    }
                                </script>
                            </div>
                            <script type="text/javascript">init_widget_cb_salary_new("https://careerbuilder.talentnetwork.vn")</script>
                        </div>
                        <div class="item-career-right skybanner">
                            <div class="banner">
                                <script type="text/javascript">
                                    OA_show(772);
                                </script>
                            </div>
                        </div>
                        <div class="item-career-right">
                            <div class="widget widget-9">
                                <script type="text/javascript">
                                    <!--// <![CDATA[
                                    /* [id873] CB_JSK_JobList_310x600 */
                                    OA_show(873);
                                    // ]]>
                                    -->
                                </script>
                            </div>
                            <div class="banner">
                                <script async="" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- CAREERBUILDER_Advice_300x250 -->
                                <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-3855030188092185" data-ad-slot="7325430778" data-adsbygoogle-status="done" data-ad-status="filled"><ins id="aswift_1_expand" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 250px; width: 300px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"><ins id="aswift_1_anchor" style="border: none; height: 250px; width: 300px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:300px;height:250px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="300" height="250" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-3855030188092185&amp;output=html&amp;h=250&amp;slotname=7325430778&amp;adk=1136314724&amp;adf=2139167110&amp;pi=t.ma~as.7325430778&amp;w=300&amp;lmt=1657493195&amp;psa=1&amp;format=300x250&amp;url=https%3A%2F%2Fcareerbuilder.vn%2Fvi%2Ftalentcommunity%2Fbi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html&amp;wgl=1&amp;uach=WyJMaW51eCIsIjUuNC4wIiwieDg2IiwiIiwiOTkuMC40ODQ0LjUxIixbXSxudWxsLG51bGwsIjY0IixbWyIgTm90IEE7QnJhbmQiLCI5OS4wLjAuMCJdLFsiQ2hyb21pdW0iLCI5OS4wLjQ4NDQuNTEiXSxbIkdvb2dsZSBDaHJvbWUiLCI5OS4wLjQ4NDQuNTEiXV0sZmFsc2Vd&amp;dt=1657493195251&amp;bpp=6&amp;bdt=970&amp;idt=6&amp;shv=r20220706&amp;mjsv=m202207060101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;prev_fmts=728x100&amp;correlator=5737594844529&amp;frm=20&amp;pv=1&amp;ga_vid=1088387647.1657493183&amp;ga_sid=1657493195&amp;ga_hid=115156873&amp;ga_fc=1&amp;u_tz=420&amp;u_his=1&amp;u_h=900&amp;u_w=1600&amp;u_ah=873&amp;u_aw=1533&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=1159&amp;ady=231&amp;biw=1518&amp;bih=739&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31068347%2C42531605&amp;oid=2&amp;pvsid=3185343493320231&amp;tmod=1263731652&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fcareerbuilder.vn%2Fvi&amp;eae=0&amp;fc=640&amp;brdim=67%2C27%2C67%2C27%2C1533%2C27%2C1533%2C873%2C1533%2C739&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=0&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;xpc=IQJJ0GAKBu&amp;p=https%3A//careerbuilder.vn&amp;dtd=16" data-google-container-id="a!2" data-google-query-id="CL3e_6iz7_gCFdoLXAod-84MMw" data-load-complete="true"></iframe></ins></ins></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <script type="application/ld+json">
        {
        	"@context": "http://schema.org",
        	"@type": "NewsArticle",
        	"mainEntityOfPage": "https://careerbuilder.vn/vi/talentcommunity/bi-kip-tao-an-tuong-dau-tien-tuyet-voi.35A51ECA.html",
        	"headline": "Bí kíp tạo ấn tượng đầu tiên tuyệt vời",
        	"author": {
        		"@type": "Person",
        		"name": "Admin"
        	},
        	"publisher": {
        		"@type": "Organization",
        		"name": "Careerbuilder",
        		"logo": {
        			"@type": "ImageObject",
        			"url": "https://static.careerbuilder.vn/themes/careerbuilder/img/logo.png",
        			"width": 245,
        			"height": 37
        		}
        	},
        	"image": {
        		"@type": "ImageObject",
        		"url": "https://images.careerbuilder.vn/tintuc/career/20220519/400x700/1653882240_bi-kip-tao-an-tuong-dau-tien-tuyet-voi-careerbuilder.jpg",
        		"width": 400,
        		"height": 700
        	},
        	"datePublished": "2022-05-19",
        	"dateModified": "2022-07-11",
        	"keywords": [
        		"ấn tượng ban đầu","tình bạn công sở","đồng nghiệp","liên hệ nghề nghiệp","quan hệ công việc","phỏng vấn"	],
        	"sameAs" : "https://www.facebook.com/CareerbuilderVietnam/"
        }
    </script>
    <script src="{{ asset('js/swiper.js') }}">
        
    </script>
    <script>
        var DOMAIN_KV = 'https://careerbuilder.vn';
        var options = {
        	listpages : [
        		
        				"30-60-90-lo-trinh-cho-nhan-vien-moi.35A51CB4",
        				"cac-khau-quyet-tim-viec-thoi-dai-dich.35A51C1E",
        				"dau-truong-chinh-tri-cong-so-dung-lam-nan-nhan.35A51BDD",
        				"nhung-dieu-sinh-vien-nam-cuoi-nen-chuan-bi.35A51BB2",
        				"7-cach-tranh-tram-cam-vi-cong-viec.35A51B94",
        				
        	],
        	pageloadurl : 'https://careerbuilder.vn/careertool/detailinfiniteajax/?type=0&layoutnew=1&news_id=',
        	threshold : 800,
        	scrollelement: "#uni_container",
        	displayelement: "#infinite",
        
        };
        //var scrollinfinite = Scrollinfinite;
        ScrollInfinite.init(options);
        ScrollInfinite.run();
    </script>
    <div class="back-drop"></div>
</main>
@endsection