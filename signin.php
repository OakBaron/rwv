<?php
  if(isset($_GET["usrpass"])){
    $note = "<small style='color: red;'>Incorrect username or password</small><br>";
  }else{
    $note = "";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Riddles Without Vitae</title>
  <link rel="icon" href="\i\favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="sign.css" type="text/css">
</head>
  <body class="body">
    <form method="POST" action="pwdchk.php">
      <h1>SIGN IN</h1>
      <p class="p">Username:</p>
      <input id="username" type="text" name="username" autocomplete="off" autofocus>
      <p class="p">Password:</p>
      <input id="password" type="password" name="password" autocomplete="off">
      <?php echo $note; ?>
      <input id="submit" type="submit" name="submit" value="SUBMIT"><br>
      <p class="p">Need an account? <a href="signup.php" style="color:blue;text-decoration:none;">Sign up.</a></p>
    </form>
      <?php
        if(!(isset($_GET["dismiss"])) && $_GET["dismiss"]!="cookies"){
          echo "
    <div id=cookies>
      <p>This site uses a cookie in order to keep you logged in between levels.<br> By signing in to use the website, you agree to the usage of this cookie.<br>No other cookies are used.</p>
      <a href='?dismiss=cookies'>[ I understand, dismiss this banner]</a>
      <br><a href=https://www.i-dont-care-about-cookies.eu/ target=_blank>Don't care about cookies?</a>
    </div>";
        }
      ?>
  </body>
</html>