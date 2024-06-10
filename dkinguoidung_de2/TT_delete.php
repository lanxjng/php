<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>
<body>
<?php
include('control.php'); // Include the control file

$get_data = new data_nguoidung(); // Create an instance of the data_sanpham class

// Check if 'del' parameter is set and is a valid integer
if (isset($_GET['del']) && filter_var($_GET['del'], FILTER_VALIDATE_INT)) {
    $user_id = $_GET['del'];
    
    // Fetch the product data
    $d = $get_data->select_user_id($user_id);
    
    // Delete the associated image
    while ($del_uploadd = mysqli_fetch_array($d)) {
        $image_path = 'upload/' . $del_uploadd['avatar'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }
    
    // Delete the product from the database
    $del = $get_data->delete_user($user_id);
    
    if ($del) {
        echo "<script>alert('Bạn đã xóa thành công');
              window.location='TT_select.php';</script>";
    } else {
        echo "<script>alert('Bạn không xóa được');</script>";
    }
} else {
    echo "<script>alert('ID sản phẩm không hợp lệ'); window.location='TT_select.php';</script>";
}
?>
    
</body>
</html>