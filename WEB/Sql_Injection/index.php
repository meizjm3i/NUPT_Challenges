<html>
<head>
Secure Web Login II
</head>
<body>

<?php
if($_POST[user] && $_POST[pass]) {
   mysql_connect('ctf.nuptzj.cn','sae-chinalover','chinalover');
  mysql_select_db('sae-chinalover');
  $user = $_POST[user];
  $pass = md5($_POST[pass]);
  $query = @mysql_fetch_array(mysql_query("select pw from ctf where user='$user'"));
  if (($query[pw]) && (!strcasecmp($pass, $query[pw]))) {
      echo "<p>Logged in! Key: ntcf{union_select_is_wtf} </p>";
  }
  else {
    echo("<p>Log in failure!</p>");
  }
}
?>


<form method=post action=index.php>
<input type=text name=user value="Username">
<input type=password name=pass value="Password">
<input type=submit>
</form>
</body>
<a href="index.phps">Source</a>
</html>
