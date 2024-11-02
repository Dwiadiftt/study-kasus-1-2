<?php
    function persegi($panjangsisi){
        if ($panjangsisi > 0) {
            $sisi = $panjangsisi**2;
            echo"luas persegi adalah ".$sisi."";
        }elseif ($panjangsisi < 0) {
            echo"luas persegi eror";
        }
    }
persegi (-100);


echo"<br>";
echo"<br>";
echo"<br>";

function bilanganganjil($array){
    if (is_array($array)){
        foreach ($array as $number) {
            if (is_integer($number)) {
                if(is_float($number)){
                    exit;
                }
                if ($number % 2 == 1) {
                    echo "".$number."";
                }
            }
         }
         if (!is_integer($number) && !is_float($number)) {
            echo "nilai bukan angka";
         }
    }else{
        echo "anda tidak memasukan array";
    }
}
bilanganganjil("");

?>