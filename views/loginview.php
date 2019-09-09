<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>	
<form action="<?php echo site_url(); ?>/login/logincode" method="post">
<input type="text" name="txtuser" placeholder="enter username" />
<br>
<br>
<input type="password" name="txtpass" placeholder="enter password" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Login" />
</form>

<?php
echo @$res;

?>
</center>
</body>
</html>