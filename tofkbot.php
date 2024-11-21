<?php
<?php
echo '<?php';
echo '// دریافت ورودی از تلگرام';
echo '$update = file_get_contents("php://input");';
echo '$update = json_decode($update, TRUE);';
echo '';
echo '// اطلاعات پیام';
echo '$chat_id = $update["message"]["chat"]["id"];';
echo '$message = $update["message"]["text"];';
echo '';
echo '// بررسی اینکه پیام دریافت شده است';
echo 'if ($message) {';
echo '// پاسخ دادن به پیام';
echo 'file_get_contents("https://api.telegram.org/bot7327490810:AAFA64r1ZIObvtLkA0W-vC-NGEEqAoTy4cM/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($message));';
echo '}';
echo '?>';
?>
?>