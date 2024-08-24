<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => '', // mysql host service
'USERNAME' => 'id20012465_huy1', // username
'PASSWORD' => 'Huy15072008@', // password
'DATABASE' => 'id20012465_huy', // database name

'facebook_app_id' => 'null',
'facebook_app_key' => 'null',
'home' => 'https://shopdemo-huy2008.000webhostapp.com/', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '7.3.0', // Phiên bản mã nguồn hiện tại
'author' => 'Hoang Duc Huy',
'contact' => 'https://m.facebook.com/100027072052510/'
);
?>