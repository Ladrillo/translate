<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sentences</title>
</head>

<body>
    <div class="container">
        <h3>Here are the questions in the database:</h3>
        <?php foreach ($sentences as $sentence): ?>
            <form action="?deletequestion" method="post">
                <blockquote>
                    <p>
                        <?php echo
                        htmlspecialchars($sentence['qtext1'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['qtext2'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['answ1'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['answ2'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['hint'], ENT_QUOTES, 'utf-8'); ?>

                        <input type="hidden" name="id" value="<?php echo $sentence['id']; ?>">
                        <input type="submit" value="Delete!">
                    </p>
                </blockquote>
            </form>
        <?php endforeach; ?>
    </div>
</body>

</html>