<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/images/favicon.png" type="image/png" />
    <title>COVID - 19</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

    <!-- Extra Plugin CSS -->
    <link href="assets/vendors/taging-js/tagsinput.css" rel="stylesheet" />
    <link href="assets/vendors/nice-selector/css/nice-select.css" rel="stylesheet" />

    <!-- main css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body data-scroll-animation="true">
    <div class="body_wrapper">

        <!--================Preloader Area =================-->
        <div class="preloader">
          <div class="three-bounce">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
        </div>
        <!--================End Preloader Area =================-->
        <!--================Mobile Canvus Menu Area =================-->
         <div class="mobile_canvus_menu">
      <div class="close_btn">
        <img src="assets/images/icon/close-dark.png" alt="">
      </div>
      <div class="menu_part_lux">
        <ul class="menu_list wd_scroll">
          <li><a href="index.html">Trang chủ</a></li>
          <li>
            <a href="index.html">Phòng chống
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Các triệu chứng phổ biến</a></li>
              <li><a href="symptom-checker.html">Trình kiểm tra triệu chứng</a></li>
              <li><a href="prevention.html">Biện pháp phòng chống</a></li>
              <li><a href="tracker.html">Theo dõi tình hình</a></li>
              <li><a href="faq.html">FAQs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Tư vấn</a></li>
          <li>
            <a href="#">Giới thiệu
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="about.html">Về COVID-19</a></li>
              <li><a href="doctors.html">Đội ngũ bác sĩ</a></li>
              <li><a href="sample-right-sidebar.html">Tin tức</a></li>
              <li><a href="search.html">Tìm kiếm</a></li>
            </ul>
          </li>

          <li>
            <a href="index.html">Tin tức
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="blog.html">Tin tức</a></li>
              <li><a href="single-blog.html">Tin tức chi tiết</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Liên hệ</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Kiểm tra triệu chứng</a>
      </div>
    </div>
        <!--================End Mobile Canvus Menu Area =================-->

        <!--================Sidebar Form Area =================-->
        <div class="body_capture"></div>
    <section class="sidebar_widget scroll_body">
      <div class="info_sidebar_inner">
        <div class="close_btn">
          <img src="assets/images/icon/close.png" alt="">
        </div>
        <ul class="nav info_social">
          <li>
            <a href="#"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-vimeo-v"></i></a>
          </li>
        </ul>
        <div class="info_title">
          <h2>Liên lạc</h2>
          <p>Nếu bạn có bất kỳ câu hỏi nào trước khi chúng tôi bắt đầu, vui lòng điền vào bên dưới biểu mẫu liên hệ.</p>
        </div>
        <form action="#" class="appoinment_form js-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                <label><i class="linearicons-user"></i>Họ và tên</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                <label><i class="linearicons-envelope-open"></i>Email
                  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="number" name="number" placeholder="" required />
                <label><i class="linearicons-telephone"></i>số điện thoại
                  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                <label><i class="linearicons-document"></i>Nội dung  </label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group checkbox_field">
                <div class="checkbox">
                  <input type="checkbox" value="None" id="squared2" name="check" />
                  <label class="l_text" for="squared2">Tôi chấp nhận <span>Chính sách bảo mật</span></label>
                </div>
                <button type="submit" class="green_btn" name="appoinment" id="appoinment" value="appoinment"
                  data-value="appoinment">
                  Gửi
                </button>
              </div>
            </div>
          </div>
          <div class="success-message">
            <i class="fa fa-check text-primary"></i> Cảm ơn bạn!. Tin nhắn của bạn đã được gửi thành công...
          </div>
          <div class="error-message">Chúng tôi xin lỗi! Bạn đã nhập sai cú pháp</div>
        </form>
        <div class="info_footer">
          <p>© Bản quyền
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.
          </p>
          
        </div>
      </div>
    </section>
        <!--================End Sidebar Form Area =================-->

        <!--================Header Area =================-->
        <header class="header_area white_header">
            <ul class="nav menu_social flex-column">
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo-2.png" srcset="assets/images/logo-2-2x.png 2x" alt="" />
                            <img src="assets/images/logo.png" srcset="assets/images/logo-2x.png 2x" alt="" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li class="dropdown submenu active">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html"
                                        role="button" aria-haspopup="true" aria-expanded="false">Phòng chống  </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Các triệu chứng
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="symptom.html">Các triệu chứng phổ biến</a></li>
                        <li><a href="symptom-checker.html"> Kiểm tra triệu chứng</a></li>
                        <li><a href="prevention.html">Biện pháp phòng chống</a></li>
                        <li><a href="tracker.html">Theo dõi tình hình</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQS</a></li>
                                    </ul>
                                </li>
                                <li><a href="appointment.html">Tư vấn</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                         <li><a href="about.html">Corona Virus</a></li>
                    <li><a href="doctors.html">Đội ngũ bác sĩ</a></li>
                    <li><a href="sample-right-sidebar.html">Vaccien Phòng COVID-19 </a></li>
                                        <li class="dropdown submenu">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="search.html"
                                                role="button" aria-haspopup="true" aria-expanded="false">Tìm kiếm
                                                <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                                                    data-toggle="dropdown"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="search.html">Tìm kiếm</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Tin tức
                  </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Tin tức</a></li>
                    <li><a href="single-blog.html">Tin tức chi tiết</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Liên hệ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="checker_btn">
                  <a href="#"></i>Kiếm tra triệu chứng</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="right_burger">
                    <ul class="nav">
                        <li>
                            <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                                <img src="assets/images/icon/search-white.png" alt="" />
                                <img src="assets/images/icon/search.png" alt="" />
                            </div>
                        </li>
                        <li>
                            <div class="menu_btn">
                                <img src="assets/images/icon/burger-white.png" alt="" />
                                <img src="assets/images/icon/burger.png" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!--================End Header Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area dark_breadcrumb">
            <img class="tp_img" src="assets/images/breadcrumb/checker-banner-map.png" alt="">
            <div class="container">
                <div class="breadcrumb_text">
                    <h6>Nếu bạn nghi ngờ nhiễm COVID-19 </h6>
                    <h3>Hãy kiểm tra triệu chứng virus Corona</h3>
                    <ul class="nav justify-content-center">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="prevention.html">Phòng chống</a></li>
                        <li><a href="checker.html">Kiểm tra triệu chứng</a></li>
                    </ul>
                </div>
                <div class="row checker_box_inner">
                    <div class="col-lg-6">
                        <div class="checker_simple_text">
                            <h3>Điền vào mẫu kiểm tra đơn giản dưới đây</h3>
                            <p>Nhập thêm các triệu chứng để có kết quả chính xác hơn, bắt đầu với triệu chứng nghiêm trọng nhất của bạn. Xem qua danh sách các triệu chứng phổ biến.
                            </p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-lifebuoy"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Chúng tôi giúp bạn</h4>
                                            <p>Các chuyên gia của chúng tôi cho bạn lời khuyên</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-finger-tap"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Dễ sử dụng</h4>
                                            <p>4 bước rất đơn giản</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-tags"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>100% Miễn phí</h4>
                                            <p>Don’t worry about the cost</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-bubble-question"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>Thêm câu hỏi?</h4>
                                            <p>Liên hệ với chúng tôi, <br>chúng tôi trả lời bạn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checker_form">
                            <input type="text" data-role="tagsinput" value="Sốt,Ho"
                                placeholder="Bắt đầu nhập các triệu chứng...">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="radio_btn">
                                        <h5>Giới tính của bạn?</h5>
                                        <div class="select_conversation">
                                            <input type="radio" name="male" id="male" value="male">
                                            <label for="male">Nam</label>
                                        </div>
                                        <div class="select_conversation">
                                            <input type="radio" name="male" id="female" value="female">
                                            <label for="female">Nữ</label>
                                        </div>
                                    </div>
                                    <select class="nice_select checker_select">
                                        <option value="1">Chọn vùng giãn cách</option>
                                        <option value="2">Vùng Xanh</option>
                                        <option value="3">Vùng Cam</option>
                                        <option value="3">Vùng Đỏ</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                   <input type="numbers" data-role="tagsinput" 
                                placeholder="Nhập tuổi..." name="">
                                    <div class="button">
                                        <a class="submit_btn" href="#">Gửi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Breadcrumb Area =================-->

        <!--================Home About Area =================-->
        <section class="home_about_corona">
            <div class="container">
                <div class="danger_box alert-danger">
                    <p><i class="linearicons-warning"></i> Kết quả kiểm tra triệu chứng hiển thị danh sách các tình trạng có thể xảy ra, không phải chẩn đoán thực tế. Tham khảo ý kiến ​​bác sĩ nếu bạn lo lắng.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="symptom_instruction_text">
                            <h4>Giới thiệu</h4>
                            <p>Nếu bạn đang cảm thấy khó chịu với thời tiết nhưng không chắc đó có thể là gì, một công cụ kiểm tra triệu chứng trực tuyến có thể giúp bạn xác định liệu bạn có cần tìm kiếm sự chăm sóc y tế ngay lập tức hay không.
                            </p>
                            <p>Công cụ kiểm tra triệu chứng trực tuyến là máy tính yêu cầu người dùng nhập thông tin chi tiết về các dấu hiệu và triệu chứng bệnh tật, cùng với giới tính, tuổi tác và vị trí của họ. Bằng cách sử dụng các thuật toán máy tính, công cụ tự chẩn đoán sau đó sẽ đưa ra một loạt các điều kiện có thể phù hợp với các vấn đề mà người dùng đang gặp phải. Họ cũng có thể tư vấn cho ai đó có nên tìm kiếm lời khuyên từ chuyên gia chăm sóc sức khỏe hay không và mức độ khẩn cấp của việc làm như vậy.
                            </p>
                            <a class="text_btn" href="#">Đọc thêm  <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home_ab_text how_to_use">
                            <div class="home_ab_text_inner">
                                <div class="home_ab_item ">
                                    <h4>Cách sử dụng</h4>
                                    <p>Nhập các triệu chứng bằng từ ngữ của riêng bạn hoặc chọn từ danh sách thả xuống:</p>
                                    <ul class="nav">
                                        <li><a href="#"><i class="linearicons-arrow-right"></i>Nên dùng các thuật ngữ y tế, nhưng nếu bạn không rõ, chỉ cần nhập các triệu chứng bằng thuật ngữ bình thường, hàng ngày.
                                            </a></li>
                                        <li><a href="#"><i class="linearicons-arrow-right"></i>Nhập từng triệu chứng riêng biệt, phân tách bằng dấu phẩy.</a></li>
                                        <li><a href="#"><i class="linearicons-arrow-right"></i>Nhập ý nghĩa của kết quả xét nghiệm bất thường bằng từ chứ không phải bằng số: ví dụ: 'huyết áp cao' thay vì 'BP 160/100'</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home About Area =================-->

        <!--================Result Area =================-->
        <section class="result_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="result_box">
                            <h4>Kết quả</h4>
                            <ul class="nav flex-column">
                                <li>
                                    <span>Triệu chứng:</span>
                                    <a class="tag" href="#">fever</a>
                                    <a class="tag" href="#">sore throat</a>
                                </li>
                                <li>
                                    <span>Giới tính::</span>
                                    <a href="#">Female</a>
                                </li>
                                <li>
                                    <span>Tuổi:</span>
                                    <a href="#">25</a>
                                </li>
                                <li>
                                    <span>Vùng giãn cách:</span>
                                    <a href="#"> </a>
                                </li>
                            </ul>
                            <div class="circle_inner">
                                <div class="second circle">
                                    <strong></strong>
                                </div>
                            </div>
                            <div class="bottom_text text-center">
                                <h6>Tình trạng chuẩn đoán:</h6>
                                <h3>Risky</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="result_inner_text">
                            <div class="result_item">
                                <h4>Possible diagnoses</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <div class="result_item">
                                <h4>Description</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                    qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                            <div class="result_item">
                                <h4>Suggestion</h4>
                                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure
                                    reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                                    illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Make another check</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Result Area =================-->

        <!--================About Question Area =================-->
        <section class="about_question_area">
            <div class="container">
                <div class="main_title text-center">
                    <h5>No more about symptoms</h5>
                    <h2>Questions & Answers</h2>
                </div>
                <div class="row about_ques_inner">
                    <div class="col-lg-4">
                        <div class="about_ques_item">
                            <h4>How do I know if I’m sick nad what to do?</h4>
                            <p>Using an online symptom checker is simple. For instance, you might be a 45 year old woman
                                from the UK who is currently experiencing headache, a fever and a sore throat. Inputting
                                this information into the symptom checker will give you some likely ‘common’ diagnoses.
                                These include: strep throat, tonsillitis, sinusitis and flu.
                            </p>
                            <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about_ques_item">
                            <h4>What’s the difference between a sign and a symptom?</h4>
                            <p>‘Sign’ and ‘symptom’ are often used interchangeably, but if we’re going to be pedantic,
                                they do actually mean different things.
                                If you’re feeling ill it might not be immediately obvious to somebody looking at you
                                that you’re sick. For instance, if you’re experiencing pain, fatigue or dizziness, only
                                you know what that feels like. These are symptoms - which can only be described by the
                                person experiencing them.
                            </p>
                            <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about_ques_item">
                            <h4>How safe and accurate are symptom checkers?</h4>
                            <p>Most doctors agree that online symptom checkers are can encourage people with
                                life-threatening symptoms to seek urgent attention, potentially saving lives. They’re
                                also useful for reassuring patients who may have sought urgent care when they didn’t
                                need to.
                            </p>
                            <a class="text_btn" href="#">Read more <i class="linearicons-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="warning_box alert-warning">
                    <div class="media">
                        <div class="d-flex">
                            <i class="linearicons-notification"></i>
                        </div>
                        <div class="media-body">
                            <h4>Disclaimer</h4>
                            <p>This symptom checker is provided by Isabel Healthcare Limited. Isabel Symptom Checker
                                ("Isabel") and any content accessed through Isabel is for informational purposes only,
                                and is not intended to constitute professional medical advice, diagnosis or treatment.
                                EMIS shall be in no way responsible for your use of Isabel, or any information that you
                                obtain from Isabel. You acknowledge that when using Isabel you do so at your own choice
                                and in agreement with this disclaimer. Do not ignore or delay obtaining professional
                                medical advice because of information accessed through Isabel. Seek immediate medical
                                assistance or call your doctor for all medical emergencies. By using Isabel you agree to
                                the <a href="#">terms and conditions.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End About Question Area =================-->

        <!--================App Area =================-->
        <section class="app_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="app_text">
                            <h2>Get <span>epidemic</span> app!</h2>
                            <p>
                                Download our app now, track Coronavirus cases real-time and
                                follow instant updates.
                            </p>
                            <a class="wow fadeIn" data-wow-delay="400" href="#"><img src="assets/images/apple-btn.png"
                                    alt="" /></a>
                            <a class="wow fadeIn" data-wow-delay="500" href="#"><img src="assets/images/google-btn.png"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app_mobile">
                            <div class="mobile_image">
                                <img src="assets/images/mobile-1.png" alt="" />
                                <img class="wow fadeInUp" data-wow-delay="500ms" src="assets/images/mobile-2.png"
                                    alt="" />
                            </div>
                            <ul class="corona_img nav">
                                <li>
                                    <img src="assets/images/icon/app-virus-1.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-2.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-3.png" alt="" />
                                </li>
                                <li data-parallax='{"y": -100}'>
                                    <img src="assets/images/icon/app-virus-4.png" alt="" />
                                </li>
                                <li data-parallax='{"y": 100}'>
                                    <img src="assets/images/icon/app-virus-5.png" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/icon/app-virus-6.png" alt="" />
                                </li>
                                <li data-parallax='{"y": -200}'>
                                    <img src="assets/images/icon/app-virus-7.png" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End App Area =================-->

        <!--================Subscribe Area =================-->
        <section class="subscribe_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="media">
                            <div class="d-flex">
                                <i class="linearicons-mailbox-full"></i>
                            </div>
                            <div class="media-body">
                                <h4>Subscribe our newsletter</h4>
                                <p>
                                    Join our subscribers list to get latest news and updates
                                    about COVID-19 delivered directly in your inbox.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mail_box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="&#xe997; Enter your email"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="linearicons-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                            <label class="container-checkbox">I accept the <span>Privacy Policy.</span>
                                <input type="checkbox" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Subscribe Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area pad_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="ct_wd_text">
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-telephone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h5>emergency call</h5>
                                            <a href="tel:+8801676790690">
                                                <h4>+61 (8) 8234 3555</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>
                                                78-66 State Route 33,<br />
                                                Brighton VIC 3186, AUSTRALIA
                                            </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="fab fa-skype"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="skype:md.rocky79">
                                                <h6>Skype ID: <span>epidemic.org</span></h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="d-flex">
                                            <i class="linearicons-envelope-open"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="mailto:rockybd1995@gmail.com">
                                                <h6>Email: <span>hi@epidemic.org</span></h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <aside class="f_widget list_widget">
                                <div class="f_title">
                                    <h3>Prevention</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <aside class="f_widget list_widget">
                                <div class="f_title">
                                    <h3>Protection</h3>
                                </div>
                                <ul class="nav flex-column">
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Typical
                                            Symptoms</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How to
                                            Protect</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>How are
                                            spreading</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>Meet our
                                            Doctors</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="linearicons-radio-button"></i>About
                                            Coronavirus</a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <aside class="f_widget about_widget">
                                <div class="f_title">
                                    <h3>About</h3>
                                </div>
                                <p>
                                    The disease was first identified in 2019 in Wuhan, the
                                    capital of Hubei, China, and has since spread globally,
                                    resulting in the 2019–2020 coronavirus pandemic.
                                </p>
                                <ul class="nav">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <img src="assets/images/f-logo.png" alt="">
                    <p>© Copyright
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Epidemic Organisation Ltd.</p>
                    <ul class="nav">
                        <li><a href="#">Term of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Impressum</a></li>
                    </ul>
                    <h6>
                        Designed with <i class="linearicons-heart"></i>
                        by <span>creakits</span>
                    </h6>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <div class="modal fade search_modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <img src="assets/images/icon/close-white.png" alt="">
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type here..."
                            aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i
                                    class="linearicons-magnifier"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/vendors/corona-live/dashboard.js"></script>
    <script src="assets/vendors/isotop/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotop/isotope.pkgd.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
    <script src="assets/vendors/taging-js/tagsinput.js"></script>
    <script src="assets/vendors/nice-selector/js/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="assets/vendors/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendors/animate-css/wow.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEQhXdvO2Yz16kSBaeBzLt7wWRkECXmlg"></script>
    <script src="assets/js/gmaps.min.js"></script>
    <script src="assets/js/map-active.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>