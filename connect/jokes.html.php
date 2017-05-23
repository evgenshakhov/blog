<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output</title>
</head>
<body>
    <p>
        <?php foreach ($jokes as $joke): ?>
        <blockquote>
            <p>
                <?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
            </p>
        </blockquote>
        <?php endforeach; ?>
    </p>
</body>
</html>