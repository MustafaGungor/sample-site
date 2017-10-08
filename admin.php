<?php 
	session_start();
	$_POST['username']="aslan";
	$_POST['userPassword']="kaplan";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Page</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<div class="container">
	<div class="jumbotron">
      <form class="form-signin" method="post" action="admin/sorguadmin.php">
        <h2 class="form-signin-heading">Yönetici Girişi</h2>
        <label for="inputEmail" class="sr-only">e-Mail Adresi : </label>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Şifreniz : </label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Beni Hatırla
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
      </form>
</div>
    </div> <!-- /container -->

<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>