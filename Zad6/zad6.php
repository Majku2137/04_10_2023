<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Podaj liczbe</h1>
    <form method="post" action="">
        Podaj rok: <input type="number" name="liczba1" required><br>
        <input type="submit" value="Sprawdz">
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $liczba1 = $_POST["liczba1"];
        if ($liczba1 % 4 == 0 | $liczba1 % 400 ==0)
        {
            echo "W tym roku luty miał 29 dni";
        }
        else {
            echo "W tym roku luty miał 28 dni";
        }
    }
?>
</body>
</html>