<?php include 'ayar.php' ?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Şifremi Unuttum</title>

    <link rel="stylesheet" type="text/css" href="stil.css">
  </head>
  <body>
  <div class="container">
    <div class="row bg-light" >
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-white">
    <div class="form-row col-12 mx-3" style="margin-top:0px;">
    	
<div class="container">
<h2 class="card-title mt-3 text-center">Şifre Unuttum</h2>
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	

	<form method="post" action="">
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="resimler/planet-512.png" width="25" height="25"> </span>
		 </div>
        <input name="email" id="goster" placeholder="E-Posta Giriniz" class="form-control" type="email">
    </div> <!-- form-group// -->
    
    <style>
    input.larger {
    width: 20px;
    height: 20px;
    margin-left: 5px;
    margin-top: 8px;
}
    </style> 

    <div class="form-group">
        <button type="submit"  class="btn btn-primary btn-block"> Gönder  </button>
    </div> <!-- form-group// --> 
                                                                
</form>
<?php 


    if($_POST){
			 
			
        $eposta = trim($_POST["email"]); 
        
        
        if(!$eposta){
            
            echo '<div style="margin-top:20px;" class="alert alert-warning">eposta adresi bos bırakılamaz...</div>';
            
        }else {
            
          
        $query = $conn->prepare("select * from tblkayit where email=?");
        $query->execute(array($eposta));
        $row =  $query->fetch(PDO::FETCH_ASSOC);	  
        $kontrol = $query->rowCount();  
    
        if($kontrol){
			 
            include("mail/PHPMailerAutoload.php");
      
      $mail = new PHPMailer;            
       
      $mail->IsSMTP();
      //$mail->SMTPDebug = 1; // hata ayiklama: 1 = hata ve mesaj, 2 = sadece mesaj
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls'; // Güvenli baglanti icin ssl normal baglanti icin tls
      $mail->Host = "smtp.yandex.com"; // Mail sunucusuna ismi
      $mail->Port = 587; // Gucenli baglanti icin 465 Normal baglanti icin 587
      $mail->IsHTML(true);
      $mail->SetLanguage("tr", "phpmailer/language");
      $mail->CharSet  ="utf-8";
      $mail->Username = "nuricanbirdemir@yandex.com"; // Mail adresimizin kullanicı adi
      $mail->Password = "nurican4212"; // Mail adresimizin sifresi
      $mail->SetFrom("nuricanbirdemir@yandex.com",$row["Kadi"]); // Mail attigimizda gorulecek ismimiz
      $mail->AddAddress($eposta); // Maili gonderecegimiz kisi yani alici
      $mail->addReplyTo($eposta, $row["Kadi"]);
      $mail->Subject = "uye onay maili "; // Konu basligi
      $mail->Body = "<div style='background:#eee;padding:5px;margin:5px;width:300px;'> eposta : ".$eposta."</div> <br /> onaylama linki : <br /> 
      
      http://localhost/Nuri_Can_Birdemir/sifre_unuttum.php?eposta=".$eposta."&kod=".$row["uye_kod"]."
      
      
      "; // Mailin icerigi
      if(!$mail->Send()){
      
            echo '<div style="margin-top:20px;" class="alert alert-warning">mail gonderilemedi ama veritabanına kaydınız yapıldı..</div>';
      
      }else {
          
          echo '<div style="margin-top:20px;" class="alert alert-success">mail adresinize sifre onaylama maili gonderildi...</div>';
          
      }
           
            
       }else {
           
echo '<div style="margin-top:20px;" class="alert alert-warning">boyle bir eposta veritabanında kayıtlı gozukmuyor...</div>';

           
       }	  
    
    
    }   
    
    
    
    }else{

        echo "Bir Hata Olustu!!!";
    }

?>

</article>
</div> <!-- card.// -->

</div> 
<!--container end.//--



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>