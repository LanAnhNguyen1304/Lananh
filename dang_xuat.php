
<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
session_start();
session_destroy();
echo "  <script>
        alert('Đăng xuất thành công!');
        window.location = 'index.php';
        </script>";              
?>
</html>