<?php 

  include("connect/connect.php");

  error_reporting(0);

  $gelen=$_GET['konu_ad'];

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

    <h1 class="blog-title"><?php echo $gelen;?></h1>

    <!--gelen get değeri başlık konusu olarak atandı -->

    <p class="lead blog-description">

    <hr>

    </p>

  </div>

  <div class="row">

    <div class="col-sm-8 blog-main ">

      <div class="panel panel-default">

        <div class="panel-heading">

          <h4><img src='img/message2.png' width='50' height='40'> Mustafa Güngör </h4>

        </div>

        <div class="panel-body">

          <h4> Ben Dumlupınar Üniversitesi Bilgisayar Mühendisliği Öğrencisiyim. Java, Android, Php üzerinde uzmansal olarak çalışmalarım oldu.</h4>
        
    <div class="row">
		<form role="form" class="col-md-9 go-right" method="post" action="page/mail.php">
			<h2>Mail Gönder</h2>
            <p>Öneri veya ihtiyaçlarınız için mail gönderin</p>
			<div class="form-group">
			<input id="name" name="name" type="text" class="form-control" required>
			<label for="name">Konu</label>
		</div>
		<div class="form-group">
			<input id="mail" name="mail" type="email" class="form-control" required>
			<label for="phone">Mail adresiniz</label>
		</div>
		<div class="form-group">
			<textarea id="message" name="message" class="form-control" required></textarea>
			<label for="message">Mesajınız</label>
		</div>
        <div class="form-group">
             <input type="submit" class="btn-danger" name="gonder" value="Gönder">
        </div>
		</form>
        
	</div>


        </div>

      </div>

      <hr>

    </div>

    <!-- /.blog-main -->

    

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">

      <div class="sidebar-module sidebar-module-inset">

        <h4>Hakkımda</h4>

        <p>Öğrenmiş olduğum <em>bilgileri</em> sizlere de faydalı olması amacıyla böyle bir site kurdum.Hata ya da öğrenmek istediklerinizi paylaşırsanız yardımcı olmaya çalışırım.</p>

      </div>

      <div class="sidebar-module">

        <h4>Ana Konular</h4>

        <ol class="list-unstyled">

          <?php include("page/menu_cek.php"); ?>

          <!--menu_cek.php den ana başlıklar çekildi -->

          

        </ol>

      </div>

      <div class="sidebar-module">

        <h4>Hesaplarım</h4>

        <ol class="list-unstyled">

          <li><a href="https://github.com/mustafagungor"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;GitHub</a></li>

          <li><a href="#"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Twitter</a></li>

          <li><a href="https://www.facebook.com/mgngr"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Facebook</a></li>

          <li><a href="https://www.linkedin.com/in/mustafa-g%C3%BCng%C3%B6r-47b122b7?trk=nav_responsive_tab_profile"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Linkedin</a></li>

          <li><a href="#"><img src="img/kisi.gif" width="15" height="25">&nbsp;&nbsp;Kariyer.net</a></li>

        </ol>

      </div>

    </div>

    <!-- /.blog-sidebar --> 

    

  </div>

  <!-- /.row --> 

  

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