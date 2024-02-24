<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LẬP TRÌNH HỆ THỐNG NHÚNG</title>
    <link rel="stylesheet" href="/index.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow-x: auto;
        }

        th, td {
            border: 1px solid #bdc3c7;
            text-align: center; /* Căn giữa nội dung trong ô */
            padding: 12px;
        }

        th {
            background-color: #2c3e50;
            color: #fff;
        }

        .temp-icon, .humd-icon, .gas-icon {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .temp-icon {
            color: #e74c3c;
        }

        .humd-icon {
            color: #3498db;
        }

        .gas-icon {
            color: #27ae60;
        }

        tbody tr:hover {
            background-color: #ecf0f1;
            transition: background-color 0.3s ease;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tbody tr:hover td {
            background-color: #d5d8dc;
        }

        @media screen and (max-width: 600px) {
            table {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>

    <header>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1 style="text-align: center; margin: 0 auto;">NHÀ CỦA LVQT_MAX_CE2</h1>
            <div style="text-align: right;">
                <p style="color: #fff;">Xin chào!</p>
                <button style="background-color: #e74c3c; color: #fff;"><a href="index.php?page=login" style="color: #fff; text-decoration: none;">Đăng xuất</a></button>
            </div>
        </div>
    </header>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>
                    <i class="fas fa-user"></i>
                    Người dùng
                </th>
                <th>
                    <i class="fas fa-id-card"></i>
                    Mã thẻ
                </th>
                <th>
                    <i class="fas fa-toggle-on"></i>
                    Trạng Thái
                </th>
                <th>
                    <i class="far fa-clock"></i>
                    Ngày giờ
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $allData = $db->getAllData();
            foreach ($allData as $index => $each) {
                echo '<tr>';
                echo '<td>' . ($index + 1) . '</td>';
                echo '<td>' . $each['username'] . '</td>';
                echo '<td>' . $each['id_card'] . '</td>';
                echo '<td>' . $each['status'] . '</td>';
                echo '<td>' . $each['date'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            var tbody = document.querySelector("tbody");

            var data = <?php echo json_encode($dataArray); ?>;

            data.forEach(function (row) {
                var newRow = document.createElement("tr");
                row.forEach(function (cell, index) {
