<!DOCTYPE html>
<html>
<head>
    <title>Teacher Form</title>
    <!--<meta charset="utf-8">-->
</head>

<body>

    <?php
    $a = getdate();
    printf('%s %d, %d',$a['month'],$a['mday'],$a['year']);
    ?>

    <h1>Teachers' Form</h1>

    <form action="processing.php" method="post" accept-charset="utf-8">
        <label for="spanish">Spanish:</label><br>
        <textarea id="spanish" name="spanish" rows="3" cols="100" maxlength="200"></textarea><br>

        <label for="english 1">Translation 1:</label><br>
        <textarea id="english_1" name="english_1" rows="3" cols="100" maxlength="200"></textarea><br>

        <label for="english 2">Translation 2:</label><br>
        <textarea id="english_2" name="english_2" rows="3" cols="100" maxlength="200"></textarea><br>

        <label for="hint 1">Hint 1:</label><br>
        <textarea id="hint_1" name="hint_1" rows="3" cols="100" maxlength="300"></textarea><br>

        <label for="hint 2">Hint 2:</label><br>
        <textarea id="hint_2" name="hint_2" rows="3" cols="100" maxlength="300"></textarea><br>

        <input type="submit" value="submit">
    </form>



</body>

</html>