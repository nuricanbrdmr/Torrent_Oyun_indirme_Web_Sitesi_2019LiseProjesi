<?php 
include 'ayar.php';

if(isset($_GET["knumara"]))
{
$kadi=$_GET["knumara"];
$getir=$conn->prepare("Delete from tblkayit where İd=:ogrnum");
$sil=$getir->execute(array("ogrnum"=>$_GET["knumara"]));

if($sil)
{
    echo "Hesabınız  Silindi Oturum Aç Sayfasına Yönlendiriliyorsunuz!";
    header("refresh:3;url=login.php");
}

}



?>