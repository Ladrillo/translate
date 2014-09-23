<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sentences</title>
</head>

<body>
    <div class="container">
        <h3>Here are the sentences from the database:</h3>
        <?php foreach ($sentences as $sentence): ?>
            <form action="?deletesen" method="post">
                <blockquote>
                    <p>
                        <?php echo
                        htmlspecialchars($sentence['spanish_sen'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['trans_1'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['trans_2'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['hint_1'], ENT_QUOTES, 'utf-8'), ' | ',
                        htmlspecialchars($sentence['hint_2'], ENT_QUOTES, 'utf-8'); ?>

                        <input type="hidden" name="id" value="<?php echo $sentence['id']; ?>">
                        <input type="submit" value="Delete!">
                    </p>
                </blockquote>
            </form>
        <?php endforeach; ?>
    </div>
</body>

</html>