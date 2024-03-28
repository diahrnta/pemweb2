<?php
require_once('class_persegipanjang.php');

function getLuas(){
    $persegipanjang = new PersegiPanjang(6,4);
    $luas = $persegipanjang->panjang * $persegipanjang->lebar;
    echo "Luas = ".$luas . PHP_EOL;
}
function getKeliling(){
    $persegipanjang = new PersegiPanjang(6,4);
    $keliling = 2*($persegipanjang->panjang+$persegipanjang->lebar);
    echo "Keliling = ". $keliling . PHP_EOL;
}

getLuas();
getKeliling();
?>