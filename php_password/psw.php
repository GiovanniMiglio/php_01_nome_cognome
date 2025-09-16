<?php
function contieneNumero($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;
}
function contieneLetteraMaiuscola($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    return false;
}
function contieneSpeciali($password) {
    return preg_match('/[\W]/', $password);
}
function richiestaPassword() {
    do {
        $password = readline("Inserisci la password: ");
        $length = strlen($password);

        if (empty($password)) {
            echo "La password non può essere vuota.\n";
        } elseif ($length < 8) {
            echo "Password troppo corta. Deve avere almeno 8 caratteri.\n";
        } elseif (!contieneNumero($password)) {
            echo "La password deve contenere almeno un numero.\n";
        } elseif (!contieneLetteraMaiuscola($password)) {
            echo "La password deve contenere almeno una lettera maiuscola.\n";
        } elseif (!contieneSpeciali($password)) {
            echo "La password deve contenere almeno un carattere speciale.\n";
        } else {
            echo "Password accettata!\n";
            return $password;
        }

    } while (true);
}     
$password = richiestaPassword();