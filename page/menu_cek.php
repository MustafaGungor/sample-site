<?php 

	//include("../connect/connect.php");

	$menucek=mysqli_query($baglanti,"select * from diller");

	

	while($oku=mysqli_fetch_assoc($menucek)){

				echo '<li><a href="mainpage.php?konu_ad='.$oku['konu_ad'].'"><img src="img/message.png" width="20" height="20">&nbsp;&nbsp;'.$oku['konu_ad'].'</a></li>';

				}

?>