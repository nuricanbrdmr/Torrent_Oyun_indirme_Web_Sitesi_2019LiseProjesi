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

    <div id="ana" class="container bg-light">

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
                        <a class="nav-link" title="Program" href="prgrm.php" style="font-weight:600; text-align:center;">Program</a>
                    </li>

                    <li class="nav-item px-3" style=" border-right:1px solid #A6A6A6;">
                        <a class="nav-link" title="İletişim" href="iletisim.php" style="font-weight:600; text-align:center;">İletişim</a>
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
                
                    

<?php 
        if($_POST){
            $ara=$_POST["ara"];
            if(!$ara){

            echo "<div class='alert alert-danger' style='margin:0px; margin-top:4px; padding:0px; border-radius:40px; text-align: center; line-height:130px;  height: 145px; width: 660px;' role='alert'><p><b> Aramayı Boş Bırakmayın!!! </b></p></div>";

           } else{
                $v= $conn->prepare("SELECT * FROM konular Where konu_baslık LIKE ?");
                $v->execute(array("%".$ara."%")); 
                $x= $v->fetchAll(PDO::FETCH_ASSOC);
                $xx=$v->rowCount();

                if($xx){
                   // echo "ARAMANIZ İLE İLGİLİ (". $xx .") DEĞER BULUNDU!";
                foreach($x as $b){
                    ?>
                    
            <a href='<?php echo $b["konu_git"];  ?>'>
             <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 clearfix float-left bg-light mt-3 " style="width:auto; height:122.5px; border:2px solid #999; ">
            <img src='resimler/<?php echo $b["konu_resim"] ?> ' class="img-fluid mt-3 " style=" width:300px; height:90px; "></div>
            </a>

             <a href='<?php echo $b["konu_git"];?> '>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 clearfix bg-light float-left mb-2 mt-3 " style=" width:auto; height:122.5px; border:2px solid #999; border-left:none; ">
                            <h6 style="color:#09F; font-weight:bold; "><?php echo $b["konu_baslık"]; ?><span style="float:right; font-size:13; color:#6A6A6A;"><?php echo $zulatarih ?></span> </h6>
                            <span> <span id="box2" style="font-size:14px; color:#8C8C8C; font-weight:500;"><?php echo $b["konu_metni1"]; ?><b style=" font-size:14px; font-weight:500;
                            "><?php echo $b["konu_metni2"]; ?> <span style=" font-size:14px; font-weight:500; "><?php echo $b["konu_metni3"]; ?></span></b>...</span>
                            </span>
                        </div>
                    </a>
                
               



                
                    <?php
                }

                 } else{  
                    echo "<div class='alert alert-danger' style='margin:0px; margin-top:4px; padding:0px; border-radius:40px; text-align: center; line-height:130px;  height: 145px; width: 660px;' role='alert'><p><b> Hiçbir Sonuç Bulunamadı!!! </b></p></div>";

                }


            }

        }
        
        
        ?>
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

