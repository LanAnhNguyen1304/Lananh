
        <?php
        //viết các câu lệnh thêm mới tin tức ở đây
        $ketnoi=mysqli_connect("localhost","root","","btl_db");

        //lấy ra được các dữ liệu mà trang TIN TỨC THÊM MỚI chuyển sang
        $loai_id=$_GET['id'];
       


        //VIết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
        $sql= "DELETE 
                      FROM `tbl_loai_xet_nghiem` 
                      WHERE `tbl_loai_xet_nghiem`.`loai_id` = '".$loai_id."'
        ";

        $noi_dung_tin_tuc=mysqli_query($ketnoi,$sql);

        // while ($row = mysql_fetch_array($noi_dung_tin_tuc)) {
        //  # code...
        // }
        // hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
        echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa thành công');
                </script>
            ";

        echo "
            <script type='text/javascript'>
                window.location.href='loai_xet_nghiem.php';
            </script>
        ";
    ;?>
