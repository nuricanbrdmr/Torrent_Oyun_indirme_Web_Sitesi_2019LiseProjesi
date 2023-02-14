<?php include 'ayar.php'; ob_start();?>

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
    
<link rel="stylesheet" type="text/css" href="style.css">

    <title>Zula İndir</title>
   <link rel="icon" href="logo.png"> 
<style>
/*            yorum satırı        */

@import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);


.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #ddd;
    border-radius: 0px
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}

.comment-widgets {
    position: relative;
    margin-bottom: 10px;
}

.comment-widgets .comment-row {
    border-bottom: 1px solid transparent;
    padding: 14px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 10px 0;
}

.p-2 {
    padding: 0.5rem !important
}

.comment-text {
    padding-left: 15px
}

.w-100 {
    width: 100% !important
}

.m-b-15 {
    margin-bottom: 15px;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.76563rem;
    line-height: 1.5;
    border-radius: 3px;
}

.btn-cyan {
    color: #fff;
    background-color: #27a9e3;
    border-color: #27a9e3
}

.btn-cyan:hover {
    color: #fff;
    background-color: #1a93ca;
    border-color: #0066CC;
}

.comment-widgets .comment-row:hover {
    background: rgba(0, 0, 0, 0.05);
}


/*            yorum satırı bitiş       */


</style>

<script>
function verisil(gelen)
{
var durum=confirm("Hesabınızı Silmek İstediğinizden Emin Misiniz?");
if(durum)
{
window.location.href='yorumsil.php?knumara='+gelen;
}
else
{
return false;
}

}

</script>

	  </head>
  
  
  
  <body>
	<div id="ana" class="container bg-light">
  	<a href="index.php"><div id="logo" class="row mx-auto justify-content-center" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
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
          <li class="nav-item px-3" style=" border-right:1px solid #333;">
            <a class="nav-link " href="index.php" >Ana Sayfa <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #333;">
            <a class="nav-link" href="oyun.html">Oyun</a>
          </li>
          
          <li class="nav-item  px-3 " style=" border-right:1px solid #333;">
            <a class="nav-link" href="prgrm.html" >Program</a>     
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #333;">
            <a class="nav-link" href="iletisim.html" >İletişim</a>
          </li>
        </ul>
        
    <form class="form-inline my-2 my-lg-0">
      <div class="d-flex justify-content-center h-50">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </form>
    
  		</div>
		</nav>
    </div>
   
    <div class="container">
    <div class="row bg-light" >
    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-sm bg-white">
     <div class="row ">
     
     <span id="bas" class=" col-10 col-sm-11 col-md-11 col-lg-12 col-xl-12 ml-3 mt-4 text-secondary">Zula </span>
         	

             <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top:15px;
              width:600px; height:400px; margin-left:20px;">
              
              <ol class="carousel-indicators" style="margin-bottom:75px;">
                <li class="bg-warning" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li class="bg-warning" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li class="bg-warning" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              
          <div id="mt2image" class="carousel-inner mx-auto">
            <div class="carousel-item active">
              <img src="zula image/game.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="zula image/wp2536580.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="zula image/gameplay.jpg" class="d-block w-100" alt="...">
            </div>            
          </div>
          <a class="carousel-control-prev bg-" style="height:352px;" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bg-" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next bg-" style="height:352px;" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon bg-" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
   
    </div>
    
    <div class="col-8 col-sm-5 col-md-5 col-lg-5 col-xl-5 bg-info" style="margin-top:0px; border-radius:5px; height:50px; line-height:50px; text-align:center; width:500px;"><span style="font-weight:bold; color:#FFF;">Oyun Hakkında</span></div>
    
     <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 bg-white" style="margin-top:20px; border-radius:5px; height:auto;  text-align:left; width:auto;">
     		<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 3px #00FFFF;">Oyun:</span>
            <span style="font-weight:300; color:#000; "> Zula</span><br/>

 			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Çıkış Tarihi:</span> 
            <span style="font-weight:300; color:#000;">22 Şubat 2015</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Platform:</span> 
            <span style="font-weight:300; color:#000;">Bilgisayar</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">İşletim Sistemi:</span> 
            <span style="font-weight:300; color:#000;">Windows XP / Vista / 7 / 8 / 10</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px;  text-shadow:0 0 5px #00FFFF;">Lisans:</span> 
            <span style="font-weight:300; color:#000;">Ücretsiz</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px;  text-shadow:0 0 5px #00FFFF;">Tür:</span> 
            <span style="font-weight:300; color:#000; margin-right:4px;">Online Oyunlar</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Dili:</span> 
            <span style="font-weight:300; color:#000; margin-right:4px;">Türkçe</span><br/>

           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> Sürüm:</span> 
           <span style="font-weight:300; color:#000; margin-right:4px;">v1.26 (Son Sürüm)</span><br/>
            
            
          <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">  Geliştiricisi:</span> 
          <span style="font-weight:300; color:#000;">Lokum Games</span><br/>
            
           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> Yayımcısı:</span> 
           <span style="font-weight:300; color:#000;">Zula</span><br/>
            
           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> Kurulum Türü:</span> 
           <span style="font-weight:300; color:#000;">Otomatik</span><br/>
            
           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> Dosya Türü:</span> 
           <span style="font-weight:300; color:#000;">Exe</span><br/>
            
           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> Dosya Boyutu:</span> 
           <span style="font-weight:300; color:#000;">3 GB</span><br/>
            
           <span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> İndirme Seçenekleri:</span> 
           <span style="font-weight:300; color:#000;">Kayıt Ol ve indir</span>
</div>
    
     <div class="col-8 col-sm-5 col-md-5 col-lg-5 col-xl-5 bg-info" style="margin-top:50px; border-radius:5px; height:50px; line-height:50px; text-align:center; width:500px;"><span style="font-weight:bold; color:#FFF;">Genel Bakış </span></div>
     
      <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 bg-white" style="margin-top:10px; margin-bottom:10px; border-radius:5px; height:auto;  text-align:left; width:auto;">
     	<span style="margin-bottom:100px;">	<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Zula Oyunu</span><br/>
            <span  style="font-weight:300; color:#000;"> Zula, Lokum Games tarafından geliştirilen ve Türk yapımı online bir FPS oyunudur. Bu Türkçe MMOFPS oyununda online olarak oyuncular ile savaşın. Türkiye’de son 50 yılda yaşanan hikayeleri konu alan ücretsiz Fps oyununda Demir adlı ana karakterimiz ile oyuna başlıyoruz ama oyunda birden fazla zula karakteri seçebiliriz.</span><br/> </span>
		

		<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Zula Kayıt</span><br/>
            <span style="font-weight:300; color:#000;">
            – Zula kayıt olmak için ilk olarak buraya tıklayın: <a target="_parent" href="https://hesap.zulaoyun.com/sayfalar/rekabet1?utm_source=reklamstore&utm_medium=1028a1c22b7451dbd6bb8d69bfc98c&utm_campaign=26089">Zula Kayıt Ol</a><br/>

            – Açılan sayfada ”ŞİMDİ ÜCRETSİZ OYNA” butonuna tıklayın.<br/>
            
            – Kullanıcı Adı, E-posta ve Şifre girin, kullanıcı sözleşmesini işaretleyip “Hesabımı Oluştur”a basın.<br/>
            
            – “Ücretsiz İndir” butonuna basın, sonra “İndir”e tıklayın, oyun idirilecektir.<br/>
            
            – İnen zulasetup.exe dosyasını çalıştırın ve oyunun yüklenmesini bekleyin.<br/>
			
            – Yüklendikten sonra “Kur” butonuna basıp kurma işlemini yapın.<br/>
            
            – Kurulumdan sonra oyunu çalıştırın, kullanıcı adı ve şifre girin.<br/>
            
			– Artık zulayı oynamaya başlayabilirsiniz, İyi eğlenceler.</span><br/>		
            
        </div>  
        
        <div class="col-8 col-sm-5 col-md-5 col-lg-5 col-xl-5 bg-info" style="margin-top:20px; border-radius:5px; height:50px; line-height:50px; text-align:center; width:500px;"><span style="font-weight:bold; color:#FFF;">Sistem Gereksinimleri</span></div>
    
     <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 bg-white" style="margin-top:10px; border-radius:5px; height:auto; text-align:left; width:auto;">
     		<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Gereksinim Seviyesi:</span>
            <span style="font-weight:300; color:#000;"> Düşük</span><br/>

 			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">İşletim Sistemi:</span> 
            <span style="font-weight:300; color:#000;">Windows XP / Vista / 7 / 8 / 10</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">İşlemci:</span> 
            <span style="font-weight:300; color:#000;">Intel Pentium IV 2.4 Ghz / AMD Athlon XP 2500</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Ekran Kartı:</span> 
            <span style="font-weight:300; color:#000;">Graphics Intel HD</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">RAM:</span> 
            <span style="font-weight:300; color:#000;">2 GB</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">Disk Alanı:</span> 
            <span style="font-weight:300; color:#000; margin-right:4px;">3 GB</span><br/>

			<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;">DirectX Sürümü:</span> 
            <span style="font-weight:300; color:#000; margin-right:4px;">DirectX 9.0</span><br/>           
                   
</div> 



    
    <div class="col-7 col-sm-5 col-md-5 col-lg-5 col-xl-5 bg-info" style="margin-top:50px; border-radius:5px; height:50px; line-height:50px; text-align:center; width:500px;"><span style="font-weight:bold; color:#FFF;">Tanıtım Videosu</span></div> 
    
 		<div class="embed-responsive embed-responsive-16by9" style="margin-bottom:10px; margin-top:10px;">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bPTyVhmJmgU" allowfullscreen></iframe>
</div>


       <div class="col-8 col-sm-5 col-md-5 col-lg-5 col-xl-5 bg-info" style="margin-top:50px; margin-bottom:20px; border-radius:5px; height:50px; line-height:50px; text-align:center; width:500px;"><span style="font-weight:bold; color:#FFF; ">İndirme Seçenekleri</span></div>
   
   	<div style="margin-bottom:20px;">	<span style="font-weight:bold; color:#333; margin-right:4px; text-shadow:0 0 5px #00FFFF;"> İndirme Linki:</span> 
           <span style="font-weight:500; color:#000; margin-right:4px; "><a href="https://hesap.zulaoyun.com/sayfalar/rekabet1?utm_source=reklamstore&utm_medium=1028a1c22b7451dbd6bb8d69bfc98c&utm_campaign=26089"> Zula Kayıt Ol ve İndir</a></span></div>
           
           <div class="main">
	<pan style="font-size: large;">Y<pan>
	<span class="a">O</span>
	<span class="a">R</span>
	<span class="a">U</span>
	<span class="a">M</span>
	<span class="letter"></span>
	<span class="a">G</span>
	<span class="a">Ö</span>
  <span class="a">N</span>
    <span class="a">D</span>
    <span class="a">E</span>
    <span class="a">R</span>
</div>
           <!-- yorum başlangıc -->
        <?php 
        $id=$_GET["zid"];
        $veri=$conn->prepare("select * from konular where konu_id=?");
        $veri->execute(array($id));
        $row=$veri->fetch(PDO::FETCH_ASSOC);
        $kontrol=$veri->rowCount();
        if($kontrol){ 
          
      //yorum giriş
      if($_POST){
        $isim=$_POST["isim"];
        $mesaj=$_POST["mesaj"];
        $konuid=$_POST["konuid"];
        if(!$isim || !$mesaj){

          echo "<script type='text/javascript'>  
          alert('Alanları Boş Bırakmayın.'); 
        </script> ";

        

        }else{
        
        $baglan=$conn->prepare("insert into yorumlar SET yorum_isim=?, yorum_mesaj=?, yorum_konuid=?");
        $deger=$baglan->execute(array($isim,$mesaj,$konuid));

        if($_POST){
          
          $url = $_SERVER['HTTP_REFERER'];  // hangi sayfadan gelindigi degerini verir.

         header ("refresh: 1; url=".$url."");
         echo " 
         <script type='text/javascript'>  
         alert('Mesajınız Gönderildi.'); 
         </script> 
         ";
        }else{
          echo " 
          <script type='text/javascript'>  
          alert('Mesajınız Gönderilemedi.'); 
        </script> ";
        }
      }
      }else{
        ?>
        <form action="" method="POST">
        <table>

              <tr>
                <td><i class="fas fa-user prefix mr-2 mb-4"></i> İsim</td>
                <td><div class="md-form"><input type="text" name="isim" class="form-control ml-1 mb-3"></div></td>
              </tr> 
              

              <tr>
                <td><i class="fas fa-pencil-alt prefix mr-1"></i> Mesaj</td>
       <td><div class="md-form mb-4 ml-1 pink-textarea active-pink-textarea">
  <textarea name="mesaj" class="md-textarea form-control" rows="10" cols="43"></textarea></div>
          </td>
              </tr> 


              <tr>
                <td></td>
                <td><input type="hidden" name="konuid" value="<?php echo $row["konu_id"]; ?>"></td>
              </tr> 


              <tr>
              <td></td>
                <td><button type="submit" class="btn btn-outline-info btn-lg btn-block">Gönder</button></td>
              </tr> 
            </table>
        </form>
        <?php
      }  
      //yorum listele
      $bilgi=$conn->prepare("SELECT * FROM yorumlar WHERE yorum_konuid=?");
      $bilgi->execute(array($id));
      $yveri=$bilgi->fetchAll();
      $bsayi=$bilgi->rowCount();


      if($bsayi){
        ?>

            <div class="card mt-4">
            <div class="card-body text-center">
            <h4 class="card-title"><div class="main">
	<pan style="font-size: large;">Y<pan>
	<span class="a">O</span>
  <span class="a">R</span>
  <span class="a">U</span>
  <span class="a">M</span>
	<span class="letter"></span>
	<span class="a">L</span>
  <span class="a">İ</span>
  <span class="a">S</span>
  <span class="a">T</span>
  <span class="a">E</span>
    <span class="a">S</span>
    <span class="a">İ</span>
</div></h4>
            </div>
            
            

        <?php
        echo "<b style='text-align:center; font-style: italic; text-decoration: none;'>Bu Konuya (".$bsayi.") Yorum Yazıldı.</b>";
        foreach($yveri as $listele){
          ?>
          
            <div class="card">
            <div class="card-body text-center">
            </div>
            <div class="comment-widgets">
                <!-- Comment Row -->
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="resimler/aresim.png" width="50" height="40" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium"><?php echo $listele["yorum_isim"]; ?></h6> 
                        <span class="m-b-15 d-block"><?php echo $listele["yorum_mesaj"]; ?> </span>
                        <div class="comment-footer"> <span class="text-muted float-right"><?php echo $listele["yorum_tarih"]; ?></span> 
                      <a  type="button" class="btn btn-cyan btn-sm" href="yorumduzenle.php?id=<?php echo $listele["yorum_id"] ?>" > Düzenle </a>
                        <a type="button" class="btn btn-danger btn-sm text-white" <?php echo "onclick='javascript:verisil(".$listele["yorum_id"].")' "?>>Sil</a> </div>
                    </div>
                </div> <!-- Comment Row -->
               
        </div>
        </div>
          

          <?php
        }


      }else{

        echo '<div style="margin-top:20px;" class="alert alert-danger">Bu Konu Hakkında Yorum Yazılmamıştır.</div>';
      }

      //yorum listele bitiş

      //yorum bitiş
}else{

          echo "Henüz Yazılmış Yorum Bulunmuyor!!!";
        }
        ?>
      
           
        <!-- yorum bitiş -->
            </div>
            
      <div style="border-bottom:2px solid #666; border-left:2px solid #666; border-radius:5px; font-size:18px;  font-weight:bold;" <span class=" col-10 col-sm-11 col-md-11 col-lg-12 col-xl-11 ml-3 mt-4 mb-2 text-warning"> Popüler İçerikler </span>    </div>
           
           
   <div class="col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12 clearfix bg-white  mx-auto  mb-4 mt-3 " style=" width:auto; height:auto;"> 
     	
      <a href="#"> <div class="card col-10 col-md-4 col-lg-5 col-xl-8 mt-2  ml-5" style="width:18rem; border:2px solid #999; float:left;">
          <img src="zula image/ucretsiz-counter-strike-1.6-oyunu-indir.png" class="card-img-top mt-1" style="border-bottom:2px solid #999;" alt="...">
          <div class="card-body">
            <p class="card-text text-secondary">
            <span style="font-weight:bold; color:#0CC; margin-right:4px;">Counter Strike 1.6 İndir</span><br/>
<span class="" style="font-size:14px; color:#8C8C8C; font-weight:500;">Counter Strike 1.6 Çıkış Tarihi: 1 Kasım 2000 Platform: Bilgisayar İşletim Sistemi: Microsoft Windows Lisans: Full Sürüm Tür: FPS Oyunları Dil: Türkçe Sürüm: v1.6 Ek Paket: Bulunmamaktadır...</span></p>
          </div>
        </div></a>
    
     <a href="#"> <div class="card col-10 col-md-4 col-lg-5 col-xl-8 mt-2 ml-5" style="width:18rem; border:2px solid #999; float:left;">
          <img src="zula image/Aion-icon.jpg" class="card-img-top mt-1" style="border-bottom:2px solid #999;" alt="...">
          <div class="card-body">
            <p class="card-text text-secondary">
           
          <span style="font-weight:bold; color:#0CC; margin-right:4px;">  Aion Online İndir</span><br/>
                       
            <span class="" style="font-size:14px; color:#8C8C8C; font-weight:500;"> Oyun’a Hızlı Bakış Oyun Adı: Aion Online Çıkış Tarihi: 25 Kasım 2008 Platform: PC, Mac İşletim Sistemi: Windows XP -7 – 8 – 10 Lisans: Ücretsiz Oyunlar Tür: Online Oyunlar Dil: İngilizce...</span></p>
          </div>
        </div></a>
        
        
                            
    
    </div>
                
                  
       <div class="col-11 col-sm-12 col-md-12 col-lg-12 col-xl-12 clearfix bg-white  mb-4 mt-3 " style=" width:auto; height:auto;"> 
     	
      <a href="#"> <div class="card col-10 col-md-4 col-lg-5 col-xl-8 mt-2  ml-5" style="width:18rem; border:2px solid #999; float:left;">
          <img src="zula image/world-of-tanks-oyunu-indir.png" class="card-img-top mt-1" style="border-bottom:2px solid #999;" alt="...">
          <div class="card-body">
            <p class="card-text text-secondary">
            <span style="font-weight:bold; color:#0CC; margin-right:4px;">World Of Tanks İndir</span><br/>
            
 <span class="" style="font-size:14px; color:#8C8C8C; font-weight:500;">Oyun’a Hızlı Bakış Oyun: World Of Tanks (WOT) Çıkış Tarihi: 12/04/2011 Platform: Bilgisayar İşletim Sistemi: Microsoft Windows Vista XP / 7 / 8 / 10 Lisans: Ücretsiz Tür: Online Oyunlar Dil:</span> </p>
          </div>
        </div></a>
        
        
          <a href="#"> <div class="card col-10 col-md-4 col-lg-5 col-xl-8 ml-5 mt-2" style="width:18rem; border:2px solid #999; float:left;">
          <img src="zula image/apex-legends-oyunu-ucretsiz-indir.jpg" class="card-img-top mt-1" style="border-bottom:2px solid #999;" alt="...">
          <div class="card-body">
            <p class="card-text text-secondary">
         <span style="font-weight:bold; color:#0CC; margin-right:4px;">SApex Legends İndir</span><br/>
  <span class="" style="font-size:14px; color:#8C8C8C; font-weight:500;">Apex Legends Ücretsiz İndir   Oyun’a Hızlı Bakış Oyun: Apex Legends Çıkış Tarihi: 4 Şubat 2019 Platform: Bilgisayar İşletim Sistemi: Microsoft Windows Lisans: Ücretsiz Tür: Aksiyon Oyunları...</span></p>
          </div>
        </div></a>
             
             
    
     
     </div> 
                
    </div>
                    
    
    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 bg-white float-right" >
      <ul class="list-unstyled ">
      <li class="alert alert-info" role="alert" class="bg-primary" style="margin-top:10px; margin-left: 0px; margin-right:0px;  	 margin-bottom:0px;  border-bottom:1px groove #09F;  text-align:center;"><b>Oyun Kategorileri</b></li>
        
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