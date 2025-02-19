<?php
echo "Hello World";
$TOKEN = "7593134488:AAHoqHRCqvoBLIa34PyqZ9XBS2klorSkiJQ";
$API_URL = "https://api.telegram.org/bot$TOKEN/";

$update = json_decode(file_get_contents("php://input"), true);
if (isset($update["message"])) {
    $chat_id = $update["message"]["chat"]["id"];
    $text = $update["message"]["text"];

    $reply = "Siz yuborgan xabar: " . $text;
    
    file_get_contents($API_URL . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($reply));
}
?>
