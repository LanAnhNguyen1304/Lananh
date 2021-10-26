<?php 
	// 1. Đọc dữ liệu từ trang ĐĂNG NHẬP gửi sang
	$ten = $_POST["txtName"];
	$email = $_POST["txtEmail"];
	$sdt = $_POST["txtPhone"];
	$ngay_tu_van =$_POST["datetimepicker3"];
	$thoi_gian = $_POST["datetimepicker4"];
	$ghi_chu = $_POST["txtGhiChu"];

	// 2. KẾT NỐI ĐẾN CSDL
	$ket_noi = mysqli_connect("localhost", "root", "", "btl_db");

	// 3. So sánh dữ liệu nhập vào có khớp với dữ liệu lưu trong CSDL hay không?
	$sql = "
		INSERT INTO `tbl_tu_van` (`tu_van_id`, `ten`, `email`, `sdt`,`ngay_tu_van`,`thoi_gian`, `ghi_chu`) VALUES (NULL, '".$ten."', '".$email."', '".$sdt."','".$ngay_tu_van."','".$thoi_gian."',  '".$ghi_chu."')
	";
	
	// 3. Thực thi câu lệnh để xác định dữ liệu có khớp hay không?
	$thuc_hien_phan_hoi = mysqli_query($ket_noi, $sql);
	if($ten != "" AND $ghi_chu != ""){
    echo 
		"
			<script type='text/javascript'>
				window.alert('Cảm ơn bạn đã gửi phản hồi cho chúng tôi.');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='index.php'
			</script>
		";
}
 else {
    echo 
		"
			<script type='text/javascript'>
				window.alert('Bạn hãy nhập đủ thông tin');
			</script>
		";
		echo 
		"
			<script type='text/javascript'>
				window.location.href='appointment.php'
			</script>
		";
	}
	
?>