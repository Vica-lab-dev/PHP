<?php
    $ime = "Viktor";
    $godine = 27; // BEz HTML-a u PHP-u, samo PHP u <HTML-u
                    // Ispis rezultata u HTML-u

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vezba 2 u PHP-u</title>
</head>
<body>
    <h1> <?php echo $ime; ?></h1>
    <h1> <?= $ime; ?> </h1> <!-- Ne zna puno ljudi za ovaj nacin -->
                                        
    <p> <?php echo $godine; ?> </p>
</body>
</html>