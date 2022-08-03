<?php
//konek ke database

 
$Host = 'localhost';
$User = 'root';
$Database = 'pijarcamp';
$Password = '';
 
$mysqli = mysqli_connect($Host, $User, $Password, $Database); 
 
if( !$mysqli ){
    die("Gagal terhubung dengan database: ");
}
 
?>