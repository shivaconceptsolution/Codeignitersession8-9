<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Welcome in Student Information</h1>

<form action="<?php echo site_url(); ?>/Student/updateadd" method="post">

<input type="text" name="txtrno" placeholder="enter rno" value="<?php echo $res[0]['rno']; ?>" readonly="true"/>
<br>
<br>
<input type="text" name="txtname" placeholder="enter name"  value="<?php echo $res[0]['name']; ?>" />
<br>
<br>
<input type="text" name="txtbranch" placeholder="enter branch"  value="<?php echo $res[0]['branch']; ?>"/>
<br>
<br>
<input type="text" name="txtfees" placeholder="enter fees"  value="<?php echo $res[0]['fees']; ?>" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Update" />
</form>
<a href="<?php echo site_url(); ?>/student/stushow">Show Data</a>
<?php
//echo @$res;
?>
</body>
</html>