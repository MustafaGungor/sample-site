<?php

include("../connect/connect.php");

$_anakonu=$_POST['cek'];

$baslik=$_POST['title'];

$icerik=$_POST['blog_main'];

$aciklama=$_POST['aciklama'];

$date=$_POST['date'];

for($i=1;$i<=12;$i++){

	switch($_anakonu){

		case 1:

				$_anakonu="Php";

				break;

		case 2:

				$_anakonu="Java";

				break;

		case 3:

				$_anakonu="JavaScript";

				break;		

		case 4:

				$_anakonu="Sql";

				break;

		case 5:

				$_anakonu="Android";

				break;

		case 6:

				$_anakonu="Oracle";

				break;

		case 7:

				$_anakonu="Ajax";

				break;

		case 8:

				$_anakonu="c/cplus";

				break;

		case 9:

				$_anakonu="c#";

				break;

		case 10:

				$_anakonu="Asp .NET";

				break;

		case 11:

				$_anakonu="Mysql";

				break;

		case 12:

				$_anakonu="PostgreSQL";

				break;

		case 13:

				$_anakonu="Diğer";

				break;
		case 14:

				$_anakonu="Linux";

				break;

	}}

	$id=200;

$sorgu=mysql_query("insert into blog(baslik_id,blog_title,blog_main,blog_aciklama,blog_date) values('".$_anakonu."','".$baslik."','".$icerik."','".$aciklama."','".$date."')")or die(mysql_error());



if($sorgu){

	echo "Kayıt Eklendi! 5 saniye sonra ekleme sayfasına yönlendirileceksiniz!";

	header("refresh:5;url=deneme_duzenleme_denetleme_ekleme_silme_profil_sayfasi.php");

}

else{ 

	echo "Kayıtta bi sıkıntı var";

}

?>