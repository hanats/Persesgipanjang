<?php
require_once "class_persegiPanjang.php";

$persegiPanjang1 = new persegiPanjang(10, 5);
$persegiPanjang2 = new persegiPanjang(15, 12);
echo "<br/> Persegi Panjang I mempunyai P = 10, L = 5";
echo "<br/> Persegi Panjang II mempunyai P = 15, L = 12";
echo "<br/> Luas Persegi Panjang I = ".$persegiPanjang1->getLuas();
echo "<br/> Luas Persegi Panjang II = ".$persegiPanjang2->getLuas();
echo "<br/> Keliling Persegi Panjang I = ".$persegiPanjang1->getKeliling();
echo "<br/> Keliling Persegi Panjang II = ".$persegiPanjang2->getKeliling();

?>