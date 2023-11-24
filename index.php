<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie2</title>
    <style>
    </style>
</head>
<body>
    <div id="blok">
    <form method="post">
        <input type="text" name="login" />
        <br>
        <input type="password" name="password" />
        <br>
        <button type="sumbit">Zaloguj</button>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST["login"] == "admin" && $_POST["password"] == "test")
                {
                    echo "<a>Zalogowano</a>";
                }
                else 
                {
                    echo "<a>Niezalogowano, błędne dane</a>";
                }
                }
            ?>
    </form>
    </div>
</body>
</html>