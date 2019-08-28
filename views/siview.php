<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo site_url(); ?>/si/silogic" method="post">

<input type="text" name="txtp" placeholder="Enter p" value="<?php echo @$p1; ?>" />
<br>
<br>	
<input type="text" name="txtr" placeholder="Enter r" value="<?php echo @$r1; ?>"/>
<br>
<br>
<input type="text" name="txtt" placeholder="Enter t" value="<?php echo @$t1; ?>" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Calculate" />
</form>
<?php
echo @$res;
?>
</body>
</html>