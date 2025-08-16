<?php
// Tạo dữ liệu mẫu (100 dòng)
$books = [];
for ($i = 1; $i <= 100; $i++) {
    $books[] = [
        'ten' => 'Tensach' . $i,
        'noidung' => 'Noidung' . $i
    ];
}

// Số dòng mỗi trang
$rowsPerPage = 10;

// Xác định trang hiện tại
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($currentPage < 1) $currentPage = 1;

// Tính vị trí bắt đầu
$start = ($currentPage - 1) * $rowsPerPage;

// Cắt mảng dữ liệu theo trang
$pageData = array_slice($books, $start, $rowsPerPage);

// Tính tổng số trang
$totalPages = ceil(count($books) / $rowsPerPage);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sách</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .pagination {
            text-align: center;
            margin-top: 15px;
        }
        .pagination a {
            padding: 6px 12px;
            border: 1px solid #000;
            margin: 2px;
            text-decoration: none;
            color: black;
        }
        .pagination a.active {
            background-color: #000;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Danh sách sách</h2>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung sách</th>
    </tr>
    <?php foreach ($pageData as $index => $book): ?>
        <tr>
            <td><?php echo $start + $index + 1; ?></td>
            <td><?php echo $book['ten']; ?></td>
            <td><?php echo $book['noidung']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="<?php if ($i == $currentPage) echo 'active'; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>

</body>
</html>
