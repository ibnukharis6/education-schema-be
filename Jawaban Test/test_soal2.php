<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($i = 0; $i < count($data); $i++) {

    //Menampilkan output tidak bisa divalidasi sistem jika nilai index kurang dari 0
    if ($data[$i] < 0) {
        echo "index ke $i tidak bisa di validasi sistem" . PHP_EOL;

   //Menampilkan nilai dan tipe data dari tiap index
    } else {
        echo "index ke $i adalah " . gettype($data[$i]) . " dengan data " . $data[$i] . PHP_EOL;
    }
}