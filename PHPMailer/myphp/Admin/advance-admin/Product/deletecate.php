<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE CATEGORY</title>
</head>
<body>
<?php
   include ('control.php'); // gọi trang control
   $get_data= new data_category(); // gọi lớp data_giangduong trong control
   $del=$get_data->delete_cate($_GET['del']);
   if($del) echo "<script>alert('Bạn đã xóa thành công');
               window.location='selectcate.php'</script>";
    else echo "<script>alert(' Bạn không xóa được') </script>";
                        
?>
    
</body>
</html>