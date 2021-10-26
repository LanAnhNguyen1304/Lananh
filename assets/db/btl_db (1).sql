-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 10:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bac_si`
--

CREATE TABLE `tbl_bac_si` (
  `bac_si_id` int(11) NOT NULL,
  `ten_bac_si` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `tin_tuc_id` int(11) NOT NULL,
  `nguoi_dung_id` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_comment` datetime NOT NULL,
  `trang_thai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(9, 'Lan Anh Nguyễn', 'imlananh.01@gmail.com', '0965698119', 'thông tin hữu ích'),
(11, 'Huyền', 'huyenfsd@gmail.com', '0976765445', ''),
(12, 'Linh', 'phuonglinh@gmail.com', '0943232', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `nguoi_dung_id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT current_timestamp(),
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`nguoi_dung_id`, `ten_nguoi_dung`, `email`, `mat_khau`, `last_login`, `admin`) VALUES
(1, 'Lan Anh Nguyen', 'imlananh.01@gmail.com', 'x123', NULL, 1),
(2, 'Thanh Nga', 'ngathanh@gmail.com', '234', NULL, 0),
(3, 'Phuong Linh', 'phuonglinh@gmail.com', 'x123', NULL, 0),
(4, 'Tran Hieu', 'hieutran@gmail.com', 'aasas', '2021-10-17 22:19:05', 1),
(15, 'Chu Van Huy ', 'imlananh.01@gmail.com', '1212', '2021-10-20 14:09:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reply_comment`
--

CREATE TABLE `tbl_reply_comment` (
  `rep_comment_id` int(11) NOT NULL,
  `comment_od` int(11) NOT NULL,
  `rep_commnent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_rep_comment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `tin_tuc_id` int(11) NOT NULL,
  `tieu_de` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashtag_id` int(11) NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tac_gia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh_minh_hoa` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_dang_tin` datetime NOT NULL,
  `so_lan_doc` int(11) NOT NULL DEFAULT 0,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`tin_tuc_id`, `tieu_de`, `hashtag_id`, `mo_ta`, `noi_dung`, `tac_gia`, `anh_minh_hoa`, `ngay_dang_tin`, `so_lan_doc`, `ghi_chu`) VALUES
(16, ' Cả nước 3.159 ca mắc mới, 1.136 trường hợp khỏi bệnh', 2, '<h2 class=\"sapo\"><span style=\"background-color: #2dc26b;\">TTO - Bản tin chiều 18-10</span> của Bộ Y tế cho biết cả nước ghi nhận 3.159 ca mắc COVID-19 mới, đ&aacute;ng ch&uacute; &yacute; số tử vong cả nước giảm thấp nhưng ở TP.HCM vẫn ở mức cao. Số bệnh nh&acirc;n khỏi bệnh được c&ocirc;ng bố trong ng&agrave;y l&agrave; 1.136 người.</h2>', '<div class=\"VCSortableInPreviewMode\">\r\n<div><a class=\"detail-img-lightbox\" title=\"Người d&acirc;n ti&ecirc;m vắc xin tại Trường tiểu học Nguyễn Đ&igrave;nh Chiểu, quận B&igrave;nh Thạnh, TP.HCM - Ảnh: QUANG ĐỊNH\" href=\"https://cdn.tuoitre.vn/2021/10/18/logo-12-1634548426303108315415.jpg\" target=\"_blank\" rel=\"noopener\" data-fancybox-group=\"img-lightbox\"><img id=\"img_3bb7\" class=\"lightbox-content\" title=\"Tin COVID-19 chiều 18-10: Cả nước 3.159 ca mắc mới, 1.136 trường hợp khỏi bệnh - Ảnh 1.\" src=\"https://cdn.tuoitre.vn/thumb_w/586/2021/10/18/logo-12-1634548426303108315415.jpg\" alt=\"Tin COVID-19 chiều 18-10: Cả nước 3.159 ca mắc mới, 1.136 trường hợp khỏi bệnh - Ảnh 1.\" width=\"\" height=\"\" data-original=\"https://cdn.tuoitre.vn/2021/10/18/logo-12-1634548426303108315415.jpg\" /></a>\r\n<div id=\"wrapper-inimage-pos-0\">\r\n<div id=\"in-images\">\r\n<div id=\"zone-joqxux31\">\r\n<div id=\"share-joqxuxkg\">\r\n<div id=\"placement-josbvfxe\">\r\n<div id=\"banner-joqxux31-josbvgf9\">\r\n<div id=\"slot-1-joqxux31-josbvgf9\"></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"PhotoCMS_Caption ck_legend caption\">\r\n<p class=\"\" data-placeholder=\"[nhập ch&uacute; th&iacute;ch]\">Người d&acirc;n ti&ecirc;m vắc xin tại Trường tiểu học Nguyễn Đ&igrave;nh Chiểu, quận B&igrave;nh Thạnh, TP.HCM - Ảnh: QUANG ĐỊNH</p>\r\n</div>\r\n</div>\r\n<p>T&iacute;nh từ 17h ng&agrave;y 17-10 đến 17h ng&agrave;y 18-10, tr&ecirc;n Hệ thống quốc gia quản l&yacute; ca bệnh COVID-19 ghi nhận 3.168 ca nhiễm mới, trong đ&oacute; 9 ca nhập cảnh v&agrave; 3.159 ca ghi nhận trong nước (giảm 16 ca so với ng&agrave;y trước đ&oacute;) tại 45 tỉnh, th&agrave;nh phố (c&oacute; 1.261 ca trong cộng đồng).</p>\r\n<p>- C&aacute;c tỉnh, th&agrave;nh phố ghi nhận ca bệnh như sau: TP.HCM (968), B&igrave;nh Dương (439), Đồng Nai (393), S&oacute;c Trăng (174), An Giang (109), Ki&ecirc;n Giang (99), Tiền Giang (94), C&agrave; Mau (77), Long An (68), Đồng Th&aacute;p (61), Ph&uacute; Thọ (58), Bạc Li&ecirc;u (48), Đắk Lắk (46), Quảng Nam (45),</p>\r\n<p>Thanh H&oacute;a (42), Gia Lai (40), Tr&agrave; Vinh (33), Kh&aacute;nh H&ograve;a (31), Hậu Giang (28), B&igrave;nh Thuận (28), Cần Thơ (27), Nghệ An (25), Nam Định (22), Kon Tum (20), H&agrave; Nam (20), Quảng Ng&atilde;i (19), T&acirc;y Ninh (18), B&igrave;nh Định (15), Quảng B&igrave;nh (15), Vĩnh Long (14),</p>\r\n<p>Thừa Thi&ecirc;n Huế (12), Bến Tre (9), B&igrave;nh Phước (9), B&agrave; Rịa - Vũng T&agrave;u (8), Quảng Trị (8), Ph&uacute; Y&ecirc;n (6), Ninh Thuận (6), Tuy&ecirc;n Quang (6), H&agrave; Nội (6), Đắk N&ocirc;ng (4), Bắc Ninh (4), Th&aacute;i B&igrave;nh (3), Ninh B&igrave;nh (1), H&agrave; Giang (1).</p>\r\n<p>- C&aacute;c địa phương ghi nhận số ca nhiễm giảm nhiều nhất so với ng&agrave;y trước đ&oacute;: T&acirc;y Ninh (-138), Đồng Nai (-124), B&igrave;nh Dương (-98).</p>\r\n<p>- C&aacute;c địa phương ghi nhận số ca nhiễm tăng cao nhất so với ng&agrave;y trước đ&oacute;: S&oacute;c Trăng (+110), Ph&uacute; Thọ (+50), Tiền Giang (+48).&nbsp;Trung b&igrave;nh số ca nhiễm mới trong nước ghi nhận trong 7 ng&agrave;y qua: 3.260 ca/ng&agrave;y.</p>\r\n<p>Kể từ đầu dịch đến nay Việt Nam c&oacute; 867.221 ca nhiễm, đứng thứ 40/223 quốc gia v&agrave; v&ugrave;ng l&atilde;nh thổ.&nbsp;Đợt dịch thứ 4 (từ ng&agrave;y 27-4 đến nay), số ca nhiễm mới ghi nhận trong nước l&agrave; 862.531 ca, trong đ&oacute; c&oacute; 790.163 bệnh nh&acirc;n đ&atilde; được c&ocirc;ng bố khỏi bệnh.</p>\r\n<p>Hiện c&oacute; 2/62 tỉnh, th&agrave;nh phố đ&atilde; qua 14 ng&agrave;y kh&ocirc;ng ghi nhận trường hợp nhiễm mới trong nước: Bắc Kạn, H&ograve;a B&igrave;nh.&nbsp;C&oacute; 16 tỉnh, th&agrave;nh phố kh&ocirc;ng c&oacute; ca l&acirc;y nhiễm thứ ph&aacute;t tr&ecirc;n địa b&agrave;n trong 14 ng&agrave;y qua: Quảng Ninh, Vĩnh Ph&uacute;c, Bắc Giang, Ninh B&igrave;nh, Lạng Sơn, Sơn La, Y&ecirc;n B&aacute;i, H&agrave; Giang, Lai Ch&acirc;u, Hải Ph&ograve;ng, Tuy&ecirc;n Quang, Th&aacute;i B&igrave;nh, Kon Tum, Hưng Y&ecirc;n, Điện Bi&ecirc;n, Th&aacute;i Nguy&ecirc;n.</p>\r\n<p>C&aacute;c địa phương ghi nhận số nhiễm t&iacute;ch lũy cao trong đợt dịch n&agrave;y: TP.HCM (418.692), B&igrave;nh Dương (225.853), Đồng Nai (59.015), Long An (33.806), Tiền Giang (15.105).</p>\r\n<p>Số bệnh nh&acirc;n khỏi bệnh&nbsp;được c&ocirc;ng bố trong ng&agrave;y l&agrave; 1.136.&nbsp;Tổng số ca được điều trị khỏi đến nay l&agrave; 792.980 ca.</p>\r\n<p>Số bệnh nh&acirc;n nặng đang điều trị l&agrave; 3.543 ca, trong đ&oacute;:</p>\r\n<p>- Thở oxy qua mặt nạ: 2.358</p>\r\n<p>- Thở oxy d&ograve;ng cao HFNC: 509</p>\r\n<p>- Thở m&aacute;y kh&ocirc;ng x&acirc;m lấn: 121</p>\r\n<p>- Thở m&aacute;y x&acirc;m lấn: 534</p>\r\n<div id=\"zone-jnvk0c1v\">\r\n<div id=\"share-jnvk0cro\"></div>\r\n</div>\r\n<p>- ECMO: 21</p>', '', 'map-marker.png', '2021-10-07 12:58:41', 9, ''),
(47, 'Tiêu đề thử nghiệm', 1, '<p>s&aacute;asasas</p>', '', '', '5454033281599778125-128.png', '2021-10-22 12:56:49', 67, ''),
(48, 'ABC sua 1', 2, '', '', '', 'home-ab-img.png', '2021-10-20 12:58:30', 77, ''),
(49, 'ABC sua 1', 2, '', '', '', 'protect-img-2.png', '2021-10-19 12:58:25', 0, ''),
(50, 'Có nên mở nhiều thẻ tín dụng để hưởng hoàn tiền?', 1, '', '', '', 'pro2.png', '2021-10-13 12:58:19', 0, ''),
(51, 'Tiêu đề thử nghiệm', 1, '', '', '', '', '2021-10-19 12:58:13', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc_hashtag`
--

CREATE TABLE `tbl_tin_tuc_hashtag` (
  `hashtag_id` int(11) NOT NULL,
  `ten_hashtag` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_520_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc_hashtag`
--

INSERT INTO `tbl_tin_tuc_hashtag` (`hashtag_id`, `ten_hashtag`) VALUES
(1, 'vacxin'),
(2, 'xét nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tu_van`
--

CREATE TABLE `tbl_tu_van` (
  `tu_van_id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bac_si_id` int(11) NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_tu_van` date NOT NULL,
  `thoi_gian` time NOT NULL,
  `phuong_thuc` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tu_van`
--

INSERT INTO `tbl_tu_van` (`tu_van_id`, `ten`, `bac_si_id`, `gioi_tinh`, `email`, `sdt`, `ngay_tu_van`, `thoi_gian`, `phuong_thuc`) VALUES
(1, 'HAI', 0, 0, '', '', '0000-00-00', '00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bac_si`
--
ALTER TABLE `tbl_bac_si`
  ADD PRIMARY KEY (`bac_si_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`nguoi_dung_id`);

--
-- Indexes for table `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  ADD PRIMARY KEY (`rep_comment_id`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`tin_tuc_id`),
  ADD KEY `hashtag_id` (`hashtag_id`);

--
-- Indexes for table `tbl_tin_tuc_hashtag`
--
ALTER TABLE `tbl_tin_tuc_hashtag`
  ADD PRIMARY KEY (`hashtag_id`);

--
-- Indexes for table `tbl_tu_van`
--
ALTER TABLE `tbl_tu_van`
  ADD PRIMARY KEY (`tu_van_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bac_si`
--
ALTER TABLE `tbl_bac_si`
  MODIFY `bac_si_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `nguoi_dung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_reply_comment`
--
ALTER TABLE `tbl_reply_comment`
  MODIFY `rep_comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `tin_tuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc_hashtag`
--
ALTER TABLE `tbl_tin_tuc_hashtag`
  MODIFY `hashtag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tu_van`
--
ALTER TABLE `tbl_tu_van`
  MODIFY `tu_van_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD CONSTRAINT `tbl_tin_tuc_ibfk_1` FOREIGN KEY (`hashtag_id`) REFERENCES `tbl_tin_tuc_hashtag` (`hashtag_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
