<?php 
    // Mục đích kiểm tra xem bạn có quyền truy cập trang này không thông qua BIẾN $_SESSION['da_dang_nhap']
    session_start();
    if (!$_SESSION["da_dang_nhap"]) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không có quyền truy cập');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='dang_nhap.php';
            </script>
        ";
    }
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản trị dịch vụ</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            include("simple-sidebar.php");
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">QUẢN TRỊ DỊCH VỤ</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="quan_tri_xet_nghiem.php">Xét nghiệm</a></li>
                            <li class="breadcrumb-item active"> Tư vấn</li>
                        </ol> 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Danh sách người đăng kí tư vấn 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; ">STT</th>
                                            <th style="text-align: center; ">Tên người đăng kí</th>
                                            
                                            <th style="text-align: center; ">Email</th>
                                            <th style="text-align: center; ">Số điện thoại</th>
                                            <th style="text-align: center; ">Thao tác</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th style="text-align: center; ">STT</th>
                                            <th style="text-align: center; ">Tên người đăng kí</th>
                                            
                                            <th style="text-align: center; ">Email</th>
                                            <th style="text-align: center; ">Số điện thoại</th>
                                            <th style="text-align: center; ">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $ket_noi = mysqli_connect("localhost","root","","btl_db");

                                        $sql = "SELECT * 
                                                FROM tbl_tu_van   
                                                
                                                ";

                                        $noi_dung_tin_tuc=mysqli_query($ket_noi,$sql);
                                        //echo $noi_dung_tin_tuc;
                                        $i=0;
                                        while ($row=mysqli_fetch_array($noi_dung_tin_tuc)) 
                                        {
                                            $i++;
                                    ;?>
                                        <tr>
                                            <td style="text-align: center; width: 30px"><?php echo $i;?></td>
                                            <td style="text-align: center; "><?php echo $row["ten"];?></td>
                                            
                                            
                                            <td style="text-align: center; "><?php echo $row["email"];?></td>
                                            <td style="text-align: center; "><?php echo $row["sdt"];?></td>
                                            <td style="text-align: center; "><a class="btn btn-info" href="nguoi_dung_sua.php?id=<?php echo $row['nguoi_dung_id'];?>">Sửa</a>
                                            <span><a class="btn btn-danger" href="nguoi_dung_xoa.php?id=<?php echo $row['nguoi_dung_id'];?>" >Xóa</a></span></td>
                                            
                                        </tr>
                                    <?php
                                    }
                                        mysqli_close($ket_noi);
                                    ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
