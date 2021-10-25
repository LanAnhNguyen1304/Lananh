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
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css" />
    <link rel="stylesheet" href="assets/vendors/linearicons/css/linearicons.css" />
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.min.css" />

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
                  <li><a href="about.html">Corona Virus</a></li>
                  <li><a href="doctors.html">Đội ngũ bác sĩ</a></li>
                  <li><a href="sample-right-sidebar.html">Vaccien Phòng COVID-19 </a></li>
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
                    <li><a href="contact.html">Liên hệ<</a></li>
                </ul>
            </div>
            <div class="menu_btm">
                <a class="green_btn" href="#"><i class="linearicons-pulse"></i>Kiểm tra triệu chứng</a>
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
                                <input class="form-control" type="text" id="a_name" name="a_name" placeholder=""
                                    required />
                                <label><i class="linearicons-user"></i>Họ và tên</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_email" name="a_email" placeholder=""
                                    required />
                                <label><i class="linearicons-envelope-open"></i>Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" type="text" id="a_number" name="a_number" placeholder=""
                                    required />
                                <label><i class="linearicons-telephone"></i>số điện thoại </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="a_message" id="a_message" cols="30" rows="10" class="form-control"
                                    required></textarea>
                                <label><i class="linearicons-document"></i>Nội dung</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group checkbox_field">
                                <div class="checkbox">
                                    <input type="checkbox" value="None" id="a_policy" name="check" />
                                    <label class="l_text" for="a_policy">Tôi chấp nhận <span>Chính sách bảo mật</span></label>
                                </div>
                                <button type="submit" class="green_btn" name="appoinment" id="appoinment"
                                    value="appoinment" data-value="appoinment">
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
                        </script> Epidemic .
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
                                        role="button" aria-haspopup="true" aria-expanded="false">Phòng chống </a>
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
                                                <li><a href="symptom-checker.html">Kiểm tra triệu chứng</a></li>
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
                                        <li><a href="sample-right-sidebar.html">Vaccien Phòng COVID-19</a></li>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="blog.html" role="button"
                                        aria-haspopup="true" aria-expanded="false">Tin tức
                                    </a>
                                    <i class="linearicons-chevron-down mobile_dropdown" aria-hidden="true"
                                        data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">Tin tức</a></li>
                                        <li><a href="single-blog.html">in tức chi tiết</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checker_btn">
                                    <a href="#">Kiếm tra triệu chứng</a>
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

        <!--================Prevention Banner Area =================-->
        <section class="prevention_banner">
            <div class="container">
                <div class="prevention_text">
                    <h6 class="wow fadeInUp">Bạn cần làm gì</h6>
                    <h3 class="wow fadeInUp" data-wow-delay="0.2s">Làm thế nào để ngăn chặn COVID-19?</3>
                    <ul class="nav justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="prevention.html">Phòng chống</a></li>
                        <li><a href="#">Làm thế nào để ngăn chặn COVID-19?</a></li>
                    </ul>
                    <img class="img-fluid" src="assets/images/breadcrumb/prevention-persong.png" alt="">
                </div>
            </div>
        </section>
        <!--================Home Prevention Banner Area =================-->

        <!--================Protect Yourself Area =================-->
        <section class="protect_yourself_area p_100">
            <div class="container">
                <div class="main_title_2 text-center">
                    <h2 class="wow fadeInUp"> <span>Giãn cách xã hội</span> để giữ an toàn</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Với số lượng trường hợp mắc COVID-19 tăng lên mỗi ngày, các nhà tâm lý học đưa ra những hiểu biết sâu sắc về tự giữ khoảng  cách với những người khác, mà vẫn nhận được sự hỗ trợ xã hội.</p>
                </div>
                <div class="row protect_inner flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="main_title">
                            <h5>Bạn cần làm gì </h5>
                            <h2>Bảo vệ bản thân bằng cách nào?</h2>
                        </div>
                        <div class="row protect_list_inner">
                            <div class="col-6">
                                <div class="protect_list_item">
                                    <div class="protect_list_title">
                                        <h3>Bạn nên làm</h3>
                                        <h6>Hãy làm theo</h6>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#"><i class="linearicons-home4"></i>Ở nhà</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-desk-tape"></i>Đeo khẩu trang</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-tissue"></i>Luôn sử dụng khăn giấy</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-couch"></i>Khử trùng nhà của bạn</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-rain"></i>Luôn rửa tay</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-thermometer"></i>Tự cách li</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-bottle"></i>Ăn uống lành mạnh.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="protect_list_item red">
                                    <div class="protect_list_title">
                                        <h3>Bạn nên tránh</h3>
                                        <h6>Bạn làm theo </h6>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li>
                                            <a href="#"><i class="linearicons-man-woman"></i>Không tụ tập</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-paw"></i>Tránh động vật</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-woman"></i>Không đưa tay lên mặt</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-hand"></i>Không bắt tay</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-chair"></i>Tránh tiếp xúc các bề mặ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-drop-crossed"></i>Tránh các giọt bắn</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="linearicons-plane-crossed"></i>Không đi du lịch</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="protect_img">
                            <img class="img-fluid" src="assets/images/protect-img-2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Protect Yourself Area =================-->

        <!--================Prevent Area =================-->
        <section class="prevent_area prevent_right">
            <div class="container">
                <div class="row prevent_inner flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="prevent_item_inner row">
                            <div class="col-sm-6">
                                <div class="prevent_item wow fadeInUp">
                                    <div class="prevent_img">
                                        <img class="img-fluid" src="assets/images/prevent/prevent-1.png" alt="" />
                                    </div>
                                    <div class="prevent_text">
                                        <h4>Stay at home</h4>
                                        <p>
                                            Hãy ở nhà nếu bạn nhận thấy các triệu chứng và hỏi ý kiến ​​bác sĩ qua điện thoại.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prevent_item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="prevent_img">
                                        <img class="img-fluid" src="assets/images/prevent/prevent-2.png" alt="" />
                                    </div>
                                    <div class="prevent_text">
                                        <h4>Rửa tay thường xuyên</h4>
                                        <p>
                                            Làm sạch tay bằng chất tẩy rửa có cồn hoặc rửa bằng xà phòng trong ít nhất 20 giây
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prevent_item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="prevent_img">
                                        <img class="img-fluid" src="assets/images/prevent/prevent-3.png" alt="" />
                                    </div>
                                    <div class="prevent_text">
                                        <h4>Giãn cách xã hội</h4>
                                        <p>
                                            Giữ khoảng cách ít nhất 2 m giữa bạn và bất kỳ ai nếu bạn đi giữa mọi người.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="prevent_item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="prevent_img">
                                        <img class="img-fluid" src="assets/images/prevent/prevent-4.png" alt="" />
                                    </div>
                                    <div class="prevent_text">
                                        <h4>Đeo khẩu trang</h4>
                                          <p></h4>
                                        <p>
                                            Bất kì khi nào, bạn ở gần những người khác và trước khi bạn đến các trung tâm y tế.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="prevent_details">
                            <div class="prevent_details_text">
                                <h5>Bạn nên làm gì những gì?</h5>
                                <h2>Làm thế nào để ngăn chặn Virus Corona?</h2>
                                <p>
                                    Một số thông tin về cách thức lây lan của căn bệnh này đã<br> được xác định. WHO và CDC tuyên bố rằng căn bệnh này <br> chủ yếu lây lan khi tiếp xúc gần và do các giọt bắn tạo ra<br> khi người ta ho hoặc hắt hơi; tiếp xúc gần trong vòng 1 đến <br> 2 mét. Một nghiên cứu ở Singapore phát hiện ra rằng một<br> cơn ho khi không đeo khẩu trang hay che tay có thể  dẫn <br>  đến những giọt bắn bay đến 4,5 mét.
                                <p>
                                    Các giọt bắn qua hô hấp cũng có thể được tạo ra trong<br> quá trình thở ra, kể cả khi nói chuyện, mặc dù vi-rút nói <br> chung không lây nhiễm trong không khí. Những giọt này<br> có thể rơi vào miệng hoặc mũi của những người ở gần đó<br> hoặc có thể bị hít vào phổi...
                                </p>
                                <a class="green_btn" href="#"><i class="linearicons-shield-check"></i>Đọc thêm về Phòng chống COVID-19</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Prevent Area =================-->

        <!--================Washing Process Area =================-->
        <section class="washing_process_area pad_btm">
            <div class="container">
                <div class="main_title text-center white">
                    <h5>Quy trình rửa tay</h5>
                    <h2>Rửa tay đúng cách</h2>
                </div>
                <div class="washing_process_inner row">
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="400ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-1.png" alt="" />
                                <div class="number">
                                    1
                                </div>
                            </div>
                            <p><span>Thoa xà phòng</span> và xoa hai tay lại với nhau</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="500ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-2.png" alt="" />
                                <div class="number">
                                    2
                                </div>
                            </div>
                            <p>
                                <span>Dùng một tay</span> xoa mu bàn tay kia và ngược lại.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="600ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-3.png" alt="" />
                                <div class="number">
                                    3
                                </div>
                            </div>
                            <p>
                                 <span>Xoa hai bàn tay </span> với nhau và làm sạch giữa các ngón tay của bạn
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="700ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-4.png" alt="" />
                                <div class="number">
                                    4
                                </div>
                            </div>
                            <p>
                                 <span>Xoa mu bàn tay</span> vào lòng bàn tay
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="800ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-5.png" alt="" />
                                <div class="number">
                                    5
                                </div>
                            </div>
                            <p>
                               <span>Dùng tay kia</span> xoa ngón tay cái và ngược lại
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">
                        <div class="washing_item wow fadeIn" data-wow-delay="900ms">
                            <div class="icon">
                                <img src="assets/images/icon/washing-6.png" alt="" />
                                <div class="number">
                                    6
                                </div>
                            </div>
                            <p>
                                <span>Xoa các đầu ngón tay</span> vào lòng bàn tay kia và ngược lại
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Washing Process Area =================-->

        <!--================Footer Area =================-->
        <footer class="footer_area prevention_box">
            <div class="footer_widgets_area pad_top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <aside class="f_widget contact_widget">
                <div class="f_title">
                  <h3>Liên hệ</h3>
                </div>
                <div class="ct_wd_text">
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-telephone"></i>
                    </div>
                    <div class="media-body">
                      <h5>Cuộc gọi khẩn cấp</h5>
                      <a href="tel:+(84)368121201">
                        <h4> 036 812 1201</h4>
                      </a>
                    </div>
                  </div>
                  <div class="media">
                    <div class="d-flex">
                      <i class="linearicons-map-marker"></i>
                    </div>
                    <div class="media-body">
                      <p>
                        Phòng 102, Trụ sở <br>Trung tâm ý tế ...., <br>12 Chùa Bộc, Đống Đa, Hà Nội
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
                  <h3>Phòng chống</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Các triệu chứng thường gặp</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Cách phòng tránh</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Sự truyền nhiễm</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Nhận tư vấn từ bác sĩ</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Thông tin về COVID-19</a>
                  </li>
                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
              <aside class="f_widget list_widget">
                <div class="f_title">
                  <h3>Thống kê</h3>
                </div>
                <ul class="nav flex-column">
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Số lượt đang truy cập:</a>
                  </li>
                  <li>
                    <a href="#"><i class="linearicons-radio-button"></i>Tổng số lượt truy cập:</a>
                  </li>
                  

                </ul>
              </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <aside class="f_widget about_widget">
                <div class="f_title">
                  <h3>COVID-19</h3>
                </div>
                <p>
                  Căn bệnh này lần đầu tiên được xác định vào năm 2019 tại Vũ Hán, thủ phủ của Hồ Bắc, Trung Quốc và kể từ đó đã lây lan ra toàn cầu, dẫn đến đại dịch coronavirus 2020–2021.
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
                        <img src="assets/images/f-logo.png" alt="">
                        <p>© Copyright
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Epidemic Organisation Ltd.</p>
                        <ul class="nav">
                            <li><a href="#">Điều khoản sử dụng</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Dấu ấn</a></li>
                        </ul>
                        <h6>
                            Designed with <i class="linearicons-heart"></i>
                            by <span>nhóm HANL</span>
                        </h6>
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
                                    class="linearicons-magnifier"></i>
                            </button>
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
    <script src="assets/vendors/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendors/animate-css/wow.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>