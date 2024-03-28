<?php
// array: sekumpulan data
// array numerik dan asosiatif
// perualangan foreach

// 1. ARRAY NUMERIK
$ar_buah = array ('pepaya','mangga','pisang','jeruk');

echo $ar_buah[2];
echo '<br>';
$jumlah =count($ar_buah);
echo $jumlah;
echo '<br>';

// hasil sekumpulan data dengan foreach
foreach($ar_buah as $value) {
    echo "$value <br>";
}
echo '<br>';
foreach($ar_buah as $index => $value) {
    echo "$index $value <br>";
}
echo '<br>';
// 2.ARRAY ASOSIATIF
$ar_hewan =array(10=>'kucing',20=> 'burung',30=>'singa','ikan');
foreach($ar_hewan as $index => $value) {
    echo "$index $value <br>";
}