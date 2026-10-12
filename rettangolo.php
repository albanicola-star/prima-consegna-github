<?php

    //base
    $base= $_POST['base'];
    //altezza
    $altezza=$_POST['altezza'];

    echo "base inserita:" . $base . "<br>";
    echo "altezza inserita:" . $altezza . "<br>";

    $area = $base*$altezza;
    echo "area:" . $area . "<br>";

    $perimetro=($base*2)+($altezza*2);
    echo "perimetro:" . $perimetro . "<br>";



?>