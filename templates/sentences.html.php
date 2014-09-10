<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sentences</title>
</head>

<body>
    <p>Here are the sentences from the database:</p>
    <?php foreach ($sentences as $sentence): ?>
        <blockquote>
            <p><?php echo htmlspecialchars($sentence, ENT_QUOTES, 'utf-8'); ?></p>
        </blockquote>
    <?php endforeach; ?>
</body>

</html>