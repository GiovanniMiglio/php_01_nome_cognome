<?php
$password = readline("Inserisci la password: ");
$pswlenghth = strlen($password);

function checklength($pswlenghth){
    for($i=0; $i<$pswlenghth; $i++){
        if($pswlenghth < 8){
            return "Password troppo corta";
        } else {
            return "Password accettata";
        }
    }
}
echo checklength($pswlenghth);