<?php include 'ayar.php' ?>
<!DOCTYPE HTML>
<html lang="en-US">
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
	  <?php  
	  
	    $eposta = $_GET["eposta"];
	    $kod    = $_GET["kod"];
		
	    if(!$eposta && !$kod){
			
 echo '<div style="margin-top:20px;" class="alert alert-warning">gerekli kodlar bos gozukuyor ..</div>';
	
			
		}else {
			
		  
          $query = $conn->prepare("select * from tblkayit where email=? and uye_kod=?");
		  $query->execute(array($eposta,$kod));
		  $query->fetch(PDO::FETCH_ASSOC);
		  $kontrol = $query->rowCount(); 
		  
		  if($kontrol){
			  
			 
			 if($_POST){
				 
                $sifre = $_POST["sifre"];
                $sifretkr = $_POST["sifretkr"];

              if(!$sifre && !$sifretkr){
				  
         echo '<div style="margin-top:20px;" class="alert alert-warning">sifre bos bırakılamaz ..</div>';	
         	
              }else{
              if($sifre!=$sifretkr)
  { echo "<p style='color:red; margin-left:60px;'><strong>Şifreniz Aynı Değil</strong></p> <br>";}
              
              else {
				  
				$update = $conn->prepare("update tblkayit set Sifre=?, Sifre_tekrar=? where email=? and uye_kod=?");
				$ok = $update->execute(array($sifre,$sifretkr,$eposta,$kod));
        
				if($ok == true){
					
                 echo '<div style="margin-top:20px;" class="alert alert-success">yeni sifreniz basarıyla degistirildi giris yapabilirsiniz..</div>';	
                 header("refresh:3;url=login.php");
					
				}else {
					
		 echo '<div style="margin-top:20px;" class="alert alert-warning">yeni sifreniz degistirilirken bir hata olustu..</div>';	
	
					
					
				}
				  
				  
			  }		

            }
				 
			 }else {
				 
				 ?>
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
        <input name="sifre" id="goster" class="form-control"  type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <img src="resimler/planet-512.png" width="25" height="25"> </span>
		 </div>
        <input name="sifretkr" id="goster1" class="form-control"  type="text">
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
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

				 <?php
				 
			 }
			 
			 
			  
			  
		  }else {
			  
			 echo '<div style="margin-top:20px;" class="alert alert-warning">onay kodu yanlıs yada daha once onaylanmıs...</div>'; 
			  
		  }
			
			
		}
	    
		
	  
	  ?>
     </div>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>