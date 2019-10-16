<?php
    $p = 7;
    $t=7;
    $l=2;
    $air=$p*$t*$l;

    echo 'bambang mempunyai air dengan volume 98 cm kubik, agar air tersebut pas (tidak lebih dan tidak kurang) dimasukkan ke dalam sebuah wadah, berapakah panjang,lebar dan tinggi dari wadah tersebut ? <br>';
    echo 'jika volume wadah pas maka kondisinya = pas<br>';
    echo 'jika volume wadah lebih kecil maka kondisinya = tumpah<br>'
    echo 'jika volume wadah lebih besar maka kondisinya = sisa<br>'

    if($air == 98){
        echo 'pas';
    }elseif($air < 98){
        echo 'tumpah';
    }else {
        echo 'sisa';
    }
?>