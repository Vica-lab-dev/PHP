<!DOCTYPE html>

<html lang="en">

<head>

    <title>Document</title>

</head>

<body>

    <form  method="GET" action="Domaci.php">
        <div>
            <input type="text" placeholder="Unesite cenu proizvoda" name="price">
        </div>
        
        <select name="korpa">
            <option>Hrana</option>
            <option>Oprema za racunare</option>
        </select>

        <div>
            <input id="tax" type="checkbox" name="tax">
            <label for="tax">Izracunaj porez</label>
        </div>
        
        <div>
            <button>Izracunaj cenu</button>
        </div>
    </form>

</body>

</html>