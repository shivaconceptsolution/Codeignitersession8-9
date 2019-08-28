<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo site_url(); ?>/calc/calclogic" method="post">

	<input type="text" name="txtnum1" placeholder="Enter first number" value="<?php echo @$a1 ; ?>" />
	<br>
	<br>
	<input type="text" name="txtnum2" placeholder="Enter second number" value="<?php echo @$b1 ; ?>" /> 
	<br>
	<br>
	<input type="submit" name="btnadd" value="+" />
	<br>
	<input type="submit" name="btnsub" value="-" />
	<br>
	<input type="submit" name="btnmulti" value="*" />
	<br>
	<input type="submit" name="btndiv" value="/" />
	<br>

</form>
<?php echo @$c1 ; ?>
</body>
</html>