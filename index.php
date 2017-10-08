<?php 

  include("connect/connect.php");

  error_reporting(0);

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Mustafa GÜNGÖR</title>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<link rel="stylesheet" href="css/bootstrap.css">





</head>



<body>

<nav class="navbar navbar-default">

  <div class="container"> 

    <!-- Brand and toggle get grouped for better mobile display -->

   <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <a class="navbar-brand" href="index.php" style="color:#337ab7;">Mustafa GÜNGÖR</a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="myDefaultNavbar1">

      <ul class="nav navbar-nav">

        <li class="active"><a href="index.php" style="color:#337ab7;">Anasayfa <span class="sr-only">(current)</span></a></li>

        <li><a href="hakkimda.php" style="color:#337ab7;">Hakkımda</a></li>

        

      </ul>

      <form class="navbar-form navbar-right" role="search" method="get" action="page/search.php">

        <div class="form-group">

          <input type="text" name="isim" id="arama" class="form-control" placeholder="Arama" style="color:#337ab7;">

        </div>

        <button type="submit" class="btn btn-default" style="color:#337ab7;">Arama</button>

      </form>

</div>

    <!-- /.navbar-collapse --> 

  </div>

  <!-- /.container-fluid --> 

</nav>







<div class="container">



      <div class="blog-header">

        <h1 class="blog-title"><?php 

				$komut="select * from blog where blog_id=4";

				$sorgu=mysqli_query($baglanti,$komut);

				while($oku=mysqli_fetch_assoc($sorgu)){

				echo "<h1 style='color:#337ab7;'>".$oku['blog_title']."</h1>";

				}

				

		?></h1>

        <p class="lead blog-description"><hr></p>

      </div>



      <div class="row">



        <div class="col-sm-8 blog-main">



          <div class="blog-post">

            

            <p class="blog-post-meta"><?php 

					$sorgu=mysqli_query($baglanti,$komut);

				while($oku=mysqli_fetch_assoc($sorgu)){

				echo $oku['blog_date'];

				}

			?></p>

			<h4><?php  $sorgu=mysqli_query($baglanti,$komut);

				while($oku=mysqli_fetch_assoc($sorgu)){

				echo $oku['blog_main'];

				}?></h4>

          </div><!-- /.blog-post -->



          



          



        </div><!-- /.blog-main -->



        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

          <div class="sidebar-module sidebar-module-inset">

            <h4 style="color:#337ab7;">Hakkımda</h4>

            <p>Öğrenmiş olduğum <em>bilgileri</em> sizlere de faydalı olması amacıyla böyle bir site kurdum.Hata ya da öğrenmek istediklerinizi paylaşırsanız yardımcı olmaya çalışırım.</p>

          </div>

          <div class="sidebar-module">

            <h4 style="color:#337ab7;">Ana Konular</h4>

            <ol class="list-unstyled">

            <?php include("page/menu_cek.php"); ?>

            

            </ol>

          </div>

          <div class="sidebar-module">

            <h4 style="color:#337ab7;">Hesaplarım</h4>

            <ol class="list-unstyled">

              <li><a href="https://github.com/mustafagungor"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;GitHub</a></li>

              <li><a href="#"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Twitter</a></li>

              <li><a href="https://www.facebook.com/mgngr"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Facebook</a></li>

              <li><a href="https://tr.linkedin.com/in/mustafa-güngör-47b122b7"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Linkedin</a></li>

              <li><a href="#"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Kariyer.net</a></li>

            </ol>

          </div>

        </div><!-- /.blog-sidebar -->



      </div><!-- /.row -->

		<hr>

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

<script src="js/jquery-1.11.2.min.js"></script> 

<script src="js/bootstrap.min.js"></script>

</body>

</html>