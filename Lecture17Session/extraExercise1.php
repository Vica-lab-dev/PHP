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
        <?php if(isset($_SESSION['username'])): ?>
        <p>Hello, <?= $_SESSION['username'] ?></p>
            <a href="extraExercise1StopSesion.php">Stop Session</a>

        <?php else: ?>
        <form action="extraExercise1Logic.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <button>Remember username</button>
        </form>
        <?php endif; ?>
    </body>
</html>


