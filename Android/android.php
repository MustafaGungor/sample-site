<?php ob_start(); ?>

<?php

include("../connect/connect.php");

if($_GET["type"]==add)

{

                $ad=$_GET["ad"];

                $mesaj=$_GET["msj"];
				
				$baslik=$_GET["baslik"];
				
				$mail=$_GET["mail"];

                //print '< '.$ad.' - '.$mesaj.' >';

               

    $tarih=date("d.m.Y H:i:s");

    $Komut=mysql_query("insert into androidkayit(ad,mail,mesajbaslik,mesaj,tarih) values('$ad','$mail','$baslik','$mesaj','$tarih')");

    $kaydedilenmak=mysql_insert_id();//eklenen kayıdın id sini elde ediyoruz

    if($Komut){

                               echo $kaydedilenmak;
    }

    else{

        echo "Add-Android-error"; // kayıt gerçekleşmese akrana bu basılacak.

    }

}             

if($_GET["type"]==edit)// bundan sonrasını bende daha yapmadım J

{

// EDİT

}             

if($_GET["type"]==del)

{

// DELETE

}

?>

<?php ob_end_flush(); ?>