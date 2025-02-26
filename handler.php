<?php
$user_name = htmlspecialchars($_POST["user-name"] ?? '');
$user_phone = htmlspecialchars($_POST["user-phone"] ?? '');

$token = "7934338294:AAFrxE_rwhQQxDpvC2ptF0cjIZvDkUjV5xk";
$chat_id = "-4666873503";

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone 
);

$text = "";
foreach ($formData as $key => $value) {
    $text .= urlencode($key . "<b>" . $value . "</b>\n");
}

$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html";
$response = file_get_contents($url);

if ($response === false) {
    echo "error";
} else {
    echo "success";
}