<?php 

  include("../connect/connect.php");

  error_reporting(0);

  session_start();

  $gelenuser=$_SESSION['user'];

  $gelenpass=$_SESSION['pass'];

  if(isset($gelenuser)){

	  

   echo '

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Mustafa GÜNGÖR</title>

<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

<link rel="stylesheet" href="../css/bootstrap.css">





</head>



<body>

	<div class="container">

    <div class="row">

		<form role="form" class="col-md-9 go-right" method="post" action="sorguekle.php">

			<h2>Yeni Blog Ekle</h2>

            <p>Kayıtlar eklenirken kontrol etmeyi unutma</p>

			<div class="form-group">

				<select name="cek" id="cek">';

			

			$sorgu=mysqli_query($baglanti,"select * from diller");

			while($vericek=mysqli_fetch_assoc($sorgu)){

			

				
			echo '';
  			echo '<option value="'.$vericek['konu_id'].'">'.$vericek['konu_ad'].'</option>';

			}
			
				echo '</select>

				<label for="name">Kategori Seçin</label>

		</div>

		<div class="form-group">
			<label for="phone">Konu Başlığı</label>
			<input id="title" name="title" type="text" class="form-control" required>

			

		</div>

		<div class="form-group">
			<label for="message">İçerik</label>
			<textarea id="blog_main" name="blog_main" class="form-control ckeditor" required></textarea>

			

		</div>

		<div class="form-group">
			<label for="phone">Açıklama Giriniz</label>
			<input id="aciklama" name="aciklama" type="text" class="form-control" required>

			

		</div>

		<div class="form-group">
			<label for="phone">Tarihi Giriniz</label>
			<input id="date" name="date" type="text" class="form-control" placeholder="yyyy-aa-gg" required>

			

		</div>

		

		    <button type="submit" class="btn btn-default">Kaydet</button>

		</div>

		</form>

        <p class="bg-success" style="padding:10px;margin-top:20px;clear:both"><small><a href="http://mustafagungor.xyz" target="_blank">mustafagungor.xyz</a> to original article</small></p>

	</div>

</div>



<footer class="text-center">

  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <p>Mustafa GÜNGÖR @2015</p>

      </div>

    </div>

  </div>

</footer>

<script src="../js/jquery-1.11.2.min.js"></script> 

<script src="../js/bootstrap.min.js"></script>

</body>

</html>';

}

   else echo "session gelmedi";

?>







