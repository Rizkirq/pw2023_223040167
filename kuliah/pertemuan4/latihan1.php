<?php 

$a = 10;


 function cek_ganjil_genap ($angka) // parameter
 {

    if ($angka % 2  == 1 ) {
        return "$angka adalah bilangan GANJIL";
        
        } 
        else {
            return "$angka adalah bilangan GENAP <br>";

 }
}
echo cek_ganjil_genap($a); //argument
echo '<br>';
echo cek_ganjil_genap(5);










?>

