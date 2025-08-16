<?php
require 'mang.php';

// Mảng mẫu
$mang = [5, 2, 9, 1, 7, 3];

// Lưu mảng gốc để in ra
$mangBanDau = implode(", ", $mang);

// Tìm giá trị lớn nhất
$max = timMax($mang);

// Tìm giá trị nhỏ nhất
$min = timMin($mang);

// Tính tổng
$tong = tinhTong($mang);

// Sắp xếp mảng tăng dần
sapXepTang($mang);
$mangSauSapXep = implode(", ", $mang);

// Kiểm tra giá trị 7 có trong mảng không
$kiemTra7 = kiemTraTonTai($mang, 7) ? "7 có trong mảng" : "7 không có trong mảng";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Array Functions</h1>
    <div class="result-box">
        <p><strong>Mảng ban đầu:</strong> <?php echo $mangBanDau; ?></p>
        <p><strong>Giá trị lớn nhất trong mảng:</strong> <?php echo $max; ?></p>
        <p><strong>Giá trị nhỏ nhất trong mảng:</strong> <?php echo $min; ?></p>
        <p><strong>Tổng các phần tử trong mảng:</strong> <?php echo $tong; ?></p>
        <p><strong>Mảng sau khi sắp xếp:</strong> <?php echo $mangSauSapXep; ?></p>
        <p><strong><?php echo $kiemTra7; ?></strong></p>
    </div>
</body>
</html>
