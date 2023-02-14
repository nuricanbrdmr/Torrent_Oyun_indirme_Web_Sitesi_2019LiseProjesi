
<?php

session_start();

session_destroy();

echo "<b style='color:red;'>Çıkış Yapılıyor!</b>";

header("refresh:2;url=login.php")



?>