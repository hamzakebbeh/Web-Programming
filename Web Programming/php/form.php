<?php
include("FORMWEB.php");

if(isset($_POST["gonder"]))
{
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $email=$_POST["email"];
    $phone=$_POST["telefon"];
    $soruntipi=$_POST["sorun"];
    $cevap=$_POST["cevap"];
    $mesaj=$_POST["mesaj"];


    $ekle="insert into bilgiler (name,surname,email,phone,soruntipi,cevap,mesaj) VALUES ('$name','$surname','$email','$phone','$soruntipi','$cevap','$mesaj')";
    $kayitEkle = mysqli_query($con,$ekle);

    if($kayitEkle){
        echo 'Kayıt Başarılı bir şekilde eklendi.';
    }
    else{
        echo ' Kayıt eklenirken bir problem oluştu.';
    mysqli_close($con);
    
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="firsatbuton.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
   
</head>

<body>




    </div>
    <div class="anacerceve">
     
        <div class="anacerceve_ust">  
        <p id="BizeUlasin">BİZE ULAŞIN</p>
        </div>

        <form class="form" action="" method="POST">
           Adınız     <hr class="hr_ad">  <input class="IletisimInput" name="name" type="text" required ><br><br>
            Soyadınız  <hr class="hr_soyad">  <input class="IletisimInput_Soyad" name="surname" type="text" required ><br><br>
            E-Postanız <hr class="hr_mail">  <input class="IletisimInput_Mail" name="email" type="email" required > <br><br>
            
            
            
            Sorunun Türü nedir? 
            <hr id="hr_sorun_turu">
            <select class="select_option"  name="sorun"  >
                <option value="seciniz"          class="optionlar" selected>Seçiniz</option>
                <option value="mali_islem"       class="optionlar">Mali İşlemler</option>
                <option value="site_hakkinda"    class="optionlar">Site Hakkında</option>
                <option value="urunler_hakkinda"  class="optionlar">Ürünler Hakkında</option>
                <option value="fiyatlandirma"    class="optionlar">Fiyatlandırma</option>
            </select>

            <br><br>

           
           
           Sitemizden daha önce <br> satın alım yaptınız mı?<hr class="hr_radiobutton">
            
            <input type="radio" name="cevap" value="evet" class="radiobutonlar"required>
            <label>Evet</label><br>

            <input type="radio" name="cevap" value="hayir" class="radiobutonlar"required>
            <label>Hayır</label><br><br>

            Telefon Numaranız<hr class="hr_tel">
            <input type="text" class="numara" name="telefon" required>
            <br><br>

            Eklemek İstediğiniz Dosya<br>(Opsionel)<hr class="hr_dosya">
            <input type="file" style="color:transparent;" name="dosya" class="dosya" onchange="this.style.color = 'black';"/>
            <br>

            İletmek İstediğiniz Mesaj
            <hr class="hr_textarea">
            <br>

        
            <textarea id="mesajAlanıId" class="mesajAlanıClass" name="mesaj" placeholder="Mesajınızı Buraya Yazınız..."></textarea>
       
        

<input type="submit" name=" gonder"> </input>
        </form>

        
    

   






</body>
</html>