<?php
include 'db.php';

if (isset($_GET['c'])) {
    $short_code = $_GET['c'];

    $stmt = $conn->prepare("SELECT original_url FROM urls WHERE short_code = ?");
    $stmt->bind_param("s", $short_code);
    $stmt->execute();
    $stmt->bind_result($original_url);
    $stmt->fetch();

    if ($original_url) {
        header("Location: $original_url");
        exit;
    } else {
        echo "URL not found!";
    }
}
?>
