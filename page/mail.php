<?php 

$konu=$_POST['name'];
$mail=$_POST['mail'];
$message=$_POST['message'];
echo $konu.$mail.$message;
$header="From:$mail\r\n"."Content-Type:text/html;Charset=iso-8859-9\n\n";

$mail=mail("mustafagungormg@outlook.com",$konu,$message,$header).mysql_error();

if($mail){
	echo "mailiniz gönderildi.";
	}else{
		echo "bi sıkıntı var";}
	

?>