<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>URL Shortener</h1>
        <form action="shorten.php" method="post">
            <input type="url" name="url" placeholder="Enter your URL" required>
            <button type="submit">Shorten</button>
        </form>
    </div>
</body>
</html>
