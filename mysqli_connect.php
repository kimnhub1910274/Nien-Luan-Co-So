<?php

// Tắt các báo cáo lỗi
mysqli_report(MYSQLI_REPORT_OFF);

// Ký tự @ dùng để tắt các cảnh báo (warning) sinh ra bởi câu lệnh
$dbc = @mysqli_connect('localhost', 'root', '', 'ct271');
if (!$dbc) {
	echo '<p class="error">Không thể kết nối đến CSDL vì:<br>' .
		mysqli_connect_error() . '.</p>';
	include 'footer.php';
	exit();
}
mysqli_set_charset($dbc, 'utf8');
