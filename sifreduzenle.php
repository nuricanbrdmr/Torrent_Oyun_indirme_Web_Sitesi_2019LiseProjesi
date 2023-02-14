<?php include 'ayar.php' ?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Üye Kayıt</title>

    <link rel="stylesheet" type="text/css" href="stil.css">
  </head>
  <body>
<?php 

    $id=$_GET["id"];
    $sorgu= $conn->prepare("SELECT * FROM tblkayit Where İd=:id");
    $sorgu -> execute(array(":id" => $id));
    $row= $sorgu -> fetch(PDO::FETCH_ASSOC);




?>



  <div class="container">
    <div class="row bg-light" >
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-white">
    <div class="form-row col-12 mx-3" style="margin-top:0px;">
    	
<div class="container">
<h2 class="card-title mt-3 text-center">Hesap Oluştur</h2>
<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	

	<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="" width="25" height="25"> </span>
		 </div>
        <input name="sifre" id="goster" class="form-control" value="<?php echo $row["Sifre"] ?>" type="password">
        <input type="checkbox" class="larger"  onclick="myFunction()"><span style="margin-top: 5px; margin-left:3px;">Show Password</span>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="" width="25" height="25"> </span>
		 </div>
        <input name="sifretkr" id="goster1" class="form-control" value="<?php echo $row["Sifre_tekrar"] ?>" type="password">
        <input type="checkbox" class="larger"  onclick="myFunction1()"><span style="margin-top: 5px; margin-left:3px;">Show Password</span>
    </div> <!-- form-group// -->
    
    <style>
    input.larger {
    width: 20px;
    height: 20px;
    margin-left: 5px;
    margin-top: 8px;
}
    </style>


    <script>
function myFunction() {
  var x = document.getElementById("goster");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  var x = document.getElementById("goster1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    

    <div class="form-group">
        <button type="submit"  class="btn btn-primary btn-block"> Düzenle  </button>
    </div> <!-- form-group// --> 
                                                                
</form>
<?php 

if($_POST){

$sifre=$_POST["sifre"];
$sifretkr=$_POST["sifretkr"];
if($sifre=="" && $sifretkr==""){

  echo "Şifre Alanı Boş Bırakılamaz!";
  
}
else{
  if($sifre!=$sifretkr)
  { echo "<p style='color:red; margin-left:60px;'><strong>Şifreniz Aynı Değil</strong></p> <br>";}
  else{
$guncelle = $conn -> prepare("UPDATE tblkayit SET Sifre=:sifre, Sifre_tekrar=:sifretkr Where İd=:id");
$guncelle -> execute(array(":sifre"=>$sifre,":sifretkr"=>$sifretkr,":id"=>$id));

if($guncelle){

echo "İşlem Başarılı!";

header("refresh:2;url=admin.php");

}
else{
    echo " Bir Hata Olustu! ";
}

}
}

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