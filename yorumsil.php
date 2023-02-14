<?php 
include 'ayar.php';

if(isset($_GET["knumara"]))
{$kadi=$_GET["knumara"];

$getir=$conn->prepare("Delete from yorumlar where yorum_id=:yorum");
$sil=$getir->execute(array("yorum"=>$_GET["knumara"]));

if($sil)
{
    echo '<div style="margin-top:20px; color:green;">Yorumunuz Silindi Sayfaya Geri Yönlendiriliyorsunuz!</div>';
    $url = $_SERVER['HTTP_REFERER'];  // hangi sayfadan gelindigi degerini verir.

         header ("refresh: 1; url=".$url."");
}

}



?>