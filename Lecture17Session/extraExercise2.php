<?php

if(session_status() == PHP_SESSION_NONE)
{
    session_start();
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>

    <body>

        <?php if(isset($_SESSION["user_id"])): ?>
        <p>User ID is <?= $_SESSION["user_id"] ?></p>
            <a href="extraExercise2StopSession.php">Destroy session</a>
        <?php else: ?>
            <form action="extraExercise2Logic.php" method="POST">
                <input type="email" name="email" placeholder="Email:" required>
                <input type="password" name="password" placeholder="Password:" required>
                <button>Login</button>
            </form>
        <?php endif; ?>

    </body>

</html>
