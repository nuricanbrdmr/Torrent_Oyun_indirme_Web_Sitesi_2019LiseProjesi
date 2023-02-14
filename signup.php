<?php include 'ayar.php'; ob_start(); ?>
<!doctype html>
<html lang="tr">

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Kayıt Ol</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    </style>
</head>



<body>
    <div class="container w-100 bg-light" style="border-top:3px solid #09F;">

        <div id="login" class="row float-right mr-3 " style="margin-top:100px;">
            <a class="float-right " href="login.php" title="Giriş Yap">
                <img src="resimler/login-icon-png-10.png" style="width:30px; height:30px; padding:0; margin-right:3px;"><span style="color:#000; font-size:14px; font-weight:bold;">Giriş Yap</span></a>


            <a href="signup.php" class="float-right ml-3" title="Üye Ol">
                <img src="resimler/kayıt.png" style="width:30px; height:30px; margin-right:5px;"><span style="color:#000; font-size:14px; font-weight:bold;">Üye Ol</span></a>
        </div>

        <a href="index.php" title="BİrNDİR">
            <div id="logo" class="row mx-auto  justify-content-center" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="Adsiz.png" /></a>

        </div>
    </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info text-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" class="d-block">

            <ul class="navbar-nav mr-auto ml-3">
                    <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link  text-light" title="Ana Sayfa" href="index.php" style="font-weight:600; text-align:center;">Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link" title="Oyun" href="oyun.html" style="font-weight:600; text-align:center;">Oyun</a>
                    </li>

                    <li class="nav-item  px-3 " style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link" title="Program" href="prgrm.html" style="font-weight:600; text-align:center;">Program</a>
                    </li>

                    <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link" title="İletişim" href="iletisim.html" style="font-weight:600; text-align:center;">İletişim</a>
                    </li>

                    <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link" href="oneri.php" title=" Önerileriniz ">Önerileriniz</a>
                    </li>

                    <li class="nav-item px-3 " style=" border-right:1px solid #A6A6A6; ">
                        <a class="nav-link " href="# " title="Bize Hata Bildir! ">Bize Hata Bildir!</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="d-flex justify-content-center h-50">
                        <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Ara...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row bg-light">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-white">
                <div class="form-row col-12 mx-3" style="margin-top:0px;">

                    <div class="container">
                        <h2 class="card-title mt-3 text-center">Hesap Oluştur</h2>
                        <hr>
                        <div class="card bg-light">
                            <article class="card-body mx-auto" style="max-width: 400px;">

                                <p class="text-center">Ücretsiz hesabınızla başlayın</p>
                                <p>
                                    <a href="" class="btn btn-block btn-twitter"> <button type="button" class="btn btn-light" title=""> <i class="fab fa-twitter"></i>   Twitter Üzerinden Giriş Yapın </button></a>
                                    <a href="" class="btn btn-block btn-facebook"> <button type="button" class="btn btn-light" title=""> <i class="fab fa-facebook-f"></i>   Facebook Üzerinden Giriş Yapın  </button></a>
                                </p>
                                <p class="divider-text">
                                    <div class="bg-light text-center ">Ya Da</div>
                                </p>
                                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        </div>
                                        <input name="kadi" class="form-control" placeholder="Kullanıcı Adı" type="text">
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        </div>
                                        <input name="email" class="form-control" placeholder="Email adresiniz" type="email">
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                        </div>
                                        <input name="tel" class="form-control" placeholder="(05__)___ __ __" type="text">
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                        </div>
                                        <select class="form-control" name="is">
			                                  <option selected=""> İş Türünü Seçin</option>
		                                  	<option>Yazılım Mühendisi</option>
		                                  	<option>Mekatronik Mühendısliği</option>
		                                  	<option>Sibir Güvenlik Uzmanı</option>
	                                      	</select>
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input class="form-control" name="pass" placeholder="Şifre Oluştur" type="password">
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input class="form-control" name="passtkr" placeholder="Şifreyi Tekrarlayınız" type="password">
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group input-group">
                                    <div class="g-recaptcha" data-sitekey="6LfnkPEUAAAAAIZPbHHO6MlYX9BtCLzXbcobTitv"></div>
                                    </div>
                                    <!-- form-group// -->
                                    <div class="form-group">
                            <button type="submit" name="kaydet" class="btn btn-primary btn-block"> Hesap oluştur  </button>
                                    </div>
                                    <!-- form-group// -->
                                    <p class="text-center"> Hesabın var mı? <a href="login.html">Oturum Aç</a></p>
                                </form>
                            </article>
                        </div>
                        <!-- card.// -->

                    </div>
                    <!--container end.//-->

                </div>

            </div>


            
     <?php
     
     use PHPMailer\PHPMailer\PHPMailer;

     require "vendor/autoload.php";

     if(isset($_POST["kaydet"]))
            {
        // recaptcha PHP BAŞLANGIC
             $response=$_POST["g-recaptcha-response"];
             $secret="6LfnkPEUAAAAAPwB3JSZZNqE5n276f7WxQJZbe7h";
             $remoteip=$_SERVER["REMOTE_ADDR"];   
             $captcha=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip"); 
             
             $result=json_decode($captcha);
        //recaptcha PHP BİTİŞ
        if($result->success==1){
            extract($_POST);

            $sifre=$_POST["pass"];
            $sifretek=$_POST["passtkr"];
            $kod    = trim(md5(rand(0,999999)));

            if($sifre!=$sifretek){ echo "<p style='color:red; margin-left:60px;'><strong>Şifreniz Aynı Değil</strong></p> <br>";}
            else{
            if($kadi && $email && $pass && $passtkr && $is && $tel)
            {
            $veri=$conn->prepare("insert into tblkayit set Kadi=?,email=?,Sifre=?,Sifre_tekrar=? ,İs=? ,Tel=?,uye_kod=?");
            $Ekle=$veri->execute(array($kadi,$email,$pass,$passtkr,$is,$tel,$kod));
            
            if($Ekle){   
            
            $mail = new PHPMailer(true);  
            try{          
 			//Server Ayarları
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls'; //ssl
            $mail->Port = 587; //Gucenli baglanti icin 465 Normal baglanti icin 587
            $mail->Host = "smtp.gmail.com";
            $mail->Username = "nuricanb12@gmail.com"; // Mail adresimizin kullanicı adi
			$mail->Password = "mgeqluyenvywyakf"; // Mail adresimizin sifresi
			$mail->SetLanguage("tr", "phpmailer/language");
			$mail->CharSet  ="utf-8";
            //Alıcı Ayarları
			$mail->SetFrom("nuricanbirdemir@yandex.com",$kadi); // Mail attigimizda gorulecek ismimiz
			$mail->AddAddress($email); // Maili gonderecegimiz kisi yani alici
			$mail->addReplyTo($email, $kadi);
            //Gönderi Ayarları
            $mail->IsHTML(true);
			$mail->Subject = "uye onay maili "; // Konu basligi
			$mail->Body = "<div style='background:#eee;padding:5px;margin:5px;width:300px;'> eposta : ".$email."</div> <br /> onaylama linki : <br /> 
			
			http://localhost/Torrent_Oyun_İndirme_Web_Sitesi_2019LiseProjesi/onay.php?eposta=".$email."&kod=".$kod."
			
			
			"; // Mailin icerigi
			if(!$mail->Send()){
                  echo '<div style="margin-top:20px;" class="alert alert-danger mx-auto">Mail Gönderilemedi Tekrar Deneyiniz!!</div>';
			}else {
				echo '<div style="margin-top:20px;" class="alert alert-success mx-auto">Kaydınız Oluşmuştur Mail Adresinize Onaylama Maili Gönderildi...</div>';
                }

            }catch(Exception $e){
                    echo $e->getMessage();
                }
            }
            
            }
        
            else
            {echo '<div style="margin-top:10px;" class="alert alert-danger mx-auto">Lütfen İlgili Alanları Boş Bırakmayınız.</div>';}
            
            }
        }else{
            echo '<div style="margin-top:10px;" class="alert alert-danger mx-auto">Lütfen Güvenlik İşlemini Tamamlayınız!! </div>';}
        }
            
                            ?>


<script src="https://www.google.com/recaptcha/api.js?hl=tr"></script>

            <div class="container bg-info ">
                <!-- Footer -->
                <footer class="page-footer font-small  ">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 text-warning pl-2 font-weight-bold" style="line-height:50px;"> BİrNDİR <span class="text-light"> Copyright © 2019.</span>
                        <a href="index.html" class="text-light" style="margin-left:20px;"> BİrNDİR.com</a>

                        <div class="btn-group mx-auto" role="group" style="float:right;">
                            <a href="#"> <button type="button" class="btn btn-info" title="Facebook"><img height="40" width="40" src="facebook.png"></button></a>
                            <a href="#"> <button type="button" class="btn btn-info" title="Google Plus"><img height="40" width="40" src="icons8-google-plus-100.png"></button></a>
                            <a href="#"> <button type="button" class="btn btn-info" title="İnstagram"><img height="40" width="40" src="icons8-instagram-64.png"></button></a>
                            <a href="#"> <button type="button" class="btn btn-info" title="Twitter"><img height="40" width="40" src="icons8-twitter-64.png"></button></a>
                        </div>
                    </div>

                    <!-- Copyright -->

                </footer>

            </div>

        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>