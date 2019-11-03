<?php

function faktorial($nilai){
     $hasil= 1;
    for($i=$nilai; $i>0; $i--){
        $hasil = $hasil * $i;
    }
    echo "Faktorial dari $nilai adalah $hasil " ;
}

$nilai = 4;
faktorial($nilai);
?>
