<?php
$nilai = 90;

echo "Nilai : $nilai \n";

//function
function nama ($nama){
    echo "Selamat Pagi, $nama";
}
nama("Wilma ");

function nama2($nama2 = "Wilma Auraruna Khalif"){
    echo "\nSelamat pagi, $nama2";
}

nama2();

function penjumlahan($a, $b){
    return $a + $b;
}

echo "\n", penjumlahan (8, 9). "\n";

//Rekursi
echo "\nFunction rekursif\n";
function hitungMundur($angka){
    if ($angka > 0){
        echo "$angka \n";
        hitungMundur($angka -1);
    } else {
        echo "selesai";
    }
}
hitungMundur(5);


//Function bawaan PHP

// Manipulasi String
echo strlen ("woii world"). "\n";

//Manipulasi array
$buah = array("apple", "orange", "Banana", "Mango", "Pineapple", "Pawpaw");
echo count($buah) . "\n";

//Manipulasi tanggal
echo date ("Y-M-D") . "\n";
echo date ("y-m-d") . "\n";
?>
