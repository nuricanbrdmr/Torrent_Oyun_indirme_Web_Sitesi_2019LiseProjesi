
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

    <link rel="stylesheet" type="text/css" href="style.css"/>

    <title>BİrNDİR</title>
    <link rel="icon" href="logo.png">
    <style>
#ara{

    border-radius: 20px; 
    margin-bottom:4px; 

}
#ara:hover{

    color: #009acd;
}

</style>

</head>



<body>
<?php include 'ayar.php'; ?>
    <div id="ana" class="container bg-light">

 <!-- HAVA DURUMU PHP KOD BAŞLANGIÇ -->
<div class=" float-right" id="durum" style="width:240px; height:30px; line-height:30px;">
        <?php 
// https://www.ntv.com.tr/istanbul-hava-durumu
function baglan($a)
{
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL, $a);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

$isle= curl_exec($ch);
curl_close($ch);
return $isle;

}

$ip= @$_REQUEST['REMOTE_ADDR']; // The IP adress to query
$query= @unserialize(baglan('http://ip-api.com/php/'.$ip));
$sehir=$query["city"]; // ip değerindeki şehir
$link=baglan("https://www.ntv.com.tr/".$sehir."-hava-durumu");

preg_match('@<p class="hava-durumu--detail-data-item-bottom-temp-max">(.*?)</p>@si',$link, $havaderece); //Derece
preg_match('@<img src="https://cdn.ntv.com.tr/img/weather/(.*?)" class="hava-durumu--detail-data-item-top-img" alt="(.*?)">@si',$link, $detaylar); // resim


//$havaderece[1] = derece
//$detaylar[1] = resim
//$detaylar[2] = durum
        /*echo "<pre>";
        print_r($havaderece);
        echo "</pre>";*/

?>

<div id="sehir" class=" text-center" style="color:#33CCFF; font-weight:bold; border:1px solid #39C;"> <?=  $sehir ?> </div>
    
	<div id="rsm" class="float-left"><img src="https://cdn.ntv.com.tr/img/weather/<?=$detaylar[1]?>" style="margin:0px 5px 0px 11px; width:35; height:30px; background-color: #153652; border-radius: 5px;"></div>

    <div id="derece" class=" pr-5 text-center" style="font-weight:700; color:#808080; border:1px solid #39C; border-top-style: none;"><?=  $havaderece[1] ?>°</div>
    
    <div id="havadurumu" class=" text-center" style="font-weight:700; color:#00CCCC; margin:0;  border:1px solid #39C; border-top-style: none;"> <?= $detaylar[2] ?> </div>
    
        
            <!-- HAVA DURUMU PHP KOD BİTİŞ -->
        


        <div id="login" class="row float-right mr-4" style="margin-top:30px;">
        <a class="float-right " href="login.php" title="Giriş Yap">
        <img src="resimler/login-icon-png-10.png" style="width:30px; height:30px; padding:0; margin-right:3px;"><span style="color:#000; font-size:14px; font-weight:bold;">Giriş Yap</span></a>


            <a href="signup.php" class="float-right ml-3" title="Üye Ol">
                <img src="resimler/kayıt.png" style="width:30px; height:30px; margin-right:5px;"><span style="color:#000; font-size:14px; font-weight:bold;">Üye Ol</span></a>
        </div></div>

        <a href="index.php">
            <div id="logo" class="row mx-auto justify-content-center" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="Adsiz.png" /></a>
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
                        <a class="nav-link active text-light" title="Ana Sayfa" href="index.php" style="font-weight:600; text-align:center;">Ana Sayfa <span class="sr-only">(current)</span></a>
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

                <form action="ara.php" method="POST" class="form-inline my-2 my-lg-0 ">
                    <div class="d-flex ">
                        <div class="searchbar ">
                            <input class="search_input" type="text " name="ara" placeholder="Ara... ">
            <button type="submit" id="ara" class="btn btn-light"><i class="fas fa-search "></i></button> <!--  -->
                        </div>
                    </div>
                </form>

            </div>
        </nav>
    </div>

    <div class="container ">
        <div class="row bg-light ">
            <div class="col-12 col-sm-11 col-md-12 col-lg-8 col-xl-8 bg-white ">
                <div class="row ">

                    <div id="box1" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light mt-4 ml-3 mb-4 mr-5 ">
                    <?php 
                     $gid=1;
                     $veri=$conn->prepare("SELECT * FROM konular where konu_id=?;") ;
                             $veri->execute(array("$gid"));
                             $islem=$veri->fetch();
                      $zulaid=$islem["konu_id"];
                      $zulatarih=$islem["konu_tarih"];
                    ?>
                    
                        <a href='zula.php?zid=<?php echo $zulaid ?>'>
                            <div class="col-4 clearfix float-left bg-light mt-3" style="width:220px; height:122.5px; border:2px solid #999; ">
                                <img id="mt2logo" style="height:90px; width:auto;"  src="resimler/zula-icon.png " class="img-fluid mt-3 "></div>
                        </a>

                        <a href='zula.php?zid=<?php echo $zulaid ?>'>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
                                <h6 style="color:#09F; font-weight:bold; ">Zula İndir<span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $zulatarih ?></span> </h6>
                                <span> <span id="box2" style="font-size:14px; color:#8C8C8C; font-weight:500;">Zula Çıkış Tarihi: 22 Şubat 2015 Platform: Bilgisayar İşletim Sistemi: Windows 7 / 8 / 10 Oyunlar Tür: <b style=" font-size:14px; font-weight:500;
                                ">Fps Oyunları Dili: Türkçe Geliştiricisi: Lokum Games Yayımcı: Zula Kurulum Türü: Otomatik <span style=" font-size:14px; font-weight:500; ">Dosya Türü: Exe Dosya Boyutu: 3 GB İndirme</span></b>...</span>
                                </span>
                            </div>
                        </a>
                    
                    </div>


                    <div id="box1" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5 ">
                    <?php 
                     $gid="2";
                     $veri=$conn->prepare("SELECT * FROM konular where konu_id=?") ;
                             $veri->execute(array("$gid"));
                             $islem=$veri->fetch();
                      $idmid=$islem["konu_id"];
                      $idmtarih=$islem["konu_tarih"];
                    ?>


                        <a href='IDM.php?idmid=<?php echo $idmid ?>'>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light mt-3 " style="width:auto; height:122.5px; border:2px solid #999; ">
                                <img style=" width:auto; height:90px; " src="resimler/Internet-Download-Manager-İcon.png " class="img-fluid mt-3 "></div>
                        </a>

                        <a href='IDM.php?idmid=<?php echo $idmid ?>' >
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; word-wrap:break-word; ">
                                <h6 style="color:#09F; font-weight:bold; ">Internet Download Manager İndir <span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $idmtarih ?></span></h6>
                                <span id="box3" style="font-size:14px; color:#8C8C8C; font-weight:500;">Internet Download Manager Full İndir Program’a Hızlı Bakış<b style=" font-size:14px; font-weight:500; "> Program: Internet Download Manager (IDM) Platform: Bilgisayar  İşletim Sistemi: Windows XP / 7 / 8 / 10 Lisans: Ücretsiz Tür: Full Program indir Dil:Türkçe</b>...</span></span>
                            </div>
                        </a>

                    </div>


                    <div id="box1" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5 ">
                    <?php 
                     $gid="3";
                     $veri=$conn->prepare("SELECT * FROM konular where konu_id=?") ;
                             $veri->execute(array("$gid"));
                             $islem=$veri->fetch();
                      $winid=$islem["konu_id"];
                      $wintarih=$islem["konu_tarih"];
                    ?>

                        <a href='win.php?winid=<?php echo $winid ?>'>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light mt-3 " style="width:auto; height:122.5px; border:2px solid #999; ">
                                <img src="resimler/WinRAR-İcon.png " class="img-fluid mt-3 " style=" width:300px; height:90px; "></div>
                        </a>

                        <a href='win.php?winid=<?php echo $winid ?>'>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
                                <h6 style="color:#09F; font-weight:bold; ">WinRAR İndir <span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $wintarih ?></span></h6>
                                <span id="box4" style="font-size:14px; color:#8C8C8C; font-weight:500;"> WinRAR Full İndir Program’a Hızlı Bakış Program: Winrar Platform: Bilgisayar<b style=" font-size:14px; font-weight:500; "> İşletim Sistemi: Microsoft Windows XP/7/8/10 Lisans: Full Sürüm Tür: Dosya Sıkıştırma Dil: Türkçe Sürüm: v5.80 Beta 3<span> Geliştirici: RarSoft Yayımcı: RarSoft</span></b>...</span>
                                </span>
                            </div>
                        </a>

                    </div>



                    <div id="box1" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5 ">
                    <?php 
                     $gid="4";
                     $veri=$conn->prepare("SELECT * FROM konular where konu_id=?") ;
                             $veri->execute(array("$gid"));
                             $islem=$veri->fetch();
                      $bttl5id=$islem["konu_id"];
                      $bttl5tarih=$islem["konu_tarih"];
                    ?>
                        <a href='bttl5.php?bttl5id=<?php echo $bttl5id ?>'>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light mt-3 " style="width:auto; height:122.5px; border:2px solid #999; ">
                                <img src="resimler/Battlefield-5-icon.png " class="img-fluid mt-3 " style=" width:300px; height:90px; "></div>
                        </a>

                        <a href='bttl5.php?bttl5id=<?php echo $bttl5id ?>'>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
                                <h6 style="color:#09F; font-weight:bold; ">Battlefield 5 İndir <span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $wintarih ?></span></h6>
                                <span id="box5 " style="font-size:14px; color:#8C8C8C; font-weight:500; "> Battlefield 5 Full İndir Oyun Adı : Battlefield V Oyun Türü: Savaş Oyunları Çıkış Tarihi: 20 Kasım<b style=" font-size:14px; font-weight:500; "> 2018 Geliştirici: EA ve Dice – Frostbite Yayımcı: Electronic Arts Platform : Bilgisayar Dosya Boyutu: 41.93 GB<span> Oyun Dili : İngilizce Crack : Var</span></b>...</span>
                                </span>
                            </div>
                        </a>

                    </div>


                    <div id="box1" style="height: 160px; border: 3px solid #069; word-wrap: break-word; border-radius: 15px;" class="col-11 col-sm-12 col-md-11 col-lg-11 col-xl-11 bg-light ml-3 mb-5 mr-5 ">
                    <?php 
                     $gid="5";
                     $veri=$conn->prepare("SELECT * FROM konular where konu_id=?") ;
                             $veri->execute(array("$gid"));
                             $islem=$veri->fetch();
                      $officeid=$islem["konu_id"];
                      $officetarih=$islem["konu_tarih"];
                    ?>
                        <a href='office.php?officeid=<?php echo $officeid ?>'>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light mt-3 " style="width:auto; height:122.5px; border:2px solid #999; ">
                                <img src="resimler/mcf.png " class="img-fluid w-100 mt-3 " style=" width:300px; height:90px; "></div>
                        </a>

                        <a href='office.php?officeid=<?php echo $officeid ?>'>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
                                <h6 style="color:#09F; font-weight:bold; ">Microsoft Office İndir <span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $officetarih ?></span></h6>
                                <span id="box6 " style="font-size:14px; color:#8C8C8C; font-weight:500;"> Microsoft Office İndir Ad: Microsoft Office 2019 Yayımlanma Tarihi: 12 Haziran 2019 Platform:<b style=" font-size:14px; font-weight:500; "> Bilgisayar Dil: Türkçe Sürüm: 2019 Lisans: Preview Tür: Ofis Programı Geliştirici: Microsoft Yayımcı: Microsoft<span> Boyutu: 5 MB</span></b>...</span>
                                </span>
                            </div>
                        </a>
                    </div>


                    <div class="btn-group mx-auto " role="group ">
                        <button type="button " class="btn btn-light text-info disabled " style="border:2px solid #0CF; font-weight:bold; ">1/200</button>
                        <a href="index.html "> <button type="button " class="btn btn-info active " style="border:2px solid #0CF; border-left:none; font-weight:bold; ">1</button></a>
                        <a href="sayfa2.html "> <button type="button " class="btn btn-info " style="border:2px solid #0CF; border-left:none; font-weight:bold; ">2</button></a>
                        <a href="# "> <button type="button " class="btn btn-info " style="border:2px solid #0CF; border-left:none; font-weight:bold; ">SON</button></a>

                    </div>
                </div>

            </div>


            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 bg-white float-right ">
                <ul class="list-unstyled ">
                    <li class="alert alert-info " role="alert " class="bg-primary " style="margin-top:10px; margin-left:0px; margin-right:0px; margin-bottom:0px; border-bottom:1px groove #09F; text-align:center; "><b>Oyun Kategorileri</b></li>

                    <ul class="list-unstyled list-group " style="border:1px solid #999; border-radius:5px 0 0 0; ">
                        <a href="macera.html " id="liste " class="list-group-item list-group-item-action " title="Macera Oyunları ">Macera</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Spor Oyunları ">Spor</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Çocuk Oyunları ">Çocuk</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Dövüş Oyunları ">Dövüş</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Yarış Oyunları ">Yarış</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Korku Oyunları ">Korku</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Online Oyunları ">Online Oyunlar</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Savaş Oyunları ">Savaş</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Simulasyon Oyunları ">Simulasyon</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Strateji Oyunları ">Strateji</a>
                    </ul>
                </ul>

                <ul class="list-unstyled ">
                    <li class="alert alert-info " role="alert " class="bg-primary " style="margin-top:0px; margin-left:0px; margin-right:0px; margin-bottom:0px; border-bottom:1px groove #09F; text-align:center; "><b>Program Kategorileri</b> </li>

                    <ul class="list-unstyled list-group " style="border:1px solid #999; border-radius:5px 0 0 0; ">
                        <a href="bakim.html " id="liste " class="list-group-item list-group-item-action " title="Bakım ">Bakım</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Donanım ">Donanım</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Eğitim ">Eğitim</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Gerekli ">Gerekli</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Güvenlik ">Güvenlik</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="İnternet ">İnternet</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Montaj ">Montaj</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Multimedya ">Multimedya</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Ofis ">Ofis</a>
                        <a href="# " id="liste " class="list-group-item list-group-item-action " title="Tasarım ">Tasarım</a>
                    </ul>
                </ul>

            </div>

            <div class="container bg-info ">
                <!-- Footer -->
                <footer class="page-footer font-small ">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3 text-warning pl-2 font-weight-bold " style="line-height:50px; "> BİrNDİR <span class="text-light "> Copyright © 2019.</span>
                        <a href="index.html " class="text-light " style="margin-left:20px; "> BİrNDİR.com</a>

                        <div class="btn-group mx-auto " role="group " style="float:right; ">
                            <a href="https://www.facebook.com/profile.php?id=100010252380550 "> <button type="button " class="btn btn-info " title="Facebook "><img height="40 " width="40 " src="facebook.png "></button></a>

                            <a href="https://aboutme.google.com/u/1/?referer=gplus&pageId=none "> <button type="button " class="btn btn-info " title="Google Plus "><img height="40 " width="40 " src="icons8-google-plus-100.png "></button></a>

                            <a href="https://www.instagram.com/nurican_brdmr.vlt08/ "> <button type="button " class="btn btn-info " title="İnstagram "><img height="40 " width="40 " src="icons8-instagram-64.png "></button></a>

                            <a href="# "> <button type="button " class="btn btn-info " title="Twitter "><img height="40 " width="40 " src="icons8-twitter-64.png "></button></a>
                        </div>
                    </div>

                    <!-- Copyright -->

                </footer>

            </div>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
        <!-- <script src="costum.js"></script> -->
</body>

</html>