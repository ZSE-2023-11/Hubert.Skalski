<?php

function hash_password($password) {
    //Szyfrowanie Shad256
    $hashed_password = hash('sha256', $password);
    return $hashed_password;
}

//Pierwszy przykład
$password_to_save = "hash_haslo";
$hashed_password = hash_password($password_to_save);

function check_password($entered_password, $stored_password) {
    return hash('sha256', $entered_password) == $stored_password;
}

//Drugi przykład
$entered_password = "hash_haslo";
$is_password_correct = check_password($entered_password, $hashed_password);

if ($is_password_correct) {
    echo "Zalogowane</br>";
} else {
    echo "Złe hasło</br>";
}

echo "Hasło po szyfrowaniu: " . $hashed_password."</br>";



?>