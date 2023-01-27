<?php
session_start();
header("refresh:10; url=oyun.php");
if(!isset($_SESSION['hak']) || isset($_GET['dene'])){
$_SESSION['hak'] =60;
}
if( isset($_POST['sayi'])){
if($_SESSION['karesi'] == $_POST['sayi']){
$_SESSION['hak'] +=1;
}else{
$_SESSION['hak'] -=1;
}
}
else{
$_SESSION['hak'] -=1;
}
$sayi= rand(2,12);
$_SESSION['karesi']=pow($sayi,2);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
if($_SESSION['hak']<=0){
die('<a href="?dene=1">5 krediniz bitti,tekrar dene</a>');
}
?>
<h4>10 saniye içinde cevap verin.<?=$_SESSION['hak']?>Krediniz var</h4>
<form action="oyun.php" method="POST">
<?=$sayi?> sayısının karesi kaçtır?<br>
<input type="text" name="sayi"/>
<input type="submit" value="Gönder" />
</form>
</body>
<html>