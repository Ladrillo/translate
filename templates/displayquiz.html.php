<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sentences</title>
</head>

<body>
    <div class="container">
        <p>Aquí esta tu preguntita:</p>
        <blockquote>
            <p>
                <?php echo $row["qtext1"]; ?>
            </p>
        </blockquote>
    </div>
    <div class="container">
        <form action="?" method="post">
            <label for="answer">Your answer:<br><textarea id="answer" name="polla" rows="3" cols="100" maxlength="200"></textarea></label><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>

<?php

