<?php
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
        //die("Pokrenuta sesija!"); Provera
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>

    <?php if(isset($_SESSION['ime'])): ?>
        <p>Pozdrav  <?= $_SESSION['ime']?></p>
         <a href="PrekiniSesiju.php">Obrisi sesiju</a>

        <?php else: ?>
         <form action="Logika.php" method="POST">
            <input type="text" name="ime" placeholder="Unesite ime">
            <button>Zapamti ime</button>
         </form>

        <?php endif; ?>
    </body>

</html>
