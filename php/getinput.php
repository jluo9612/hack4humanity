<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="humanity"; // Database name 
$tbl_name="post"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$mytitle=$_POST['title']; 
$myorg=$_POST['org']; 
$mywhen=$_POST['when']; 
$myaddress=$_POST['address']; 
$myabout=$_POST['about']; 
$myskills=$_POST['skills']; 
$myrequirement=$_POST['requirement']; 
$myurl=$_POST['url']; 
$mysize=$_POST['size']; 
// To protect MySQL injection (more detail about MySQL injection)

$mytitle = stripslashes($mytitle);
$mytitle = mysql_real_escape_string($mytitle);

$myorg = stripslashes($myorg);
$myorg = mysql_real_escape_string($myorg);

$mywhen = stripslashes($mywhen);
$mywhen = mysql_real_escape_string($mywhen);

$myaddress = stripslashes($myaddress);
$myaddress = mysql_real_escape_string($myaddress);

$myabout = stripslashes($myabout);
$myabout = mysql_real_escape_string($myabout);

$myskills = stripslashes($myskills);
$myskills = mysql_real_escape_string($myskills);

$myrequirement = stripslashes($myrequirement);
$myrequirement = mysql_real_escape_string($myrequirement);

$myurl = stripslashes($myurl);
$myurl = mysql_real_escape_string($myurl);

$mysize = stripslashes($mysize);
$mysize = mysql_real_escape_string($mysize);

$sql="insert into $tbl_name values('$mytitle','$myorg','$mywhen','$myaddress','$myabout','$myskills','$myrequirement','$mysize','$myurl')";
if(mysql_query($sql)==true){
  echo 'New record is added successfully';
}
else{
  echo "Error:" . $sql . "<br>" . mysql_error();
}

mysql_close();
$myFile = "/home/cabox/workspace/" . "$myurl";
session_start();
$_SESSION['mytitle']=$mytitle;
$_SESSION['myorg']=$myorg;
$_SESSION['mywhen']=$mywhen;
$_SESSION['myaddress']=$myaddress;
$_SESSION['myabout']=$myabout;
$_SESSION['myskills']=$myskills;
$_SESSION['myrequirement']=$myrequirement;
$_SESSION['mysize']=$mysize;
$_SESSION['myurl']=$myurl;

$fh = fopen($myFile, 'w+');
$stringData= '<html>
<head>
<meta charset="UTF-8">
<title>Description</title>
	<link rel="stylesheet" href="bootstrap.css">

<link rel="stylesheet" href="description.css">
</head>
<body>
	<div class="container">
		<div class="row">
		  <?php session_start();?>
			<h1 id="title">Title:<?php  echo ' . '$_SESSION[\'mytitle\']' . '; ?></h1>
			<p id="organization">Organization:<?php echo ' . '$_SESSION[\'myorg\']' . '; ?></p>
			<p>Program Size:<?php echo ' . '$_SESSION[\'mysize\']' . '; ?> </p>
			<p><?php echo ' . '$_SESSION[\'myaddress\']' . '; ?></p>
			<p>Program Description:<?php echo ' . '$_SESSION[\'myabout\']' . '; ?></p>
			<p>Skill reconmended:<?php echo ' . '$_SESSION[\'myskills\']' . '; ?></p>
			<p>requirement:<?php echo ' . '$_SESSION[\'myrequirement\']' . '; ?></p>
			<p>	</p>
		</div>
	</div>
</body>
</html>
';
fwrite($fh, $stringData);
header('Refresh: 2;url=home.html');
?>




