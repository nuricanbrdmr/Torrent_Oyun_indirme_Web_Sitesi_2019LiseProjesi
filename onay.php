<!DOCTYPE HTML>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	  <div class="container"> 
	  <?php  
	  
	  include("ayar.php");
	  
	    $eposta = $_GET["eposta"];
	    $kod    = $_GET["kod"];
		
	    if(!$eposta || !$kod){
			
 echo '<div style="margin-top:20px;" class="alert alert-warning">gerekli kodlar bos gozukuyor ..</div>';
	
			
		}else {
			
		  
          $query = $conn->prepare("select * from tblkayit where email=? and uye_kod=? and uye_onay=?");
		  $query->execute(array($eposta,$kod,0));
		  $query->fetch(PDO::FETCH_ASSOC);
		  $kontrol = $query->rowCount(); 
		  
		  if($kontrol){
			  
			$update = $conn->prepare("update tblkayit set  
			
			        uye_onay=? where email=? and uye_kod=? and uye_onay=?
			
			"); 

            $ok =  $update->execute(array(1,$eposta,$kod,0)); 

          if($ok == true){
			  
 echo '<div style="margin-top:20px;" class="alert alert-success">uyeliğiniz basarıyla onaylandı giris yapabilirsiniz..</div>'; 

 header("refresh:3;url=login.php");
  
			  
		  }else	{
			  
	 echo '<div style="margin-top:20px;" class="alert alert-warning">onaylama basarasız oldu mysql hatası..</div>'; 
  
			  
		  }
			  
			  
		  }else {
			  
			 echo '<div style="margin-top:20px;" class="alert alert-warning">onay kodu yanlıs yada daha once onaylanmıs...</div>'; 
			  
		  }
			
			
		}
	    
		
	  
	  ?>
	 
	 
	 
	 
	 </div>
</body>
</html>