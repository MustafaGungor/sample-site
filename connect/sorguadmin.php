<?php 
ob_start();
session_start();
include("../connect/connect.php");
$kullanici=$_POST['inputEmail'];
$password=$_POST['inputPassword'];
echo $kullanici."---".$password;
$select=mysqli_query("select * from admin where email_adress='".$kullanici."' and password='".$password."'",$veritabani) or die(mysqli_error());
if(mysqli_num_rows($select))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kullanici;
    $_SESSION["pass"] = $password;
	echo "Ne sıkıntısı var";
    header("Location:deneme_duzenleme_denetleme_ekleme_silme_profil_sayfasi.php");
}
else {
    if($kullanici=="" or $password=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
ob_end_flush();
?>
