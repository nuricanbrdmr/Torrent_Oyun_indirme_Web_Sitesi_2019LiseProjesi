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

    <title>Öneri</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <div class="container w-100 bg-light" style="border-top:3px solid #09F;">
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



        <a href="admin.php" title="BİrNDİR">
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
            <a class="nav-link " title="Ana Sayfa" href="admin.php" style="font-weight:600; text-align:center;">Ana Sayfa <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link" title="Oyun" href="oyunadmin.php" style="font-weight:600; text-align:center;">Oyun</a>
          </li>
          
          <li class="nav-item  px-3 " style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link" title="Program" href="prgrmadmin.php" style="font-weight:600; text-align:center;">Program</a>     
          </li>
          
          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
            <a class="nav-link " title="İletişim" href="iletisimadmin.php" style="font-weight:600; text-align:center;">İletişim</a>
          </li>

          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
          <a class="nav-link active" href="oneriadmin.php" title="Önerileriniz">Önerileriniz</a>
          </li>

          <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
          <a class="nav-link" href="#" title="Bize Hata Bildir!">Bize Hata Bildir!</a>
          </li>
        </ul>

                <form action="araadmin.php" method="POST" class="form-inline my-2 my-lg-0">
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 bg-white">
                <div class="form-row col-12 mx-3" style="margin-top:80px;">


                    <div id="me" class="col-8 p-2 m-3 text-center mx-auto" style=" margin-top:0px; height:500px; line-height:50px; border:2px solid #CCC;">
                        <b>Merhabalar <br>
        İsteklerinizi belirtmeden önce lütfen bunlara dikkat edin;<br>
– Oyun PC platformu için yapıldığından emin olun.<br>
– Oyunun piyasada çıktığından emin olun.<br>
– Oyunun sitemizde olmadığından emin olun.<br>

Bunlara dikkat ettiyseniz lütfen yorum kısmına oyunun adını bizimle paylaşın.<br>
Teşekkürler!<br></b>



                    </div>

                </div>

                <div>
                <?php 
        $gid=7;
        $veri=$conn->prepare("SELECT * FROM konular where konu_id=?;") ;
        $veri->execute(array("$gid"));
        $islem=$veri->fetch();
        $öneriid=$islem["konu_id"];
        $oneritarih=$islem["konu_tarih"];
        ?>

    <div class="main mt-5">
	<pan style="font-weight: bold; font-size: large;">Ö<pan>
	<span class="a">N</span>
	<span class="a">E</span>
	<span class="a">R</span>
	<span class="a">İ</span>
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
        $id=$öneriid;
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
        <form action="" method="POST" >
            <div style="margin-left: 125;">
        <table>

              <tr>
                <td><i class="fas fa-user prefix mr-2 mb-3"></i> İsim</td>
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
            </div>
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

            <div class="card mt-4 mb-5 ml-4">
            <div class="card-body text-center">
            <h4 class="card-title"><div class="main">
            <pan style="font-weight: bold; font-size: large;">Ö<pan>
	<span class="a">N</span>
	<span class="a">E</span>
	<span class="a">R</span>
	<span class="a">İ</span>
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


                </div>
            </div>



            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 bg-white float-right">
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
                        <a href="#" id="liste" class="list-group-item list-group-item-action" title="Strateji Oyunları">Strateji</a>
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

            <div class="container mx-auto">
            <form>    
            <table>
              <tr>
                <td></td>
                <td></td>
              </tr> 
              
              <tr>
                <td></td>
                <td></td>
              </tr> 

              <tr>
                <td></td>
                <td></td>
              </tr> 
            </table>
            </form>            
            </div>



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