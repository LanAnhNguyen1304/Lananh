<?php 
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
	$ten = $_POST["txtName"];
	$gioi_tinh = $_POST["txtGioiTinh"];
	$email = $_POST["txtEmail"];
	$sdt = $_POST["txtPhone"];
	$ngay_tu_van = $_POST["txtDate"];
	$thoi_gian = $_POST["txtTime"];
	$phuong_thuc = $_POST["txtPhuongThuc"];
	$ghi_chu = $_POST["txtGhiChu"];

	// 2. KẾT NỐI ĐẾN CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "btl_db");

	// 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
	$sql = "
		INSERT INTO `tbl_tu_van` (`tu_van_id`, `ten`,  `gioi_tinh`, `email`, `sdt`, `ngay_tu_van`, `thoi_gian`, `phuong_thuc`, `ghi_chu`) VALUES (NULL, '".$ten."', '".$gioi_tinh."', '".$email."', '".$sdt."', '".$ngay_tu_van."', '".$thoi_gian."', '".$phuong_thuc."', '".$ghi_chu."')
	";
	// 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
	$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);
	
 
?>