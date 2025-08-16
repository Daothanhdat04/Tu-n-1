<?php
require 'ham.php';

$ketqua = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];
    $pheptinh = $_POST['pheptinh'];

    switch ($pheptinh) {
        case 'tong':
            $ketqua = "Tổng: " . tong($so1, $so2);
            break;
        case 'hieu':
            $ketqua = "Hiệu: " . hieu($so1, $so2);
            break;
        case 'tich':
            $ketqua = "Tích: " . tich($so1, $so2);
            break;
        case 'thuong':
            $ketqua = "Thương: " . thuong($so1, $so2);
            break;
        case 'nguyento':
            $ketqua = $so1 . (laSoNguyenTo($so1) ? " là số nguyên tố" : " không phải là số nguyên tố");
            break;
        case 'chan':
            $ketqua = $so1 . (laSoChan($so1) ? " là số chẵn" : " là số lẻ");
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
</head>
<body>
    <h2>Phép tính trên hai số</h2>
    <form method="post">
        Số 1: <input type="number" name="so1" required><br><br>
        Số 2: <input type="number" name="so2" required><br><br>

        Chọn phép tính: 
        <select name="pheptinh">
            <option value="tong">Tính tổng</option>
            <option value="hieu">Tính hiệu</option>
            <option value="tich">Tính tích</option>
            <option value="thuong">Tính thương</option>
            <option value="nguyento">Kiểm tra số nguyên tố (Số 1)</option>
            <option value="chan">Kiểm tra số chẵn/lẻ (Số 1)</option>
        </select><br><br>

        <button type="submit">Thực hiện</button>
    </form>

    <?php if ($ketqua != ''): ?>
        <h3>Kết quả: <?php echo $ketqua; ?></h3>
    <?php endif; ?>
</body>
</html>
