<?php 
// array
// membuat array
$hari = array ("senin", "selasa", "rabu");
$bulan = ['januari', 'februari', 'maret', 'april'];
$myarray = ['muhamad', 29, false];
$binatang = ['🐱‍👤','🐱‍🐉','🐱‍👓','🐱‍🚀','🐱‍🏍'];

var_dump ($hari);
echo "<hr>";

//manipulasi array
$hari[] = 'jumat';
print_r($hari);

//elemen di akhir mengggunakan array_push
array_push($bulan, "mei", "juni");
print_r($bulan);

?>