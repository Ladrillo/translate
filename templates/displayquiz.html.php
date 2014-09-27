<!--<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Display Quiz</title>
</head>

<body>-->
    <div class="container">
        <blockquote>
            <p>
                <?php echo $sentences[$_SESSION['counter']]['qtext1'] . '<br>' . $sentences[$_SESSION['counter']]['qtext2']; ?>
            </p>
        </blockquote>
    </div>
    <div class="container">
        <form action="?" method="post">
            <label for="answer">Your answer:<br><textarea id="answer" name="ansub" rows="3" cols="100" maxlength="200"></textarea></label><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>

</html>

<?php

