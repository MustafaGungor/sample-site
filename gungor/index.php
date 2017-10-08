<?php 
	$curl=curl_init();
	curl_setopt($curl,CURLOPT_URL,"http://www.google.com");
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
	$veri=curl_exec($curl);
	curl_close($curl);
	echo $veri;

?>