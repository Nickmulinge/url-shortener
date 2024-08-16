<?php
include 'db.php';

function generateShortCode($length = 6) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

if (isset($_POST['url'])) {
    $original_url = $_POST['url'];
    $short_code = generateShortCode();

    $stmt = $conn->prepare("INSERT INTO urls (original_url, short_code) VALUES (?, ?)");
    $stmt->bind_param("ss", $original_url, $short_code);

    if ($stmt->execute()) {
        echo "Shortened URL: <a href='redirect.php?c=$short_code'>http://yourdomain.com/$short_code</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
