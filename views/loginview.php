<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>	
<form action="<?php echo site_url(); ?>/login/logincode" method="post">
<input type="text" name="txtuser" placeholder="enter username" value="<?php echo @$a; ?>" />
<br>
<br>
<input type="password" name="txtpass" placeholder="enter password" value="<?php echo @$b; ?>"  />
<br>
<br>
<input type="checkbox" name="chk1"  <?php if($a!=null && $b!=null) echo "checked"  ?>/>Rememeber me
<br>
<input type="submit" name="btnsubmit" value="Login" />
</form>

<?php
echo @$res;

?>
</center>
</body>
</html>