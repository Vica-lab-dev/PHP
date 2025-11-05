
<?php
require_once "./Baza.php";

if(!isset($_GET['email']) || empty($_GET['email']))
{
    die("Polje za email je obavezno!");
}

if(!isset($_GET['sifra']) || empty($_GET['sifra']))
{
    die("Polje za sifru je obavezno!");
}

$email = $_GET['email'];
$sifra = $_GET['sifra'];


$rezultat = $baza->query("SELECT * FROM korisnici WHERE email='$email'");

if($rezultat->num_rows >= 1)
{
    $korisnik = $rezultat->fetch_assoc();
    $verifikovanaSifra = password_verify($sifra, $korisnik['sifra']);
    if($verifikovanaSifra == true)
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        $_SESSION['ulogovan'] = true;
        $_SESSION['user-id'] = $korisnik['id'];

        header("Location: ./Index.php");
    }

    else
    {
        die("Neispravna sifra!");
    }
}

else
{
    echo "Korisnik ne postoji!";
}


header("location: ../Modeli/Index.php" )


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['email'])): ?>
    <a href="Modeli/Index.php"></a>
<?php else: ?>
    <p>Neuspela sesija</p>
<?php endif; ?>


</body>
</html>