<?php 
$servername="localhost";
$username="root";
$password="";
$database="kayit";
try {
    $conn=new PDO("mysql:host=$servername;dbname=$database;charset=utf8",$username,$password);
} catch (PDOException $e) {
    echo " hata:". $e->getMessage();
    
}