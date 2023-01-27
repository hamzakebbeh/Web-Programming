<?php
$zar1= isset($_GET['zar1']) ? $_GET['zar1'] : 0;
$zar2= isset($_GET['zar2']) ? $_GET['zar2'] : 0;
if(is_numeric($zar1) && is_numeric($zar2)) {
if(($zar1 < 7) && ($zar2 < 7)) {
if(($zar1 > 0) && ($zar2 > 0)){
$sayi1 = rand(1,6);
$sayi2 = rand(1,6);
$tahmin=0;
if($zar1 == $sayi1 || $zar2 == $sayi1){
$tahmin++;
}
if($zar1 == $sayi2 || $zar2 == $sayi2){
$tahmin++;
}
echo "<p>Bilgisayarın attığı zarlar</p>";
echo $sayi1;
echo $sayi2;

echo "<p>senin attığın zarlar : </p>";
echo $zar1;
echo $zar2;

if($tahmin >0){
echo "<p>Tebrikler, $tahmin zarı doğru bildiniz</p>";
}
else{
echo "<p>Tekrar Dene</p>";
}
}
}
}
?>
<p>1-6 iki rakam giriniz ve tahminde bulunun.</p>
<form action="" method="get">
<input type="text" name="zar1" maxlength="1" size="1">
<input type="text" name="zar2" maxlength="1" size="1">
<input type="submit" value="başlat">
</form>