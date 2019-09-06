<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome in Student Information</h1>

<form action="<?php echo site_url(); ?>/Student/stuadd" method="post">

<input type="text" name="txtrno" placeholder="enter rno" />
<br>
<br>
<input type="text" name="txtname" placeholder="enter name" />
<br>
<br>
<input type="text" name="txtbranch" placeholder="enter branch" />
<br>
<br>
<input type="text" name="txtfees" placeholder="enter fees" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Insert" />
</form>
<a href="<?php echo site_url(); ?>/student/stushow">Show Data</a>
<?php
echo @$res;
?>
</body>
</html>