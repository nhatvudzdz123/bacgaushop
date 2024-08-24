<?php 
$conn = mysqli_connect($_GET['server'], $_GET['user'], $_GET['pass'], $_GET['database']);

if (!$conn) {
    die('<meta http-equiv="refresh" content="0;url=/install/?i=' . mysqli_connect_error().'">');
}else {
mysqli_set_charset($conn,"utf8");

sleep(5);

$config = 'demo_config.txt';
$demo = file_get_contents($config);

$text = str_replace('xxhostxx', $_GET['server'], $demo);
$text = str_replace('xxuserxx', $_GET['user'], $text);
$text = str_replace('xxpassxx', $_GET['pass'], $text);
$text = str_replace('xxdataxx', $_GET['database'], $text);

$f = fopen('../config.php', 'w');
fwrite($f, $text);
fclose($f);


require '../lib/Curl/Class.Curl.php';
$curl = new cURL;
$curl->url = 'https://update.conghieuit.net/data/shopmathuat.txt';
$contents = $curl->try_cURL();

$sql = explode(";", $contents);
foreach ($sql as $query) {
	$result = mysqli_query($conn, $query);
	if ($result) {
		echo "<tr><td><br></td></tr>";
		echo "<tr><td>".$query."</td></tr>";
		echo "<tr><td><br></td></tr>";
	}
}

echo "<script>alert('Cài Đặt Thành Công! Vui Lòng Xóa Thư Mục Install và truy cập trang chủ để thưởng thức!')</script>";
}
?>