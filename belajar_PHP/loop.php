<?php

$listMahasiswa = ['Nurul Huda'=> $nilaiA, 'Wahid Abdullah' => $nilaiB, 'Elmo Bachtiar'=> $nilaiC];
$nilaiA = [60];
$nilaiB = [80];
$nilaiC = [90];

for ($i = 0; $i < count($listMahasiswa); $i++) {
    echo "Nama: {$listMahasiswa[$i]} <br>";
}


if ($nilaiA > 80){
    echo "Lulus";
}else{
    echo "tidak";
}
echo "<br>";

if ($nilaiB > 80){
    echo "Lulus";
}else{
    echo "tidak";
}
echo "<br>";


if ($nilaiC > 80){
    echo "Lulus";
}else{
    echo "tidak";
}

