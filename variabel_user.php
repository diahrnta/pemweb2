<?php
    // definisikan variables
    $nama = 'Diah';
    $umur = 19;
    $berat = 55;
    
    echo 'Nama : ' . $nama;
    echo '<br/>Umur : ' . $umur.' Tahun';
    echo '<br/>Berat : '.$berat.' Kg';
    
    echo "<br/>Hello $nama Apakabar";

    echo "</br>";
    //definisi variabel sistem
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

    echo "</br>";
    // definisikan konstansta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
    echo '<br/>Kelilingnya : '.$kll;
    ?>
    <hr/>
    <?php
    echo 'Nama databasenya : '.DBNAME;
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
    ?>