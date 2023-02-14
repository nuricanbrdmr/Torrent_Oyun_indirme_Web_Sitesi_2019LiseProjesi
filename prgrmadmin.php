<?php include 'ayar.php'; ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Program İndir</title>
 	<link rel="icon" href="logo.png">
    
 	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
  
  
  <body>
  <?php 
    session_start();
    if(isset($_SESSION["kullanıcı"]))
    {
        $veri=$conn->query("select * from tblkayit ");
        while ($row=$veri->fetch(PDO::FETCH_ASSOC)) {  
            
        }
        
      //  echo "Email:".$_SESSION["kullanıcı"]["email"];
    }

    else{
        echo "Giriş Başarısız.";
    }

    
    ?>

    <div class="container bg-light" style="border-top:3px solid #09F;">

    <div id="login" class="row float-right mr-3" style="margin-top:100px;">
            <a class="float-right " style="margin-top:8px;" href="#" title="Profil">

    <?php  
        $gkadi=$_SESSION["kullanıcı"]["İd"];
    $veri=$conn->prepare("SELECT * FROM tblkayit where İd=?;") ;
            $veri->execute(array("$gkadi"));
            $islem=$veri->fetch();
        echo "
         <img src='resimler/login-icon-png-10.png' style='width:30px; height:30px; padding:0; margin-right:3px;'>
         <span style='color:#000; font-size:14px; font-weight:bold;'> ".$islem["Kadi"]."
         </span></a>";
    
         ?>


            <a href="cıkıs.php" class="float-right ml-3 mt-2" title="Çıkış">
            <img src="resimler/cıkıs.png" style="width:30px; height:30px; margin-left:4px; margin-top:2px; margin-right:3px;"><span style="color:#000; font-size:14px;  margin-right:1px; font-weight:bold;"><?php echo "Çıkış"; ?></span></a>

 <a href="" class="dropdown float-right ml-1 " style="padding-bottom: -250px;" title="Ayarlar"> 
  <button class="btn"  type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
        <img src="resimler/ayarlar.png" style="width:50px; height:30px; margin-right:0px;"></a>
          </button>   
         
         <?php   
          $veri=$conn->query("select * from tblkayit");

          while ($row=$veri->fetch(PDO::FETCH_ASSOC)) {
          

     echo"   <div class='dropdown-menu' aria-labelledby='dropdownMenu2'>
          <button class='dropdown-item' type='button'> <a href=kadiduzenle.php?id=".$_SESSION['kullanıcı']['İd']." >Kullanıcı Adı Değiştir</a></button> 
          <button class='dropdown-item' type='button'> <a href=sifreduzenle.php?id=".$_SESSION['kullanıcı']['İd']." >Şifre Değiştir</a></button>
          <button class='dropdown-item text-danger' type='button'>
          <a style='cursor:pointer; color:red;' onclick='javascript:verisil(".$row["İd"].")'>Hesap Sil</a></button>           
  </div>
        </div> ";
          }
 ?>


  	<a href="admin.php"><div id="logo" class="row mx-auto justify-content-center" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
    <img src="Adsiz.png"/></a>
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
            <a class="nav-link" title="Ana Sayfa" href="admin.php" style="font-weight:600; text-align:center;">Ana Sayfa <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link" title="Oyun" href="oyunadmin.php" style="font-weight:600; text-align:center;">Oyun</a>
          </li>
          
          <li class="nav-item  px-3 " style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link active" title="Program" href="prgrmadmin.php" style="font-weight:600; text-align:center;">Program</a>     
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link" title="İletişim" href="iletisimadmin.php" style="font-weight:600; text-align:center;">İletişim</a>
          </li>

          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
          <a class="nav-link" href="oneriadmin.php" title="Önerileriniz">Önerileriniz</a>
          </li>

          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
          <a class="nav-link" href="#" title="Bize Hata Bildir!">Bize Hata Bildir!</a>
          </li>
        </ul>

        
   <form action="araadmin.php" method="POST" class="form-inline my-2 my-lg-0">
      <div class="d-flex">
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
    <div class="row bg-light" >
    <div class="col-12 col-sm-11 col-md-12 col-lg-8 col-xl-8 col-sm bg-white">
     <div class="row ">
      
      <div id="grs" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11  mt-4 ml-3 mb-0 mr-5 text-center"><marquee>Şu anda "Program İndir" sayfasını inceliyorsunuz.</marquee><br/></div>
     
    	
       <div id="box1" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light mt-4 ml-3 mb-4 mr-5 ">
      
        <a href="IDM.html"> <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light   mt-3" style="width:auto;
      height:122.5px; border:2px solid #999;">
       <img style=" width:auto; height:90px;"  src="program image/Internet-Download-Manager-İcon.png" class="img-fluid  mt-3"></div></a>
        
      <a href="IDM.html" >  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left  mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
        <h6 style="color:#09F; font-weight:bold;">Internet Download Manager İndir</h6>
        <span id="box2">Internet Download Manager Full İndir Program’a Hızlı Bakış<b style=" font-size:14px; font-weight:500;"> Program: Internet Download Manager (IDM) Platform: Bilgisayar İşletim Sistemi: Windows XP / 7 / 8 / 10 Lisans: Ücretsiz Tür: Full Program indir Dil: Türkçe</b>...</span></span></div></a>
            
            </div>
                                     
        
        <div id="box1" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5">
         
         <a href="#"> <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light   mt-3" style="width:auto;
      height:122.5px; border:2px solid #999;">
       <img style=" width:auto; height:90px;"  src="program image/Adobe-Dreamweaver-İcon.png" class="img-fluid  mt-3"></div></a>
        
      <a href="#" >  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left  mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999;     	       border-left:none; ">
        <h6 style="color:#09F; font-weight:bold;">Adobe Dreamweaver CS6 Full Türkçe İndir</h6>
        <span id="box2"> Adobe Dreamweaver CS6, web tasarım yazılımı, html web siteleri ve mobil<b style=" font-size:14px; font-weight:500;"> uygulamalar oluşturma ve düzenlemeye yönelik kolay anlaşılır görsel bir arabirim sunar. Platformlar arası uyumluluğa göre tasarlanmış Akıcı Izgara Mizanpajı özelliğini</b>...</span></span></div></a>
        
        </div>
        
        
        <div id="box1" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5">
        
        <a href="#"> <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light   mt-3" style="width:auto;
      height:122.5px; border:2px solid #999;">
       <img   src="program image/mcf.png" class="img-fluid w-100 mt-3" style=" width:300px; height:90px;"></div></a>
        
      <a href="#" >  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left  mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px     	solid #999; border-left:none; ">
        <h6 style="color:#09F; font-weight:bold;">Microsoft Office İndir</h6>
        <span id="box2"> Microsoft Office İndir Ad: Microsoft Office 2019 Yayımlanma Tarihi: 12 Haziran 2019 Platform:<b style=" font-size:14px; font-weight:500;"> Bilgisayar Dil: Türkçe Sürüm: 2019 Lisans: Preview Tür: Ofis Programı Geliştirici: Microsoft Yayımcı: Microsoft Boyutu: 5 MB</b>...</span></span></div></a>
        
        
        </div>
        
        
        
        <div id="box1" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5">
          
          <a href="#"> <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light   mt-3" style="width:auto;
      height:122.5px; border:2px solid #999;">
       <img   src="program image/Utorrent-İcon.png" class="img-fluid  mt-3" style=" width:300px; height:90px;"></div></a>
        
      <a href="#" >  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left  mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999;     	       border-left:none; ">
        <h6 style="color:#09F; font-weight:bold;">uTorrent İndir</h6>
        <span id="box2">Program’a Hızlı Bakış Program: uTorrent Pro Platform: Bilgisayar İşletim Sistemi: Windows<b style=" font-size:14px; font-weight:500;"> XP / 7 / 8 / 10 Lisans: Ücretsiz Tür: Torrent Programı Dil: Türkçe Program Sürümü: v3.5.5 build 45365</b>...</span></span></div></a>
          
        </div>
        
                
        <div id="box1" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5">
        
        <a href="win.html"> <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light   mt-3" style="width:auto;
      height:122.5px; border:2px solid #999;">
       <img   src="resimler/WinRAR-İcon.png" class="img-fluid  mt-3" style=" width:300px; height:90px;"></div></a>
        
      <a href="win.html" >  <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left  mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999;     	       border-left:none; ">
        <h6 style="color:#09F; font-weight:bold;">WinRAR İndir</h6>
        <span id="box2"> WinRAR Full İndir Program’a Hızlı Bakış Program: Winrar Platform: Bilgisayar<b style=" font-size:14px; font-weight:500;"> İşletim Sistemi: Microsoft Windows XP/7/8/10 Lisans: Full Sürüm Tür: Dosya Sıkıştırma Dil: Türkçe Sürüm: v5.80 Beta 3 Geliştirici: RarSoft Yayımcı: RarSoft</b>...</span></span></div></a>
        
        
        </div>
        
        
        <div class="btn-group mx-auto" role="group" >
            <button type="button" class="btn btn-light text-info disabled" style="border:2px solid #0CF; font-weight:bold;" >1/200</button>
   		<a href="#"> <button type="button" class="btn btn-info" style="border:2px solid #0CF; border-left:none; font-weight:bold;">1</button></a>
    	<a href="#"> <button type="button" class="btn btn-info" style="border:2px solid #0CF; border-left:none; font-weight:bold;">2</button></a>
    	<a href="#"> <button type="button" class="btn btn-info" style="border:2px solid #0CF; border-left:none; font-weight:bold;">SON</button></a>
        
        </div>
    </div>
    
    </div>
                    
    
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 bg-white float-right" >
      <ul class="list-unstyled ">
      <li class="alert alert-info" role="alert" class="bg-primary" style="margin-top:10px; margin-left:0px; margin-right:0px;  	 margin-bottom:0px;  border-bottom:1px groove #09F;  text-align:center;"><b>Oyun Kategorileri</b></li>
        
        <ul class="list-unstyled list-group" style="border:1px solid #999;  border-radius:5px 0 0 0;">
      	<a href="macera.html" id="liste" class="list-group-item list-group-item-action" title="Macera Oyunları">Macera</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Spor Oyunları">Spor</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Çocuk Oyunları">Çocuk</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Dövüş Oyunları">Dövüş</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Yarış Oyunları">Yarış</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Korku Oyunları">Korku</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Online Oyunları">Online Oyunlar</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Savaş Oyunları">Savaş</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Simulasyon Oyunları">Simulasyon</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Strateji Oyunları" >Strateji</a>
        	</ul>                  
      </ul>
      
         <ul class="list-unstyled">
      <li class="alert alert-info" role="alert" class="bg-primary" style="margin-top:0px; margin-left:0px; margin-right:0px;  	 margin-bottom:0px;   border-bottom:1px groove #09F;  text-align:center;"><b>Program Kategorileri</b> </li>
        
        <ul class="list-unstyled list-group" style="border:1px solid #999;  border-radius:5px 0 0 0;">
      	<a href="bakim.html" id="liste" class="list-group-item list-group-item-action" title="Bakım">Bakım</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Donanım">Donanım</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Eğitim">Eğitim</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Gerekli">Gerekli</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Güvenlik">Güvenlik</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="İnternet">İnternet</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Montaj">Montaj</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Multimedya">Multimedya</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Ofis">Ofis</a>
        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Tasarım">Tasarım</a>
        	</ul>                      
      </ul>
     
    </div>
   
   <div class="container bg-info">
         <!-- Footer -->
        <footer class="page-footer font-small ">
        	
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 text-warning pl-2 font-weight-bold" style="line-height:50px;">    BİrNDİR <span class="text-light"> Copyright © 2019.</span>
            <a href="index.html" class="text-light" style="margin-left:20px;"> BİrNDİR.com</a>
          
             <div class="btn-group mx-auto" role="group" style="float:right;" >
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