    Algorytmy szyfrowania:
        Matematyczne procedury używane do ukrywania danych przed nieuprawnionymi odbiorcami.
        Przykłady to AES (Advanced Encryption Standard) oraz RSA (Rivest-Shamir-Adleman).
        Wybór algorytmu zależy od kontekstu i wymagań bezpieczeństwa.

    Funkcje skrótu:
        Algorytmy kryptograficzne transformujące dane wejściowe o dowolnej długości na stałą długość wyjściową, nazywaną skrótem.
        Każda zmiana w danych wejściowych powinna generować zupełnie inny skrót.
        Powszechnie używane do bezpiecznego przechowywania haseł.

    Sól (salt):
        Losowy dodatek dodawany do danych przed przetworzeniem przez funkcję skrótu.
        Zapobiega atakom typu "ataki słownikowe" lub "ataki brute force".
        Każde hasło ma unikalną sól, co oznacza, że identyczne hasła generują różne skróty.

    Funkcje derivacji klucza (KDF):
        Używane do generowania kluczy kryptograficznych na podstawie istniejącego klucza lub hasła.
        Zwiększają bezpieczeństwo kluczy poprzez dodatkowe operacje, utrudniając odgadnięcie oryginalnego klucza.
        Popularne w procesie uwierzytelniania.

    Protokoły autentykacji:
        Zbiory zasad i procedur weryfikujące tożsamość użytkownika, urządzenia lub systemu.
        Przykłady to protokół OAuth (do autoryzacji dostępu do zasobów online) i protokół SSL/TLS (do zabezpieczania komunikacji internetowej).

