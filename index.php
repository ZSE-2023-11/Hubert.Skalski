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
            $conn = new mysqli("127.0.0.1","admin","testy","baza");
            //u siebie z serwra to właczałem ale w plikach jest baza danych
            if ($conn->connect_error) {
                 die("Coś nie pykło: " . $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $login = $conn->real_escape_string($_POST["login"]);
                $haslo = $conn->real_escape_string($_POST["password"]);
                 $query = "SELECT * FROM users WHERE login='$login' AND password='$haslo'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) 
                {
                     echo "Zalogowano";
                } 
                else 
                {
                     echo "Błąd logowania";
                }


                $conn->close();
                }
        ?>
    </form>
    </div>
</body>
</html>