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
  <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
  <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
  <link rel="stylesheet" href="assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.css" />
  <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />
  <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />

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
          <li><a href="index.html">Home</a></li>
          <li>
            <a href="index.html">Prevention
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="symptom.html">Typical Symptoms</a></li>
              <li><a href="symptom-checker.html">Symptom Checker</a></li>
              <li><a href="prevention.html">Prevention</a></li>
              <li><a href="virus-checker.html">Coronavirus Checker</a></li>
              <li><a href="tracker.html">Tracker</a></li>
              <li><a href="maintenance.html">Maintenance</a></li>
              <li><a href="faq.html">Faqs</a></li>
            </ul>
          </li>
          <li><a href="appointment.html">Appointment</a></li>
          <li class="active">
            <a href="#">Pages
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="about.html">About</a></li>
              <li><a href="doctors.html">Doctors</a></li>
              <li><a href="sample-right-sidebar.html">Simple Sidebar</a></li>
              <li><a href="typography.html">Typhography</a></li>
              <li><a href="search.html">Search</a></li>
              <li><a href="search-nothing.html">Not Found</a></li>
              <li><a href="comingsoon.html">Coming Soon</a></li>
              <li><a href="404.html">Error</a></li>
            </ul>
          </li>

          <li>
            <a href="index.html">Blog
              <i class="linearicons-chevron-down"></i>
            </a>
            <ul class="list">
              <li><a href="blog.html">Blog</a></li>
              <li><a href="single-blog.html">Blog Details</a></li>

            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="menu_btm">
        <a class="green_btn" href="#"><i class="linearicons-pulse"></i> Symptom Checker</a>
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
        <form action="#" class="appoinment_form js-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="name" name="name" placeholder="" required />
                <label><i class="linearicons-user"></i>Họ và tên</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="email" name="email" placeholder="" required />
                <label><i class="linearicons-envelope-open"></i>Email</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <input class="form-control" type="text" id="number" name="number" placeholder="" required />
                <label><i class="linearicons-telephone"></i>Số điện thoại</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                <label><i class="linearicons-document"></i>Nội dung</label>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group checkbox_field">
                <div class="checkbox">
                  <input type="checkbox" value="None" id="policy" name="check" />
                  <label class="l_text" for="policy">Tôi đồng ý với <span>Chính sách bảo mật</span></label>
                <button type="submit" class="green_btn" name="appoinment" id="appoinment" value="appoinment"
                  data-value="appoinment">
                  Gửi
                </button>
              </div>
            </div>
          </div>
        </form>
        <div class="info_footer">
          <p>© Copyright
            <script>
              document.write(new Date().getFullYear());
            </script> Epidemic Organisation Ltd.
          </p>
          <h6>
            Designed <i class="linearicons-heart"></i>
            by <span>Nhóm HANL</span>
          </h6>
        </div>
      </div>
    </section>
    <!--================End Sidebar Form Area =================-->

    <!--================Header Area =================-->
    <header class="header_area">
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
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                srcset="assets/images/logo-2x.png 2x" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="prevention.html" role="button"
                    aria-haspopup="true" aria-expanded="false">Phòng chống </a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="dropdown submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="symptom.html" role="button"
                        aria-haspopup="true" aria-expanded="false">Các triệu chứng
                        <i class="linearicons-chevron-right mobile_dropdown" aria-hidden="true"
                          data-toggle="dropdown"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="symptom.html">Các triệu chứng thường gặp</a></li>
                          <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
                          <li><a href="prevention.html">Biện pháp phòng chống</a></li>
                          <li><a href="virus-checker.html">Theo dõi tình hình</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="active"><a href="appointment.html">Tư vấn</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Giới thiệu</a>
                  <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">Corona Virus</a></li>
                    <li><a href="doctors.html">Đội ngũ bác sĩ</a></li>
                    <li><a href="sample-right-sidebar.html">Vaccine phòng COVID-19</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button" aria-haspopup="true" aria-expanded="false"><a href ="blog.html">Tin tức</a></a>
                </li>
                <li><a href="contact.html">Liên hệ</a></li>
                </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="checker_btn">
                  <a href="symptom-checker.html"></i> Kiểm tra triệu chứng</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="right_burger">
          <ul class="nav">
            <li>
              <div class="search_btn" data-toggle="modal" data-target="#exampleModal">
                <img src="assets/images/icon/search.png" alt="" />
              </div>
            </li>
            <li>
              <div class="menu_btn">
                <img src="assets/images/icon/burger.png" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--================End Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area boi_breadcrumb">
      <div class="container">
        <div class="breadcrumb_text">
          <h6 class="wow fadeInUp">Tham khảo ý kiến của các chuyên gia</h6>
          <h3 class="wow fadeInUp" data-wow-delay="0.2s">Tư vấn online</h3>
          <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
            <li><a href="index.html">Trang chủ</a></li>
            <li><a href="doctors.html">Tư vấn</a></li>
          </ul>
        </div>
        <div class="row appointment_box">
          <div class="col-lg-4 appoinment_features">
            <div class="shape one" data-parallax='{"y": 100}'>
              <img src="assets/images/appoinment/a_img1.png" alt="" />
            </div>
            <div class="shape two">
              <img src="assets/images/appoinment/a_img2.png" alt="" />
            </div>
            <div class="shape three">
              <img src="assets/images/appoinment/a_img3.png" alt="" />
            </div>
            <div class="shape four" data-parallax='{"x": 30}'>
              <img src="assets/images/appoinment/a_img4.png" alt="" />
            </div>
            <div class="shape five">
              <img src="assets/images/appoinment/a_img5.png" alt="" />
            </div>
            <div class="shape six" data-parallax='{"y": 50}'>
              <img src="assets/images/appoinment/a_img6.png" alt="" />
            </div>
            <h2>Đặt lịch hẹn</h2>
            <p>
              Vui lòng để lại thông tin của bạn và chúng tôi sẽ liên lạc lại sớm.
            </p>
            <div class="media appoinment_features_item">
              <i class="linearicons-medal-empty"></i>
              <div class="media-body">
                <h6>Đội ngũ bác sĩ nổi tiếng</h6>
                <p>với nhiều kinh nghiệm</p>
              </div>
            </div>
            <div class="media appoinment_features_item">
              <i class="linearicons-clipboard-check"></i>
              <div class="media-body">
                <h6>Lời khuyên hữu ích</h6>
                <p>Chúng tôi sẽ cung cấp cho bạn những thông tin cần thiết</p>
              </div>
            </div>
            <div class="media appoinment_features_item">
              <i class="linearicons-tags"></i>
              <div class="media-body">
                <h6>Hoàn toàn miễn phí</h6>
                <p>Không cần lo lắng về chi phí</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form action="#" class="appoinment_form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control" type="text" id="a_name" name="a_name" placeholder="" />
                    <label><i class="linearicons-user"></i>Họ tên</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control" type="text" id="a_email" name="a_email" placeholder="" />
                    <label><i class="linearicons-envelope-open"></i>Email</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control" type="text" id="skype" name="skype" placeholder="" />
                    <label><i class="fab fa-skype"></i>Skype ID</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control" type="text" id="a_number" name="a_number" placeholder="" />
                    <label><i class="linearicons-telephone"></i>Số điện thoại</label>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group input-group date" id="datetimepicker3" data-target-input="nearest">
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                      <div class="input-group-text">
                        <i class="linearicons-calendar-text"></i>
                      </div>
                    </div>
                    <div class="text_div">
                      Ngày tư vấn
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3"
                      data-toggle="datetimepicker" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group input-group date" id="datetimepicker4" data-target-input="nearest">
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                      <div class="input-group-text">
                        <i class="linearicons-alarm2"></i>
                      </div>
                    </div>
                    <div class="text_div">
                      Thời gian 
                    </div>
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"
                      data-toggle="datetimepicker" />
                  </div>
                
                
                </div> 
                <div class="form-text">
                  <div class="form-group select_conversation_inner" >
                    <h5>Chọn phương thức trao đổi</h5>
                     <div>
                        <div class="select_conversation"> 
                      <input type="radio" name="conversation" id="voice" value="voice" />
                      <label for="voice">Gọi điện thoại</label>
                    </div>
                    <div class="select_conversation">
                      <input type="radio" name="conversation" id="video" value="video" />
                      <label for="video">Qua Video</label>
                    </div>
                    <div class="select_conversation">
                      <input type="radio" name="conversation" id="chat" value="chat" />
                      <label for="chat">Nhắn tin trao đổi</label>
                    </div>
                     </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control"></textarea>
                    <label><i class="linearicons-pencil4"></i><b>Ghi chú</b></label>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group checkbox_field">
                    <div class="checkbox">
                      <input type="checkbox" value="None" id="squared2" name="check" />
                      <label class="l_text" for="squared2">Tôi chấp nhận <span>Chính sách Bảo mật</span> và
                        <span>Điều khoản sử dụng.</span></label>
                    </div>
                    <button type="submit" class="green_btn" value="appoinment" data-value="appoinment">
                      Gửi
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--================End Breadcrumb Area =================-->

    <!--================Starrt Work Area =================-->
    <section class="work_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="work_content">
              <div class="main_title">
                
                <h2>Cách thức hoạt động </h2>
                <h5>Vô cùng đơn giản</h5>
              </div>
              <ol class="work_list">
                <li class="wow fadeInUp" data-wow-delay="0.1s">Nhập thông tin liên hệ để chúng tôi có thể kết nối với bạn qua Skype
                </li>
                <li class="wow fadeInUp" data-wow-delay="0.2s">Lựa chọn ngày, giờ mong muốn </li>
                <li class="wow fadeInUp" data-wow-delay="0.3s">Lựa chọn phương thức trao đổi</li>
                <li class="wow fadeInUp" data-wow-delay="0.4s">Mô tả những vấn đề bạn đang gặp phải</li>
                
              </ol>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <img data-wow-delay="400ms" class="img-fluid wow fadeInRight" src="assets/images/appoinment/works.jpg"
              alt="">
          </div>
        </div>
      </div>
    </section>
    <!--================End work Area =================-->
    <!--================Client Logo Area =================-->
    <section class="client_logo_area pad_top">
      <div class="container">
        <div class="client_slider">
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-1.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-2.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-3.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-4.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-5.png" alt="" />
          </div>
          <div class="item">
            <img src="assets/images/client-logo/client-logo-6.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--================End Client Logo Area =================-->
    <!--================Check Now Area =================-->
    <section class="check_now_area check_now_box full_widget_check">
      <div class="container">
        <div class="row m-0 justify-content-between">
          <div class="left">
            <div class="media">
              <div class="d-flex">
                <img src="assets/images/check-4.png" alt="" />
                <img src="assets/images/check-5.png" alt="" />
                <img src="assets/images/check-6.png" alt="" />
              </div>
              <div class="media-body">
                <h4>Bạn nghi ngờ mình mắc bệnh?</h4>
                <p>
                  Hãy thử một bài kiểm tra đơn giản để biết bạn có mắc bệnh không.
                </p>
              </div>
            </div>
          </div>
          <div class="right">
            <a class="icon_btn" href="#">Kiểm tra ngay <i class="linearicons-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!--================End Check Now Area =================-->
    <!--================Footer Area =================-->
    <footer class="footer_area">
      <div class="footer_widgets_area pad_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                        <h4>024 3825 5599</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                   
                    <div class="media-body">
                      <h5>Địa chỉ</h5>
                      <p>36 Ngô Quyền, phường Hàng Bài,
                        </br> quận Hoàn Kiếm, Hà Nội
                      </p>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            
            <div class="col-lg-4 item-tk">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập</a>
                  </li>
                  
                </ul>
              </aside>
            </div>
            <div class="col-lg-4">
             <div class="gg-fb">
                <div>
                  <div class="fb-page page-fb" data-href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" data-tabs="timeline" data-width="270" data-height="152" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/trungtamytequanhoankiem36ngoquyen">Trung Tâm Y Tế Quận Hoàn Kiếm:36 Ngô Quyền</a></blockquote></div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2281567295654!2d105.85251131402812!3d21.023554993333946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abec902b9623%3A0xdfe9443e9ca77d59!2zVHJ1bmcgVMOibSBZIFThur8gUXXhuq1uIEhvw6BuIEtp4bq_bSAzNg!5e0!3m2!1svi!2s!4v1634628981628!5m2!1svi!2s" width="270" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
                </div>
           
                   </div>
      </div>
      <div class="footer_copyright">
        <div class="container">
          <img src="assets/images/f-logo.png" alt="" />
          <p>
            © Copyright
            <script>
              document.write(new Date().getFullYear());
            </script>
            Epidemic Organisation Ltd.
          </p>
          <ul class="nav">
            <li><a href="#">Điều khoản sử dụng</a></li>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Dấu ấn</a></li>
          </ul>
          <h6>
            Designed<i class="linearicons-heart"></i> by
            <span>Nhóm HANL</span>
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
            <input type="text" class="form-control" placeholder="Nội dung tìm kiếm..." aria-label="Recipient's username">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button"><i class="linearicons-magnifier"></i></button>
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
  <script src="assets/vendors/datetimepicker/moment.js"></script>
  <script src="assets/vendors/datetimepicker/tempusdominus-bootstrap-4.min.js"></script>
  <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="assets/vendors/animate-css/wow.min.js"></script>
  <script src="assets/vendors/scroll-animation/jquery.parallax-scroll.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="XVpXxaji"></script>
  </body>

</html>