<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = $_POST['response'];

    // Thực hiện các thao tác với dữ liệu (lưu vào cơ sở dữ liệu, gửi email, v.v.)
    
    // Ví dụ lưu vào tệp
    $file = 'responses.txt';
    $current = file_get_contents($file);
    $current .= $response . "\n";
    file_put_contents($file, $current);

    // Trả về phản hồi cho JavaScript
    echo "Câu trả lời của bạn đã được gửi thành công: " . htmlspecialchars($response);
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>

